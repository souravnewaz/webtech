<?php
    #include_once '../Database/db.php';
    require '../Databse/db.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mobile Banking system</h1>
    <h3>Welcome Back!</h3>
    <?php
    #session_start();
    #$name= $_SESSION['name'];
    #echo "Hello ", $name, "<br/>";
    
?>

<form method="POST" action="#">
    <input type="text" name="amount" placeholder="enter amount..">
    <input type="submit" name="submit" value="Deposit">
    <input type="submit" name="logout" value="logout">
</form>


<?php
        if(isset($_POST['submit'])){
            (int)$amount = $_POST['amount'];
            
            #echo"Your new balance is: ", $new;
            update($amount);
        }
        
        if(isset($_POST['logout'])){
            #session_start();
            session_destroy();
            header('Location: ../View/login.php');

            
        }
    ?>

</body>
</html>
