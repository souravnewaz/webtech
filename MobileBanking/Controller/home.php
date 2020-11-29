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
    <h1>Mobile Banking system</h1>
    <h3>Welcome Back!</h3>
    <?php
    session_start();
    $name= $_SESSION['name'];
    echo "Hello ", $name, "<br/>";
    $sql = "Select balance from user where name = '$name' ";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            //echo "Your current balance: ", $row['balance'];
            (int)$balance = $row['balance'];
            echo "Your  balance: ", $balance;
        }
    }
?>

<form method="POST" action="#">
    <input type="text" name="amount" placeholder="enter amount..">
    <input type="submit" name="submit" value="Deposit">
</form>

<?php
        if(isset($_POST['submit'])){
            $amount = $_POST['amount'];
            (int)$amount;
            (int)$new= $balance-$amount;
            echo"Your new balance is: ", $new;
            $sql="update user set balance = '$new'  WHERE name='$name' ; ";
            $result = mysqli_query($conn,$sql);
            

            
            
        }
    ?>

</body>
</html>
