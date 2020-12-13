<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["id"])) {
			echo "Id is empty";		
		}
		else if (empty($_REQUEST["username"])){
			echo "Enter Name!";
		}
		else if (empty($_REQUEST["email"])){
			echo "Enter email!";
		}
		else if (empty($_REQUEST["dob"])){
			echo "Enter dob!";
		}
		else if (empty($_REQUEST["password"])){
			echo "Enter password!";
		}
		else {
			#echo "Name is: " . $_REQUEST["name"];
			#echo "Password is: " . $_REQUEST["password"];
			header(Location )
		}
	} 
?>