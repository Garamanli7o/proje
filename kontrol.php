<?php

$kadi = $_POST['KullaniciAdi'];
$sifre = $_POST['Sifre'];
  if ($kadi=="admin" && $sifre=="12345") {

    session_start();
    $_SESSION['user']= $kadi;

    header("refresh: 0; url=index.php");
  }
  else {
    header("refresh: 0; url=hata.php");
  }


?>
