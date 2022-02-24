<?php
include './common/commonFun.php';
?>



<?php
// init curl
$ch = curl_init();



//curl_setopt可以設定curl參數
//設定url 這邊更換網址可以更換撈的資料
// curl_setopt($ch, CURLOPT_URL, "https://data.ntpc.gov.tw/api/datasets/7A2ED29B-E45D-4707-8A7C-EF9628C0ED94/xml/preview");
curl_setopt($ch, CURLOPT_URL, "https://data.ntpc.gov.tw/api/datasets/7A2ED29B-E45D-4707-8A7C-EF9628C0ED94/json/preview");



// CURLOPT_RETURNTRANSFER,true意思是我在curl_exe才可以顯示
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
//倘若你的網址(13行)本身就是Json檔案就可以不用加這行

//設定AGENT
// curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");

// 執行並將結果存回
$result=curl_exec($ch);

//關閉連線
curl_close($ch);


echo $result;
//倘若沒有要讓它顯示可以不用加
//倘落你的網址(13行)本身就是Json檔案就可以不用加這行

// json_encode($age)把陣列轉成Json檔案的格式 $age必須是陣列


// dd(json_decode($result))
//這是將Json檔變成用陣列的形式顯示

?>
