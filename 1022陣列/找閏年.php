<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /* for($i=2021;$i<2521;$i++) */
    $year = 2021;
    for ($i = $year; $i <= ($year + 500); $i++) {
        if ($i % 400 == 0 || ($i % 4 == 0 && $i % 100 != 0)) {
            $leaps[] = $i;
        }
    }

    echo "<pre>";
    print_r($leaps);
    echo "<pre>";
    $p=2180;
    if (in_array($p, $leaps)) {
        echo $p . "是閏年";
    } else {
        echo $p . "不是閏年";
    }







    ?>
</body>

</html>