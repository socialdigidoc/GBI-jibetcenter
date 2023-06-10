<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= Yii::$app->request->baseUrl. '/web/img/favicon.png' ?>">
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <style>
    .login-page, .register-page {
        background-color: #df7776;
    }
    .login-box-body, .register-box-body {
        background: rgba(255,255,255,0.7);
        border-radius: 7px;
    }

    .btn-loginblack {
        background-color: #df7776;
        border-color: #df7776;
    }

    .login-logo, .register-logo {
        font-size: 35px;
        margin-bottom: 49px;
        text-shadow: 4px 4px 6px black;
        color : white;
    }

    
    @font-face {
    font-family: 'Audiowide';
    font-style: normal;
    font-weight: normal;
    src: url('../web/fonts/audiowide-regular.woff');
    }

    @font-face {
    font-family: 'Orbitron';
    font-style: normal;
    font-weight: normal;
    src: url('../web/fonts/orbitron-regular.woff');
    }

    .judul{
        font-size: 42px;
        font-weight: bold;
        color: #FFF;
        font-family: 'Audiowide', sans-serif;
    }
    .kepanjangan{
        font-size: 30px;
    }

    .copy {
        width: 100%;
        position: fixed;
        bottom: 0;
        box-sizing: border-box;
        padding: 5px;
        z-index: 9999;
        text-align: center;
        color: #fff;
        background: rgba(0, 0, 0, 0.61);
    }

    .main-header .navbar-custom-menu a, .main-header .navbar-right a {
        background: #32005b!important;
		border-color:  #32005b!important;
	}

    
    </style>
</head>
<body class="login-page">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
