<?php
require '../Model/db.php';

$name = "";
$email = "";
$phone = "";
$password = "";
$address = "";
$nameError = $emailError = $phoneError = $passwordError = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $address = test_input($_POST["address"]);
    $password = test_input($_POST["password"]);
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



if(isset($_POST['submit'])){
            
    if (empty($_POST["name"])) {
        echo "Name is required";
    }
    elseif(empty($_POST["email"])){
        echo "Email is required";
    }
    elseif(empty($_POST["phone"])){
        echo "Phone is required";
    }
    elseif(empty($_POST["password"])){
        echo "Password is required";
    }
    else{
    
               
        if(signup($name,$email,$phone,$password, $address)==1){
            echo '<span style="color:#239B56;">PHP Validation : Successful</span>';
            echo "";
          }
          else {
            
            echo '<script>alert("Failed! Please try again.")</script>';
          }
          
    
    

    }
}
    
    
    
    
    


