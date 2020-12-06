<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Admin CS</title>
    <?php include('../Template/layout.php')?>
</head>
<body>
<div class="container">
<header> <a href="../View/AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header> 
  <main class="content">
  <h1>Settings</h1>
    <a href="../View/AdminCsHome.php">Home</a>
    <a href="../View/flights.php">Flights</a>
    <a href="..View/bookings.php">Bookings</a>
    <a href="../view/passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>
    <?php 
        echo "Name: Admin CS";
        echo "<br/>";
        $password= "1234";
        if($_SERVER["REQUEST_METHOD"]=="POST"){            
            $password= test_input($_POST["password"]);
            
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter New Password: <br>
    <input type="text" name="password"><br><br>
    <input type="submit" value="Update"> <br><br>
    </form>
    <?php        
        echo "New Password: $password";
    ?>
  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
   
</body>
</html>