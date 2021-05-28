<?php
//h4t1-autolaskuri.oop.php

function _autoload($Car) {
    require_once $Car . '.class.php';
}

session_start();

    $brand = array("VW", "Opel", "Toyota");
    if(isset($_GET["car"])) {
        if($_GET["car"] == "Nollaa") {
            foreach($brand as $b) {
                if(isset($_SESSION[$b])) {
                    $obj = unserialize($_SESSION[$b]);
                    $obj->Empty();
                    $_SESSION[$b] = serialize($obj);
                }
            }
            header("Location: https://" . $_SERVER['HTTP_HOST']
                                        . dirname($_SERVER['PHP_SELF']) . '/'
                                        . "main.html");
        } else {
            foreach($brand as $b) {
                if(isset($_SESSION[$b])) {
                    if($b == $_GET["car"]) {
                        $obj = unserialize($_SESSION[$b]);
                        $obj->Add();
                        $_SESSION[$b] = serialize($obj);
                    }
                }else {
                    $obj = new Counter($b);
                    if($b == $_GET["car"]) $obj->Add();
                    $_SESSION[$b] = serialize($obj);
                }
            }
            header("Location: https://" . $_SERVER['HTTP_HOST']
                                        . dirname($_SERVER['PHP_SELF']) . '/'
                                        . "main.html");
        }
    } else {
        echo "Aseta arvo!";
    }

?>