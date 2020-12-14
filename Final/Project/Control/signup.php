<?php include('../Include/dbconnection.php')?>
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
        $name="";
        $password = "";
        $email="";
        $gender="";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST["name"]);
            $password = test_input($_POST["password"]);
            $password2 = test_input($_POST["confirmPassword"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);

        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        
?> 
     <h2>Signup</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" required><br><br>
    E-mail: <input type="text" name="email" required><br><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br><br>
    Password: <input type="password" id="pw1" name="password" required><br><br>
    Confirm Password: <input type="password" id="pw2" name="confirmPassword" required> <br><br>

    <input type="submit" name="signupClick" value="Signup">
    
    </form>
    Alredy registered? <a href="login.php">Login</a>

    <?php
        if(isset($_POST['signupClick']))
        {
            if($password != $password2){
                echo " <br> Password doesn't match";
            }
            if (empty($_POST["name"])) {
                echo "Name is required";
            }
            elseif(empty($_POST["email"])){
                echo "Enter an email!";
            }
            elseif(empty($_POST["gender"])){
                echo "Select your gender!";
            }
            elseif(empty($_POST["password"])){
                echo "Please enter a password!";
            }
            else{

                $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES (NULL, '$name', '$email', '', '', '$password');";
                mysqli_query($conn,$sql);


            echo "<h2>Registration Successful!</h2>";
            echo"Name: ", $name;
            echo "<br>";
            echo "email: ", $email;
            echo "<br>";
            echo "Gender: ", $gender;
            echo "<br>";
            echo "Password: ", $password;
            echo "<br>";
            }
                   
            /*  $text = $name;
            $pw = $password;
            $filename="users.txt";
            $file = fopen( $filename, 'w' );
            fwrite( $file, $text.",");
            fwrite( $file, $pw); */


            
            }
            
        
    ?>
    </main>
<footer>This is the footer of this webpage</footer>
</div>
</body>
</html>