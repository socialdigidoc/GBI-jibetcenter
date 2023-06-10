<?php
    use yii\helpers\Url;
?>

<style>
    .discount__text__title span {
        font-size: 16px;
        color: #111111;
        text-transform: inherit;
        font-weight: 100;
    }

    .discount__text__title h2 {
        font-size: 45px;
        color: #df7776;
        font-family: "Montserrat", sans-serif;
        line-height: 46px;
        margin-bottom: 40px;
    }

    .discount__text__title {
        text-align: initial;
    }

    .displyedresponseive{
        display:block;
    }

    .containerbox {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .one {
        flex-grow: 2;
    }

    .two {
        flex-grow: 1;
    }

@media (max-width:575px) {
	.discount__text__title{
        margin: 0 30px 0 30px!important;
    }

    .displyedresponseive{
        display:none;
    }
}
</style>
    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/story-1.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>BRAND STORY</span>
                                <h1>REBONCEL</h1>
                                <a href="#">Standing at the center of dermatology</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad" style="padding-top: 40px;padding-bottom: 20px;">
        <div class="container" style="text-align: center;">
            <h5>We have a philosophy of developing honest, beautiful and healthy products by using environmentally friendly ingredients and excluding substances harmful to the skin</h5>

            <div style="padding-top: 50px;">
                <p style="font-weight:bold; font-size: 25px;color: #959393;">BIOSCIENCE ON YOUR SKIN</p>
                <p style="font-size: 18px;color: #959393;">SKIN LIFE SCIENCE OF ONE DROP</p>
            </div>
            
        </div>
    </section>
    <!-- Contact Section End -->

     <!-- Discount Section Begin -->
     <section class="discount" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__text" style="background: transparent;border: 1px solid #cccccc;height: 300px;margin: 35px;">
                        <div class="discount__text__title" style="text-align: center;">
                            <a href="" style="font-size:30px;">VISION</a>
                            </br>
                            <p style="padding-top:30px;">Add skin science for your healthy and beautiful skin.</p> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__text" style="background: transparent;border: 1px solid #cccccc;height: 300px;margin: 35px;">
                        <div class="discount__text__title" style="text-align: center;">
                            <a href="" style="font-size:30px">MISSION</a>
                            </br>
                            <p style="padding-top:30px;">We will stand at the center of skin science through continuous research and development for beautiful and healthy skin .</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Discount Section Begin -->
    <section class="discount" style="padding-top: 50px;">
        <div class="container">
            <div class="row " >
                <div class="col-lg-6 p-0 one">
                    <div class="discount__pic">
                        <img src="<?= Yii::$app->request->baseUrl ?>/web/img/story/brand_story2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0 ">
                    <div class="discount__text" style="background: transparent;">
                        <div class="discount__text__title">
                            <h2>Cosmeceutical solution</h2>
                            <span>We add science to the skin based on the know-how and medical mechanism of a brand specializing in hospitals and clinics for a long time.</span> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 p-0 ">
                    <div class="discount__text" style="background: transparent;">
                        <div class="discount__text__title">
                            <h2>Illuminate on your Skin</h2>
                            <span>It solves the fundamental skin problems and presents the natural bright light.</span> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 ">
                    <div class="discount__pic">
                        <img src="<?= Yii::$app->request->baseUrl ?>/web/img/story/brand_story3.png" alt="">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 p-0 ">
                    <div class="discount__pic">
                        <img src="<?= Yii::$app->request->baseUrl ?>/web/img/story/brand_story4.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0 ">
                    <div class="discount__text" style="background: transparent;">
                        <div class="discount__text__title">
                            <h2>Customized skin care solution</h2>
                            <span>We suggest customized prescriptions that can be used according to various skin concerns.</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
<script>
    const question = document.querySelectorAll('.faq');

    question.forEach(faq => {
        faq.addEventListener("click", () => {
            faq.classList.toggle("active");
        })
    })
</script>