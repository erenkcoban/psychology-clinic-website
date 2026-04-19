<?php
require_once("functions.php");
$baglanti= baglan();
$id=$_GET["id"];
$sorgu = "DELETE  FROM content WHERE id=$id";
$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    echo "Kayıt silinmiştir.";
}else{
    echo "Kayıt silinmemiştir.";
}
?>