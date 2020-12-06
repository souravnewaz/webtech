<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights | Admin CS</title>
    <?php include('../Template/layout.php')?>
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

<table>
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Departure</th>
    </tr>
    <tr>
        <td>Dhaka</td>
        <td>Chittagong</td>
        <td>6:00am</td>
    </tr>
    <tr>
        <td>Dhaka</td>
        <td>Kolkata</td>
        <td>6:00am</td>
    </tr>
    <tr>
        <td>Dhaka</td>
        <td>Nepal</td>
        <td>6:00am</td>
    </tr>
    <tr>
        <td>Dhaka</td>
        <td>Delhi</td>
        <td>6:00am</td>
    </tr>
</table>
  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    
    
</body>
</html>