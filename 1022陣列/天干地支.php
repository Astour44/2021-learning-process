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
    $sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '任', '葵'];
    $land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $zodaic = [];
    for ($i = 0; $i < 60; $i++){
        $zodaic[1984+$i] = $sky[$i % 10] . $land[$i%12];}
    echo "<pre>";
    print_r($zodaic);
    echo "<pre>";
    echo $zodaic['2021'] . '年';
    ?>
</body>

</html>