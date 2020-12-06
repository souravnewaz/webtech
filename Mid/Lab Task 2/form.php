<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


	Student Id <br> <input type="text" name="id" required> <br> <br>
	Student Name <br> <input type="text" name="name" required> <br>
	<br />
   Gender <br>
  <input type="radio" id="male" name="gender" value="male" required>
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female" required>
  <label for="female">Female</label><br> <br>

   
	Student Email <br> <input type="text" name="email" value="@">
	<br /><br /> 


	Address <br> <br> <input type="text" name="address" required> <br>
	Street Address	<br> <br>
	 <input type="text" name="address" > <br>
	 Address Line 2 <br>
	<br> <input type="text" name="city" required> <br>
	City <br> <br>
	<input type="text" name="state" required> <br>
	State/Province/Region <br> <br>
    <input type="text" name="zip" required> <br>
	Zip/Postal Code <br> <br>


    <select name="country"  id="country" required>
  	<option value=""></option>
  	<option value="Bangladesh">Bangladesh</option>
  	<option value="USA">USA</option>
  	<option value="UK">UK</option>
  	<option value="USA">UAE</option>
	</select> <br> 
	Country <br> <br>

	<button type="submit">Save Form</button>

	<br /><br />
	</form>


	<?php
		$idError = ""; $nameError = "";
		$genderError = ""; $emailError = "";
		$addressError = ""; $cityError = "";
		 $stateError = ""; $countryError="";
		
		
		  

		if (empty($_POST["id"])) {
			$emailErr = "Id is required";
		  } else {
			echo "Id : " . $_REQUEST["id"]; echo "<br>"; 
		  }

		if (empty($_POST["name"])) {
			$emailErr = "Name is required";
		  } else {
			echo "Name : " . $_REQUEST["name"]; echo "<br>"; 
		  }

		if (empty($_POST["gender"])) {
			$emailErr = "Gernder is required";
		  } else {
			echo "Gender : " . $_REQUEST["gender"]; echo "<br>"; 
		  } 			

		  if (empty($_POST["email"])) {
			$emailError = "Email is required";
		  } else {
			echo "Email : " . $_REQUEST["email"]; echo "<br>"; 
		  }

		  

		  if (empty($_POST["address"])) {
			$emailErr = "Address is required";
		  } else {
			echo "Address : " . $_REQUEST["address"]; echo "<br>"; 
		  }

		  if (empty($_POST["city"])) {
			$emailErr = "city is required";
		  } else {
			echo "City : " . $_REQUEST["city"]; echo "<br>"; 
		  }

		  if (empty($_POST["state"])) {
			$emailErr = "State is required";
		  } else {
			echo "State : " . $_REQUEST["state"]; echo "<br>"; 
		  }

		  if (empty($_POST["country"])) {
			$emailErr = "country is required";
		  } else {
			echo "Country : " . $_REQUEST["country"]; echo "<br>"; 
		  }
	?>


</body>
</html>