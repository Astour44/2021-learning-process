console.log(typeof({}));

const my0bject ={
name :"amy",
age : 18,
tel :"0912-345-678",
isAdmin:false
}
const my0bject2 ={
    name :"bob",
    age : 20,
    tel :"0912-333-444",
    isAdmin:true
}
const astour={
name : "astour",
age : 20,
tel:"2626262655",
isAdmin:true,
}
console.log("my0bject",my0bject);
console.log(my0bject.isAdmin);
console.log(my0bject['name']);
console.log("管理員資訊",astour);

astour.age=55688;
console.log("管理員資訊",astour);
