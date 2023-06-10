<?php
use yii\helpers\Url;
use app\models\ProdukKategori;
use app\models\ProdukLayanan;
use app\models\ProdukFavorit;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$kategori = ProdukKategori::find()->orderBy(['order' => SORT_ASC])->all();
$layanan = ProdukLayanan::find()->orderBy(['order' => SORT_ASC])->all();

    if(Yii::$app->controller->action->id == 'contact'){
        $title = 'Contact - Reboncel ID';
    }elseif(Yii::$app->controller->action->id == 'product'){
        $title = 'Product - Reboncel ID';
    }elseif(Yii::$app->controller->action->id == 'faq'){
        $title = 'FAQ - Reboncel ID';
    }elseif(Yii::$app->controller->action->id == 'skin-solution'){
        $title = 'Skin Solution - Reboncel ID';
    }elseif(Yii::$app->controller->action->id == 'skin-solution'){
        $title = 'Skin Solution - Reboncel ID';
    }elseif(Yii::$app->controller->action->id == 'story'){
        $title = 'Story - Reboncel ID';
    }elseif(Yii::$app->controller->action->id == 'history'){
        $title = 'Technology - Reboncel ID';
    }else{
        $title = 'Reboncel ID';
    }
    
    $metaTitle = "Reboncel ID";
    $pathImgMeta = "https://reboncel.id/web/img/share.jpg";

    $wishlist = ProdukFavorit::find()->where(['id_guest' => Yii::$app->mycomponent->cekGuest()])->count();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Derma cosmetic is a brand specializing in hospitals, clinics containing the technology of the Reboncel skin research team, which proposes customized solutions for problematic/sensitive skin.">
    <meta name="keywords" content="reboncel, reboncel id, derma, cosmetic">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?= $title?></title>
    <meta name="author" content="Reboncel ID">
    <meta property="og:title" content="Korean No. 1 Brand Derma Cosmetic"/>
    <meta property="og:image" content="<?= $pathImgMeta ?>"/>  
    <meta charset="<?= Yii::$app->charset ?>"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/css/style.css" type="text/css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= Yii::$app->request->baseUrl. '/web/img/favicon.webp' ?>">

    <style>
        .header__menu ul li .dropdown{
           background: #ffffff!important;
        }

        .header__menu ul li .dropdown li a{
            color:#000!important;
        }

        .dropdownarea{
            right: 0;
            width: 100%;
            padding: 20px 30px;
            background-position: right bottom;
            background-repeat: no-repeat;
        }
        .header__menu ul li .dropdown{
            width:250%;
        }

        .product__item__text h6:focus, h6:hover{
            font-weight:bold;
            color:#df7776;
        }
    </style>
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="<?= Url::to(['site/wishlist'])?>"><span class="icon_heart_alt"></span>
                <div class="tip" id="wishlistValue2"><?= $wishlist ?></div>
            </a></li>
            <!-- <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li> -->
        </ul>
        <div class="offcanvas__logo">
            <a href="<?= Yii::$app->homeUrl?>"><img src="<?= Yii::$app->request->baseUrl ?>/web/img/logo.png" alt="" style="height: 40px;"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <!-- <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div> -->
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="<?= Yii::$app->homeUrl?>"><img src="<?= Yii::$app->request->baseUrl ?>/web/img/logo.png" alt="" style="height: 40px;"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu" style="text-align: center;">
                        <ul>
                            <li class="<?= Yii::$app->controller->action->id == 'index' ? 'active' : ''?>"><a href="<?= Yii::$app->homeUrl?>">Home</a></li>
                            <li class="<?= Yii::$app->controller->action->id == 'brand' ? 'active' : ''?>"><a href="#">Brand</a>
                                <ul class="dropdown">
                                        <li><a href="<?= Url::to(['site/story'])?>">Story</a></li>
                                        <li><a href="<?= Url::to(['site/history'])?>">Technology</a></li>
                                </ul> 
                            </li>
                            <li class="<?= Yii::$app->controller->action->id == 'product' ? 'active' : ''?>"><a href="#">Product</a>
                                <ul class="dropdown">
                                    <?php foreach ($kategori as $listkategori) { ?>
                                        <li><a href="<?= Url::to(['site/product', 'category'=> $listkategori['kategori']])?>"><?= $listkategori['kategori'] ?></a></li>
                                    <?php } ?>
                                </ul> 
                            </li>
                            <li class="<?= Yii::$app->controller->action->id == 'skin-solution' ? 'active' : ''?>"><a href="#">Skin Solution</a>
                                <ul class="dropdown">
                                    <?php foreach ($layanan as $listlayanan) { ?>
                                        <li><a href="<?= Url::to(['site/skin-solution', 'key'=> $listlayanan['name']])?>"><?= $listlayanan['name'] ?></a></li>
                                    <?php } ?>
                                </ul> 
                            </li>
                            <!-- <li><a href="#">Events</a></li> -->
                            <!-- <li class="<?= Yii::$app->controller->action->id == 'faq' ? 'active' : ''?>"><a href="<?= Url::to(['site/faq'])?>">FAQ</a></li> -->
                            <!-- <li><a href="<?= Url::to(['site/event'])?>">Events</a></li> -->
                            <li><a href="<?= Url::to(['site/faq'])?>">FAQ</a></li>
                            <li class="<?= Yii::$app->controller->action->id == 'contact' ? 'active' : ''?>"><a href="<?= Url::to(['site/contact'])?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <!-- <div class="header__right__auth">
                            <a href="#">Login</a>
                            <a href="#">Sign Up</a>
                        </div> -->
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="<?= Url::to(['site/wishlist'])?>"><span class="icon_heart_alt"></span> 
                                <div class="tip" id="wishlistValue"><?= $wishlist ?></div>
                            </a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <?= $content ?>

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="<?= Yii::$app->homeUrl?>"><img src="<?= Yii::$app->request->baseUrl ?>/web/img/logo.png" alt="" style="height: 40px;"></a>
                    </div>
                    <p>Reboncel is a specialized product for Hospitals, Clinics and Derma Home Care that based on skin science intensive management systems.</p>
                    <!-- <div class="footer__payment">
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/img/payment/payment-5.png" alt=""></a>
                    </div> -->
                </div>
            </div>
            
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="<?= Url::to(['site/product'])?>">Product</a></li>
                        <li><a href="<?= Url::to(['site/contact'])?>">Contact</a></li>
                        <li><a href="<?= Url::to(['site/faq'])?>">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Other</h6>
                    <ul>
                        <!-- <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li> -->
                        <li><a href="<?= Url::to(['site/wishlist'])?>">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>SOCIAL MEDIA</h6>
                    <!-- <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form> -->
                    <div class="footer__social">
                        <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                        <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                        <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fa fa-g"></i></a> -->
                        <!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <?php $form = ActiveForm::begin(['action' =>'search', 'method'=>'get', 'options' => [
                'class'=> 'search-model-form'
             ]]); ?>
                <?= Html::input('text', 'name', $_GET['name'],
                [ 'placeholder'=> 'Cari disini ... ', 'onkeydown'=>"if(event.key == 'Enter'){ this.form.submit() }"]) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<!-- Search End -->

