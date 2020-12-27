<?php
require '../Model/db.php';

$name = "";
$email = "";
$phone = "";
$gender = "";
$password = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $gender = test_input($_POST["gender"]);
    $password = test_input($_POST["password"]);
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $gender= $_POST['gender'];
    $password= $_POST['password'];   
    signup($name,$email,$phone,$gender,$password);
    
            
        
    
}