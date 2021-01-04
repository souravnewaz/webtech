<?php
include_once '../Model/db.php';
$searchId="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $searchId = test_input($_POST["searchId"]);
    
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset($_POST['submit'])){
    $searchId = $_POST['searchId'];
    Search($searchId);
}

?>