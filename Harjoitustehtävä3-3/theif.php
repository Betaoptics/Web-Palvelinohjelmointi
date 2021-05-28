<html>
    <head>
        <meta charset="utf-8">
        <title>thief.php</title>
    </head>
    <?php
        session_start();
        if(!isset($_SESSION["userID"])) {
            header("Location: Harjoitustehtava3-3.php?msg=Login to access game page!");
        }
    ?>
    <body>
        <div style="display: inline-block">
            <?php include "navbar.php"; ?>
            <h1>Random Pics Game</h1><br>
            <br>
            <form method="post">
                Panos: <input type="number" name="bet" value="<?php if(isset($_POST["bet"])) { echo $_POST["bet"]; } else { echo 100; } ?>">
                <input type="submit" value="Play" name="submit">
            </form>
            <br>
            <br>
            <?php
                if(isset($_POST["submit"]) && isset($_POST["bet"])) {
                    $numbers = array(0,0,0,0,0,0,0,0,0);
                    $_SESSION["account_balance"] -= $_POST["bet"];
                    for($i = 0; $i < 3; $i++) {
                        $rand = rand(1,3);
                        $numbers[$rand - 1]++;
                        echo "<img src=nature" . $rand . ".jpg' style='padding: 5px'>{$rand}";
                    }
                    $noWin = true;
                    foreach($numbers as $value) {
                        if($value == 2) {
                            $win = 200 * ($_POST["bet"] / 100);
                            $_SESSION["account_balance"] += $win;
                            $_SESSION["msg"] = "Congratulations, you got 2 right and you won {$win}€!";
                            $noWin = false;
                        }
                        if($value == 3) {
                            $win = 300 * ($_POST["bet"] / 100);
                            $_SESSION["account_balance"] += $win;
                            $_SESSION["msg"] = "Congratulations, you got 2 right and you won {$win}€!";
                            $noWin = false;
                        }
                    }
                    if($noWin) $_SESSION["msg"] = "No winnings!";
                    $numbers = array(0,0,0,0,0,0,0,0,0);
                }
                if(isset($_SESSION["msg"])) {
                    echo "<br><br>" . $_SESSION["msg"];
                }
                echo "<br><br>Account balance: {$_SESSION["account_balance"]} $";
            ?>
        </div>
    </body>
</html>