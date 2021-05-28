<?php
//clear-basket.php
   session_start();
    if(isset($_SESSION['passat_lkm'])) $_SESSION['passat_lkm'] = 0;
    if(isset($_SESSION['multivan_lkm'])) $_SESSION['multivan_lkm'] = 0;
    header('Location: add-basket.php');
?>