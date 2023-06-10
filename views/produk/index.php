<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="produk-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Baru', ['create'],
                    ['data-pjax'=>0 ,'title'=> 'Create new Produks','class'=>'btn btn-primary']).
                    // ['role'=>'modal-remote','title'=> 'Create new Produks','class'=>'btn btn-primary']).
                    // Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Ebook',['create',
                    // 'id_rak'=>$_GET['PustakaSearch']['id_rak']],
                    // ['data-pjax'=>0 ,'title'=> 'Tambah Pustaka','class'=>'btn btn-blue']).
                    Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                    '{toggleData}'.
                    '{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'deafult', 
                // 'heading' => '<i class="glyphicon glyphicon-list"></i> List Produk',
                // 'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                // 'after'=>BulkButtonWidget::widget([
                //             'buttons'=>Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                //                 ["bulk-delete"] ,
                //                 [
                //                     "class"=>"btn btn-danger btn-xs",
                //                     'role'=>'modal-remote-bulk',
                //                     'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                //                     'data-request-method'=>'post',
                //                     'data-confirm-title'=>'Are you sure?',
                //                     'data-confirm-message'=>'Are you sure want to delete this item'
                //                 ]),
                //         ]).                        
                //         '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
     "id"=>"ajaxCrudModal",
    //  'size' => 'modal-sm',
    //  'size' => 'modal-lg',
     'size' => 'modal-lg',
     "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>

