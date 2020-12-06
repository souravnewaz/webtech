<?php
    include_once 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Testing database connection . . .  <br>
<?php
    $sql = "SELECT * FROM admin;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['name'] ." <br>";
        }
    }
?>
</body>
</html>