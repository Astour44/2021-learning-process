

const form = document.getElementById("myform");
const num1 = document.getElementById("num1");
const num2 = document.getElementById("num2");
const num3 = document.getElementById("num3");
const presult = document.getElementById("presult");


form.addEventListener("submit", function (e) {
    console.log(e)
    e.preventDefault();
    //confirm跳出再次確認事項;
    //confirm("是否送出表單");->會跳出選單
    //這邊再用if式防止按取消結果還是送出
    if(!confirm("是否送出表單")){return false;}
    
    
    parseIntNum1 = parseInt(num1.value);
    parseIntNum2 = parseInt(num2.value);
    parseIntNum3 = parseInt(num3.value);
    console.log(parseIntNum1);
    console.log(parseIntNum2);
    console.log(parseIntNum3);
    total=(parseIntNum1+parseIntNum2+parseIntNum3)/3;
    rank=total
    if(rank<101, rank>=90){rank="A"}
     else if(rank<90, rank>=81){rank="B"}
     else if(rank<80, rank>=71){rank="C"}
     else if(rank<70, rank>61){rank="D"}
     else{rank="不及格"}
     total=Math.round(total*100)/100;
     
    
     //這邊為了顯示小數點後兩位所以先*100讓後兩位的小數點往前跑再讓Math.round去除後面小數點再/100就能得出
     presult.innerText="國文成績" + parseIntNum1 +"  英文成績" + parseIntNum2 +"  數學成績" + parseIntNum3 + "\n平均分數為" + total + "  排名為:" + rank;})
    //\n是JS的換行
    //Math.round(total) 去除小數點

    
















    // switch (chose.value) {
        
        
    //     case "+":
    //         if(parseIntNum1 < parseIntNum2) {
    //             parseIntNum3 = parseIntNum2;
    //             parseIntNum2 = parseIntNum1;
    //             parseIntNum1 = parseIntNum3;}
    //         total = (parseIntNum1 + parseIntNum2);
    //         presult.innerText = "加法為" + total;
    //         break;
    //     case "-":
    //         if(parseIntNum1  < parseIntNum2 ) {
    //             parseIntNum3  = parseIntNum2 ;
    //             parseIntNum2  = parseIntNum1 ;
    //             parseIntNum1  = parseIntNum3 ;}
    //         total = (parseIntNum1 - parseIntNum2);
    //         presult.innerText = "減法為" + total;
    //         break;
    //     case "*":
    //         if(parseIntNum1 < parseIntNum2) {
    //             parseIntNum3 = parseIntNum2;
    //             parseIntNum2 = parseIntNum1;
    //             parseIntNum1 = parseIntNum3;}
    //         total = (parseIntNum1 * parseIntNum2);
    //         presult.innerText = "乘法為" + total;
    //         break;
    //     case "/":
    //         if(parseIntNum1 < parseIntNum2) {
    //             parseIntNum3 = parseIntNum2;
    //             parseIntNum2 = parseIntNum1;
    //             parseIntNum1 = parseIntNum3;}
    //         total = (parseIntNum1 / parseIntNum2);
    //         presult.innerText = "除法為" + total;
    //         break;
    //     default:
    //         break;
    // }})


    
    // if(parseIntNum1 < parseIntNum2) {
    //     parseIntNum3 = parseIntNum2;
    //     parseIntNum2 = parseIntNum1;
    //     parseIntNum1 = parseIntNum3;}







