<?php
require_once "functions.php";
$baglanti=baglan();
$id = $_GET["id"];
$resim_d = $_POST["resim_d"];
$baslik_D = $_POST["baslik_d"];
$content_d = $_POST["content_d"];
$Tresim_d = $_POST["Tresim_d"];
$Tisim_d = $_POST["Tisim_d"];
$Trate_d = $_POST["Trate_d"];
$Ttitle_d = $_POST["Ttitle_d"];
$sorgu ="UPDATE content SET resim_d='$resim_d',baslik_d='$baslik_d',content_d='$content_d',Tresim_d='$Tresim_d', Tisim_d='$Tisim_d',
Trate_d='$Trate_d', Ttitle_d='$Ttitle_d  WHERE id=$id";
$sonuc=mysqli_query($baglanti,$sorgu);
if($sonuc){
    header("location:icerik_listele.php");
}else{
    echo "Problem var";
}
?>