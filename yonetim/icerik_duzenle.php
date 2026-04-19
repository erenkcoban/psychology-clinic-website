<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["kullaniciadi"])){
    $baglanti=baglan();
    $id = $_GET["id"];
    $sorgu = "SELECT * FROM content WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$sorgu);
    $satir = mysqli_fetch_assoc($sonuc);

    echo
    '
    <!DOCTYPE html>
    <html>
    <head>

    </head>
    <body>
    <form action="guncelle.php?id='.$id.'" method="POST">
    RESİM<input type="text" name="resim" value="'.$satir["resim"].'" ><br>
    BASLIK<input type="text" name="baslik" value="'.$satir["baslik"].'"><br>
    ICERİK<input type="text" name="content" value="'.$satir["content"].'"><br>
    TRESİM<input type="text" name="resim" value="'.$satir["resim"].'" ><br>
    TİSİM<input type="text" name="baslik" value="'.$satir["baslik"].'"><br>
    TRATE<input type="text" name="baslik" value="'.$satir["baslik"].'"><br>
    TİTLE<input type="text" name="baslik" value="'.$satir["baslik"].'"><br>

    <input type="submit" name="kaydet" value="Kaydet">
    </form>
    </body>
    </html>
    ';
}else{
    header("location:index.php");
}
?>