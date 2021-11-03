const form = document.getElementById("myform");
const num0 = document.getElementById("num0");
const num2 = document.getElementById("num2");
const option = document.getElementById("option");
const result = document.getElementById("result");
const presult = document.getElementById("presult");
form.addEventListener("submit", function (e) {
    e.preventDefault();
    //預防表單重新整理的預設行為->e.preventdefault
    console.log(num0.value);
    console.log(num2.value);
    console.log(option.value);
    cal= parseInt(num0.value) + parseInt(num2.value) + parseInt(option.value);
    console.log(typeof(cal));
    console.log(cal);

    presult.innerText ="Result : " + cal;
})
