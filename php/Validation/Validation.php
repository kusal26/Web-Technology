<?php
 $name = $_POST['name'];
 $email=$_POST['email'];
 $number=$_POST['number'];

 $isValid=preg_match("/^[a-zA-Z]+$/",$name);
 if(!$isValid)
 {
    echo "Name not Valid";
 }
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "email is not valid";
}
if(!filter_var($number,FILTER_VALIDATE_INT))
{
    echo "number is not valid";
}
echo "all are validate";
?>