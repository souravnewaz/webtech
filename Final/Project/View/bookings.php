<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings | Admin CS</title>
    <?php include('../Template/layout.php')?>
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
    <a href="../control/seats.php">Seats</a>
    <a href="../Control/addBooking.php">Add Bookings</a>
    <a href="../Control/settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>
    

    <table>
        <tr>
            <th>Flight Id</th>
            <th>Flight Route</th>
            <th>Departure</th>
            <th>Passenger Id</th>
            <th>Passenger Name</th>
            
        </tr>
        <tr>
            <td>001</td>
            <td>Dhaka-Chittagong</td>
            <td>6:00am</td>
            <td>P001</td>
            <td>Sourav</td>
            <td><Button>Approve</Button></td>
        </tr>
        <tr>
            <td>001</td>
            <td>Dhaka-Chittagong</td>
            <td>6:00am</td>
            <td>P001</td>
            <td>Sourav</td>
            <td><Button>Approve</Button></td>
        </tr>
        <tr>
            <td>001</td>
            <td>Dhaka-Chittagong</td>
            <td>6:00am</td>
            <td>P001</td>
            <td>Sourav</td>
            <td><Button>Approve</Button></td>
        </tr>
    </table>
  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    
</body>
</html>