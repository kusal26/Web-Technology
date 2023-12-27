<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} else {
    echo "connection established";
}
$sql="Create Database WebTEch";
$db=mysqli_query($conn,$sql);
if($db)
{
    echo "created database";
}
else
{
    echo "failed to create db ". mysqli_error($conn);
}
mysqli_close($conn);
?>