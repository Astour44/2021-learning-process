<?php



$row = 6;
for ($i = 1; $i <= $row; $i = $i + 1) {
    for ($j = 1; $j <= $row; $j++) {
        if ($i == 1 || $i == $row) {
            echo "*";
        } else {
            if ($j == 1 || $j == $row) {
                echo "*";
            } else {
                echo "&ensp;";
            }
        }
    }
    echo "<br>";
}













?>