<?php
//clear-basket.php
   session_start();
    if(isset($_COOKIE['passat_lkm'])) setcookie('passat_lkm', 0);
    if(isset($_COOKIE['multivan_lkm'])) setcookie('multivan_lkm', 0);
    header('Location: add-basket.php');
?>