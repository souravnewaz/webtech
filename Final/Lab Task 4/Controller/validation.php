<?php
#include ('index.php');
require ('../Model/db.php');



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["id"])){
        echo "enter an id";
    }
    else if(empty($_POST["username"])){
        echo "enter your name";
    } 
    else if(empty($_POST["email"])){
        echo "enter your email";
    } 
    else if(empty($_POST["dob"])){
        echo "Date of birth needed";
    } 
    else if(empty($_POST["password"])){
        echo "enter a password";
    } 
    else{
        $id = $_POST["id"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $password = $_POST["password"];

        if(Signup($id, $username, $email, $dob, $password)==1){
            echo "Success <br/>";
            if(Login($username, $password)==1){
                echo "Login also success <br/>";
                #require('home.php');
                #Show($username, $password);
                header("Location: ../View/home.php");
        }
        else{
            echo "Login failed";
        }
    }
    else{
        echo "Failed";
    }
}
}
?>