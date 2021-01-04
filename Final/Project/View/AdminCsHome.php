

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
    <title>Home | CS Admin</title>
    
</head>

<body>
<div class="container">
<header> <a href="AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
  <main class="content">
  <h1>Welcome <?php echo $name?></h1><br>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="../Controller/logout.php">Logout</a><br><br>

    <?php 
      
      
      
      echo "<h2>" . date("l")."," . date("m-y").  "</h2>";
      
        
        
    ?>

  </main>
  <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
    
    
</body>
</html>