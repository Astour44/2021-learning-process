<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>date()函式的格式化參數</h1>
    <ul>
        <li>2021/10/05</li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>
    <?php
    /*請搭配服用https://www.php.net/manual/zh/function.date.php*/
    echo date("Y/m/d");
    echo "<br>";
    echo date("m月j日 l");
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    $date = date("今天是西元Y年m月d日");
    if (date("N") >= 6) {
        echo $date . "假日";
    } else {
        echo $date . "上班日";
    }




    ?>
</body>

</html>