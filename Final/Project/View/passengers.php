<?php
session_start();
$name= $_SESSION['name'];
$password= $_SESSION['password'];

    if($name == ""){
      
      header('location: ../View/login.php');
   
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/CSS/layout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Passengers | Admin CS</title>
    
</head>
<body>
<div class="container" >
<header> <a href="AdminCsHome.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header> 
  <main class="content">
    
  <h1>Passengers List</h1>
    <a href="AdminCsHome.php">Home</a>
    <a href="flights.php">Flights</a>
    <a href="bookings.php">Bookings</a>
    <a href="passengers.php">Passengers</a>
    <a href="seats.php">Seats</a>
    <a href="addBooking.php">Add Bookings</a>
    <a href="../Controller/logout.php">Logout</a><br><br>
    
    

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<input type="text " name="searchId" >
 <input type="submit" name="search" value="Search">
</form> 
  <button>Show All </button>



<div id = "user">
  <table>
  <?php require '../Controller/searchuser.php'; ?>
  </table>
 

    
</div>

    
  
  </main>
  
  
</div>

    
</body>
<script src="../Controller/JS/script.js"></script>
<script >
 $(document).ready(function(){
    $("button").click(function(){        
        $("#user").load("../Controller/search.php", {
            
        });
    });
});

</script>



</html>