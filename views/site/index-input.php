<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use app\models\Treatment;

/** @var yii\web\View $this */

$this->title = 'Dashboard';


$dataSearch = Treatment::find()
        ->select(['name as value', 'name as  label', 'slug as id'])
        ->asArray()
        ->all();
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>
        <?php $form = ActiveForm::begin([
                    // 'method'=> 'get', 
                    'id' =>'form1',
                    'action' =>Url::to(['detail-service','key'=>'unknown']),
                ]); ?>
                
        <?= AutoComplete::widget([
            'id' => 'name',
            'clientOptions' => [
                'source' => $dataSearch,
                'autoFill' => true,
                'minLength' => '1',
                'select' => new JsExpression("function( event, ui ) {
                        $('#form1').attr('action', ".\yii\helpers\Json::htmlEncode(Yii::$app->request->baseUrl)."+'/service/'+ui.item.id);
                    }")],
                'options' => [
                    'placeholder' => (string)Yii::$app->request->cookies['language'] == null ? Yii::$app->params['language']['ID']['cari-layanan-lainnya'] : Yii::$app->params['language'][(string)Yii::$app->request->cookies['language']]['cari-layanan-lainnya'],
                ]
            ]);
        ?>
        <span><i class="fas fa-search"></i></span>
        <!-- <button type="submit"><i class="fas fa-search"></i></button> -->
        
        <?php ActiveForm::end(); ?>
        <p class="lead">Kamu berhasil login ke Dashboard <b>EONNI</b></p>
    </div>
</div>