<?php

$b=24*60*60;


$a="賴柏堯";

echo $a;
echo"<br>";
echo $b;


echo"<hr>";

$cc=rand(1,200);
echo$cc;
echo"<hr>";
$cc=rand(1,200);
echo$cc;
echo"<hr>";
$cc=rand(1000,2000);
echo$cc;
echo"<hr>";

define("pa","3.1214");
define("pp","真愛必斯");
echo pa*60;
echo"<br>";
echo pp;
echo"<hr>";
?>


<?php
/* 2021/10/5 php */
$a="10";$b="50";
echo$a.$b;
$c=$a;
$a=$b;
$b=$c;
echo"<br>";
echo$a.$b;

echo"<br>";
echo'$a='.$a;
echo"<hr>";

$score="50";

if($score>=60){echo"不錯喔";}else{echo"下去";};




echo"<hr>";
$level="哈哈";
switch($level){
    case "A":echo "100"; break;
    case "B":echo "80";break;
    case "C":echo "60";break;
    case "D":echo "40";break;
    default:echo"?????";
}

echo"<hr>";
$level="A";
switch($level){
    case "A":echo "100";
    case "B":echo "80";break;
    case "C":echo "60";break;
    case "D":echo "40";break;
    default:echo"?????";
}
// 這邊把A後面的break拔掉就會變成A+B的結果=10080



echo "<hr>";



$X=75;
$C=($X>=60)?"好":"不好";

echo $C;

// ?=if :=else 這樣可以簡短程式碼?>



<?php


/* for loop的示範 */
for($i=0 ; $i<10 ; $i++)/* 這邊可以改成$i=$i+2 */
 /* 數字    範圍   用前面通過的再算一次 */

{
    echo $i;
    echo"<hr>";
};


$S=20;

if($S>=90 && $S<=100){
  $level="很棒";}
else if($S>=80&&$S<=89)
    {$level="不錯";}
else if($S>=70&&$S<=79)
    {$level="加油";}
else if($level="很爛");
/* 最後這邊就不用特別去定範圍 可以直接處理最後不符合的對象 */
    echo$level;

/* 這邊的&&=或是 */
/* 上面這樣是可以選定範圍並直接用範圍去給予得出的結果
 */
echo"<hr>";



/* 閏年判斷 */
/* =是指派(把右邊值丟給左邊) ==(兩個=)就是等於*/
/* %是除 !=是不等於 */
/*||=or*/
/*A||B=可以是A也可以是B也可以是AB 
但A&&B就變成一定要有A跟B才能成立如果沒有A跟B就不成立 
這便就變成不是閏年*/

$year=2400;
if($year%400==0||($year%4 == 0 && $year%100!=0))
{echo"西元".$year."是閏年";}
else {echo"西元".$year."不是閏年";}

?>








