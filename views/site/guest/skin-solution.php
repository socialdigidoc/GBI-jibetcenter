<?php
    use yii\helpers\Url;
?>

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= Yii::$app->homeUrl?>"><i class="fa fa-home"></i> Home</a>
                        <span>Skin Solution</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php
                        if (count($data) != 0){
                            foreach($data as $listdata)
                            {
                                $statuslike = Yii::$app->mycomponent->cekFavorit($listdata['id']) == 1 ? 'icon_heart' : 'icon_heart_alt';
                                echo '
                                <div class="col-lg-3 col-md-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="'.Yii::$app->request->baseUrl.'/'.$listdata['image'].'">
                                            <ul class="product__hover">
                                                <li><a href="'. Url::to(['product-detail', 'name'=>$listdata['name']]).'"><span class="arrow_expand"></span></a></li>
                                                <li><a nohref><span onclick="myFunctionLike('.$listdata['id'].')" id="MyLike-'.$listdata['id'].'" class="'.$statuslike.'"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                        <h6><a href="'. Url::to(['product-detail', 'name'=>$listdata['name']]).'">'.$listdata['name'].'</a></h6>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }  
                        }else{
                            echo " 
                                <div class='related__title'>
                                    <h5>Not available now</h5>
                                </div>
                                ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
