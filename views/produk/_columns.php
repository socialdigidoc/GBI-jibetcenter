<?php
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\ProdukKategori;
use app\models\ProdukLayanan;
use kartik\grid\GridView;
use yii\helpers\Html;

return [
    // [
    //     'class' => 'kartik\grid\CheckboxColumn',
    //     'width' => '20px',
    // ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
        'format'=>'raw',
        'value' => function ($data) {
            return '<b>'.$data->name.'</b>';
        },
    ],
    [
        'label'=>'Kategori',
        'attribute'=>'id_kategori',
        'filter'=>ArrayHelper::map(ProdukKategori::find()->orderBy(['order' => SORT_ASC])->all(),'id','kategori'),
        'filterType' => GridView::FILTER_SELECT2,
        'filterInputOptions' => [
            'id' => 'id_kategori',
        ],
        'filterWidgetOptions' => [
            'options' => [
                'placeholder' => '- Cari Kategori -'
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ],
        'value'=>'kategori.kategori',
    ],
    [
        'label'=>'Skin Solution',
        'attribute'=>'id_layanan',
        'filter'=>ArrayHelper::map(ProdukLayanan::find()->orderBy(['order' => SORT_ASC])->all(),'id','name'),
        'filterType' => GridView::FILTER_SELECT2,
        'filterInputOptions' => [
            'id' => 'id_layanan',
        ],
        'filterWidgetOptions' => [
            'options' => [
                'placeholder' => '- Cari Skin Solution -'
            ],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ],
        'value'=>'layanan.name',
    ],
    [
        'attribute' => 'image',
        'format' => 'raw',
        'value' => function ($data) {
            return '<img src="'.Yii::$app->request->baseUrl.'/'.$data->image.'" height="100px" />';
        },

    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'label'=>'Others',
        'format'=>'raw',
        'value' => function($data) 
        {
            return Html::a('<span class="btn btn-primary col fileinput-button dz-clickable"><i class="fa fa-image"></i><span> List Images</span>
            </span>', 
            [ 
                'produk-images/index', 
                'ProdukImagesSearch[id_produk]'  => $data->id,
            ],
            ['data-pjax' => 0]);
        },
    ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'description',
    //     'format'=>'raw',
    //     'value' => function ($data) {
    //         // strip tags to avoid breaking any html
    //         $string = strip_tags($data->description);
    //         if (strlen($string) > 100) {

    //             // truncate string
    //             $stringCut = substr($string, 0, 100);
    //             $endPoint = strrpos($stringCut, ' ');

    //             //if the string doesn't contain any space then it will cut without word basis.
    //             $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    //             $string .= '...'; // <a target="_blank" href="'. Url::to(['site/detail-at', 'key'=>$data->key_id]).'">Baca Selengkapnya</a>
    //         }
    //         return $string;

    //     },
    // ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'price',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'template' => '{update} {delete}',
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   