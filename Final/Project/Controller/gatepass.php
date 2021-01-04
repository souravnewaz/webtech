

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

 
<a href="bookings.php">Close</a>

<?php 
include 'bookingApprove.php';
include '../Model/db.php';

GatePass($id);


?>

    
    
    </main>
    
<footer>This is the footer of this webpage</footer>
</div>
</body>
</html>