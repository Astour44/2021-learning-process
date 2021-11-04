

const item1 = {
    name: "草莓關東煮",
    price: 1000,
    count: 0,
    total: 0,
}
const item2 = {
    name: "哈密瓜關東煮",
    price: 1200,
    count: 0,
    total: 0,
}
const item3 = {
    name: "紅豆關東煮",
    price: 1100,
    count: 0,
    total: 0,
}
const form = document.getElementById("myform")

const num1 = document.getElementById("num1")
const num2 = document.getElementById("num2")
const num3 = document.getElementById("num3")

const num4 = document.getElementById("num4")
const num5 = document.getElementById("num5")
const num6 = document.getElementById("num6")

const num7 = document.getElementById("num7")
const num8 = document.getElementById("num8")
const num9 = document.getElementById("num9")

const result = document.getElementById("result");
const presult = document.getElementById("presult");

num7.value = item1.name
num8.value = item2.name
num9.value = item3.name
num4.value = item1.price
num5.value = item2.price
num6.value = item3.price
num1.value = item1.count
num2.value = item2.count
num3.value = item3.count

form.addEventListener("submit", function (e) {
    e.preventDefault();
    total = parseInt((num1.value) * parseInt(num4.value)) + parseInt((num2.value) * parseInt(num5.value))
        + parseInt((num3.value) * parseInt(num6.value));
    console.log(typeof (total));
    console.log(total);
    presult.innerText = "總金額為 : " + total;
})

