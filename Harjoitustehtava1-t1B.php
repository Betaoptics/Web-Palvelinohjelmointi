<title>PHP-esimerkki: Harjoitustehtava1-t1B.php</title>

<?php

$paino = $_GET['Paino'];
$erotus = 5;
$tulos = $paino - $erotus;

echo "Minun painoni on " . $tulos . " sinulla taitaa olla paino-ongelmia?";

?>