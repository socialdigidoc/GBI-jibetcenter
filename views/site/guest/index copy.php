<?php
use yii\helpers\Url;
?>
    <!-- Slider Section Begin -->
    <!-- <section id="hero" class="hero-1">
        <div class="slideshow-container">
            <div class="mySlides fadedigi">
                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/slider/slider-1.png" style="width:100%">
            </div>
            <div class="mySlides fadedigi">
                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/slider/slider-2.png" style="width:100%">
            </div>
            
            <a class="prevSlidesIndex" onclick="plusSlides(-1)">❮</a>
            <a id="next" class="nextSlidesIndex" onclick="plusSlides(1)">❯</a>
        </div>
        <br>
        <div class="dotposition"> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        </div>
        <br>
    </section>  -->
    <!-- Slider Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori.gif">
                    <div class="categories__text" style="margin-bottom: 200px;">
                        <h1>Lorem Ipsum </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <!-- <a target="_blank" href="<?= Url::to(['site/shop'])?>">Shop now</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-2.png"">
                            <div class="categories__text">
                                <h4>Lorem Ipsum </h4>
                                <!-- <p>13 items</p>
                                <a target="_blank" href="<?= Url::to(['site/shop'])?>">Shop now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-3.png"">
                            <div class="categories__text">
                                <h4>Lorem Ipsum </h4>
                                <!-- <p>22 items</p>
                                <a target="_blank" href="<?= Url::to(['site/shop'])?>">Shop now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-4.png"">
                            <div class="categories__text">
                                <h4>Lorem Ipsum </h4>
                                <!-- <p>27 items</p>
                                <a target="_blank" href="<?= Url::to(['site/shop'])?>">Shop now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-5.png"">
                            <div class="categories__text">
                                <h4>Lorem Ipsum </h4>
                                <!-- <p>8 items</p>
                                <a target="_blank" href="<?= Url::to(['site/shop'])?>">Shop now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Categories Section Begin -->
    <!-- <section class="categories">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-2.png"">
                            <div class="categories__text">
                                <h4>Kategori 2</h4>
                                <p>358 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="ol-lg-3 col-md-3 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-3.png"">
                            <div class="categories__text">
                                <h4>Kategori 3</h4>
                                <p>273 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="ol-lg-3 col-md-3 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-4.png"">
                            <div class="categories__text">
                                <h4>Kategori 4</h4>
                                <p>159 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="ol-lg-3 col-md-3 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-5.png"">
                            <div class="categories__text">
                                <h4>Kategori 5</h4>
                                <p>792 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Best Seller</h4>
                </div>
            </div>
            <!-- <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".women">HAIR</li>
                    <li data-filter=".men">WHITENING</li>
                    <li data-filter=".kid">MOISTURIZING</li>
                    <li data-filter=".accessories">ANTI AGING</li>
                    <li data-filter=".cosmetic">BODY CARE</li>
                </ul>
            </div> -->
        </div>
        <div class="row property__gallery">
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-1.png">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-1.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">PDRN Ampoule</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-2.png">
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-2.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Aquarich Pure Cleanser</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 49.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-3.png">
                        <div class="label stockout">out of stock</div>
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-3.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Aqua Rich Pure Skin Renewal</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-4.png">
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-4.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Aqua Rich Soft Lotion </a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-5.png">
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-5.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Aqua Rich Soothing Mist</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                <div class="product__item sale">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-6.png">
                        <div class="label sale">Sale</div>
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-6.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Rejuvenating Cream</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-7.png">
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-7.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Intensive Lotion</a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                <div class="product__item sale">
                    <div class="product__item__pic set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-8.png">
                        <div class="label">Sale</div>
                        <ul class="product__hover">
                            <li><a href="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-8.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?= Url::to(['site/shop-detail'])?>">Aqua Rich Pure Skin </a></h6>
                        <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                        <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/collection.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>February Special</span>
                            <h1>Sweet Deals, Special Savings</h1>
                            <a href="<?= Url::to(['site/shop-detail'])?>">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>Yearly Membership Program</span>
                            <h1>쁘띠 (re: petite) Treatment</h1>
                            <a href="<?= Url::to(['site/shop-detail'])?>">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>Special Promotion</span>
                            <h1>Bye bye 2022 !!</h1>
                            <a href="<?= Url::to(['site/shop-detail'])?>">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<!-- <section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Hot Trend</h4>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-1.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Cut-Travel Kit</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-2.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Rejuvenating Eye Firming Cream</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-3.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>PDRN ampoule</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Best seller</h4>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-4.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Glow Mist Serum</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-5.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Soapberry Flores Pore Cleansing Water</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-6.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Soap Berry Triple Synergy Cleansing Gel</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Feature</h4>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-7.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Soap Berry Botanical Pore Cleansing Oil</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-8.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>UREA Soft Cream</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/trend/trend-9.png" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>Ultra Sunblock Cream</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">$ 59.0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class="discount" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/discount.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>New Customer</h2>
                        <h5><span>Sale</span> 70%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href="#">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>FREE SHIPPING, RETURN</h6>
                    <p>For purchases over $50 Free Shipping</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>CUSTOMER SERVICE</h6>
                    <p>If you have any questions, please contact us by email or phone.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>SECURE PAYMENTS</h6>
                    <p>All Payment Are Secured And Trusted</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-18.png">
                    <div class="instagram__text">
                        <!-- <i class="fa fa-instagram"></i>
                        <a href="#">@reboncel.id</a> -->
                        <a href="#">Nama Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-19.png">
                    <div class="instagram__text">
                        <!-- <i class="fa fa-instagram"></i>
                        <a href="#">@reboncel.id</a> -->
                        <a href="#">Nama Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-20.png">
                    <div class="instagram__text">
                        <!-- <i class="fa fa-instagram"></i>
                        <a href="#">@reboncel.id</a> -->
                        <a href="#">Nama Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-17.png">
                    <div class="instagram__text">
                        <!-- <i class="fa fa-instagram"></i>
                        <a href="#">@reboncel.id</a> -->
                        <a href="#">Nama Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-8.png">
                    <div class="instagram__text">
                        <!-- <i class="fa fa-instagram"></i>
                        <a href="#">@reboncel.id</a> -->
                        <a href="#">Nama Produk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/produk/produk-3.png">
                    <div class="instagram__text">
                        <!-- <i class="fa fa-instagram"></i>
                        <a href="#">@reboncel.id</a> -->
                        <a href="#">Nama Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->


<script>
      var slideIndex = 1;
      showSlides(slideIndex);

      // Start autoplaying automatically
      var autoplayInterval = setInterval(function() {

          // Get element via id and click next
          document.getElementById("next").click();
          
        
        }, 8000); // 1000 = Do this every 1 second, increase this!

      // Stop function added to button
      function stopAutoplay() {

        // Stop the autoplay
        clearInterval(autoplayInterval);

      }

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" activeslider", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " activeslider";
      }
</script>