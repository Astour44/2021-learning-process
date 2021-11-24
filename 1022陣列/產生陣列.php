<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./陣列.css">
</head>

<body>
    <h1>產生陣列</h1>
    <?php
    $nine = [];
    for ($j = 1; $j <= 9; $j++) {
        for ($i = 1; $i <= 9; $i++) {
            $nine[] = "$j X $i=" . ($j * $i);
        }
        //echo "<pre>";
        //print_r($nine);
        //echo "</pre>";
    }
    for ($i = 0; $i < count($nine); $i++) {
        //count抓出裡面的數量有多少
        echo $nine[$i];
        if(($i+1)%9==0){
            echo"<br>";
        }
    }




    ?>
</body>

</html>