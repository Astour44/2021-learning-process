<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1008</title>
</head>

<body>
    <?php
    /*寫程式時要先想一下你的問題是哪一個
            決定要用哪個迴圈解決
            迴圈一但決定那一列就只能跑那個迴圈
            */
    $str = "otally FREE stock photos from picjumbo — now 
    delivered into your email inbox every week!";

    $find = "o";
    $pos = 0;
    while   /* 尋找單一字元(使用while，while是不固定的次數
             因為我不知道尋找到的東西有幾個，所以用while，
             用for的話要固定的次數)*/ (
        mb_substr($str, $pos, 1) != $find

        /*mb_substr是指令=要你從一串文裡面找指定的西
             $str=找的文章
             1=從$str的第一個字開始找
             1=找到一個後即停止*/
    ) {
        $pos = $pos + 1
            /*這邊要是不符合find的話會跑到{}裡面
            並且再$pos+1後重新從($str,$pos,1)，此時pos要注意已經再下面0+1過了
            所以會從第一個字開始跑*/;
    }
    echo "<hr>";
    echo "你要找的字在" . ($pos + 1) . "的位置";
    /*而若是符合find的話就會跑到{}的外面看你要跑出來的字怎麼處理
            通常都是echo出來*/
    /* echo strpos($str,$find);->這一串是可以找字串 */





    /*mb_strlen可以判斷句子長度*/
    /*因為for是整個句子的去跑重複跑
            所以要用mb_strlen去判別字串長度
            而while是直接對句子從頭開始找*/
    $str = "otally FREE stock photos from picjumbo — now 
    delivered into your email inbox every week!";
    $find = "p";
    for ($i = 0; $i < mb_strlen($str); $i++) {
        if (mb_substr($str, $i, 1) == $find) {
            echo "<hr>";
            echo "你要找的字在" . ($i + 1) . "的位置";
            break;
            /*終止迴圈有continue,break,exit,但通常都用到break
            而用for它是會跑完整個句子才結束，但若是用while它是指會找到特定的字就結束*/
        }
    }
    /*while是從頭開始找找到東西就會結束迴圈
            但若是找不到網頁就會一直跑
            而for是需要先判斷整個句子長度後從頭開始找
            找到尾才會結束迴圈所以需要(break)中斷句
            但好處是若是找不到要找到網頁也不會一直跑*/

    echo "<br>"
    ?>



    <?php
    $row = 18;
    if ($row % 2 == 0) {
        $row = $row + 1;
    }
    for ($i = 1; $i <= $row; $i++) {
        $mid = ($row + 1) / 2;
        if ($i <= $mid) {
            $stars = 2 * $i - 1;
            $space = $mid - $i;
        } else {
            $stars = ($row - $i) * 2 + 1;
            $space = ($mid - 1) - ($row - $i);
        }
        for ($k = 1; $k <= $space; $k++) {

            echo "&ensp;";
        }
        for ($j = 1; $j <= $stars; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";




    $row = 6;
    for ($i = 1; $i <= $row; $i = $i + 1) {
        for ($j = 1; $j <= $row; $j++) {
            if ($i == 1 || $i == $row) {
                echo "*";
            } else {
                if ($j == 1 || $j == $row) {
                    echo "*";
                } else {
                    echo "&ensp;";
                }
            }
        }
        echo "<br>";
    }

    echo "<br>";

    $row = 10;
    for ($i = 1; $i <= $row; $i = $i + 1) {
        for ($j = 1; $j <= $row; $j++) {
            if ($i == 1 || $i == $row) {
                echo "*";
            } else {
                if ($j == 1 || $j == $row||$j==$i||$j==$row+1-$i) {
                    echo "*";
                } else {
                    echo "&ensp;";
                }
            }
        }
        echo "<br>";
    }


for($i=3;$i<100;$i=$i+1){
    $test=false;/* >(質數) */
for($j=2;$j<$i;$j++){
    if($i%$j==0){
    $test=true;/* 質數 */
    }
}
if($test==false){
echo $i.",";}}

  
        






















    ?>






</body>

</html>