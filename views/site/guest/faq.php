<?php
    use yii\helpers\Url;
?>

<style>
  
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    .faq{
        max-width: 100%;
        margin-bottom: 20px;
        padding: 25px 30px;
        background-color: #fff;
        box-shadow: 1px 1px 1px 1px #aaa;
        border-radius: 5px;
    }

    .question{
        display: flex;
        justify-content: space-between;
        align-items: center;
        letter-spacing: 2px;
    }

    .question h2{
        font-size: 18px;
    }

    .question i{
        font-size: 24px;
        cursor: pointer;
        color : #df7776;
    }

    .answer{
        max-height: 0;
        overflow: hidden;
        transition: max-height 1s;
    }

    .answer p{
        padding-top: 20px;
        font-size: 15px;
        letter-spacing: 1px;
    }

    .faq.active .answer{
        max-height: 250px;
    }

    @media screen and (max-width: 850px){

        .section{
            display: table;
        }

        .container-1{
            width: 100%;
            padding: 0 20px;
        }

        .container-2{
            width: 100%;
            padding: 0 20px; 
        }

        .question h2{
            font-size: 17px;
        }

        .answer p{
            font-size: 14px;
        }
        
    }

</style>

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= Yii::$app->homeUrl?>"><i class="fa fa-home"></i> Home</a>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
        <div class="section">
        <div class="container-1">

            <div class="faq">
                <div class="question">
                    <h2>Apakah produk Reboncel sudah terdaftar pada BPOM?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Produk Reboncel yang tersedia di Indonesia sudah terdaftar BPOM.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>Apakah kandungan yang ada pada Reboncel aman?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Produk kami memiliki kandungan yang dioptimalkan untuk berbagai tipe kulit dengan pula menghindari pemakaian komponen yang merusak ataupun berbahaya bagi kulit.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>Bagaimana saya dapat menemukan produk di website?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Untuk pembelian produk Reboncel memiliki online dan offline store, Jika Anda ingin melakukan pembelian di online store shopee klik Reboncel dan untuk offline store dapat di lihat di bagian Contact info.</p>
                </div>
            </div>
            
            <div class="faq">
                <div class="question">
                    <h2>Bagaimana jika terjadi masalah dengan produk yang telah saya beli?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Jika Anda membeli produk di gerai offline maka silahkan kunjungi dengan membawa produk dan juga struk pembelian dan untuk pembelian secara online atau E-Commerce dapat menghubungi admin E-commerce dan melampirkan video unboxing sebagai buktinya.</p>
                </div>
            </div>

        </div>

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