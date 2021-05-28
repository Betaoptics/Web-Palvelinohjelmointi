<?php
//add-basket.php

if(!isset($_GET['id'])) echo "Yritätä olla itseäsi fiksumpi!"; exit();

if(!isset($_COOKIE['passat_lkm'])) $_COOKIE['passat_lkm'] = 0;
if(!isset($_COOKIE['multivan_lkm'])) $a = $_COOKIE['multivan_lkm'] = 0;

if($_GET['id'] == "passat") {
    $a = $_COOKIE['passat_lkm'] + 1;
    setcookie('passat_lkm', $a);
}


if($_GET['id'] == "multivan") {
    $a = $_COOKIE['multivan_lkm'] + 1;
    setcookie('multivan_lkm', $a);
}

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "Harjoitustehtava3-2.php");
 ?>