<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking | Admin CS</title>
    <?php include('../Template/layout.php')?>
</head>
<body>
<div class="container">
<header> <a href="../View/AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
  <main class="content">
  <?php
        $id="";
        $name="";
        $product="";
        $weight="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id= test_input($_POST["id"]);
            $name= test_input($_POST["name"]);
            $product= test_input($_POST["product"]);
            $weight= test_input($_POST["weight"]);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h1>Add new Booking</h1>
    <a href="../View/AdminCsHome.php">Home</a>
    <a href="../View/flights.php">Flights</a>
    <a href="../View/bookings.php">Bookings</a>
    <a href="../view/passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="settings.php">Settings</a>
    <a href="../index.php">Logout</a><br><br>
    <h2>Add Luggage/ parcel details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Passenger Id <input type="text" name="id"><br><br>
        Passenger Name <input type="text" name="name"><br><br>
       Product <input type="text" name="product"><br><br>
       Product Weight <input type="text" name="weight"><br><br>
       <input type="submit" name="submit" value="Add">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            
            $filename="../newbooking.txt";
            $file = fopen( $filename, 'a' );
            fwrite( $file,"Passenger id: ". $id."\n");
            fwrite( $file,"Passenger Name: ". $name."\n");
            fwrite( $file,"Product name: ". $product."\n");
            fwrite( $file,"Product Weight: ". $weight."\n");
            fclose($file);
                       
            echo "<h2>Booking Added Successfully.</h2>";
            echo "Passenger id: $id " ;
            echo "<br>";
            echo "Passenger Name: $name ";
            echo "<br>";
            echo "Product name: $product";
            echo "<br>";
            echo "Product weight: $weight";
            echo "<h2>All Bookings: </h2>";
            $myfile = fopen("newbooking.txt", "r") or die("Unable to open file!");
            $bookingData = file_get_contents("../newbooking.txt");
            echo $bookingData;
            fclose($myfile);
            
        }
    ?>

  
  </main>
  <footer>This is the footer of this webpage</footer>
</div>
    <
</body>
</html>