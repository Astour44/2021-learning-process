const form = document.getElementById("myform")
const num1 = document.getElementById("num1")
const num2 = document.getElementById("num2")
const num3 = document.getElementById("num3")
const num4 = document.getElementById("num4")
const num5 = document.getElementById("num5")
const num6 = document.getElementById("num6")
const result = document.getElementById("result");
const presult = document.getElementById("presult");
form.addEventListener("submit", function (e) {
    e.preventDefault();
    total = parseInt((num1.value) * parseInt(num4.value)) + parseInt((num2.value) * parseInt(num5.value))
     + parseInt((num3.value) * parseInt(num6.value));
    console.log(typeof (total));
    console.log(total);
    presult.innerText = "總金額為 : " + total;
})