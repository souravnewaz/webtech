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
    <a href="../controller/seats.php">Seats</a>
    <a href="../Controller/addBooking.php">Add Bookings</a>
    <a href="../Controller/settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>
    

    <table>
        <?php require '../Controller/showBookings.php';
            #ShowBookings();
        ?>
    </table>
  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    
</body>
</html>