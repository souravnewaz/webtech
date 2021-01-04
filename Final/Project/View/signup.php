
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="CSS/layout.css">
</head>
<body>
<div class="container">
<header> <a href="../index.php" style="color: white; text-decoration: none;"><h1>Dhaka Airlines</h1></a> </header>  
<main class="content">
<h3>Sign up</h3>

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   onsubmit="return signUpValidation()">

Name: <input type="text" name="name" id="name"><br><br>
Email: <input type="text" name="email" id="email"><br><br>
Phone: <input type="text" name="phone" id="phone"><br><br>
Address <input type="text" name="address" id="address"><br><br>
Password: <input type="password" name="password" id="password1"><br><br>
Confirm Password: <input type="password" name="password" id="password2"><br><br>
<input type="submit" name="submit" value="Signup">
    <p id="errorMsg"></p>
    
</form>
    Alredy registered? <a href="login.php">Login</a> <br><br>
    <?php require '../Controller/signupValidation.php';?>
    
    
    </main>
    
    <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>
</body>

<script src="../Controller/JS/script.js"></script>


</html>