

const form = document.getElementById("myform")
const num1 = document.getElementById("num1")
const num2 = document.getElementById("num2")
const chose = document.getElementById("chose")
const result = document.getElementById("result");
const presult = document.getElementById("presult");



form.addEventListener("submit", function (e) {
    console.log(e)
    e.preventDefault();
    console.log(num1.vaule);
    console.log(num2.vaule);
    console.log(chose.value);
    parseIntNum1 = parseInt(num1.value);
    parseIntNum2 = parseInt(num2.value);
    parseIntNum3 = parseInt(num1.value);
    console.log(typeof (chose.value));
    
    switch (chose.value) {
        
        
        case "+":
            if(parseIntNum1 < parseIntNum2) {
                parseIntNum3 = parseIntNum2;
                parseIntNum2 = parseIntNum1;
                parseIntNum1 = parseIntNum3;}
            total = (parseIntNum1 + parseIntNum2);
            presult.innerText = "加法為" + total;
            break;
        case "-":
            if(parseIntNum1  < parseIntNum2 ) {
                parseIntNum3  = parseIntNum2 ;
                parseIntNum2  = parseIntNum1 ;
                parseIntNum1  = parseIntNum3 ;}
            total = (parseIntNum1 - parseIntNum2);
            presult.innerText = "減法為" + total;
            break;
        case "*":
            if(parseIntNum1 < parseIntNum2) {
                parseIntNum3 = parseIntNum2;
                parseIntNum2 = parseIntNum1;
                parseIntNum1 = parseIntNum3;}
            total = (parseIntNum1 * parseIntNum2);
            presult.innerText = "乘法為" + total;
            break;
        case "/":
            if(parseIntNum1 < parseIntNum2) {
                parseIntNum3 = parseIntNum2;
                parseIntNum2 = parseIntNum1;
                parseIntNum1 = parseIntNum3;}
            total = (parseIntNum1 / parseIntNum2);
            presult.innerText = "除法為" + total;
            break;
        default:
            break;
    }})


    
    // if(parseIntNum1 < parseIntNum2) {
    //     parseIntNum3 = parseIntNum2;
    //     parseIntNum2 = parseIntNum1;
    //     parseIntNum1 = parseIntNum3;}







