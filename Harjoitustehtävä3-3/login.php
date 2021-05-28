<?php
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $credentials = array(array("poke", "mon"),
                             array("admin", "password1234"),
                             array("user", "password"));
        $usernameFound = false;
        foreach($credentials as $i) {
            if($i[0] == $_POST["username"]) {
                $usernameFound = true;
                if($i[1] == $_POST["password"]) {
                    session_start();
                    $_SESSION["userID"] = $_POST["username"];
                    $_SESSION["account_balance"] = 500;
                    $_SESSION["msg"] = "Log-in was successful!";
                    header("Location: thief.php");
                } else  {
                    header("Location: Harjoitustehtava3-3.php?msg=Error, wrong password!");
                }
            }
        }
        if(!$usernameFound) {
            header("Location: Harjoitustehtava3-3.php?msg=Error, wrong username!");
        }
         
    } else {
        header("Location: Harjoitustehtava3-3.php?msg=Sign-in!");
    }
?>