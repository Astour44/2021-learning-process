

const form = document.getElementById("myform")
const num1 = document.getElementById("num1")
const num2 = document.getElementById("num2")
const num3 = document.getElementById("num3")
const result = document.getElementById("result");
const presult = document.getElementById("presult");



form.addEventListener("submit", function (e) {
    console.log(e)
    e.preventDefault();
    console.log(num1.vaule);
    console.log(num2.vaule);
    parseIntNum1 = parseInt(num1.value);//總價
    parseIntNum2 = parseInt(num2.value);//折扣  p2/100
    parseIntNum3 = parseInt(num3.value);//折扣的金額
    // Math.round
    if (parseIntNum1 >= 500) {
        if (parseIntNum2 > 10) { parseIntNum2 = parseIntNum2 / 100 }
        else { parseIntNum2 = parseIntNum2 / 10 };
        total = (parseIntNum1 * parseIntNum2);
        parseIntNum3 = (parseIntNum1 - total);
        num3.innerText = Math.round(parseIntNum3);
        presult.innerText = Math.round(total);

    }
    else if (parseIntNum1 < 500, parseIntNum1 >= 200) {

        total = (parseIntNum1 - parseIntNum2)
        num3.innerText = "現金折扣:" + parseIntNum2;
        presult.innerText = total;

    }
    if(parseIntNum1<200){
        num3.innerText = "金額未達沒有折扣";
        presult.innerText = parseIntNum1;
    }
})



// "跟隨季節活動變化更換消費金額的折扣跟折扣區間" 搭配檔期跑出相對應檔期的圖片
// 設定季節區間(可以自己設定新增刪除檔期區間)
// 時間到了自動套用檔期的折扣
// 10/25~10/30萬聖節檔期
// 12/20~12/25聖誕節檔期
// 設定折扣區間跟金額(折扣可以自己設定新增刪除還有折扣金額區間)
// $a=金額
// $b=區間
// $d=區間頂標
// $e=區間底標
// $c=折扣->if $c<1=$a*$c else if $c>1=$a+$c


// 範例:
// 10/30
// a<100 -100
// a>100 *0.75
// a>200 *0.65

// 12/25
// a<200 *0.75
// a>500  -100
// a>800 *0.5











