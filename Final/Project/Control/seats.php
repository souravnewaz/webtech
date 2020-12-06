<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seats | Admin CS</title>
    <?php include('../Template/layout.php')?>
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
    <a href="settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>

    <table>
        <tr>
            <th colspan="2">Business Class</th>
            <th colspan="4">Economy Class</th>
        </tr>
        <tr>
            <td>A1</td>
            <td>B1</td>
            <td>A1</td>
            <td>B1</td>
            <td>C1</td>
            <td>D1</td>
            
        </tr>
        <tr>
            <td>A2</td>
            <td>B2</td>
            <td>A2</td>
            <td>B2</td>
            <td>C2</td>
            <td>D2</td>
            
        </tr>
        <tr>
            <td>A3</td>
            <td>B3</td>
            <td>A3</td>
            <td>B3</td>
            <td>C3</td>
            <td>D3</td>
            
        </tr>
    </table>
  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    
</body>
</html>