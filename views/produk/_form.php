<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;
use budyaga\cropper\Widget;
use yii\helpers\Url;

use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use app\models\ProdukKategori;
use app\models\ProdukLayanan;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */
/* @var $form yii\widgets\ActiveForm */

$this->registerCss("cke_editable {  }");
?>

<style>
.modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
}

.select2-search__field{
     width: 200px!important; 
}

.cke_top {
    background-image: -moz-linear-gradient(top,#f5f5f5,#ffffff)!important;
    background-image: -webkit-linear-gradient(top,#f5f5f5,#ffffff)!important;
    background-image: -o-linear-gradient(top,#f5f5f5,#ffffff)!important;
    background-image: -ms-linear-gradient(top,#f5f5f5,#ffffff);
    background-image: linear-gradient(top,#f5f5f5,#ffffff)!important;
}

.cke_bottom {
    background-image: -moz-linear-gradient(top,#f5f5f5,#ffffff)!important;
    background-image: -webkit-linear-gradient(top,#f5f5f5,#ffffff)!important;
    background-image: -o-linear-gradient(top,#f5f5f5,#ffffff)!important;
    background-image: -ms-linear-gradient(top,#f5f5f5,#ffffff);
    background-image: linear-gradient(top,#f5f5f5,#ffffff)!important;
}

.cke_button_on {
    box-shadow: 0 1px 5px rgb(255 255 255 / 60%) inset, 0 1px 0 rgb(0 0 0 / 20%);
    background-image: -moz-linear-gradient(top,#e9e9e9,#ffffff);
    background-image: -webkit-linear-gradient(top,#e9e9e9,#ffffff);
    background-image: -o-linear-gradient(top,#e9e9e9,#ffffff);
    background-image: -ms-linear-gradient(top,#e9e9e9,#ffffff);
    background-image: linear-gradient(top,#e9e9e9,#ffffff);
}

.new-photo-area{
    width : 400px!important;
}
</style>
<style>
 .table > tbody > tr > th, .table > tbody > tr > td{
     padding: 4px 5px;
 }
.no-pad-1{
    padding: 0 7px 0 0;
}  
.no-pad-2{
    padding: 0 0 0 8px;
} 
@media  (max-width: 991px) { 
    .no-pad-1, .no-pad-2{
        padding: 0;
    }
}
    #map {
        height: 350px;
        width: 100%;
    }

    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        /* margin: 10px 10px 0 0; */
        margin: 2px 2px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        /* box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3); */
        box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.26);
        background-color: #fff;
        font-family: Roboto;
        border-radius: 3px;
      }

      /* #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      } */

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 12px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 14px;
        /* font-weight: 300; */
        margin: 6px 6px;
        padding: 0 7px;
        text-overflow: ellipsis;
        width: 230px;
        height: 25px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        /* color: #fff; */
        /* background-color: #1269db; */
        font-size: 14px;
        font-weight: 500;
        padding: 4px 10px;
        border-radius: 3px 3px 0 0;
      }

    .pac-container {
        z-index: 3000 !important;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Produk</div>
            <div class="panel-body">
            <br>
            <div class="clearfix"></div>  
                <?php $form = ActiveForm::begin(
                    [
                        'enableClientValidation'=>false,
                        'options'=>[
                            'enctype'=>'multipart/form-data'
                        ],
                        // 'action' => ['laporan'],
                        // 'method' => 'get',
                        'fieldConfig' => 
                        [
                            'options' => [
                                'class' => '',
                            ],
                            'labelOptions'=>[
                                'class' => 'control-label col-sm-4',
                            ],
                            'inputOptions'=>[
                                'class'=>'form-control input-sm',
                            ],
                            'enableError' => true,
                            'template' => '
                                <div class="col-sm-6">
                                    {label}
                                    <div class="col-sm-8">
                                        {input}{error}        
                                    </div>
                                </div>
                            ',
                        ] 
                    ]); 
                ?>

                <?= $form->errorSummary($model); ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
                <?php 
                    if(!$model->isNewRecord){
                        $kategoriID = Yii::$app->db->createCommand("select id_kategori from tbl_produk where id ='{$model->id}'")->queryColumn();
                        $layananID = Yii::$app->db->createCommand("select id_layanan from tbl_produk where id ='{$model->id}'")->queryColumn();
                    }
                ?>

                <?= $form->field($model, 'id_kategori')->widget(Select2::classname(),
                    [
                        'data' => ArrayHelper::map(ProdukKategori::find()->all(),'id','kategori'),
                        'options' =>
                            ['placeholder' => '- Pilih Kategori -', 'multiple' => false, 'value' => $kategoriID],
                        'pluginOptions' =>[
                            'tags' => true,
                        ], 
                    ]);
                ?>

                <?= $form->field($model, 'description')->widget(\mihaildev\ckeditor\CKEditor::className(),[
                        'editorOptions' => [
                            'preset' => 'full', 
                            'inline' => false, 
                        ],
                ]); ?>

                <?= $form->field($model, 'id_layanan')->widget(Select2::classname(),
                    [
                        'data' => ArrayHelper::map(ProdukLayanan::find()->all(),'id','name'),
                        'options' =>
                            ['placeholder' => '- Pilih Skin Solution -', 'multiple' => false, 'value' => $layananID],
                        'pluginOptions' =>[
                            'tags' => true,
                        ], 
                    ]);
                ?>

                <?php   
                    if($model->isNewRecord){
                        $model->cara_penggunaan ="<ul><li> &nbsp;  </li></ul>";
                    }
                ?>
            
            <?= $form->field($model, 'cara_penggunaan')->widget(CKEditor::className(), [
                    'preset' => 'custom',
                    'clientOptions' => [
                        'height' => 500,
                        'toolbar' => [
                            ['items' => [
                                    'BulletedList',
                                ] ],
                        ]]
                ]);
                ?>
                
                <?= $form->field($model, 'for')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'skin')->textInput(['maxlength' => true]) ?>
            
                <?php 
                    if(!$model->isNewRecord){
                        $slides = Yii::$app->db->createCommand("select foto from tbl_produk_images where id_produk ='{$model->id}'")->queryColumn();                        
                        $imagesList = [];
                        $imagesListId = [];
                        foreach ($slides as $img)
                        {
                            $imagesList[] = "../".$img;
                            $imagesListId[]['key'] = $model->id.',../'.$img;
                            // $imagesListId[]['id']  = $model->id;
                        }
                    }else{
                        $imagesList = [];
                        $imagesListId = [];
                    }
                    // echo "Ini List Images ";
                    // echo "<pre>";
                    // print_r($imagesListId);
                    // echo "</pre>";
                ?>
            

                <?= $form->field($model, 'image[]', ['template' => '
                                <div class="col-sm-12">
                                    <div class="col-sm-2">
                                        <b>Foto Kantor</b>
                                    </div>
                                    <div class="col-sm-10">
                                        {input}{error}        
                                    </div>
                                </div>
                            '])->widget(FileInput::class, [
                        'showMessage' => true,
                        'pluginOptions' => [
                            'previewFileType' => 'any',
                            'initialPreview' => $imagesList,
                            'initialPreviewConfig' => $imagesListId,
                            'initialPreviewAsData'=>true,
                            'showPreview' => true,
                            'showCaption' => true,
                            'showRemove' => true,
                            'showUpload' => false,
                            'removeLabel' => 'Reset Ulang',
                            'browseClass' => 'btn btn-primary',
                            'browseIcon' => '<i class="bi bi-camera-fill"></i>',
                            'browseLabel' =>  'Pilih Foto (1080 x 1080)',
                            'allowedFileExtensions' => ['jpg','gif','png'],
                            'msgFilesTooMany' => 'Maksimal 10 file',
                            'overwriteInitial' => true,
                            'mainClass' => 'input-group-lg',
                            'maxFileCount' => 10
                        ],
                        'options' => ['accept' => 'image/*','multiple'=>true ] ,
                    ]) ;
                ?>

                <div class="col-md-6">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                    <?php if (!Yii::$app->request->isAjax){ ?>
                            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    <?php } ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
