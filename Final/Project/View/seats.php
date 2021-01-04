<?php
    session_start();
    $name= $_SESSION['name'];
    if($name == ""){
      echo '<script>alert("You must log in")</script>';
      header('location: ../View/login.php');
      
      

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/CSS/layout.css">
    <title>Seats | Admin CS</title>
    
</head>
<body>
<div class="container">
<header> <a href="../View/AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header> 
  <main class="content">
  <h1>Seats</h1>
    <a href="../View/AdminCsHome.php">Home</a>
    <a href="../View/flights.php">Flights</a>
    <a href="../View/bookings.php">Bookings</a>
    <a href="../View/passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="../Controller/logout.php">Logout</a><br><br>

    <table>
        <?php require "../Controller/seatShow.php";
                #include "../Controller/seatUpdate.php";
        
        ?>
    </table>
    
  
  </main>
  <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
    
</body>
</html>