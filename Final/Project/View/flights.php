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
    <a href="../Control/seats.php">Seats</a>
    <a href="../Control/addBooking.php">Add Bookings</a>
    <a href="../Control/settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>

    <form>
      
        <h3> Add New Flight </h3> <br>
         From <select name="from" id="from"> <br><br>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Khulna">khulna</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Sylhet">Sylhet</option>
         </select>
         To <select name="to" id="to">            
            <option value="Dubai">Dubai</option>
            <option value="Qatar">Qatar</option>
            <option value="Kualalampur">Kualalampur</option>
            <option value="Delhi">Delhi</option>
            <option value="Kathmandu">Kathmandu</option>
         </select> <br><br>
         
         Date <input type="datetime-local"> <br><br>
         
        <input type="submit" name="submit" value="Add"> <br> <br>
</form>
    
<h3> Current Flights </h3>
<?php require '../Controller/showFlights.php'; ?>
    </table>
  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    
    
</body>
</html>