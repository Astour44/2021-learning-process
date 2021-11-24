<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <H1>給定一個句子，將指定的關鍵字放大
        “學會PHP網頁程式設計，薪水會加倍，工作會好找”
        請將上句中的 “程式設計” 放大字型或變色.</H1>
    <?php
    $str = '學會PHP網頁程式設計，薪水會加倍，工作會好找';
    $sub = '程式設計';
    /*方法1*/
    $split = explode($sub, $str);
    /* print_r($split); */
    echo $split[0] .
        "<span style='font-size:30px;color:red'>" .
        $sub .
        '</span>' .
        $split[1];
    echo "<br>";
    /*方法2*/
    $style = "<span style='font-size:30px;color:red'>" . $sub . '</span>';
    echo str_replace($sub, $style, $str);
    /*  str_replace(A,B,C)
    A輸入你要取代的字
    B輸入你要取代後插入的字
    C輸入字串
    這邊是將'程式設計'刪除後插入新的紅色'程式設計' */
    ?>







</body>

</html>