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
    <title>Flights | Admin CS</title>
    
</head>
<body>
<div class="container">
<header> <a href="AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header> 
  <main class="content">
  <h2>Our Flights</h2>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="../Controller/logout.php">Logout</a><br><br>
    <?php
          require '../Controller/flightValidation.php';
        
        ?>
    <form method="POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return flightValidation()">
      
        <h3> Add New Flight </h3> <br>
         From <select name="from" id="from"> <br><br>
            <option value="Dhaka" >Dhaka</option>
            <option value="Chittagong" >Chittagong</option>
            <option value="Khulna">khulna</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Sylhet">Sylhet</option>
         </select> <?php echo $fromErr; ?>
         To <select name="to" id="to">            
            <option value="Dubai">Dubai</option>
            <option value="Qatar">Qatar</option>
            <option value="Kualalampur">Kualalampur</option>
            <option value="Delhi">Delhi</option>
            <option value="Kathmandu">Kathmandu</option>
         </select> <?php echo $toErr; ?> <br><br>
         
         Date <input type="datetime-local" name="departure" id = "departure"> <?php echo $departureErr; ?> <br><br> 
         
        <input type="submit" name="submit" value="Add"> <br> <br>
        <p id="errorMsg"></p>
        
        
        
</form>



    
<h3> Current Flights </h3>
<table>
<?php require '../Controller/FlightShow.php'; ?>
</table>

    
  
  </main>
  <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
    
    
</body>
<script src="../Controller/JS/script.js"></script>
</html>