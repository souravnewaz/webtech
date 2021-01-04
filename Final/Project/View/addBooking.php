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
    
    <title>Add Booking | Admin CS</title>
    
</head>
<body>
<div class="container">
<header> <a href="../View/AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
  <main class="content">

    <h1>Add new Booking</h1>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="../Controller/logout.php">Logout</a><br><br>
    <h2>Add Luggage/ parcel details</h2>

    <form method="POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return bookingValidation()">
    
        Passenger Id <input type="text" name="id" id="id"><br><br>
       Product <input type="text" name="product" id="product"><br><br>
       Product Weight <input type="text" name="weight" id="weight"><br><br>
       
       <p id="errorMsg"></p>         
        <input type="submit" name="submit" value="Add"> <br> <br>
        </form>
    <?php
        require "../Controller/bookingAddValidation.php";
        
        
    ?>
    <h3>Bookings</h3>
    <table>
        <?php require "../Controller/luggageBookingShow.php";?>
    </table>

  
  </main>
  <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
    
</body>
<script src="../Controller/JS/script.js"></script>
</html>