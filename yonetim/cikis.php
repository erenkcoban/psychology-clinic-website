<?php
session_start();
unset($_SESSION["kullaniciadi"]);
session_unset();
session_destroy();
header("location:index.php");
?>