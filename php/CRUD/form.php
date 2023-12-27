<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<label for="FirstName">firstname</label>
<input type="text" name="firstname"id="FirstName"/>
<label for="LastName">LastName</label>
<input type="text" name="lastname" id="LastName"/>
<label for="Email">Email</label>
<input type="email" name="email" id="Email"/>
<label for="Address">Address</label>
<input type="text" name="address" id="Address"/>
<label for="Number">Number</label>
<input type="number" name="number" id="Number"/>
<input type="submit" value="submit">
<input type="reset" value=" clear">
</form>
</body>
</html>
 
