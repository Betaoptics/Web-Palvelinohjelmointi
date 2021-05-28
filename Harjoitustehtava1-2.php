<title>PHP-esimerkki: Harjoitustehtava1-2.php</title>
<form method="get"
      action="<?php echo $_SERVER['PHP_SELF']?>">
    Anna eurojen määrä:<br><input type="number" name="eurot"><br>
<input type="submit" name="painike" value="Lähetä">
</form>

<?php
if (!isset($_GET['painike'])) exit();
        $markat = $_GET['eurot'] * 5.94573;
            echo "Eurot markoissa on <strong>" . $_GET['eurot'] . "</strong> euroissa on " . $markat . "markkaa!<br>";
?>