<?php

namespace app\components;
use yii\base\BootstrapInterface;
use app\models\Guest;
use Yii;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];
    
    public function bootstrap($app)
    {
        $app->mycomponent->saveGuest();
    }
}