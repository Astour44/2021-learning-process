<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>字串取代</h1>

    <?php
    $str = 'aaddw1123';
    echo str_repeat("*", strlen($str));
    /* str_repeat()
    前面放取代的字 後面放你要重複幾次前面字的次數
    所以這邊用strlen讓他去偵測$str 字串裡面有多少字 */

    echo "<hr>";
    echo str_replace(["a", "d", "w", "1", "2"], "*", $str);
    /* str_replace(A,B,C)
    A=你要取代的字
    B=你要取代後的字
    C=你輸入的字串
    而A裡面是可以放陣列的所以這邊將adw12都放進去
    echo出來只有3沒變成"*"*/
    echo "<hr>";

    $array = [];
    for ($i = 0; $i < strlen($str); $i++);
    $s = substr($str, $i, 1);
    if (!in_array($s, $array)) {
        $array[] = $s;
    }
    echo str_replace($array, "*", $str);
    echo "<hr>";












    ?>
</body>

</html>