<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="contact-form-eonni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'telp')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
