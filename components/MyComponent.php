<?php
namespace app\components;
use Yii;
use app\models\Guest;
use app\models\ProdukFavorit;
use yii\base\Component;
use yii\base\InvalidConfigException;
class MyComponent extends Component
{
    public function tampilTanggal($tanggalsekarang)
    {
        // cek bahasa sekarang
        $bahasa =  (string)Yii::$app->request->cookies['language'] == null ? 'ID' : Yii::$app->request->cookies['language'];

        // tampilkan 
        $barusaja = $bahasa == 'ID' ? 'Baru saja' : 'Just Now';
        $pesandetik = $bahasa == 'ID' ? ' detik yang lalu' : ' seconds ago';
        $pesanmenit = $bahasa == 'ID' ? ' menit yang lalu' : ' minutes ago';
        $pesanjam = $bahasa == 'ID' ? ' jam yang lalu' : ' hours ago';
        $pesanhari = $bahasa == 'ID' ? ' hari yang lalu' : ' days ago';

        // format tanggal
        $awal  = strtotime($tanggalsekarang);
        $akhir = time();
        $diff  = $akhir - $awal; 

        $hari   = floor($diff / (60 * 60 * 24));
        $jam   = floor($diff / (60 * 60));
        $menit = $diff - ( $jam * (60 * 60) );
        $tampil_menit = floor( $menit / 60 );
        $detik = $diff % 60;
        
        if($hari > 0 && $hari < 7){
          $tampil_tanggal =  $hari .$pesanhari;
        }elseif($hari == 0 && $jam > 0 && $jam < 24){
          $tampil_tanggal =  $jam .$pesanjam;
        }elseif($hari == 0 && $jam == 0 && $tampil_menit > 0 && $tampil_menit < 60){
          $tampil_tanggal =  $tampil_menit .$pesanmenit;
        }elseif($hari == 0 && $jam == 0 && $tampil_menit == 0 && $detik > 0 && $detik < 60){
          $tampil_tanggal =  $detik .$pesandetik;
        }elseif($hari == 0 && $jam == 0 && $tampil_menit == 0 && $detik == 0){
          $tampil_tanggal =  $barusaja;
        }else{
          $tampil_tanggal = date('d M Y', strtotime($tanggalsekarang));
          // Dikomen untuk hilangkan menit
          // $tampil_tanggal = date('d M Y, H:i', strtotime($tanggalsekarang));
        }

        return $tampil_tanggal;
    }

    public function tampilTanggalMenit($tanggalsekarang)
    {
        // cek bahasa sekarang
        $bahasa =  (string)Yii::$app->request->cookies['language'] == null ? 'ID' : Yii::$app->request->cookies['language'];

        // tampilkan 
        $barusaja = $bahasa == 'ID' ? 'Baru saja' : 'Just Now';
        $pesandetik = $bahasa == 'ID' ? ' detik yang lalu' : ' seconds ago';
        $pesanmenit = $bahasa == 'ID' ? ' menit yang lalu' : ' minutes ago';
        $pesanjam = $bahasa == 'ID' ? ' jam yang lalu' : ' hours ago';
        $pesanhari = $bahasa == 'ID' ? ' hari yang lalu' : ' days ago';

        // format tanggal
        $awal  = strtotime($tanggalsekarang);
        $akhir = time();
        $diff  = $akhir - $awal; 

        $hari   = floor($diff / (60 * 60 * 24));
        $jam   = floor($diff / (60 * 60));
        $menit = $diff - ( $jam * (60 * 60) );
        $tampil_menit = floor( $menit / 60 );
        $detik = $diff % 60;
        
        if($hari > 0 && $hari < 7){
          $tampil_tanggal =  $hari .$pesanhari;
        }elseif($hari == 0 && $jam > 0 && $jam < 24){
          $tampil_tanggal =  $jam .$pesanjam;
        }elseif($hari == 0 && $jam == 0 && $tampil_menit > 0 && $tampil_menit < 60){
          $tampil_tanggal =  $tampil_menit .$pesanmenit;
        }elseif($hari == 0 && $jam == 0 && $tampil_menit == 0 && $detik > 0 && $detik < 60){
          $tampil_tanggal =  $detik .$pesandetik;
        }elseif($hari == 0 && $jam == 0 && $tampil_menit == 0 && $detik == 0){
          $tampil_tanggal =  $barusaja;
        }else{
          // $tampil_tanggal = date('d M Y', strtotime($tanggalsekarang));
          // Dikomen untuk hilangkan menit
          $tampil_tanggal = date('d M Y, H:i', strtotime($tanggalsekarang));
        }

        return $tampil_tanggal;
    }


    public function languagesParams($lgs)
    {
        $lang =  (string)Yii::$app->request->cookies['language'] == null ? Yii::$app->params['language']['ID'][$lgs] : Yii::$app->params['language'][(string)Yii::$app->request->cookies['language']][$lgs];

        return $lang;
    }
    
    public function languagesNow()
    {
        $bahasa =  (string)Yii::$app->request->cookies['language'] == null ? 'ID' : Yii::$app->request->cookies['language'];

        return $bahasa;
    }
    public function lg()
    {
        if((string)Yii::$app->request->cookies['language'] == null){
          $lgg = 'ID';
        }else{
          $lgg = (string)Yii::$app->request->cookies['language'];
        }

        return $lgg;
    }

    
    public function saveGuest(){
      $session = Yii::$app->session;

      // // if session is not open, open session
      if ( !$session->isActive) { $session->open(); }

      $cekguest = Guest::find()
          ->where(['ip' => $_SERVER['REMOTE_ADDR']])
          ->andWhere(['http_user_agent' => $_SERVER['HTTP_USER_AGENT']])
          ->andWhere(['md5_ip_browser' => md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'])])
          // ->andWhere(['session_id' => Yii::$app->session->getId()])
          ->exists(); 
        
      if($cekguest != 1){
        $guestip = new Guest();
        $guestip->ip =  $_SERVER['REMOTE_ADDR'];
        $guestip->http_user_agent =  $_SERVER['HTTP_USER_AGENT'];
        $guestip->md5_ip_browser = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
        // $guestip->session_id = Yii::$app->session->getId();
        $guestip->save();
      }
    }

    public function cekGuest(){
      $session = Yii::$app->session;

      // // if session is not open, open session
      if ( !$session->isActive) { $session->open(); }
      
      $idGuest = Guest::find()
          ->where(['ip' => $_SERVER['REMOTE_ADDR']])
          ->andWhere(['http_user_agent' => $_SERVER['HTTP_USER_AGENT']])
          ->andWhere(['md5_ip_browser' => md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'])])
          // ->andWhere(['session_id' => Yii::$app->session->getId()])
          ->one()->id; 

      return $idGuest;
    }

    public function cekFavorit($idproduk){
      $fav = ProdukFavorit::find()
            ->where(['id_guest' => $this->cekGuest()])
            ->andWhere(['id_produk' => $idproduk])
            ->exists(); 
      
      return $fav;
    }
}