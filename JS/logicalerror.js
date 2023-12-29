try
{
   var a=2;
   var b=0;
   if(b==0)
   {
    throw new Error("devision by zero");
   }
   console.log(a/b);
   
}
catch(e)
{
console.log(e)
}
finally
{
console.log("finally block printed");
}