<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukImages */
?>
<div class="produk-images-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label'=>'Images',
                'format'=>'raw',
                'value'=>function ($data) {
                    return '<img src="'.$data->foto.'" alt="Foto Post Index" width="200">';
                },
            ],
        ],
    ]) ?>

</div>
