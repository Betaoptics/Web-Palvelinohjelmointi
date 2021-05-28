<?php
//          /home/N1234/db-config/db-init.php


$db = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=M3268_2;charset=utf8',
              'M3268', 'br4u5IsPPNGT7PyBnuHgq5duzIvvRb0Q');


//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);