
<?php
include("./connection.php");
$id=$_GET['id'];

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} 

$sql = "Delete From Student where id=$id";
$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo "insert failed ". mysqli_error($conn);
}
else
{
    echo "Deleted successfully";
}
mysqli_close($conn);
?> 