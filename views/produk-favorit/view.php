<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukFavorit */
?>
<div class="produk-favorit-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_produk',
            'id_guest',
            'id_user',
            'tanggal',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
