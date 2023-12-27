<?php
// Assuming you already have a database connection
include("./connection.php");
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Retrieve data for the selected record
    $sql = "SELECT * FROM Student WHERE id = $id";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Display the edit form
        ?>
        <form method="post" action="update.php?id=<?php echo $id?>">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>firstName:</label>
            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
            <label>lastName:</label>
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            <label>Address:</label>
            <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
            <label>number:</label>
            <input type="text" name="number" value="<?php echo $row['number']; ?>"><br>
           
            <input type="submit" value="Update">
        </form>
        <?php
    } else {
        echo "Record not found";
    }
}
?>
