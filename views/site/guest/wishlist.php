<?php
    use yii\helpers\Url;

    // echo "Print R data disini ";
    // echo "<pre>";
    // print_r($model);
    // echo "</pre>";
?>

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= Yii::$app->homeUrl?>"><i class="fa fa-home"></i> Home</a>
                        <span>Favorit Product</span>
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
                        if(count($model)==0){
                             echo '<center><span style="text-align:center; margin-left: 30px;">Did not yield any results.</span></center>';
                        }else{
                            foreach($model as $listdata)
                            {
                                $statuslike = Yii::$app->mycomponent->cekFavorit($listdata['id']) == 1 ? 'icon_heart' : 'icon_heart_alt';
                                
                                echo '
                                <div class="col-lg-3 col-md-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="'.Yii::$app->request->baseUrl.'/'.$listdata['image'].'">
                                            <ul class="product__hover">
                                                <li><a href="'. Url::to(['product-detail', 'name'=>$listdata['name']]).'"><span class="arrow_expand"></span></a></li>
                                                <li><a nohref><span onclick="myFunctionLikeData('.$listdata['id'].')" id="MyLike-'.$listdata['id'].'" class="'.$statuslike.'"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                        <h6><a href="'. Url::to(['product-detail', 'name'=>$listdata['name']]).'">'.$listdata['name'].'</a></h6>
                                        </div>
                                    </div>
                                </div>
                                ';
                            } 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<script>
function myFunctionLikeData(valueID) {
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
            // $( "#favProduct" ).html( data );
        });
    } else {
        y.classList.remove("icon_heart");
        y.classList.add("icon_heart_alt");
        // console.log('Unlike ' + valueID);
        $.get("<?php echo Url::toRoute(['/site/unlike', 'guest'=>Yii::$app->mycomponent->cekGuest()]); ?>&id=" +valueID)
        .done(function( data ) {
            $( "#wishlistValue").html( data );
            $( "#wishlistValue2").html( data );
            // $( "#favProduct").html( data );
        });
    }
}
</script>

