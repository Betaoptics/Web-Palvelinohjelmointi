<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Harjoituksetehtävä 2-4</title>
    </head>
    <body>
        
        <?php

            if(isset($_GET["painike"])) {
            switch($_GET["msg"]) {
                case "":
                    $_GET["msg"] = "Yksi kerta riittää";
                    break;
                case "Yksi kerta riittää":
                    $_GET["msg"] = "Kaksi kertaa riittää";
                    break;
                case "Kaksi kertaa riittää":
                    $_GET["msg"] = "Kolme kertaa riittää";
                    break;
                case "Kolme kertaa riittää":
                    $_GET["msg"] = "";
                    break;
            }
        }
        
        ?>
    
        <form method="get">
            <input type="submit" name="painike" value="Paina minua">
            <input type="text" name="msg" <?php echo "value='{$_GET["msg"]}'"; ?>>
        </form>  
       
    </body>
</html>