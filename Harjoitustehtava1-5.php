<?php

<function taustaVari() {

var $taulu[];

$taulu[0] ="Eka rivi";
$taulu[1] ="Toka rivi";
$taulu[2] ="Koka rivi";
$taulu[3] ="Neka rivi";
$taulu[4] ="Vika rivi";
$taulu[5] ="Kuka rivi";
$taulu[6] ="Seka rivi";

$i=0;

for($i=0, $i<=6, $i++)
{
    if($i % 2)
    {
        return "ff0";
    }
    
    else
    {
        return "fff";    
    }
}

foreach($details as $key => $value) {
    $i++;
    $bg=($i%2==0?'fff':'ff0');
    ?>
    <table>
        <tr style="background-color: <?php echo $bg; ?>;">
            <td style="padding: 3px 10px; text-align: right; border-right: 1px solid #dbdbdb;" width="50%">
                <?php echo $key ?>
            </td>
            <td style="padding: 3px 10px; text-align: left;" width="50%">
                <?php echo $value; ?>
            </td>
        </tr>
    </table>

<!--foreach($taulu as $arvo) {
    $vari = taysra;
    echo $arvo . "<br>";
}

    function tasyra {
        return "ff0";
    }-->

    }
}
?>