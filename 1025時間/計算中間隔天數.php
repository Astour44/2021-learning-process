<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
   
    <span>開始日期2021-10-1</span>
  
    <span>結束日期2021-11-3</span>
 
    <?php
    echo "<br>";
    date_default_timezone_set('Asia/Taipei');
    /* 用date_default_timezone_set(中間輸入時區) 
將電腦看得懂的秒數轉成人類的時間
可以直接算出當下時區 時區英文跟內容輸入可參考
https://www.php.net/manual/zh/function.date.php*/
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("Y-m-d H:i:s", 0);
    echo "<br>";
    echo strtotime('1970-1-1 01:00:00');
    echo "<br>";
    /* strtotime可將人類看得懂的時間轉換成秒數 */
    echo "開始的秒數" . strtotime('2021-10-1');
    echo "<br>";
    echo "結束的秒數" . strtotime('2021-11-3');
    echo "<br>";
    $gatdays = (strtotime('2021-11-3') - strtotime('2021-10-1')) / (24 * 60 * 60);

    echo "間隔" . $gatdays . "天";
    ?>
    <?php
    $today = strtotime('now');
    $bithday = strtotime('2022-5-25 00:00:00');
    echo "<br>";
    $mybirthday = ($bithday - $today) / (86400);
    echo "距離我的生日還有" . floor($mybirthday);
    /*格式化天數(把小數點無條件捨去)
      floor()無條件捨去到整數
      ceil()無條件進位整數
      round()四捨五入*/
      echo "<br>";
      $year=(floor(floor($mybirthday)/365));
      $month=floor(floor(floor($mybirthday)%365)/30);
      $day=floor(floor(floor(floor($mybirthday)%365)%30)/24); 
      echo "距離我生日還有".$year."年".$month."月".$day."日";



    ?>
</body>

</html>