

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


     <h2>Login</h2>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return loginValidation()">
        Name: <input type="text" name="name" id="name" value =<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"];} ?>> <br><br>
        Password: <input type="password" name="password" id="password" value =<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["upassword"];} ?> > <br><br>
        <input type="checkbox" name="remember"> Remeber Me <br> <br>
        <input type="submit" name="submit" value="Login">
        <p id="errorMsg"></p>
        
    </form>

    <?php require '../Controller/loginValidation.php';?>
     
    </main>

    
    <footer>©2021 Dhaka Airlines. All rights reserved</footer>
</div>

    
</body>
<script type="" src="../Controller/JS/script.js"></script>
</html>