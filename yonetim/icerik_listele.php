<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["kullaniciadi"])){
    echo $_SESSION["kullaniciadi"]."<br>";
    echo '<a href="cikis.php">Çikiş</a>
    <a href="icerik_ekle.php">Ekle</a>';
    $baglanti = baglan();
    $sorgu = "SELECT * FROM content";
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        echo'
        <table border="1">
        <tr>
        <th>ID</th>
        <th>RESİM</th>
        <th>BASLIK</th>
        <th>ICERIK</th>
        <th>TRESİM</th>
        <th>TİSİM</th>
        <th>TRATE</th>
        <th>TİTLE</th>
        <th>Düzenle</th
        ><th>Sil</th>
        <th>EKLE</th>
        </tr>
        ';
        while($satir = mysqli_fetch_assoc($sonuc)){
           
            echo '
            <tr>
            <td>"'.$satir["id"].'"</td>
            <td>"'.$satir["resim_d"].'"</td>
            <td>"'.$satir["baslik_d"].'"</td>
            <td>"'.$satir["content_d"].'"</td>
            <td>"'.$satir["Tresim_d"].'"</td>
            <td>"'.$satir["Tisim_d"].'"</td>
            <td>"'.$satir["Trate_d"].'"</td>
            <td>"'.$satir["Ttitle_d"].'"</td>
            
            <td><a href="icerik_duzenle.php?id='.$satir["id"].'">Düzenle</a></td>
            <td><a href="icerik_sil.php?id='.$satir["id"].'">Sil</a></td>
            
            </tr> ';
        }
        echo "</table>";
    }

}else{
    header("location:index.php");
}


?>