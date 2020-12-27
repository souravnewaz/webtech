<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "airline";


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

function passengers(){
    global $conn;
     
    $sql = "SELECT `id`, `name`, `email`, `phone`, `gender`, `address` FROM `user` ";
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

function flights(){
    global $conn;
    $sql = "SELECT * FROM flight";
    $result = mysqli_query($conn,$sql);
    echo '<table border="1" cellspacing="2" cellpadding="2" >
        <tr>
            <th>Id</th>
            <th>From</th>
            <th>To</th>
            <th>Date</th>
            <th>Time</th>
            
            </tr>';
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $takeoff = $row['takeoff'];
        $landing = $row['landing'];
        $date = $row['date'];
        $time = $row['time'];
        echo '
        <tr>
            <td>'.$id.'</td>
            <td>'.$takeoff.'</td>
            <td>'.$landing.'</td>
            <td>'.$date.'</td>
            <td>'.$time.'</td>
            
            
            </tr>
            ';
    }
}


function bookings(){
    global $conn;
    $sql = "select * FROM booking";
    $result = mysqli_query($conn, $sql);
    echo '<table border="1" cellspacing="2" cellpadding="2" >
        <tr>
            <th>Booking Id</th>
            <th>User Id</th>
            <th>Flight Id</th>
            <th>Seat Id</th>
            <th>Luggage Id</th>
            <th>Status</th>
            
            
            </tr>';
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['userId']. "</td>";
                echo "<td>". $row['flightId']. "</td>";
                echo "<td>". $row['seatId']. "</td>";
                echo "<td>". $row['luggageId']. "</td>";
                echo "<td>". $row['status']. "</td>";

                echo "<td>"; echo "<a href='../Controller/bookingApprove.php?id=" . $row['id'] . "'>"; echo "Approve"; echo "</a>"; echo "</td>";
                echo "<td>"; echo "<a href='../Controller/bookingReject.php?id=" . $row['id'] . "'>"; echo "Reject"; echo "</a>"; echo "</td>";
                
                 
                
                echo "</tr>";
                

    }
    echo "</table>";

}

function BookingApprove($id){
    global $conn;
    $sql = "UPDATE booking SET status='Approved' WHERE id= $id";
    $result = mysqli_query($conn, $sql);

}

function BookingReject($id){
    global $conn;
    $sql = "UPDATE booking SET status='REJECTED' WHERE id= $id";
    $result = mysqli_query($conn, $sql);
}




