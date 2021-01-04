<?php 
include '../Model/db.php';
$id = $_GET['id'];

BookingApprove($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/CSS/layout.css">
    <title>Gate Pass</title>
</head>
<body>
<div class="container">
<header> <a href="../index.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
<main class="content">

 
<a href="../View/bookings.php">Done</a>
<h2>Gate Pass</h2>

<?php 


GatePass($id);


?>

    
    
    </main>
    
<footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
</body>
</html>