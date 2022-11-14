<!DOCTYPE html>
<html>
<head>
    <title> Exercise 1: Multiplication Table </title>
</head>
<body>
<div align="center">
    <h1>Exercise 1: Multiplication Table</h1>
    <body>
        <form action="mult_table.php" method="post">
        <input name="number" type="text">
        <input type="hidden" name="hidden">
        <input type="submit" value="Submit">
        </form>

    <table border="2">
        <tr>
            <th> </th>
            <?php
            if(isset($_POST['hidden']));
            {
                $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

            for ($h = 1; $h <= $number; $h++) {
                echo '<th>'.$h.'</th>';
            }
        }
            ?>
        </tr>
    <?php

    for ($i = 1; $i <= $number; $i++){
        echo '<tr>
                <th>'.$i.'</th>';
                for ($j = 1; $j <= $number; $j++){
                    $product = $i * $j;
                    if ($i == $j){
                        echo "<td style='background-color: #ccffff; color: #000000;'>" .$product."</td>";
                    } else{
                        echo "<td>" .$product."</td>";
                    }                    
                }

            }
        ?>
    </table>
</div>
</body>
</html>