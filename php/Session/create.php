<?php
session_start();
//set session variable
$_SESSION['username']='john';
$_SESSION['email']="helo@gmail.com";
echo "session variable are set";
?>