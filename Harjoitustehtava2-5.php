<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Harjoitukset 2-5</title>
    </head>
    <?php
        $queries = array(
            array("radioButton", "Mikä eläin hauki on?", "Hauki on kala", "Hauki on lintu", "Hauki on kissa", 1),
            array("dropDown", "Mitä kirjainlyhenne PHP tarkoittaa puhuttaessa Web-ohjelmoinnista", "Peaceful Human Programming", "PHP: Hypertext Preprocessor", "Professional Hypertext Parser", 2),
            array("checkBox", "Kuinka monta megaa on gigassa?", "100", "1000", "1024", array(1,2))
        );
    ?>
    <style>
        div {
            padding: 10px;
        }
    </style>
    <body>
        <h1>Haluatko miljonääriksi kilpailu</h1>
        <form method="post">
            <?php
                $i = 0;
                foreach($queries as $questions) {
                    echo "<div>";
                    echo "<h2>{$questions[1]}</h2>";
                    switch($questions[0]) {
                        case "radioButton":
                            for($option = 2; $option <= 4; $option++) {
                                echo "<input type='radio' name='question{$i}' value='{$questions[$option]}'> {$questions[$option]}<br>";
                            }
                            break;
                        case "dropDown":
                            echo "<select name=question{$i}>";
                            echo "<option value='0'> Valitse vastaus</option>";
                            for($option = 2; $option <= 4; $option++) {
                                echo "<option value='{$questions[$option]}'> {$questions[$option]}</option>";
                            }
                            echo "</select>";
                            break;
                        case "checkBox":
                            for($option = 2; $option <= 4; $option++) {
                                $i2 = $option - 1;
                                echo "<input type='checkbox' name='question{$i}_{$i2}'> {$q[$option]}<br>";
                            }
                            break;
                    }
                    echo "</div>";
                    $i++;
                }
            ?>
            <input type="submit" value="Lähetä" name="laheta">
        </form>
        <?php
            if(isset($_POST["laheta"])) {
                $points = 0;
                //maxP = maximum points
                $maxP = 0;
                $i2 = 0;
                foreach($queries as $value) {
                    switch($value[0]) {
                        case "radioButton":
                            if(isset($_POST["question{$i2}"]) == $value[1 + $value[5]]) {
                                $points++;
                            }
                            $maxP++;
                            break;
                        case "dropDown":
                            if(isset($_POST["question{$i2}"]) == $value[1 + $value[5]]) {
                                $points += 2;
                            }else {
                                $points -= 2;
                            }
                            $maxPoints += 2;
                            break;
                        case "checkBox":
                            for($i3 = 0; $i3 < 3; $i3++) {
                                foreach($value[5] as $value2) {
                                    if(isset($_POST["question{$i2}"]) == $value[1 + $value[5]]) {
                                        $points += 2;
                                    }
                                }
                            }
                            $maxP += 3 * count($value[5]);
                            break;
                    }
                    $i2++;
                }
                echo "Pisteesi on: {$points}/{$maxP}";
            }
        ?>
    </body>
</html>