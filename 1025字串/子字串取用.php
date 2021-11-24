<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>將” The reason why a great man is great is that 
    he resolves to be a great man”只取前十字成為” The reason…”</h1>

<body>
    <?php

$str="The reason why a great man is great is that 
he resolves to be a great man";
$sub=substr($str,0,10);
echo$sub."...";
/* substr(A,B,C)
A輸入字串
B輸入開始處
(輸入正數會從前面開始往後跑C數,輸入負數會從後面往前算B數之後從B數的位置往後數C)
C輸入要取幾個字
/若是要改成中文字母就將substr更改成mb_substr */
echo"<br>";
echo$sub.str_repeat(".",3); 
/* str_repeat(A,B)
A輸入重複的字
B輸入重複的次數 */







    ?>
</body>

</html>