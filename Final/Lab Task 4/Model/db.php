

<?php
        $serverName = "localhost";
        $userName = "root";
        $pw = "";
        $dbName = "user";

        $conn = new mysqli($serverName, $userName, $pw, $dbName);

        


        function Signup($id, $username, $email, $dob, $password)
        {
            global $conn;
            $stmt = $conn -> prepare("INSERT INTO users (id, username, email, dob, password) VALUES (?,?,?,?,?)");
            $stmt -> bind_param("issss",$id, $username, $email, $dob, $password);
            $stmt -> execute();
            return 1;
        }


        function Login($username, $password)
        {
            global $conn;
            $sql = "SELECT username FROM `users` WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck>0)
            {
                return 1;
            }
            else{
                return 0;
            }
            
        }
        function Show()
        {
            global $conn;
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($conn,$sql);
            echo "<table border=2>";
            
            while($row = $result-> fetch_assoc())
            {
                
                echo "<tr>";
                echo "<td>". $row['id']. "</td>";
                echo "<td>". $row['username']. "</td>";
                echo "<td>". $row['email']. "</td>";
                echo "<td>". $row['dob']. "</td>";
                echo "<td>". $row['password']. "</td>";
                
                echo "<td>"; echo "<a href='edit.php?id=" . $row['id'] . "'>"; echo "Edit"; echo "</a>"; echo "</td>";
                echo "<td>"; echo "<a href='../Controller/delete.php?id=" . $row['id'] . "'>"; echo "Delete"; echo "</a>"; echo "</td>";
                
                echo "</tr>";
                
            }
            echo "</table>";
      
        }

        
    
        
?> 

</body>
</html>       
        