<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <title>Harjoitustehtävä 2-2</title>
</head>

<body>
    <?php
            $bgColor = "white";
            $txtColor = "black";
            if(isset($_GET["bgColor"])) $bgColor = $_GET["bgColor"];
            if(isset($_GET["txtColor"])) $txtColor = $_GET["txtColor"];
        ?>
        <style>
            body {
                background-color: <?php echo $bgColor; ?>;
                color: <?php echo $txtColor; ?>;
            }
            table {
                border-collapse: collapse;
            }
 
            table, th, td {
                border: 1px solid black;
                padding: 5px;
            }
        </style>
        <h1>This is a test title</h1>
        <p>Here is some text to test the program on.</p>
        <br>
        <form method="get">
            <table>
                <tr>
                    <td>Background color:</td>
                    <td>
                        <input type="radio" name="bgColor" value="white" <?php if($bgColor == "white") echo "checked"; ?>> White<br>
                        <input type="radio" name="bgColor" value="green" <?php if($bgColor == "green") echo "checked"; ?>> Green<br>
                        <input type="radio" name="bgColor" value="beige" <?php if($bgColor == "beige") echo "checked"; ?>> Beige<br>
                        <input type="radio" name="bgColor" value="orange" <?php if($bgColor == "orange") echo "checked"; ?>> Orange
                    </td>
                </tr>
                <tr>
                    <td>Tekstiväri:</td>
                    <td>
                        <input type="radio" name="txtColor" value="black" <?php if($txtColor == "black") echo "checked"; ?>> Black<br>
                        <input type="radio" name="txtColor" value="red" <?php if($txtColor == "red") echo "checked"; ?>> Red<br>
                        <input type="radio" name="txtColor" value="cyan" <?php if($txtColor == "cyan") echo "checked"; ?>> Cyan<br>
                        <input type="radio" name="txtColor" value="brown" <?php if($txtColor == "brown") echo "checked"; ?>> Brown
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    
</body>