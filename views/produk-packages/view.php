<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukPackages */
?>
<div class="produk-packages-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_produk',
            'name',
            'label',
            'description:ntext',
            'cara_penggunaan:ntext',
            'kandungan:ntext',
            'name_en',
            'label_en',
            'description_en:ntext',
            'cara_penggunaan_en:ntext',
            'kandungan_en:ntext',
            'image',
            'mechine',
            'chemical',
            'order',
            'price',
            'time',
            'status',
            'status_diskon',
            'diskon',
            'ranting:ntext',
            'slug',
        ],
    ]) ?>

</div>
