<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>陣列練習</h1>
<!-- 索引植根key值只能存在一個 -->
<?php
$name=['Judy','Amo','John','Peter','Hebe'];
$subject=['國文','英文','數學','地理','歷史'];
$name['Judy']=[95,64,70,90,84];
$name['Amo']=[95,64,70,90,84];
$name['John']=[95,64,70,90,84];
$name['Peter']=[95,64,70,90,84];
$name['Hebe']=[95,64,70,90,84];

echo"<pre>";
print_r($name);
print_r($subject);

echo"</pre>";
print_r($name['Judy']);
$students=array_keys($name);
print_r($students);
echo"<pre>";
echo "數學成績是".$name['Judy'][0]
?>
</body>
</html>