<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit profile information</h3>
    <?php
include 'db.php';
$id = $_GET['id'];

$query = "SELECT * FROM `users` WHERE id = '$id'"; 
$result = mysqli_query($conn,$query) ;
while ($row = $result -> fetch_assoc())
{
    $u_id = $row['id'];
    $u_name = $row['username'];
    $u_email = $row['email'];
    $u_dob = $row['phone'];
    $u_password = $row['password'];
}



?>

<form action="#" method="POST">
Id <input type="text" name="id" placeholder="<?php $u_id ?>"> <br> <br>
        Username <input type="text" name="username" placeholder="<?php $u_name ?>"> <br> <br>
        Email <input type="text" name="email" placeholder="<?php $u_email ?>"> <br> <br>
        Date of Birth <input type="date" name="dob" placeholder="<?php $u_dob ?>" > <br> <br>
        Password <input type="text" name="password" placeholder="<?php $u_password ?>"> <br> <br>
        <input type="submit" name="submit" value="Update">
</form>
</body>
</html>