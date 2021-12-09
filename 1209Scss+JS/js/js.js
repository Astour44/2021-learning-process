

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

    console.log(typeof (chose.value));
    if(parseIntNum1 < parseIntNum2) {
        parseIntNum2 = parseIntNum3;
        parseIntNum1 = parseIntNum2;
        parseIntNum3 = parseIntNum1;
    switch (chose.value) {
        case "+":
            total = (parseIntNum1 + parseIntNum2);
            presult.innerText = total;
            break;
        case "-":
            total = (parseIntNum1 - parseIntNum2);
            presult.innerText = total;
            break;
        case "*":
            total = (parseIntNum1 * parseIntNum2);
            presult.innerText = total;
            break;
        case "/":
            total = (parseIntNum1 / parseIntNum2);
            presult.innerText = total;
            break;
        default:
            break;
    }}})
// if (parseIntNum1 < parseIntNum2) {
//     parseIntNum2 = parseIntNum3;
//     parseIntNum1 = parseIntNum2;
//     parseIntNum3 = parseIntNum1;
// }

