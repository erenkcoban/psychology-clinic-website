    <?php
  
    require_once "functions.php";
    $baglanti = baglan();



    $id= $_POST["id"];
    $resim_d = $_POST["resim_d"];
    $baslik_D = $_POST["baslik_d"];
    $content_d = $_POST["content_d"];
    $Tresim_d = $_POST["Tresim_d"];
    $Tisim_d = $_POST["Tisim_d"];
    $Trate_d = $_POST["Trate_d"];
    $Ttitle_d = $_POST["Ttitle_d"];
    $sorgu = "INSERT INTO content (id,resim_d,baslik_d,content_d,Tresim_d,Tisim_d,Trate_d,Ttitle_d) VALUES (NULL,'{$resim_d}','{$baslik_d}',
    '{$content_d}','{$Tresim_d}','{$Tisim_d}'),'{$Trate_d}','{$Ttitle_d}'";
    
    $sonuc = mysqli_query($baglanti,$sorgu);
    if($sonuc){
        echo "kayıt başarıyla eklendi";
    }else{
        echo "kayıtta problem var";
    }


    ?>