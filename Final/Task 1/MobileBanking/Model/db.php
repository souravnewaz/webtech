<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "banking";
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

function show(){
    global $conn;
    #session_start();
    $name= $_SESSION['name'];
    $sql = "Select * from user where name = '$name' ";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Your current balance: ", $row['balance'];
            #(int)$balance = $row['balance'];

            
        }
    }
}
    



function update( $amount){
    global $conn;
    session_start();
    $name= $_SESSION['name'];
    $sql = "Select balance from user where name = '$name' ";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            #echo "Your current balance: ", $row['balance'];
            (int)$balance = $row['balance'];

            
        }
    }
    if($amount > $balance)
    {
        echo "Insufficient balane!";
    }
    else{   
    
    (int)$new=$balance-(int)$amount;
    $sql="update user set balance = '$new'  WHERE name='$name' ; ";
    $result = mysqli_query($conn,$sql);
    show();
}

}


