<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukKategori */
?>
<div class="produk-kategori-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kategori',
        ],
    ]) ?>

</div>
