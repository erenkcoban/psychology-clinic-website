<?php
if(($_POST["kullaniciadi"]=="eren")&&($_POST["kullanicisifre"]=="1234")){
    session_start();
    $_SESSION["kullaniciadi"]=$_POST["kullaniciadi"];
    header("location:icerik_listele.php");
}
?>