<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
        $model->id_produk = $_GET['id_produk'];
        echo $form->field($model, 'id_produk')->hiddenInput()->label(false);
    ?>

    <?php 
       echo FileInput::widget([
        'model' => $model,
        'attribute' => 'foto[]',
        'name' => 'foto[]',
        'options' => [
            'multiple' => true,
            'accept' => 'image/*',
        ],
        'pluginOptions' => [
            'previewFileType' => 'any',
            // 'initialPreviewAsData'=>true,
            // 'initialPreviewConfig' => $previewSlides,
            // 'initialPreview' => $previewSlides,
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
    <br>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
