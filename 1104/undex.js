const aa =['var','see','bob','haha','asas' ];
// console.log(aa.length);
// console.log(aa[0]);
// console.log(aa[1]);
// for (let i = 0; i < array.length; i++) {
//     console.log(array[aa]);
// }
aa.forEach(myFunc)
function myFunc(value,key){
console.log(value);
console.log(key)

}


// for in的狀態下
// for(let i in aa){
// console.log("for in , i = "+i);
// }
// aa.pop('');
// aa.push('egg');
// console.log(aa);