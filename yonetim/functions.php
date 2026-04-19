<?php

function baglan(){
    $baglanti = mysqli_connect("localhost","root","","psikolog_sayfasi");
    if($baglanti){

    }else{
        echo "Problem var ";
    }
    return $baglanti;
}
?>