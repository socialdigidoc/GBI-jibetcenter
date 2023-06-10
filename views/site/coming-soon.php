<?php
  $viewMore = Yii::$app->mycomponent->languagesParams('liat-selengkapnya');
?>

  <section id="blog" class="section">
    <div class="blog-section">
    <div class="container">
            <div class="row content">
                <div class="col-md-12 order-2 order-md-1" data-aos="fade-up">
                    <img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/icon/coming-soon.png"  class="img-fluid" alt="" style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
                </div>
            </div>
        <div class="row content">
        <div class="col-md-12 order-2 order-md-1" data-aos="fade-up">
            <h3 style="margin: 0 0 20px 0;
            font-size: 30px;
            font-weight: 700;">This feature still not available </h3>
            <p>
                Thank you. Meanwhile, you may <b><a href='<?= Yii::$app->homeUrl ?>'>return to Home.</a></b>
            </p>

        </div>
        </div>
      </div>
    </div>
  </section>
