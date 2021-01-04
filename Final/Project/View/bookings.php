<?php
    session_start();
    $name= $_SESSION['name'];
    if($name == ""){
      header('location: ../View/login.php');
      
      

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings | Admin CS</title>
    <link rel="stylesheet" href="../View/CSS/layout.css">
   
</head>
<body>
<div class="container">
<header> <a href="AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header> 
  <main class="content">
  <h1>Bookings</h1>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="../Controller/logout.php">Logout</a><br><br>
    
<h3>Pendling List</h3>
    <table >
        <?php require '../Controller/bookingShow.php';
            
        ?>
    </table>
    <h3>Approved List</h3>
    <table >
        <?php require '../Controller/bookingApprovedShow.php';
            
        ?>
    </table>
    <h3>Rejected List</h3>
    <table >
        <?php require '../Controller/bookingRejectedShow.php';
            
        ?>
    </table>
  
  </main>
  <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
    
</body>
</html>