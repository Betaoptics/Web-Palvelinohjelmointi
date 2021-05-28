<!DOCTYPE html>
<meta charset="utf-8">
<head>
<title>Harjoitustehtävä 2-1</title>
</head>
<body>
    <h3 style="color: blue"></h3>
     <?php
    
    if(isset($_GET['vasy'])) echo "On Väsy";
    if(isset($_GET('paakipia'))) echo "On Pääkipiä";
    if(isset($_GET('perjantai'))) echo "On Perjantai";
    
    ?>
    
    <form method="get">
    
    <p>
        Mikä on?<br>
        <input type="checkbox" name="vasy" <?php if(isset($_GET['vasy'])) echo "checked"; ?>> Väsy<br>
        <input type="checkbox" name="paakipia" <?php if(isset($_GET['paakipia'])) echo "checked"; ?>> Pää kipiä<br>
        <input type="checkbox" name="perjantai" <?php if(isset($_GET['perjantai'])) echo "checked"; ?>> Perjantai<br>
    </p>
    
        <p>
            <input type="submit" value="Lähetä lomake">
            <input type="reset" value="Täytä uudestaan">
        </p>
        
    </form>
    
   
    
</body>