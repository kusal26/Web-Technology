<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="WEbTech";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} else {
    echo "connection established";
}
$sql = "Create Table Student(
    id INT Auto_Increment Primary Key,
    firstname VARCHAR(20) not null,
    lastname VARCHAR(20) not null,
    email VARCHAR(30) ,
    address VARCHAR(20),
    number int 
)";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error creating table ". mysqli_error($conn);
}
else
{
    echo "table Created Successfully";
}
mysqli_close($conn);
?>