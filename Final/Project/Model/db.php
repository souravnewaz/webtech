<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "airline";
$valueCheck="";



$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

function login ($name,$password){
    global $conn;
    #session_start();
    #$name= $_SESSION['name'];
    $sql = "Select * from admin where name = '$name' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        return 1;
    }
    else{
        return 0;
    }
        
}

function signup ($name,$email,$phone,$password, $address){
    

    try {
        global $conn;
        $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`,  `address`, `password`) VALUES (NULL, '$name', '$email', '$phone',  '$address', '$password'); ";
        mysqli_query($conn,$sql);
       
        echo '<span style="color:#239B56;">Database : Successful </br></span>';
        return 1;
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    
      }
        
     
}

function passengers(){
    global $conn;
     
    $sql = "SELECT `id`, `name`, `email`, `phone`, `address` FROM `user` ";
    $result = mysqli_query($conn,$sql);

    echo '<table >
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            </tr>';
            

    while ($row = mysqli_fetch_array($result)){
         $id = $row['id']. "<br>";
         $name = $row['name']. "<br>";
         $email = $row['email']. "<br>";
         $phone = $row['phone']. "<br>";
         $address = $row['address']. "<br>";

        echo '
        <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$address.'</td>
            
            </tr>
            ';




    }
}

function ShowFlights(){
    global $conn;
    $sql = "SELECT * FROM flight";
    $result = mysqli_query($conn,$sql);
    
            echo '<table  >
        <tr>
            <th>Id</th>
            <th>From</th>
            <th>To</th>
            <th>Departure</th>
            <th>Action</th>
                       
            
            </tr>';
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $takeoff = $row['takeoff'];
        $landing = $row['landing'];
        $departure = $row['departure'];
        
           
                echo "<td>". $id. "</td>";
                echo "<td>". $takeoff. "</td>";
                echo "<td>". $landing. "</td>";
                echo "<td>". $departure. "</td>";
                

                echo "<td>"; echo "<a href='../Controller/flightDelete.php?id=" . $row['id'] . "'>"; echo "Delete"; echo "</a>"; echo "</td>";
                               
                echo "</tr>";
            
    }
}

function AddFlight ($from, $to, $departure){
    $msg = "Flight already exists!!";
    $msg1 = "Flight added successfully";
    global $conn;
    $sql1 = "SELECT * FROM `flight` WHERE takeoff = '$from' and landing = '$to'; ";
    $result = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result)==1){
        return 0;
    }
    else {
        $sql = "INSERT INTO `flight` (`id`, `takeoff`, `landing`, `departure`) VALUES (NULL, '$from', '$to', '$departure');";
            mysqli_query($conn,$sql);
            return 1;
    }
    
}


function DeleteFlight ($id){
    global $conn;
    $sql = "delete from flight where id ='$id'";
    $result = mysqli_query($conn, $sql);

}




function showBookings(){
    global $conn;
    $sql = "select * FROM booking where status='Pending'";
    $result = mysqli_query($conn, $sql);
    echo '<table >
        <tr>
            <th>Booking Id</th>
            <th>User Id</th>
            <th>Flight Id</th>
            <th>Seat Id</th>
            <th>Luggage Id</th>
            <th>Status</th>
            <th>Action</th>
            <th>Action</th>
            
            
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
function showApprovedBookings(){
    global $conn;
    $sql = "select * FROM booking where status='Approved'";
    $result = mysqli_query($conn, $sql);
    echo '<table  >
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
                echo "</tr>";
                

    }
    echo "</table>";

}
function showRejectedBookings(){
    global $conn;
    $sql = "select * FROM booking where status='REJECTED'";
    $result = mysqli_query($conn, $sql);
    echo '<table  >
        <tr>
            <th>Booking Id</th>
            <th>User Id</th>
            <th>Flight Id</th>
            <th>Seat Id</th>
            <th>Luggage Id</th>
            <th>Status</th>
            <th>Action</th>
            
            
            </tr>';
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['userId']. "</td>";
                echo "<td>". $row['flightId']. "</td>";
                echo "<td>". $row['seatId']. "</td>";
                echo "<td>". $row['luggageId']. "</td>";
                echo "<td>". $row['status']. "</td>";
                echo "<td>"; echo "<a href='../Controller/bookingProceed.php?id=" . $row['id'] . "'>"; echo "Proceed"; echo "</a>"; echo "</td>";         
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

function BookingProceed($id){
    global $conn;
    $sql = "UPDATE booking SET status='Pending' WHERE id= $id";
    $result = mysqli_query($conn, $sql);
}

function AddBooking($id, $product, $weight){
    global $conn;
    $sql1 = "SELECT * FROM `user` WHERE id = '$id' ; ";
    $result = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result)==0){
        
        echo "User not found of this is : ". $id. "</br>";
    }


    $sql2 = "INSERT INTO `luggage` (`id`, `userId`, `productName`, `weight`) VALUES (NULL, '$id', '$product', '$weight');";
    if ($conn->query($sql2) === TRUE) {
        echo "Booking Added successfully";
      } else {
        #echo "Error: " . $sql2 . "<br>" . $conn->error;
        echo "Failed";
      }



}

function LuggageBookingShow(){
    global $conn;
    $sql = "select * FROM luggage";
    $result = mysqli_query($conn, $sql);
    echo '<table  >
        <tr>
            <th>Luggage Id</th>
            <th>Passenger Id</th>
            <th>Product Name</th>
            <th>Product Weight</th>           
           
            
            </tr>';
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['userId']. "</td>";
                echo "<td>". $row['productName']. "</td>";
                echo "<td>". $row['weight']. "</td>";
         
                echo "</tr>";
                

    }
    echo "</table>";

}




function SeatShow(){
    global $conn;
    $sql = "select * FROM seat";
    $result = mysqli_query($conn, $sql);
    echo '<table  >
        <tr>
            <th>Seat Id</th>
            <th>Seat Type</th>
            <th>Seat Name</th>
            <th>Seat Status</th>           
            <th>Action</th>           
            
            </tr>';
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['type']. "</td>";
                echo "<td>". $row['name']. "</td>";
                echo "<td>". $row['status']. "</td>";
                

                
                echo "<td>"; echo "<a href='../Controller/seatUpdate.php?id=" . $row['id'] . "'>"; echo "Update"; echo "</a>"; echo "</td>";
         
                echo "</tr>";
                

    }
    echo "</table>";

}

function SeatUpdate ($id){
    global $conn;
    global $valueCheck;
    $sql1 = "SELECT status from seat where id = $id"; 
    $sql2 = "UPDATE seat SET `status`='Available' WHERE id= $id";
    $sql3 = "UPDATE seat SET `status`='Booked' WHERE id= $id";
    $result = mysqli_query($conn,$sql1);
    
    $row=mysqli_fetch_array($result);
    $valueCheck = $row['status'];
    if($valueCheck=="Available"){
        mysqli_query($conn,$sql3);
    }
    else if($valueCheck=="Booked"){
        mysqli_query($conn,$sql2);
    }
    
   
    
}


function UpdateSettings($newName, $password, $CurrentName){
    global $conn;
    global $currentName;
    $sql = "UPDATE user SET name ='$newName' , password = '$password' WHERE name= '$CurrentName'";
    $result = mysqli_query($conn,$sql);

}



function Search($searchId){
    global $conn;
    $sql = "SELECT * FROM user where id = '$searchId'";
    $result = mysqli_query($conn, $sql);
    echo '<table >
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            </tr>';
            

    while ($row = mysqli_fetch_array($result)){
         $id = $row['id']. "<br>";
         $name = $row['name']. "<br>";
         $email = $row['email']. "<br>";
         $phone = $row['phone']. "<br>";
         $address = $row['address']. "<br>";

        echo '
        <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$address.'</td>
            
            </tr>
            ';
}
}

function Gatepass($id){
    global $conn;
    $sql1 = "SELECT userId, flightId from booking WHERE id=$id";
    
    $result1 = $conn->query($sql1);
    while($row = mysqli_fetch_array($result1)){
        $userId = $row['userId'];
        $flightId = $row['flightId'];
    }

    $sql2 = "SELECT name,phone, address FROM `user` WHERE id=$userId";
    $result2 = $conn->query($sql2);
    while($row = mysqli_fetch_array($result2)){
        $userName = $row['name'];
        $phone = $row['phone'];
        $address = $row['address'];
    }

    $sql3 = "SELECT * FROM `flight` WHERE id = $flightId";
    $result3 = $conn->query($sql3);
    while($row = mysqli_fetch_array($result3)){
        $takeoff = $row['takeoff'];
        $landing = $row['landing'];
        $departure = $row['departure'];
    }

    echo "<h3> Passenger Information:</h3>";
    echo "Name : ". $userName . "</br>" ;
    echo "Phone : ". $phone . "</br>";
    echo "Address : ". $address . "</br>";

    echo "<h3> Flight Information:</h3> ";
    echo "From : ". $takeoff . "</br>" ;
    echo "To : ". $landing . "</br>";
    echo "Departure : ". $departure . "</br>";


}

