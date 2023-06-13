<?php
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link href="<?= Yii::$app->request->baseUrl ?>/web/img/favicon.png" rel="icon">
    <link href="<?= Yii::$app->request->baseUrl ?>/web/img/favicon.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/progressbar-fill-visible/css/progressBar.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/slick/slick-theme.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/css/style.css">
    <title>JIBET Center | JIBET CENTER</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/img/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <header class="site-header site-header-transparent">
            <div class="bottom-header" id="masthead">
                <div class="container">
                    <div class="hb-group d-flex align-items-center justify-content-between">
                        <div class="site-identity col-lg-3">
                            <p class="site-title">
                                <a href="<?= Yii::$app->homeUrl?>">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/web/img/logo.png" alt="logo">
                                </a>
                            </p>
                        </div>
                        <div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
                            <nav id="navigation" class="navigation d-none d-lg-inline-block">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="<?= Yii::$app->homeUrl?>">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">About Jibet Center</a>
                                        <ul>
                                            <li>
                                                <a href="<?= Url::to(['site/jibet-center'])?>">Jibet Center</a>
                                            </li>
                                            <li>
                                                <a href="#">PARTNER</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">PROGRAM</a>
                                        <ul>
                                            <li>
                                                <a href="#">EXPERIENCE PROGRAM</a>
                                            </li>
                                            <li>
                                                <a href="#">CREATIVE PROGRAM</a>
                                            </li>
                                            <li>
                                                <a href="#">HOME PROGRAM</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">INFORMATION</a>
                                        <ul>
                                            <li>
                                                <a href="#">INFORMATION OF USE</a>
                                            </li>
                                            <li>
                                                <a href="#">MEMBERSHIP</a>
                                            </li>
                                            <li>
                                                <a href="#">LOCATION & Address </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-btn d-inline-block">
                                <a href="#" class="button-round-secondary">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>
        
    <?= $content ?>

        <!-- footer part -->
        <footer id="colophon" class="site-footer">
            <div class="footer-overlay"></div>
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text img-textwidget">
                                <div class="footer-logo">
                                    <a href="<?= Yii::$app->homeUrl?>"><img src="<?= Yii::$app->request->baseUrl ?>/web/img/logo.png" alt="logo"></a>
                                </div>
                                <div class="textwidget widget-text">
                                Place of education and training that fosters leaders who are victorious by the cross in life like Jesus.
                                </div>
                            </aside>
                            
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget">
                                <h5 class="widget-title">Quick LInks</h5>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Program</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget">
                                <h5 class="widget-title">Support</h5>
                                <ul>
                                    <li>
                                        <a href="#">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Partner</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text school-time">
                                <h5 class="widget-title">Course Hours</h5>
                                <span>
                                    <i aria-hidden="true" class="far fa-clock"></i>
                                    8 AM - 5 PM , Monday - Saturday
                                </span>
                            </aside>
                            <div class="footer-social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-right">Copyright &copy; 2023 JIBET CENTER. All rights reserved.</div>
                        </div>
                        <div class="col-md-6">
                            <div class="legal-list">
                                <ul>
                                    <li>
                                        <a href="#">Created By GBI Tech</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/jquery/jquery.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/waypoint/jquery.waypoints.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/counterup/jquery.counterup.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/slick/slick.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/web/assets-guest/assets/js/custom.js"></script>
</body>

</html>