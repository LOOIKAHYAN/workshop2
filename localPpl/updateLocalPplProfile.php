<?php
session_start();
$username=$_SESSION['username'];
include("../connection/connection.php");
error_reporting(0);
$localpplid = $_GET['localpplid'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$phoneno = $_GET['phoneno'];
$username = $_GET['username'];
$password = $_GET['password'];
?>

<html>
<head>
<title>Update Local People Profile</title>
	<?php
	include "../function/navigationBarLocalPpl.php";
	?>
<head>
<style>

table{
	width: 45%;
	font-size: 18px;
  border: 10px double grey;
  border-collapse: collapse;
  text-align:left;
  margin: auto;
}

th,td{
	 padding: 10px;
}

input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: none;
font-family: serif;
background-color: rgb(255,255,255,0.6);
  font-display: block;
	font-size: 18px;
}

input[type=email] {
  width: 100%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: none;
font-family: serif;
background-color: rgb(255,255,255,0.6);
  font-display: block;
	font-size: 18px;
}

select{
	 width: 100%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: none;
font-family: serif;
background-color: rgb(255,255,255,0.6);
  font-display: block;
	font-size: 18px;
}


.updateBtn{
	background-color: green;
	color: white;
	width: 130px;
	font-size: 18px;
	height: 35px;
	font-family: serif;
}	

input[type=submit]:hover{
	background-color: darkblue;
}

body{
	background: linear-gradient(lightpink,ghostwhite);
}

.overall{
	padding: 3%;
}

</style>
</head>

<body>
<div class="overall">
<form action="" method="GET">
<!-- <table border="0" bgcolor="black" align="center" cellspacing="20"> -->
<table cellspacing="10">
<tr>
	<td>Local People Id</td>
	<td><input type="text" value="<?php echo "$localpplid" ?>" name="localpplid" readonly></td>
</tr>

<tr>
	<td>First Name</td>
	<td><input type="text" value="<?php echo "$fname" ?>" name="fname" required></td>
</tr>

<tr>
	<td>Last Name</td>
	<td><input type="text" value="<?php echo "$lname" ?>" name="lname" required></td>
</tr>

<tr>
	<td>Gender (F/M)</td>
	<td><input type="text" value="<?php echo "$gender" ?>" name="gender" required></td>
</tr>

<tr>
	<td>Email</td>
	<td><input type="email" value="<?php echo "$email" ?>" name="email" required></td>
</tr>

<tr>
	<td>Phone No</td>
	<td><input type="text" value="<?php echo "$phoneno" ?>" name="phoneno" required></td>
</tr>

<tr>
	<td>UserName</td>
	<td><input type="text" value="<?php echo "$username" ?>" name="username" readonly></td>
</tr>

<tr>
	<td>Password</td>
	<td><input type="text" pattern=".{8,}" title="Minimum 8 characters" value="<?php echo "$password" ?>" name="password" required></td>
</tr>

<tr>
	<td colspan="2" align="center"><input class="updateBtn" type="submit" name="submit" value="Update"></td>
</tr>

</form>
</table>
</div>
</body>
</html>

<?php
if($_GET['submit']){
	$localpplid = $_GET['localpplid'];
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$phoneno = $_GET['phoneno'];
	$username = $_GET['username'];
	$password = $_GET['password'];

	if($gender == 'M' || $gender == 'F'){
		
	$query = "UPDATE localpeople SET localpplid='$localpplid',fname='$fname', lname='$lname', gender='$gender', email='$email', phoneno='$phoneno', username='$username', password='$password' WHERE username='$username' ";

	$data = mysqli_query($conn,$query);

	if($data){
	echo "<script>alert('Profile Updated')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/workshop2/localPpl/localPplProfile.php">
	<?php
	}
}

	else{
	echo "<script>alert('Failed to update profile')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/workshop2/localPpl/localPplProfile.php">
	<?php
	}

}

?>