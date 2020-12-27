<?php
session_start();
$name= $_SESSION['name'];
$password= $_SESSION['password'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/CSS/layout.css">
    <title>Passengers | Admin CS</title>
    
</head>
<body>
<div class="container">
<header> <a href="AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header> 
  <main class="content">
  <h1>Passengers List</h1>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="../Controller/seats.php">Seats</a>
    <a href="../Controller/addBooking.php">Add Bookings</a>
    <a href="../Controller/settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>
    <input type="text"> <input type="submit" value="Search"><br><br>
<table>
<?php require '../Controller/showPassengers.php'; ?>
</table>
    
  
  </main>
  
  
</div>

    
</body>
<footer>This is the footer of this webpage</footer>
</html>