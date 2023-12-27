const object = {   //user defined object
    name: "Kushal",

}

class Class {
    constructor(){
        console.log("Constructor has been called")
    }
}

const obj = new Class();

const arr = [1,2,3,4];

const arr2 = Array(1,2,3)

console.log(arr2)

const string = "Kushal"


console.log(string.length)

try
{
  throw("Error")
}
catch(e)
{
    console.log(e);
}

const json = require('./test.json')

json.location;
console.log(json.location);
