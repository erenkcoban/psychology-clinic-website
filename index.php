<?php 
require_once("tema.php");
$title="Ana Sayfa";
head_üstkisim($title);
head_üstbaslik();
$content_d="konu";
$baslik_d="burada baslık olcak";
$resim_d="resim";
$Tresim_d="tresim";
$Tisim_d="tisim";
$Trate_d="trate";
$Ttitle_d="Ttitle";

orta_kisim_çoklu($content_d,$baslik_d,$resim_d,$Tresim_d,$Tisim_d,$Trate_d,$Ttitle_d);
alt_kisim();


?>