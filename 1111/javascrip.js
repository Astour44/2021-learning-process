const form = document.getElementById("myform");
const num1 = document.getElementById("num1");
const num2 = document.getElementById("num2");
const option = document.getElementById("option");
const result = document.getElementById("result");
const presult = document.getElementById("presult");
form.addEventListener("submit", function (e) {
    e.preventDefault();
    console.log(num1.value);
    console.log(num2.value);
    console.log(option.value);
    cal= parseInt(num1.value) + parseInt(num2.value) + parseInt(option.value);
    console.log(typeof(cal));
    console.log(cal);

    presult.innerText ="Result : " + cal;
});
