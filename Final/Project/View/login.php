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
        Name: <input type="text" name="name" id="name"> <br><br>
        Password: <input type="password" name="password" id="password" > <br><br>
        <input type="submit" name="submit" value="Login">
        <p id="errorMsg"></p>
        
    </form>

    <?php require '../Controller/validationLogin.php';?>
     
    </main>

    
<footer>This is the footer of this webpage</footer>
</div>

    
</body>
<script type="" src="../Controller/JS/script.js"></script>
</html>