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
        margin-bottom: 20px;
    }

    .displyedresponseive{
        display:block;
    }

@media (max-width:575px) {
	.discount__text__title{
        margin: 0 30px 0 30px!important;
    }

    .displyedresponseive{
        display:none;
    }
}

.sub_layout_sub_tit span {
    font-size: 24px;
    border-radius: 50px;
    padding: 10px;
    border: 1px solid #cccccc;
    width: 250px;
}
</style>
    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="<?= Yii::$app->request->baseUrl ?>/web/img/story-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>BRAND TECHNOLOGY</span>
                                <h1>REBONCEL</h1>
                                <a href="#">Bioscience on Your Skin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Discount Section Begin -->
    <section class="discount" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__pic">
                        <img src="<?= Yii::$app->request->baseUrl ?>/web/img/tech/brand_tech1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__text" style="background: transparent;">
                        <div class="discount__text__title">
                            <h2>Nature-friendly Ingredients</h2>
                            <span>It solves the fundamental skin problems and presents the natural bright light.</span>
                            <div style="text-align: initial; padding-top:20px">
                                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/tech/brand_tech_icon1.jpg" alt="" style="height: 60px;"> 
                                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/tech/brand_tech_icon3.jpg" alt="" style="height: 60px;"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__text" style="background: transparent;">
                        <div class="discount__text__title">
                            <h2>Skin Relief Prescription</h2>
                            <span>By limiting the use of harmful chemical ingredients that can irritate the skin,the whole family can use it with confidence.</span> 
                            <div style="text-align: initial; padding-top:20px">
                                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon1.png" alt="" style="height: 60px;"> 
                                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon4.png" alt="" style="height: 60px;"> 
                                <img src="<?= Yii::$app->request->baseUrl ?>/web/img/home-icon/brand_story_icon2.png" alt="" style="height: 60px;"> 
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__pic">
                        <img src="<?= Yii::$app->request->baseUrl ?>/web/img/tech/brand_tech2.png" alt="">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 p-0 displyedresponseive">
                    <div class="discount__pic">
                        <img src="<?= Yii::$app->request->baseUrl ?>/web/img/tech/brand_tech3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__text" style="background: transparent;">
                        <div class="discount__text__title">
                            <h2>BIOSCIENCE™</h2>
                            <span>BIOSCIENCE™, a proprietary technology, focuses on the penetration of active substances and movement within the skin , and has improved the scope of development and application of substances . Through continuous research and development, we have secured excellence in the field of high-functional and medical cosmetics and have proven outstanding effects.</span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Begin -->
    <section class="contact spad" style="padding-top: 40px;padding-bottom: 20px;">
        <div class="container" style="text-align: center;">
            <span><font style="vertical-align: inherit;">
            <div class="sub_layout_sub_tit">
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Technique</font></font></span>
            </div>
        <div class="col-md-12 col-xl-12 col-lg-12 m-auto" style="padding-top: 50px;">
            <img src="<?= Yii::$app->request->baseUrl ?>/web/img/tech/illust.jpg" alt="">
        </div>
        </div>
        
    </section>
    <!-- Contact Section End -->
  
<script>
    const question = document.querySelectorAll('.faq');

    question.forEach(faq => {
        faq.addEventListener("click", () => {
            faq.classList.toggle("active");
        })
    })
</script>