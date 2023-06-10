<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ContactFormEonni;
use app\models\Layanan;
use app\models\LayananUnggulan;
use app\models\Treatment;
use app\models\Tags;
use app\models\TagsNews;
use app\models\Promo; 
use app\models\Artikel; 
use app\models\JenisLayanan;
use yii\db\Expression;
use yii\base\DynamicModel;
use yii\data\Pagination;

use app\models\KeywordsDetail;
use app\models\Keywords;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction( $action ) {
        if ( parent::beforeAction ( $action ) ) {
            if ( $action->id == 'error' ) {
                $this->layout = 'guest';
            }
            return true;
        } 
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            $this->layout='guest';

            $layanan = Layanan::find()
                    ->where(['status' => 1])
                    ->orderBy(['order' => SORT_ASC])
                    ->all();

            $unggulan = Yii::$app->db->CreateCommand('
            (
                select  "T" as type, b.id as id_items, b.`name`, b.`name_en`, b.description, b.description_en, b.image, b.slug, a.order as urutan
                from tbl_layanan_unggulan a,
                tbl_treatment b
                where a.id_treatment=b.id and a.`status`=1
            )
            UNION ALL
            (
                select "P" as type, b.id as id_items, b.`name`, b.`name_en`, b.description, b.description_en, b.image, b.slug, a.order as urutan
                from tbl_layanan_unggulan a,
                tbl_produk b
                where a.id_produk=b.id and a.`status`=1
            )
            order by urutan asc')->queryAll();

            $news = Artikel::find()
                ->where(['status' => 1])
                ->orderBy(['id' => SORT_ASC])
                ->limit(5)
                ->all();

            return $this->render('guest-index', 
                [
                    'layanan' => $layanan,
                    'unggulan' => $unggulan,
                    'news' => $news,
                ]);
        }else{
            $this->layout='main-nobox';
            return $this->render('index');
        }
    }
    

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        
        $this->layout='guest';

        $request = Yii::$app->request;
        $model = new ContactFormEonni();  

        if($model->load($request->post())){
            $model->ip = $_SERVER['REMOTE_ADDR'];
            $model->http_user_agent = $_SERVER['HTTP_USER_AGENT'];
            $model->md5_ip_browser = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
            $model->session_id = Yii::$app->session->getId();
            $model->time = new Expression('NOW()');
            if($model->save())
                Yii::$app->session->setFlash('contactFormSubmitted');
            
        }
    
        return $this->render('guest-contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->layout='guest';
        return $this->render('guest-about');
    
    }

    public function actionProduct()
    {
        $this->layout='guest';
    
        return $this->render('coming-soon', [
        // return $this->render('guest-product', [
            // 'team' => $team,
        ]);
    
    }
    
    public function actionService()
    {
        $this->layout='guest';

        if(empty($_GET['tags'])){
            if(empty($_GET['ctgr'])){
                if(!empty($_GET['search'])){
                    $kataAsli =  trim($_GET['search']);
                    $replaceKata =  preg_replace('/[^A-Za-z0-9]/', ' ', $kataAsli);
                    $explodeText = explode(" ", $replaceKata);
                    $keySearch = '';
            
                    $i = 1;
                    foreach($explodeText as $resultKey) {
                        if($i == 1 )
                            $keySearch .=  $resultKey;
                        else
                            $keySearch .=  "|".$resultKey;
                        $i++;
                    }
            
                    $QuerySearch = Yii::$app->db->createCommand("select id from tbl_treatment where name REGEXP '{$keySearch}'")->queryColumn();
              
                    $treatment = Treatment::find()
                            ->where(['status' => 1])
                            ->andwhere(['in', 'id', $QuerySearch])
                            ->all();
                            
                }else{
                    $treatment = Treatment::find()
                    ->where(['status' => 1])
                    ->orderBy(new Expression('rand()'))
                    ->all();
                }
            }else{
                $ctgr = JenisLayanan::find()->where(['slug' => $_GET['ctgr']])->one()->id;
                $QueryJoinCtgr = Yii::$app->db->createCommand("SELECT t.id FROM tbl_treatment t WHERE FIND_IN_SET('{$ctgr}', t.id_jenis_layanan) > 0")->queryColumn();
                
                $treatment = Treatment::find()
                    ->where(['status' => 1])
                    ->andwhere(['in', 'id', $QueryJoinCtgr])
                    ->orderBy(new Expression('rand()'))
                    ->all();
            }
        }else{
            $tags = Tags::find()->where(['slug' => $_GET['tags']])->one()->id;
            $QueryJoin = Yii::$app->db->createCommand("SELECT t.id FROM tbl_treatment t WHERE FIND_IN_SET('{$tags}', t.id_tags) > 0")->queryColumn();
            
            $treatment = Treatment::find()
                ->where(['status' => 1])
                ->andwhere(['in', 'id', $QueryJoin])
                ->orderBy(new Expression('rand()'))
                ->all();
        }
    
        return $this->render('guest-service', [
            'treatment' => $treatment,
        ]);
    
    }
    
    public function actionDetailProduct()
    {
        $this->layout='guest';
    
        return $this->render('guest-detail-product');
    
    }

    public function actionDetailService($key)
    {
        $this->layout='guest';
        $data = Treatment::find()->where(['slug' => $_GET['key']])->one();
    
        $selectTags = Yii::$app->db->createCommand("select id from tbl_tags where id in ($data->id_tags)")->queryColumn();

        $tags = Tags::find()
            ->orderBy(new Expression('rand()'))
            ->where(['in', 'id', $selectTags])
            ->limit(3)
            ->all();
        
        $allTags = Tags::find()
            ->orderBy(new Expression('rand()'))
            ->all();

        $dataSearch = Treatment::find()
            ->select(['name as value', 'name as  label', 'slug as id'])
            ->asArray()
            ->all();

        $lainnya = Treatment::find()
                    ->where(['status' => 1])
                    ->orderBy(new Expression('rand()'))
                    ->all();

        $treatmentlainnya = Treatment::find()
                    ->where(['status' => 1])
                    ->orderBy(new Expression('rand()'))
                    ->limit(5)
                    ->all();

                    
        $modelSearchTreatment = new DynamicModel(['search']);
        $modelSearchTreatment->addRule(['search'], 'safe');
        $modelSearchTreatment->addRule(['search'], 'required');

        // echo "<pre>";
        // print_r($treatmentlainnya);
        // echo "</pre>";
    
        // die();
        return $this->render('guest-detail-service', [
            'data' => $data,
            'tags' => $tags,
            'allTags' => $allTags,
            'dataSearch' => $dataSearch,
            'treatmentlainnya' => $treatmentlainnya,
            'modelSearchTreatment' => $modelSearchTreatment,
        ]);
    
    }

    public function actionReadEvents($key)
    {
        $this->layout='guest';
        $data = Artikel::find()->where(['key_id' => $_GET['key']])->one();

        $keywordsID = Yii::$app->db->createCommand("select id_keywords from tbl_keywords_detail where id_artikel ='{$data->id}'")->queryColumn();
     
        $tags = Keywords::find()
            ->orderBy(['id' => SORT_ASC])
            ->where(['in', 'id', $keywordsID])
            ->all();
        
        $lainnya = Artikel::find()
            ->where(['status' => 1])
            ->orderBy(new Expression('rand()'))
            ->limit(3)
            ->all();

        return $this->render('guest-read-event', [
            'data' => $data,
            'tags' => $tags,
            'lainnya' => $lainnya,
        ]);
    
    }

    public function actionIdn()
    {
        $languageCookie = new yii\web\Cookie([
            'name' => 'language',
            'value' =>'ID',
            'expire' => time() + 60 * 60 * 24 * 30, // 30 days
        ]);
        Yii::$app->response->cookies->add($languageCookie);
        $actionn = $_GET['id'];

        $key = $_GET['key']; 
        if(empty($key)){
             return $this->redirect([$actionn]);
        }else{
            return $this->redirect([$actionn,'key' => $key]);
        }
        
    }
    
    public function actionEng()
    {
        $languageCookie = new yii\web\Cookie([
            'name' => 'language',
            'value' =>'EN',
            'expire' => time() + 60 * 60 * 24 * 30, // 30 days
        ]);
        
        Yii::$app->response->cookies->add($languageCookie);
        $actionn = $_GET['en'];

        $key = $_GET['key'];
        if(empty($key)){
             return $this->redirect([$actionn]);
        }else{
            return $this->redirect([$actionn ,'key' => $key]);
        }
    }

    public function actionGenerateKey()
    {

        // $data = JenisLayanan::find()->all();
        $data = Treatment::find()->all();
        // $data = Tags::find()->all();
        foreach ($data as $row) {
            // // // // SLUG
            
            // $trim = trim($row->name);
            // $lower = strtolower($trim);
            // $delete = preg_replace('/[^A-Za-z0-9]/', ' ', $lower);
            // $explodeText = explode(" ", $delete);
            // // $slug = str_replace(" ","-",$delete);
            //  $slug = '';

            // $i = 1;
            // foreach($explodeText as $resulSlug) {
            //     if($resulSlug != ''){
            //         if($i == 1 )
            //             $slug .=  $resulSlug;
            //         else
            //             $slug .=  "-".$resulSlug;
            //         $i++;
            //     }
                
            // }   
            // $row->slug = $slug;

            
            // TAGS TREATMENT // No generate karna Tags udh ditentukan dr. Kiki
            // $dataId = '';
            // $dataName = '';
            // $QueryId = Yii::$app->db->createCommand("select id FROM tbl_tags where id_jenis_layanan in ({$row->id_jenis_layanan})")->queryAll();
            // $QueryName = Yii::$app->db->createCommand("select id, name FROM tbl_tags where id_jenis_layanan in ({$row->id_jenis_layanan})")->queryAll();
            
            // $i = 1;
            // foreach($QueryId as $result) {
            //     if($i == 1 )
            //         $dataId .=  $result['id'];
            //     else
            //         $dataId .=  ','. $result['id'];
            //     $i++; 
            // }
            
            // $j = 1;
            // foreach($QueryName as $resultName) {
            //     if($j == 1 )
            //         $dataName .=   $resultName['id'].'-'.$resultName['name'];
            //     else
            //         $dataName .=  ','. $resultName['id'].'-'.$resultName['name'];
            //     $j++;
            // }
            
            // $row->id_tags = (string)$dataId;
            // $row->label_tags = (string)$dataName;
            
            // if($row->save()){
            //     echo 'ID : '.$row->id;
            //     echo ' Berhasil<br><br>';
            // }else{
            //     print_r($row->errors);
            // }
 

        }exit;     
        // echo '<pre>'; 
        // print_r($data);
        // echo '</pre>';
    }

    public function actionTes()
    {
        $kataAsli =  trim($_GET['search']);
        $replaceKata =  preg_replace('/[^A-Za-z0-9]/', ' ', $kataAsli);
        $explodeText = explode(" ", $replaceKata);
        $keySearch = '';

        $i = 1;
        foreach($explodeText as $resultKey) {
            if($i == 1 )
                $keySearch .=  $resultKey;
            else
                $keySearch .=  "|".$resultKey;
            $i++;
        }

        $QuerySearch = Yii::$app->db->createCommand("select id from tbl_treatment where name REGEXP '{$keySearch}'")->queryColumn();
  
        $treatmentView = Treatment::find()
                ->where(['status' => 1])
                ->andwhere(['in', 'id', $QuerySearch])
                ->all();

      if(count($treatmentView) <= 0){ 
        echo "Data Kosong";
      }else{
        echo "Data Ada".count($treatmentView);
        echo "<br>Cari Data<br>".$keySearch;
      }

      echo "<pre>";
      print_r($treatmentView);
      echo "</pre>";
    }

    public function actionPromo()
    {
        $this->layout='guest';

        $data = Yii::$app->db->CreateCommand('
            SELECT a.id, a.nama, b.nama as kategori, a.masa_berlaku,  b.class, a.image, a.status, a.disable_btn, a.tanggal  
            FROM tbl_promo a, tbl_kategori_promo b 
            WHERE a.kategori_promo=b.id and a.status=1
            ORDER BY id DESC
        ')->queryAll();
        
        
        // $query = Yii::$app->db->CreateCommand('
        //     SELECT a.id, a.nama, b.nama as kategori, a.masa_berlaku,  b.class, a.image, a.status, a.disable_btn, a.tanggal  
        //     FROM tbl_promo a, tbl_kategori_promo b 
        //     WHERE a.kategori_promo=b.id and a.status=1
        //     ORDER BY id DESC
        // ')->queryAll();
        

        // $query = Promo::find()->where(['status' => 1])
        //                 ->orderBy(new Expression('rand()'));

        // $query = (new \yii\db\Query())
        //         ->from('tbl_promo as promo')
        //         ->joinWith('tbl_kategori as kategori', 'promo.kategori_promo = kategori.id')
        //         ->all();

        // $query = Promo::find()
        //         ->joinWith(['tableTwo.tableThree'])
        //         ->all();

        $query = (new \yii\db\Query())
                ->select('tb1.id, tb1.nama, tb1.deskripsi, tb2.nama as kategori, tb1.masa_berlaku,  tb2.class, tb1.image, tb1.status, tb1.disable_btn, tb1.tanggal')
                ->from('tbl_promo as tb1')
                ->leftJoin('tbl_kategori_promo as tb2', 'tb1.kategori_promo = tb2.id')
                ->where(['tb1.status' => 1])
                ->orderBy(['tb1.id' => SORT_DESC]);

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 8]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // echo "<pre>";
        // print_r($models);
        // echo "</pre>";

        // die();

        // $query = Promo::find()
        //         ->joinWith(['tableTwo.tableThree'])
        //         ->all();

        // $countQuery = clone $query;
        // $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 8]);
        // $models = $query->offset($pages->offset)
        //     ->limit($pages->limit)
        //     ->all();

        return $this->render('guest-promo', 
            [
                // 'data' => $data,
                'models' => $models,
                'pages' => $pages,
            ]);
    
    }

    public function actionVPromo($id)
    {
        $request = Yii::$app->request;
        $this->findModel($id)->delete();

        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            echo 'ini id : '.$id;
        }
    }
    
}
