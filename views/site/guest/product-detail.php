<?php
    use yii\helpers\Url;
?>

<style>
    .product__details__tab ul{
        font-size :100px;
        font-size: 14px;
        font-family: "Montserrat", sans-serif;
        color: #666666;
        font-weight: 400;
        line-height: 15px;
        margin-left: 20px;
    }

    .product__details__for {
        font-size: 24px;
        font-weight: 600;
        color: #df7776;
    }
    
    .product__details__skin {
        font-size: 16px;
        font-weight: 600;
        color: #b1b0b0;
        margin-bottom:30px;
    }

    .product__details__text h3{
        margin-bottom:30px;
    }
</style>

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= Yii::$app->homeUrl?>"><i class="fa fa-home"></i> Home</a>
                        <a href="<?= Url::to(['site/product'])?>">Product </a>
                        <span><?= $data->name; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                        <?php
                            $i = 0;
                            foreach($images as $img){
                                    if ($i == 0 ){
                                        $active = "pt active";
                                    }else{
                                        $active = "pt";
                                    }
                                    $number = $i++;

                                    echo '
                                            <a class="'.$active.'" href="#product-'.$number.'">
                                                <img src="'.Yii::$app->request->baseUrl.'/'.$img['foto'].'" alt="">
                                            </a>
                                    ';
                                }
                            ?>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                            <?php
                            $i = 0;
                            foreach($images as $img){
                                    if ($i == 0 ){
                                        $active = "pt active";
                                    }else{
                                        $active = "pt";
                                    }
                                    $number = $i++;

                                    echo '
                                        <img data-hash="product-'.$number.'" class="product__big__img" src="'.Yii::$app->request->baseUrl.'/'.$img['foto'].'" alt="">
                                    ';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3><?= $data->name; ?> <span> REBONCEL</span></h3>
                        <p>It is demi-functional cosmetic made with ingredients optimized for skin type by exluding ingredients that cause skin troubles as much as possible. In the meantime, we are being awarded in R&D program according to the Ribbon Research Team, namely: Endless research and development for product , Natural ingredients and top of R&D innovation and Maintain the essence and be honest</p>
                        <div class="product__details__for"> for <?= $data->for; ?> </div>
                        <div class="product__details__skin"><span> <?= $data->skin; ?> </span></div>
                        
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">How to Use</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Description</h6>
                                <?= $data->description; ?>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h6>How to Use</h6>
                                <?= $data->cara_penggunaan; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>RELATED PRODUCTS</h5>
                    </div>
                </div>
                        
                <?php
                    foreach($related as $listdata)
                        {
                            echo '
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="'.Yii::$app->request->baseUrl.'/'.$listdata['image'].'">
                                        <ul class="product__hover">
                                            <li><a href="'. Url::to(['product-detail', 'name'=>$listdata['name']]).'"><span class="arrow_expand"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                    <h6><a href="'. Url::to(['product-detail', 'name'=>$listdata['name']]).'">'.$listdata['name'].'</a></h6>
                                    </div>
                                </div>
                            </div>
                            ';
                        }  
                ?>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->