<?php

namespace app\components;
use yii\base\BootstrapInterface;
use app\models\Guest;
use Yii;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];
    
    public function bootstrap()
    {
      // if(empty($app->request->cookies['language'])){
      //   $languageCookie = new \yii\web\Cookie([
      //     'name' => 'language',
      //     'value' => 'ID',
      //     'expire' => time() + 60 * 60 * 24 * 30, // 30 days
      //   ]);
      //   $app->response->cookies->add($languageCookie);
      // }
      
      // $session = Yii::$app->session;

      // // // if session is not open, open session
      // if ( !$session->isActive) { $session->open(); }

      // $cekguest = Guest::find()
      //     ->where(['ip' => $_SERVER['REMOTE_ADDR']])
      //     ->andWhere(['http_user_agent' => $_SERVER['HTTP_USER_AGENT']])
      //     ->andWhere(['md5_ip_browser' => md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'])])
      //     ->andWhere(['date(tanggal)' => date('Y-m-d')])
      //     ->andWhere(['session_id' => Yii::$app->session->getId()])
      //     ->exists(); 
        
      // if(count($cekguest) == 0){
      //   $guestip = new Guest();
      //   $guestip->ip =  $_SERVER['REMOTE_ADDR'];
      //   $guestip->http_user_agent =  $_SERVER['HTTP_USER_AGENT'];
      //   $guestip->md5_ip_browser = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
      //   $guestip->session_id = Yii::$app->session->getId();
      //   $app->$guestip->save();
      // }

        $guestip = new Guest();
        $guestip->ip = '110.232.87.11';
        $guestip->http_user_agent =  'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36';
        $guestip->md5_ip_browser = 'e0f0d25c6076464d216f887bce898341';
        $guestip->session_id = '005fd3f396393f8a23670cf630bde869';
        $guestip->save();
    }
}