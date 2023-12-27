<html>
<head>
   <title>PHP</title>
</head>
<body>

    <?php
//printing in php
// print " hello world <br>"; 
// echo "hello from echo <br>";
// print('this is another\' way to print <br>');

// //variable in php
// //Start with $ sign 
// //Accecptable Variable
// $name = "kusal";
// $roll_no = 5;

// //not Accecptable variable
// //$1var=5;
// //$hello-world="nepal"; 
// //this is not allowed " because 
// //variable cannot start with digit
// //varaible cannot contain special charactor

// //Validating String
// $trimFunc = " Trim function removes the whitespace from begining and ending of string ";
// print(trim($trimFunc));

// $strlenFun = "<br>Strlen() tells the lenth of the string";
// print "<br>the lenght of string is ".strlen($strlenFun);

// print rtrim($trimFunc); //trim the whitespace from left side

// $str1 = "ABCDE";
// $str2= "aBcde";
// print "<br> difference is ".strcasecmp($str1,$str2);
// print "<br> difference is ".strcmp($str1,$str2);

// echo "<br>".ucwords($str2);  //uppercase the first letter of string
// echo "<br>".strtolower($str1);//lower case the  string
// strtoupper($str1); //to uppercaser string
// echo substr($str1,2); //extract the part of string
// echo "<br>";
// echo str_replace("CD","fg",$str1); // replace part of string

// //DataTypes in php
//     //8 types
//             //string,interger,Float,Boolean,Null,Array,Object,Resourse
// //Constants
//     //Can be defined in two ways
//          //1. Using define() function
//          //2. Using const Keyword
         
//             //define() is case sensitive by default
//             define("name","value");
//             echo name;

//             //const keyword
//                 // it is bit faster than define()
//                 //always case sensitive
//              const message="hello";
//              echo message;

// //Switch
// switch(5)
// {
//     case 1 :
//         echo "this is one";
//         break;
//     case 2:
//         echo "this is two";
//         break;
//     default:
//         echo "invalid";

// };

// //loop
// for($i=0;$i<10;$i++)
// {
//     echo "$i<br/>";
// }
// //nested loop
// for($i=0;$i<10;$i++)
// {
// for($j=0;$j<10;$j++)
//     {
//         echo "$i  $j<br>";
//     }
// }
// $arr = [1,2,3,4];
// foreach($arr as $key => $data)
// {
//     echo "<br> $data";
// }

// function fun1()
// {
//     echo "this is func1";
// }
// fuN1(); //fucntion is case insensitive in php
// function add($num1,$num2)
// {
//   $ans = $num1+$num2;
//   //return $ans;
//   echo "$ans is answer";
// }
// add(5,6);
// $result = add(5,5);
// echo $result;

//array

//Numeric Array
// $name =array("kusal","pawan");
// print_r($name);

// //Associative Array
// $associative_array = array("name"=>"kusal",
// "address"=>"ktm");
// print_r($associative_array);

//multidimensional array

$meals= array('breakfast'=>["walnut","coffee"],
'lunch'=>["nuts","eggs"]);
print_r($meals);

$lunches = [["chicken","pork"],
["beef","noodles"]];
print_r($lunches);
echo "<br>";
$array=[5,8,7,4,9];
foreach($array as $key => $value)
{
    echo $key ."=>". $value ."<br>";
}
//size of array
echo count($array);
echo "size of array :". sizeof($array);
//key exist in array
$key = 4;
// $isExist =  array_key_exists($key,$array);
// if($isExist)
// {
//     echo "exist";
//     return true;
// }
// else 
// {
//     echo "doesnot";
// }
//if element exist in array
// $isElementExist = in_array(5,$array);
// if($isElementExist)
// {
//     echo "exist valule";
// }
// else 
// {
//     echo "doesnot exist";
// }

// array search return key instead of true or false
$search = array_search($key,$array);
echo $search;

//unset() remove element of array
unset($array[0]); //no longer  carries the a product
print_r($array);

//implode convert array to string
$string ="<br>".implode(',',$array);
echo $string;

//explode is the counter part of implode
$fish = 'Bass,Carp,Pike,flounder';
$fish_list = explode(',',$fish);
print_r($fish_list);
?>
</body>
</html>
