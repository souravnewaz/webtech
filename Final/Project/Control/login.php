<?php include('../Include/dbconnection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/CSS/layout.css">
    <title>Login</title>
  
</head>
<body>
<div class="container">
<header> <a href="../index.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
<main class="content">
<?php
        $name="";
        $password = "";
        $email="";
        $gender="";

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
     <h2>Login</h2>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" required> <br><br>
        Password: <input type="password" name="password" required> <br><br>
        <input type="submit" name="submit" value="Login">
        
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            session_start();
            $_SESSION['name']= htmlentities( $_POST['name']);
           // $_SESSION['email']= htmlentities( $_POST['email']);
            //$userData = file_get_contents("../users.txt");
            #echo $userData;
            //if(strpos($userData,$name)!== false){
                //header('Location: ../View/AdminCsHome.php');
           // }
            //else
            //echo '<script>alert("Login Failed")</script>';
            $myfile= fopen("users.txt",'r');
            while($line= fgets($myfile)){
                $data= explode(",",$line);
                $uname=$data[0];
                $pw=$data[1];
            }
            if($uname==$name and $pw == $password )
            {
                header('Location: ../View/AdminCsHome.php');
            }
            else{
                //echo '<script>alert("Login Failed")</script>';
                echo " Login Failed, please try with a correct username and password. or, ";
                echo ' <a href="signup.php">Signup</a>';
            }
            
            }
            
            
        
    ?>   
    </main>
<footer>This is the footer of this webpage</footer>
</div>

    
</body>
</html>