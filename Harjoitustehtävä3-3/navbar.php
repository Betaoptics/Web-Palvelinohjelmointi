<?php
    $navbar = <<<EOF
        <table>
            <tr>
                <td width=100>User: {$_SESSION['userID']}</td>
                <td width=100><a href='Harjoitustehtava3-3.php'>Mainpage</a></td>
                <td width=100><a href='thief.php'>Game</a></td>
                <td width=100><a href='microtransactions.php'>Add Money</a></td>
                <td><a href='logout.php'>Sign-out</a></td>
            </tr>
        </table>
EOF;
    echo $navbar;
?>