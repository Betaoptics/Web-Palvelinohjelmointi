<html>
    <head>
        <meta charset="UTF-8">
        <title>microtransactions.php</title>
    </head>
    <body>
        <div style="display: inline-block">
            <h1>Add Money to Game Account</h1>
            <?php
                session_start();
                if(!isset($_SESSION["userID"])) {
                    header("Location: Harjoitustehtava3-3.php?msg=Login to access game page!");
                }
                include "navbar.php";
                if(isset($_SESSION["userID"]) && isset($_POST["money"])) {
                    if(isset($_POST["send"])) {
                        $_SESSION["account_balance"] += $_POST["money"];
                        header("Location: addMoney.php?msg={$_POST["money"]} $ added to account.");
                    }else {
                        header("Location: microtransactions.php?msg=Syötä rahasumma!");
                    }
                }
             
                if(isset($_GET["msg"])) {
                    echo "<br>" . $_GET["msg"];
                }
            ?>
            <br>
            <br>
            <form method="post">
                Money: <input type="number" name="money">
                <input type="submit" value="Send" name="send">
            </form>
            <br>
        </div>
    </body>
</html>