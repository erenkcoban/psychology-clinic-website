<?php
session_start();
if(isset($_SESSION["kullaniciadi"])){
echo'
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="islem.php" method="POST">
RESİM<input type="text" name="resim"><br>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
BASLIK<textarea class="ckeditor" name="baslik"></textarea><br>
ICERİK<textarea class="ckeditor" name="content"></textarea>
<input type="submit" name="login" value="Ekle">
TRESİM<input type="text" name="resim"><br>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
TİSİM<textarea class="ckeditor" name="baslik"></textarea><br>
TRATE<textarea class="ckeditor" name="baslik"></textarea><br>
TİTLE<textarea class="ckeditor" name="baslik"></textarea><br>



</form>
</body>
</html>';
}else{
    header("location:icerik_listele.php");
}
?>