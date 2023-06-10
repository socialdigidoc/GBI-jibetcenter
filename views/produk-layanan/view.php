<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukLayanan */
?>
<div class="produk-layanan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'tanggal',
            'order',
        ],
    ]) ?>

</div>
