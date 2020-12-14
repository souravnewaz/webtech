<?php
    include_once 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../View/CSS/layout.css">
</head>
<body>
<div class="container">
<header> <a href="../index.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
<main class="content">


<?php
    $sql = "SELECT * FROM admin;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['name'] ." <br>";
        }
    }
?>
</body>
</html>