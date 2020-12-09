
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Enter Your Information</h1>
    <form action="#" method="POST">
        Id <input type="text" name="id" placeholder="id..."> <br> <br>
        Username <input type="text" name="username" placeholder="username..."> <br> <br>
        Email <input type="text" name="email" placeholder="enter a valid email..."> <br> <br>
        Date of Birth <input type="date" name="dob" > <br> <br>
        Password <input type="text" name="password" placeholder="enter a password..."> <br> <br>
        <input type="submit" name="submit" value="Sign up">
    </form>

    <?php
require 'controller.php';
#require 'db.php';
?>

    
    
</body>
</html>


