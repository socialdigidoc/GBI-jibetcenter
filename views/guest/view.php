<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guest */
?>
<div class="guest-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ip',
            'tanggal',
            'http_user_agent:ntext',
            'md5_ip_browser:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
