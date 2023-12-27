<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="WebTech";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} else {
    echo "connection established";
}

$sql = "Insert into Student (firstname,lastname,email,address,number) values ('pawan','kunwar','pawan@gmail.com','pkr','9812536985')";
$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo "insert failed ". mysqli_error($conn);
}
echo "insert Successfull";
mysqli_close($conn);
?>