<script>
function myFunctionLike(valueID) {
    var fValue = 1;
    var y = document.getElementById("MyLike-"+valueID);
    if (y.classList.contains("icon_heart_alt")) {
        y.classList.remove("icon_heart_alt");
        y.classList.add("icon_heart");
        // console.log('Like ' + valueID);
        $.get("<?php echo Url::toRoute(['/site/like', 'guest'=>Yii::$app->mycomponent->cekGuest()]); ?>&id=" +valueID)
        .done(function( data ) {
            $( "#wishlistValue" ).html( data );
            $( "#wishlistValue2" ).html( data );
        });
    } else {
        y.classList.remove("icon_heart");
        y.classList.add("icon_heart_alt");
        // console.log('Unlike ' + valueID);
        $.get("<?php echo Url::toRoute(['/site/unlike', 'guest'=>Yii::$app->mycomponent->cekGuest()]); ?>&id=" +valueID)
        .done(function( data ) {
            $( "#wishlistValue").html( data );
            $( "#wishlistValue2").html( data );
        });
    }
}

</script>




<!-- Js Plugins -->
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/jquery-3.3.1.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/bootstrap.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/jquery.magnific-popup.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/jquery-ui.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/mixitup.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/jquery.countdown.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/jquery.slicknav.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/owl.carousel.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/jquery.nicescroll.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/js/main.js"></script>

