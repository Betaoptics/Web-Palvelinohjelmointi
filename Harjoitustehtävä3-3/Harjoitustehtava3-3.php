<html>
    <head>
        <meta charset="UTF-8">
        <title>Harjoitukstehtävä 3-3</title>
    </head>
    <body>
        <div style="display: inline-block">
            <h1>Rosvo peli</h1>
            <?php
                session_start();
                if(isset($_SESSION["userID"])) {
                    include "navbar.php";
                }
                if(isset($_GET["msg"])) {
                    echo $_GET["msg"];
                }
            ?>
            <br>
            <br>
            <form method="post" action="login.php">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Sign-in">
            </form>
            <br>
        </div>
    </body>
</html>