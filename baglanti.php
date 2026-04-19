<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psikolog_sayfasi";
$baglan = mysqli_connect(hostname:"localhost", username:"root",password:"",dbname:"psikolog_sayfasi");


if ($baglan->connect_error) {
    die("Bağlantı başarısız oldu: " . $baglan->connect_error);
}
?>