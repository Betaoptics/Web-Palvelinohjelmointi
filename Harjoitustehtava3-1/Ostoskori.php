<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ostoskori.php</title>
        <link rel="stylesheet" href="tyyli.css" type="text/css">
    </head>
    <body>
        
        <?php session_start();?>
        
            <h3>OstosKoriTori ostoskorin sisältö</h3>
                <div id='boxi'>
                    
                    <?php include('navbar.php');?>

                    <h2>OstosKoriTori ostoskorin sisältö</h2>
                    
            <div class="boxi">
            <table>
            <img src="passat.jpg" alt=passat>
                    <td>Passat
                        <?php if(isset($_SESSION["passat_lkm"])) { echo $_SESSION["passat_lkm"]; } else { echo "0"; } ?>
                        kpl</td>
                    <br clear=left>
            <img src="multivan.jpg" alt=multivan>
                    <td>Multivan
                        <?php if(isset($_SESSION["multivan_lkm"])) { echo $_SESSION["multivan_lkm"]; } else { echo "0"; } ?>
                        kpl</td>
                    <br clear=left>
            
                <a href="clear-basket.php">Tyhjennä ostoskori</a> 
                    </table>
            </div>
         </div>
    </body>
</html>