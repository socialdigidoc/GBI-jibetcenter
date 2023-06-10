<?php
use yii\widgets\DetailView;

?>
<div class="contact-form-eonni-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'email:email',
            'telp',
            'subject',
            'body:ntext',
        ],
    ]) ?>

</div>
