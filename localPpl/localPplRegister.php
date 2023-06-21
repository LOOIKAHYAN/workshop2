<title>Local People Registration</title>
<?php
include "../connection/connection.php";
include "../function/navigationBar.php";
error_reporting(0);
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	function test_input($data) 
	{
  		$data = trim($data);
 			$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	$fname = test_input($_POST['fname']);
	$lname = test_input($_POST['lname']);
	$gender = test_input($_POST['gender']);
	$email = test_input($_POST['email']);
	$phoneno = test_input($_POST['phoneno']);
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$cpassword =test_input($_POST['cpassword']);

	$result = mysqli_query($conn, "select * from localpeople where username = '$username'");
	$row = mysqli_fetch_array($result);

	if($row[6] == $username){
		echo"<script>alert('Username already exists')</script>";
		echo"<meta http-equiv='refresh' content='0; url=localPplRegister.php'/>";
	}

	else if($gender == ""){
		echo "<script>alert('Gender type not valid')</script>";
		echo"<meta http-equiv='refresh' content='0; url=localPplRegister.php'/>";
	}

	else if($password != $cpassword)
	{
		echo "<script>alert('Two passwords that enter do not match');</script>";
		echo"<meta http-equiv='refresh' content='0; url=localPplRegister.php'/>";
	}

	else {
		$query = "INSERT INTO localpeople (fname, lname, gender, email, phoneno, username, password) VALUES ('$fname','$lname','$gender','$email','$phoneno','$username', '$password')";

		if($conn->query($query))
		{
			echo "<script>alert('Successfully register! Please proceed to login.');</script>";
			echo"<meta http-equiv='refresh' content='0; url=localPplLogin.php'/>";
		}
		else
		{
			echo "<script>alert('Registration fail! Please try again.');</script>";
			echo"<meta http-equiv='refresh' content='0; url=localPplRegister.php'/>";
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body{
	background-image: url("../image/login11.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

.form{
	margin: auto; 
	font-display: block;
	font-size: 20px;
	background-color: rgb(255,255,255,0.5);
	border: solid black 3px;
	border-radius: 12px;
	width: 50%;
	padding: 2%;
}

.image{
	float:left;
	border-radius: 1000px;
	width: 18%;
/*	border: 5px solid black;*/
}

.text{
font-family: serif;
font-size: 32px;
color: black;
text-align: center;
line-height: 105px;
}

input[type=text] {
		font-family: serif;
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
	font-size: 18px;
}


input[type=password] {
		font-family: serif;
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
	font-size: 18px;
}


input[type=email] {
		font-family: serif;
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
	font-size: 18px;
}

input[type=tel] {
		font-family: serif;
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
	font-size: 18px;
}

input[type=submit]{
	font-family: serif;
	margin-top: 2%;
 	width: 20%;
	text-align: center;
  padding: 10px 20px;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 5px;
  font-display: block;
  font-size: 18px;
	background-color: pink;
  color:black;
  border-radius: 5px;
}

input[type=submit]:hover{
  background-color: red;
}

.form a:hover{
  color: red;
}

.overall{
	padding: 3%;
}

#gender{
	font-family: serif;
 	width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
	font-size: 18px;
}

</style>
</head>
<body>
	
<div class="overall">
	<div class="form">
		<img class="image" src="../image/usericon2.png">
		 <p class="text"><b>LOCAL PEOPLE REGISTRATION</b></p>
 
      <br>

			<form method="POST">

			<label>First Name</label><input type="text" placeholder="FirstName" name="fname" required></p>

			<p><label> Last Name</label><input type="text" placeholder="LastName" name="lname" required></p>

      <p><label for="gender">Gender</label><br>
      <select name="gender" id="gender" required>
      	<option selected disabled hidden>-- Select gender --</option>
        <option value="F">F</option>
        <option value="M">M</option>
      </select></p>

			<p><label> Email</label><input type="email" placeholder="Email" name="email" required title="Input email format"></p>

			<p><label>Phone Number</label><input type="tel" placeholder="PhoneNo" name="phoneno" pattern=".{10,}" title="Input valid phone number format" required></p>

			<p><label> Username</label><input type="text" placeholder="Username" name="username" required></p>
	
			<p><label>Password</label><input pattern=".{8,}" placeholder="Password" type="password" name="password" required title="Minimum 8 characters"></p>
          
			<p><label> Confirm Password </label><input pattern=".{8,}" placeholder="ConfirmPassword" type="password" name="cpassword" required title="Minimum 8 characters"></p>
	
			<input type="submit" value="Register">			
			
		</form>
	</div>
</div>
</body>
</html>
