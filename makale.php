<?php
include("baglanti.php");
require_once("tema.php");
$id=$_GET["id"];

$sorgu =( "SELECT * FROM icerik  WHERE id=$id");
$sonuc = mysqli_query($baglan,$sorgu);
$satir=mysqli_fetch_assoc($sonuc);

$baslik_d=$satir["baslik"];
$resim_d=$satir["resim"];
$content_d=$satir["content"];
$Tresim_d=$satir["tresim"];
$Tisim_d=$satir["tisim"];
$Trate_d=$satir["trate"];
$Ttitle_d=$satir["ttitle"];


    head_üstkisim($title);
    head_üstbaslik();
    
    orta_kisim_çoklu($content_d,$baslik_d,$resim_d,$Tresim_d,$Tisim_d,$Trate_d,$Ttitle_d);
    alt_kisim();

?>