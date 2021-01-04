<?php
include '../Model/db.php';
$id = $name = $product = $weight = "";         
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $id = test_input($_POST["id"]);
   
   $product = test_input($_POST["product"]);
   $weight = test_input($_POST["weight"]);            

}   

function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}    


if(isset($_POST['submit'])){
            
    if (empty($_POST["id"])) {
        echo "Id is required";
    }
    elseif(empty($_POST["product"])){
        echo "Product is required";
    }
    elseif(empty($_POST["weight"])){
        echo "Weight is required";
    }
    else{
        AddBooking($id, $product, $weight);
    
    
    

    }
}


?>
