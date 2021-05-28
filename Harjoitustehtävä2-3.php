<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Harjoituksetehtävä 2-3</title>
    </head>
    <body>
        <form method="get">
            <select name="subject">
                <option value="0">Valitse aihe</option>
                <option value="uutiset" <?php if($_GET["topic"] == "uutiset") echo "selected"; ?>>Uutiset</option>
                <option value="tiede" <?php if($_GET["topic"] == "tiede") echo "selected"; ?>>Tiede</option>
                <option value="teknologia" <?php if($_GET["topic"] == "teknologia") echo "selected"; ?>>Teknologia</option>
            </select><br>
            <br>
            <input type="submit" value="Tulosta linkit">
        </form><br>
        <?php
            if(isset($_GET["topic"])) {
                switch($_GET["topic"]) {
                    case "uutiset":
                        echo "Valitsit uutiset, tässäpä muutama linkki";
                        echo "<li><a href='https://yle.fi/uutiset' target='_blank'>Yle</a></li>";
                        echo "<li><a href='https://www.hs.fi/' target='_blank'>Helsingin Sanomat</a></li>";
                        break;
                    case "tiede":
                        echo "Valitsit tieteen, tässäpä muutama linkki";
                        echo "<li><a href='https://www.sciencemag.org/' target='_blank'>AAAS - Science</a></li>";
                        echo "<li><a href='https://www.ncbi.nlm.nih.gov/pubmed' target='_blank'>NCBI - Medial Journal</a></li>";
                        break;
                    case "teknologia":
                        echo "Valitsit tietokoneet, tässäpä muutama linkki";
                        echo "<li><a href='https://www.bbc.com/news/technology' target='_blank'>BBC - Technology</a></li>";
                        echo "<li><a href='https://www.cnet.com/news/' target='_blank'>CNET</a></li>";
                        break;
                    case "0":
                        echo "Et valitsenut mitään";
                        break;
                }
            }
        ?>
    </body>
</html>