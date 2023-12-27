
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="WebTech";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['address'];
$number=$_POST['number'];

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} else {
    echo "connection established";
}

$sql = "Insert into Student (firstname,lastname,email,address,number) values ('$firstname','$lastname','$email','$address','$number')";
$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo "insert failed ". mysqli_error($conn);
}
echo "<br>insert Successfull";
mysqli_close($conn);
?> 