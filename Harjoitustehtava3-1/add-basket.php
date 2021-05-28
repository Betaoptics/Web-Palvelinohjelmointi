<?php
//add-basket.php

session_start();

if(!isset($_GET['id'])) echo "Yritätä olla itseäsi fiksumpi!";

if(!isset($_SESSION['passat_lkm'])) $_SESSION['passat_lkm'] = 0;
if(!isset($_SESSION['multivan_lkm'])) $_SESSION['multivan_lkm'] = 0;

if($_GET['id'] == "passat") $_SESSION['passat_lkm']++;
if($_GET['id'] == "multivan") $_SESSION['multivan_lkm']++;

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "Harjoitustyö3-1.php");
 ?>