<?php
    #include_once '../Model/db.php';
    require '../Database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mobile Banking System</h1>
     
    <form method="POST" action="#" >
        <input type="text" name="name" placeholder="Username..."> <br> <br>
        <input type="text" name="password" placeholder="Password..."> <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password= $_POST['password'];
            if (login($name,$password)==1)
            {
                echo "Login successful";
                session_start();
                $_SESSION['name']= htmlentities( $_POST['name']);
                header('Location: ../Controller/home.php');
            }
            else{
                echo "login failed";
            }
            

            
            
        }
    ?>
</body>
</html>
