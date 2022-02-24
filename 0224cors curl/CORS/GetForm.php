

<?php
// header("Access-Control-Allow-Origin:*");
//這樣代表全域都取消CORS的機制


header("Access-Control-Allow-Origin:http://localhost"); 
//這樣可以只允許這台主機可以使用


include "./common/commonFun.php";
?>

<?php
$input=$_POST;
// $input=$_GET;
//這樣index.php的form表單的method要改成get;
// dd($input);
echo json_encode($input);



?>