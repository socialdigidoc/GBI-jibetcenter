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
<div class="produk-form">

    <?php $form = ActiveForm::begin(
        [
            'enableClientValidation'=>false,
            'options'=>[
                'enctype'=>'multipart/form-data'
            ],
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
            'height' => 100,
            'toolbar' => [
                ['items' => [
                         'BulletedList',
                    ] ],
               ]]
    ]);
    ?>
   
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'image')->widget(Widget::className(), [ 
        'uploadUrl' => Url::toRoute('produk/uploadFoto'),
        'width'     => 1080,
        'height'    => 1080,
    ])->label('Foto (1080 x 1080 )') ?>

    <?php 
        if(!$model->isNewRecord){
            $slides = Yii::$app->db->createCommand("select foto from tbl_produk_images where id_produk ='{$model->id}'")->queryColumn();
            
            $imagesList = [];
            $imagesListId = [];
            foreach ($slides as $img)
            {
                $imagesList[] = $img;
                $imagesListId[]['key'] = $model->id.','.$img;
                // $imagesListId[]['id']  = $model->id;
            }


        }else{
            $previewSlides = [];
            $imagesList = [];
            $imagesListId = [];
        }

    ?>
    <?php 
        echo FileInput::widget([
            'model' => $model,
            'attribute' => 'image[]',
            'name' => 'image[]',
            'options' => [
                'multiple' => true,
                'accept' => 'image/*',
            ],
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
        ]);
    ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
