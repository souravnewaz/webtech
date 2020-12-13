

<?php
include '../Model/db.php';
$id = $_GET['id'];
echo "id is $id";
$query = "DELETE FROM `users` WHERE id = '$id'"; 
#$result = mysqli_query($conn,$query) ;

#header("Location: ../View/home.php"); 
require '../Model/db.php';
Show();
?>