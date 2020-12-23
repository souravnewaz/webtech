<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "airline";
$id;

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

function login ($name,$password){
    global $conn;
    #session_start();
    #$name= $_SESSION['name'];
    $sql = "Select * from user where name = '$name' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        return 1;
    }
    else{
        return 0;
    }
        
}

function signup ($name,$email,$phone,$gender,$password){
    

    try {
        global $conn;
        $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `gender`, `address`, `password`) VALUES (NULL, '$name', '$email', '$phone', '$gender', '', '$password'); ";
        mysqli_query($conn,$sql);
        echo "Sign up successful";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
        
     
}

function PassengerList($name,$password){
    global $conn;
    global $id;
    $sql = "SELECT `id`, `name`, `email`, `phone`, `gender`, `address` FROM `user` WHERE `name` = '$name' and password = '$password'";
    $result = mysqli_query($conn,$sql);

    echo '<table border="1" cellspacing="2" cellpadding="2">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Address</th>
            </tr>';
            

    while ($row = mysqli_fetch_array($result)){
         $id = $row['id']. "<br>";
         $name = $row['name']. "<br>";
         $email = $row['email']. "<br>";
         $phone = $row['phone']. "<br>";
         $gender = $row['gender']. "<br>";
         $address = $row['address']. "<br>";

        echo '
        <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$gender.'</td>
            <td>'.$address.'</td>
            
            </tr>
            ';




    }
}


