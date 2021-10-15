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
    $a=10;$b=50;
    echo $a.$b;
    $c=$a;
    $a=$b;
    $b=$c;
    echo"<hr>";
    /*"&nbsp"這是空白鍵*/
    echo "$a&nbsp"."&nbsp"."&nbsp".$b; 
    /*echo "$a&nbsp";$b; 這樣因為b前面沒echo所以會變成b沒出來*/
    echo"<hr>";
    $a=75;/*這邊記得要加;)*/
    if($a>=60){echo"A";/*這邊記得要加;)*/}
    else{echo"B";}
    echo "<hr>";



    /*下面這邊是將if=?.else=:的三次元運算子*/
    $score="99";
    $pass=($score>=90)?"歐趴":"死當";
    echo $pass;
 



    echo"<hr>";
    $level="B";/*定義時記得都加個""*/
   
    switch($level) {
    case"A":echo "不錯";break;
    /*要記得加break不然會全部一起出現
    但若把A的跟B中間的Break拔掉然後不定義A這樣就可以讓A跟B都出現可以*/
    case"B":echo"可以";break;
    case"C":echo "還行";
    default:echo"可憐吶";}/*:加就度了*/
    echo"<hr>";

    /*接下來是迴圈for loop*/
    for($a=1;$a<10;$a=$a+1)
    /*()->裡面就是我要的條件，$a從1開始，要小於10，並每次完成後+1
    這邊要記得不能直接$a+1會無限跑要改成$=$a+1*/
    {echo $a*2;
     echo "<hr>";}
    /*因為"<hr>"在for的{}裡面輸出所以也會跟著重複執行*/


    /*while是當的意思*/
    $score=62;
    $count=0;
    while($score<80)
    {$score=$score+10;$count++;}
    /*這邊問老師真的完全看不懂*/
    echo $score;
    echo "<hr>";
    echo $count."次";
    echo "<hr>";



    


   


    











?>
</body>
</html>