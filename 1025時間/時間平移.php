<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>時間平移</h1>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $now = strtotime("now");
    echo $now;
    echo "<br>";
    $tomorrow = strtotime("+1 days");
    echo "今天" . date("Y-m-d H:i:s");
    echo "<br>";
    echo "明天" . date("Y-m-d H:i:s", $tomorrow);
    $nextmonth = strtotime("+1 month");
    /*strtotime出來都是秒數
     date出來的是把秒數轉乘你要的時間*/
    echo "<br>";
    echo "下個月" . date("Y-m-d H:i:s", $nextmonth);
    /*先用$訂下你要跳躍的時間
      再用date(前面放你要的精準時間,
      後面放你定義完要跳躍的時間)
 */
    echo "<br>";
    $weekstr = [ '星期天','星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
    for ($i = 1; $i < 6; $i++) {
        $nextweek = strtotime("$i week");
        echo date("Y-m-d H:i:s", $nextweek)." ".$weekstr[date("w", $nextweek)];
        echo "<br>";
    }
    echo "<br>";
    ?>
    <?php
    $weekstr = [ '星期天','星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
    /*寫一個陣列讓他去對應這7天
    記得要從星期天開始*/
    $base = "2021-10-04";
    $basetime = strtotime($base);
    /* echo date("Y-m-d H:i:s", $basetime) . "" . $weekstr[date("w", $basetime)];*/
    /*這邊先算出第一天*/
    /*陣列記得要用[] */ 
    for($i=0; $i < 5; $i++) {
        $secs = strtotime("+".($i*7)."days",$basetime);
        echo date("Y-m-d", $secs)." ".$weekstr[date("w", $secs)];
        echo "<br>";}






    ?>

</body>

</html>