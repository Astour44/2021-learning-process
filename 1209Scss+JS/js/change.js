

const cmInput = document.getElementById("cm");
const inchInput = document.getElementById("inch");

//parseFloat 去除小數點
cmInput.addEventListener("change", function (e) {
    const cm = parseFloat(cmInput.value)
    inch = cm / 2.54;
    inch = Math.round(inch * 100) / 100;
    inchInput.value = inch;
});

inchInput.addEventListener("change", function (e) {
    const inch = parseFloat(inchInput.value)
    cm = inch * 2.54;
    cm = Math.round(cm * 100) / 100;
    cmInput.value = cm;
});
