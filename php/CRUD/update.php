
<?php
include("./connection.php");
$id=$_GET['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['address'];
$number=$_POST['number'];

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} 

$sql = "Update  Student SET firstname='$firstname',lastname='$lastname',email='$email',address='$address',number=$number where id=$id";
$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo "insert failed ". mysqli_error($conn);
}
else
{
    echo "updated successfully";
}
mysqli_close($conn);
?> 