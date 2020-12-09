

<?php
include 'db.php';
$id = $_GET['id'];

$query = "DELETE FROM `users` WHERE id = '$id'"; 
$result = mysqli_query($conn,$query) ;

header("Location: home.php"); 
require 'db.php';
Show();
?>