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
    $str = 'thisXisXaXbook';
    $array = explode('X', $str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    /* explode(A,B)
    A的部分輸入你要切割的地方 
    B的部分輸入你要切割的字串 */

    echo "<hr>";


    $file = "photo.jpg";
    $split = explode(".", $file);
    print_r($split);
    if ($split[1] == 'jpg' || $split[1] == 'gif' || $split[1] == 'png') {
        echo "是圖檔";
    }
    $newfilename = '20211025' . rand(10000, 99999) . "." . $split[1];
    echo "新檔名為:" . $newfilename;
    echo "<hr>";
?>
    <?php
    echo implode(" ", $array);
    echo "<hr>";
    echo join(" ", $array);








    ?>
</body>

</html>