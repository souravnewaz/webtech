<?php
    session_start();
    $name= $_SESSION['name'];
    //$email= $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CS Admin</title>
    <?php include('../Template/layout.php')?>
</head>
<body>
<div class="container">
<header> <a href="AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
  <main class="content">
  <h1>Welcome Admin</h1><br>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="../Control/seats.php">Seats</a>
    <a href="../Control/addBooking.php">Add Bookings</a>
    <a href="../Control/settings.php">Settings</a>
    <a href="../logout.php">Logout</a><br><br>

    <?php 
        echo "<h3>Session Test</h3><br/>";
        echo "Welcome, ", $name ;
        echo "<br/>";
        
        
    ?>

  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    
    
</body>
</html>