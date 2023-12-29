//syntax 
//var n=new Number(number)
var number = new Number("45");//convert a non-number argument to number
console.log(number);
//NaN=not a number 
//method

//toExponential()
var num=5.145866666666666666666666666666666999999999999999999999999999999999999
var exponetial=num.toExponential(5);
console.log(exponetial);

var isfixed=num.toFixed(12);
console.log(isfixed);

var tostring=num.toString(18);
console.log(tostring)