<?php
    session_start();
    if(isset($_SESSION["userID"])) {
        unset($_SESSION["userID"]);
    }
    header("Location: Harjoitustehtava3-3.php?msg=Logged out!");
?>