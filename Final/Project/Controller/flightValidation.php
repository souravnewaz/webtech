<?php 

include '../Model/db.php';
$from = $to =$departure = "";
$fromErr = $toErr =$departureErr = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["from"])) {
        $fromErr = "Add Takeoff location";
      } else {
        $from = test_input($_POST["from"]);
      }

      if (empty($_POST["to"])) {
        $toErr = "Add Destination";
      } else {
        $to = test_input($_POST["to"]);
      }


      if (empty($_POST["departure"])) {
        $departureErr = "Departure?";
      } else {
        $departure = test_input($_POST["departure"]);
      }
    
}

if(isset($_POST['submit'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $departure = $_POST['departure'];
    if(AddFlight ($from, $to, $departure)==1){
      echo '<span style="color:#239B56;">Flight added successfully</span>';
      echo "";
    }
    else {
      
      echo '<script>alert("Flight already exists!")</script>';
    }
    
    

}


?>