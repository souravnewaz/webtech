<?php
    include_once '../Database/db.php';
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

            $sql = "Select * from user where name = '$name' and password='$password'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                session_start();
            $_SESSION['name']= htmlentities( $_POST['name']);
            //$_SESSION['pa']= htmlentities( $_POST['email']);
                echo "Login successful";
                header('Location: ../Controller/home.php');
            }
            else
            {
                echo "Login failed!";
            }
        }
    ?>
</body>
</html>