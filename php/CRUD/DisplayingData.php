<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table format</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Address</th>
                <th>Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
</thead>
    <tbody>
        
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="WebTech";


$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("not connected " . mysqli_connect_error());
} 
$sql = "Select * from Student";
$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo "insert failed ". mysqli_error($conn);
}

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo '<td>'. $row['id'] .'</td>';
        echo '<td>'. $row['firstname'] .'</td>';
        echo '<td>'. $row['lastname'] .'</td>';
        echo '<td>'. $row['email'] .'</td>';
        echo '<td>'. $row['address'] .'</td>';
        echo '<td>'. $row['number'] .'</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
        echo '<td><a href="delete.php?id='. $row['id'] . '">Delete</a></td>';
        echo "</tr>";    
  }
}
mysqli_close($conn);
?> 
    </tbody>
</table>
</body>
</html>
