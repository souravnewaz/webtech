<?php
     require '../Model/db.php';
 ?>

<?php
        $name="";
        $password = "";        

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST["name"]);
            $password = test_input($_POST["password"]);
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
     ?> 

<?php

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password= $_POST['password'];
            if (login($name,$password)==1)
            {
                echo "Login successful";
                session_start();
                $_SESSION['name']= htmlentities( $_POST['name']);
                $_SESSION['password']= htmlentities( $_POST['password']);
                header('Location: ../View/AdminCsHome.php');
            }
            else{
                echo "login failed <br> "; 
                echo 'New here? <a href="../View/signup.php">Signup</a> ';
            }
            

            
            
        }
    ?>