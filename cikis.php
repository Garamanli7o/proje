<?php
session_start();
session_destroy();
echo "Çıkış Yapıldı"."<br>";
header("refresh: 1; url=login.php");


 ?>
