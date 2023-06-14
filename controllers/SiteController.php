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
use app\models\Produk; 
use app\models\JenisLayanan;
use yii\db\Expression;
use yii\base\DynamicModel;
use yii\data\Pagination;

use app\models\KeywordsDetail;
use app\models\Keywords;
use app\models\ProdukKategori;
use app\models\ProdukLayanan;
use app\models\ProdukFavorit;
use app\models\ProdukImages;
use app\models\ProdukSearch;

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
        $this->layout='guest';
        return $this->render('guest/index');

        // if(Yii::$app->user->isGuest)
        // {
        //     $this->layout='guest';

        //     // $layanan = Layanan::find()
        //     //         ->where(['status' => 1])
        //     //         ->orderBy(['order' => SORT_ASC])
        //     //         ->all();

        //     // $unggulan = Yii::$app->db->CreateCommand('
        //     // (
        //     //     select  "T" as type, b.id as id_items, b.`name`, b.`name_en`, b.description, b.description_en, b.image, b.slug, a.order as urutan
        //     //     from tbl_layanan_unggulan a,
        //     //     tbl_treatment b
        //     //     where a.id_treatment=b.id and a.`status`=1
        //     // )
        //     // UNION ALL
        //     // (
        //     //     select "P" as type, b.id as id_items, b.`name`, b.`name_en`, b.description, b.description_en, b.image, b.slug, a.order as urutan
        //     //     from tbl_layanan_unggulan a,
        //     //     tbl_produk b
        //     //     where a.id_produk=b.id and a.`status`=1
        //     // )
        //     // order by urutan asc')->queryAll();

        //     // $news = Artikel::find()
        //     //     ->where(['status' => 1])
        //     //     ->orderBy(['id' => SORT_ASC])
        //     //     ->limit(5)
        //     //     ->all();

            
        //     // $best_seller = Produk::find()
        //     //     ->where(['status' => 1])
        //     //     ->orderBy(['id' => SORT_DESC])
        //     //     ->limit(8)
        //     //     ->all();

        //     return $this->render('guest/index', 
        //         [
        //             // 'best_seller' => $best_seller,
        //             // 'unggulan' => $unggulan,
        //             // 'news' => $news,
        //         ]);
        // }else{
        //     $this->layout='main-nobox';
        //     return $this->render('index');
        // }
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


     public function actionShop()
     {
        $this->layout='guest';
        return $this->render('guest/shop');
     }
     
     public function actionProduct($category)
     {
        $this->layout='guest';
        if(!empty($_GET['category'])){
            $cek =  ProdukKategori::find()->where(['kategori' => $_GET['category']])->exists();
            if($cek==1){
                $getCategory = ProdukKategori::find()->where(['kategori' => $_GET['category']])->one()->id;
                $data = Yii::$app->db->CreateCommand('
                (
                    select id, name, image from tbl_produk where status=1 and id_kategori = '.$getCategory.' 
                )
                UNION ALL
                (
                    select id, name, image from tbl_produk where status=1 and id_kategori <> '.$getCategory.' order by rand()
                )')->queryAll();
            }else{
                $data = Yii::$app->db->CreateCommand('select id, name, image from tbl_produk where status=1 order by rand()')->queryAll();
            }
        }else{
            $data = Yii::$app->db->CreateCommand('select id, name, image from tbl_produk where status=1 order by rand()')->queryAll();
        }
    
        // print_r($data);
        // die();
        
        return $this->render('guest/product', [
                'data' => $data,
        ]);
     }

     public function actionSearch()
     {
        $this->layout='guest';
        $searchModel = new produkSearch();   
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('guest/search', ['model' => $dataProvider->getModels()]);
        
     }

     public function actionWishlist()
    {
        $this->layout='guest';
        
        // Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Yii::$app->db->CreateCommand('
                SELECT a.id, a.name, a.image from tbl_produk a
                JOIN tbl_produk_favorit b ON a.id=b.id_produk
                where b.id_guest='.Yii::$app->mycomponent->cekGuest().'')->queryAll();

        return $this->render('guest/wishlist', [
            'model' => $model,
        ]);
    }



    public function actionSkinSolution($key)
    {
        $this->layout='guest';
        if(!empty($_GET['key'])){
            $cek =  ProdukLayanan::find()->where(['name' => $_GET['key']])->exists();
            if($cek==1){
                $getSkin = ProdukLayanan::find()->where(['name' => $_GET['key']])->one()->id;
                $data = Yii::$app->db->CreateCommand('
                    select id, name, image from tbl_produk where status=1 and id_layanan = '.$getSkin.' 
                ')->queryAll();
            }else{
                $data=[];
            }
        }else{
            $data = [];
        }

        return $this->render('guest/skin-solution', [
            'data' => $data,
        ]);
    }

     public function actionShopDetail()
     {
        $this->layout='guest';
        return $this->render('guest/shop-detail');
     }
     
    public function actionProductDetail($name)
    {
        $this->layout='guest';
        if(!empty($_GET['name'])){
            $cek =  Produk::find()->where(['name' => $_GET['name']])->exists();
            if($cek==1){
                $data = Produk::find()->where(['name' => $_GET['name']])->one();
                $images = ProdukImages::find()
                    ->where(['id_produk' => $data->id])
                    ->orderBy(['id' => SORT_ASC])
                    ->limit(3)
                    ->all();

                $related = Yii::$app->db->CreateCommand('select id, name, image from tbl_produk where status=1 and (id_kategori = '.$data->id_kategori.' or id_layanan = '.$data->id_layanan.') order by rand() limit 4 ')->queryAll();
            }else{
                $data = [];
                $images = [];
                $related = [];
            }
        }else{
            $data = [];
            $images = [];
            $related = [];
        }


        return $this->render('guest/product-detail', [
            'data' => $data,
            'images' => $images,
            'related' => $related,
        ]);
    }

    public function actionProdukDetail($name)
    {
        $this->layout='guest';
        if(!empty($_GET['name'])){
            $cek =  Produk::find()->where(['name' => $_GET['name']])->exists();
            if($cek==1){
                $data = Produk::find()->where(['name' => $_GET['name']])->one();
                $images = ProdukImages::find()
                    ->where(['id_produk' => $data->id])
                    ->orderBy(['id' => SORT_ASC])
                    ->limit(3)
                    ->all();

                $related = Yii::$app->db->CreateCommand('select name, image from tbl_produk where status=1 and (id_kategori = '.$data->id_kategori.' or id_layanan = '.$data->id_layanan.') order by rand() limit 4 ')->queryAll();
            }else{
                $data = [];
                $images = [];
                $related = [];
            }
        }else{
            $data = [];
            $images = [];
            $related = [];
        }


        return $this->render('guest/product-detail', [
            'data' => $data,
            'images' => $images,
            'related' => $related,
        ]);
    }
     
     public function actionEvent()
     {
        $this->layout='guest';
        return $this->render('guest/event');
     }

     public function actionFaq()
     {
        $this->layout='guest';
        return $this->render('guest/faq');
     }

     public function actionStory()
     {
        $this->layout='guest';
        return $this->render('guest/story');
     }

     public function actionHistory()
     {
        $this->layout='guest';
        return $this->render('guest/history');
     }
     
     public function actionContact()
     {
        $this->layout='guest';
        return $this->render('guest/contact');
     }

    public function actionLike($guest, $id)
    {
        $model = new ProdukFavorit();
        $model->id_produk =  $id;
        $model->id_guest =  $guest;
        if($model->save()){
            $count = ProdukFavorit::find()->where(['id_guest' => Yii::$app->mycomponent->cekGuest()])->count();
            echo $count;
        }
    }
    
    public function actionUnlike($guest, $id)
    {
        $model = ProdukFavorit::find()
                ->where(['id_produk' => $id])
                ->andWhere(['id_guest' => $guest])
                ->one(); 
        if($model->delete()){
            $count = ProdukFavorit::find()->where(['id_guest' => Yii::$app->mycomponent->cekGuest()])->count();
            echo $count;
        }
    }

    public function actionJibetCenter()
    {
       $this->layout='guest';
       return $this->render('guest/jibet-center');
    }

    public function actionPartner()
    {
       $this->layout='guest';
       return $this->render('guest/partner');
    }

    public function actionExp()
    {
       $this->layout='guest';
       return $this->render('guest/exp');
    }
    
    public function actionCreative()
    {
       $this->layout='guest';
       return $this->render('guest/creative');
    }

    public function actionHome()
    {
       $this->layout='guest';
       return $this->render('guest/home');
    }
    
}
