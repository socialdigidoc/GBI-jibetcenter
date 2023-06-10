<?php
use yii\helpers\Url;
?>

<style>
    .styleimages{
        width: 100%;
        object-fit: cover;        
    }
/* 
    .hero-1{
        top: -100px;
    } */
</style>

    <!-- Slider Section Begin -->
    <section id="hero" class="hero-1">
        <div class="slideshow-container">
            <div class="mySlides fadedigi">
                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/mainslider/mainslider-1.jpg" class="styleimages">
            </div>
            <div class="mySlides fadedigi">
                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/mainslider/mainslider-2.jpg" class="styleimages">
            </div>
            <!-- <div class="mySlides fadedigi">
                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/mainslider/images-3.jpg" class="styleimages">
            </div> -->
             <!-- <div class="mySlides fadedigi">
                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/mainslider/images-4.jpg" class="styleimages">
            </div> -->
            
            <a class="prevSlidesIndex" onclick="plusSlides(-1)">❮</a>
            <a id="next" class="nextSlidesIndex" onclick="plusSlides(1)">❯</a>
        </div>
        <br>
        <div class="dotposition"> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <!-- <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span>  -->
        </div>
        <br>
    </section> 
    <!-- Slider Section End -->


<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Best Seller</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery">
            <?php
                foreach($best_seller as $bsdata)
                    {
                        $statuslike = Yii::$app->mycomponent->cekFavorit($bsdata->id) == 1 ? 'icon_heart' : 'icon_heart_alt';
                        // echo 'ini idguest '.Yii::$app->mycomponent->cekGuest();
                        echo '
                        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                            <div class="product__item" sale>
                                <div class="product__item__pic set-bg" data-setbg="'.Yii::$app->request->baseUrl.'/'.$bsdata->image.'">
                                    <div class="label sale">Sale</div>
                                    <ul class="product__hover">
                                        <li><a href="'. Url::to(['product-detail', 'name'=>$bsdata->name]).'"><span class="arrow_expand"></span></a></li>
                                        <li><a nohref><span onclick="myFunctionLike()" id="MyLike" class="'.$statuslike.'"><p id="myId" style="display:none">'.$bsdata->id.'</p></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="'. Url::to(['product-detail', 'name'=>$bsdata->name]).'">'.$bsdata->name.'</a></h6>
                                </div>
                            </div>
                        </div>
                        ';
                    }  
                ?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Services Section Begin -->
<section class="services spad" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="services__item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon1.png" style=" height:65px; padding-bottom:10px">
                    <p>Green Grade Ingredients</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="services__item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon2.png" style=" height:65px; padding-bottom:10px">
                    <p>Against Animal Testing</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="services__item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon3.png" style=" height:65px; padding-bottom:10px">
                    <p>Naturalism</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="services__item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon4.png" style="height:65px; padding-bottom:10px">
                    <p>Natural Ingredients</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="services__item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon5.png" style=" height:65px; padding-bottom:10px">
                    <p>100% Customer Satisfaction</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="services__item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon6.png" style="height:65px; padding-bottom:10px">
                    <p>Skin Hypoallergenic</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori.gif">
                    <div class="categories__text" >
                        <h1>Derma Cosmetic</h1>
                        <a target="_blank" href="<?= Url::to(['site/shop'])?>">정직하게 아름답고 건강한 제품을 개발한다는 철학을 갖고 있습니다</a>
                        </br>
                        <p>We have a philosophy of developing honest, beautiful and healthy products by using skin-friendly ingredients and avoiding ingredients harmful to the skin.</p>
                        <p>Derma cosmetic is a brand specializing in hospitals, clinics containing the technology of the Reboncel skin research team, which proposes customized solutions for problematic/sensitive skin.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-2.png"">
                            <!-- <div class="categories__text">
                                <h4>Plant Stem Cell Culturing Technology</h4>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-3.png"">
                            <!-- <div class="categories__text"> -->
                                <!-- <h4>Organic Complex</h4> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-4.png"">
                            <!-- <div class="categories__text">
                                <h4>Paraben Free Presentative System</h4>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/kategori/kategori-5.png"">
                            <!-- <div class="categories__text">
                                <h4>High Quality, Selective Availability Formula</h4>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->


<script type="text/javascript">
function myFunctionLike() {
  var fValue = 1;
  var id = document.getElementById("myId").value;
  var y = document.getElementById("MyLike");
  if (y.classList.contains("icon_heart_alt")) {
    y.classList.remove("icon_heart_alt");
    y.classList.add("icon_heart");
    addTheValue(fValue);
     $.get("<?php echo Url::toRoute(['/site/like', 'guest'=>Yii::$app->mycomponent->cekGuest(),'id'=>'<script>document.writeln(id);</script>']); ?>")
     .done(function( data ) {
        //$( "#kode_lokasi_2" ).html( data );
      });
  } else {
    y.classList.remove("icon_heart");
    y.classList.add("icon_heart_alt");
    kurangTheValue(fValue);
    $.get("<?php echo Url::toRoute(['/site/unlike', 'guest'=>Yii::$app->mycomponent->cekGuest(),'id'=>'<script>document.writeln(id);</script>']); ?>")
     .done(function( data ) {
        //$( "#kode_lokasi_2" ).html( data );
      });
  }
}
</script>

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

</body>

</html>