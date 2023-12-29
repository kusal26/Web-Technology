//object
const object = {name:"kusal",age:22};
console.log(object.age);
console.log(object['age']);
//adding new property
object.location="ktm";
console.log(object.location);
//deleting property
delete object.location;
console.log(object.location);

//user defined object
class Game{
     constructor(){
        console.log("constructor");
     }
     
}
var obj = new Game();
var obj1 = new Game();

function test(name)
{
this.name=name;
console.log(name);
}
var obj2=new test("hello")
//using new keyword followed by Constructor method
var book = new Object({laptop:"dell",Processor:"i7"});
book.name="web";
book.author="ram";
console.log(book.author);

//array two method
var roll=new Array(1,2,3,5);
var student=['nepal','ram','syam'];
//concatenation
var alphanumeric=roll.concat(student);
console.log("concatenation " + alphanumeric);
//length
let arrLength=roll.length;
console.log(arrLength);
//join
var join=roll.join('+'); //default is ,
console.log(join);
// //indexof and lastindexof
// var index=student.indexOf("syam");
// console.log(index);
// var lastindex=student.lastIndexOf("ram");
// console.log(lastindex);
// //push and pop
// var popelement=roll.pop();
// console.log(popelement);
var push=roll.push(20);
console.log(push);
var popelement=roll.pop();
console.log(popelement);

//reverse,shift,slice,unshift,sort,toString
var reverse=roll.reverse()
console.log(reverse)
// var shift =roll.shift();
// console.log("shift : "+shift);//removes the first element of array and return thar element
console.log(roll);
// for(let i=0;i<roll.length;i++)
// {
//     console.log(roll[i]);
// }
// var unshift= roll.unshift(10,20);
// console.log("lenght:"+unshift);//add one or more element to the front of an array and retur the new lenghr of array
console.log(roll);
var sorted=roll.sort();
console.log("sorted:"+ sorted);

var slice=roll.slice(1,3);
console.log("slice : "+slice);

var toString=roll.toString()
console.log("string : "+toString);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//string
var string1="hello world";
var string2="this is ram";
console.log(string1.concat(string2));

//match -used to match a regular expression against stirng
var pattern =/hell/;
console.log(""+string1.match(pattern));

//replace and slice
var newString=string1.replace("hello","hi");
console.log(newString);

var sliceString=string1.slice(0,3);
console.log("slice string : "+sliceString);

var splitString=string1.split(" ");
console.log(splitString);

var substring=string1.substring(2,4);
console.log(substring);

var localeLowerCase=string1.toLocaleLowerCase();
console.log("locale lower case : "+localeLowerCase);

var localeUpperCase=string1.toLocaleUpperCase();
console.log("locale lower case : "+localeUpperCase);

var upperCase=string1.toUpperCase();
console.log("uppercase : "+upperCase);
console.log(string1);

//valueOF => return the primitive value of specified object
var valueOf=string1.valueOf();
console.log("valueof:"+ valueOf);