<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩電腦選號沒有重覆號碼</title>
</head>

<body>
    <?php
    /* !=not */
    $number = [];
    $i=0;
   while (count($number)<6) {
        $t = rand(1, 38);
        if (!in_array($t, $number)) {
            $number[] = $t;
        }
        $i++;
    }
    //echo "<pre>";
    //print_r($number);
    //echo "<pre>";
    echo $i."次數";

foreach($numbers as $number){echo $number;

}
/* as表示我的$number是$numbers裡的一個元素 */

    ?>
</body>

</html>