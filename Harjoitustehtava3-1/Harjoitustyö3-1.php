<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Harjoitustehtävä 3-1</title>
    </head>
    <body>
    
        <?php
            // h3t1-basket-session.php
            session_start();

            ?>
            <title>OstosKoriTori</title>
                <link rel="stylesheet" href="tyyli.css" type="text/css">

            <title>OstosKoriTori</title>
                <div id='container'>
                    <?php include('navbar.php');?>

                    <h2>OstosKoriTori</h2>


                <div class="boxi">

            <p>Lisää auto ostoskoriin klikkaamalla kuvaa!</p>

            <a href="add-basket.php?id=passat"><img src="passat.jpg"></a>
            <a href="add-basket.php?id=multivan"><img src="multivan.jpg"></a>

            </div>

        </div>
    
    </body>
</html>