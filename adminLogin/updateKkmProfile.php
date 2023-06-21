<?php
session_start();
$adminname=$_SESSION['adminname'];
include("../connection/connection.php");
error_reporting(0);
$adminid = $_GET['adminid'];
$adminname = $_GET['adminname'];
$password = $_GET['password'];
$roleid = $_GET['roleid'];
?>

<html>
<head>
<title>Update KKM Profile</title>
	<?php
	include "../function/navigationBarAdmin.php";
	?>
<head>
<style>

table{
	width: 32%;
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
	background: linear-gradient(lightblue,ghostwhite);
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
	<td>Admin Id</td>
	<td><input type="text" value="<?php echo "$adminid" ?>" name="adminid" readonly></td>
</tr>

<tr>
	<td>Admin Name</td>
	<td><input type="text" value="<?php echo "$adminname" ?>" name="adminname" readonly></td>
</tr>

<tr>
	<td>Password</td>
	<td><input type="text" pattern=".{8,}" title="Minimum 8 characters" value="<?php echo "$password" ?>" name="password" required></td>
</tr>

<tr>
	<td>Role Id</td>
	<td><input type="text" value="<?php echo "$roleid" ?>" name="roleid" readonly></td>
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
	$adminid = $_GET['adminid'];
	$adminname = $_GET['adminname'];
	$password = $_GET['password'];
	$roleid = $_GET['roleid'];
$query = "UPDATE admin SET adminid='$adminid',adminname='$adminname',password='$password',roleid='$roleid' WHERE adminname='$adminname' ";

$data = mysqli_query($conn,$query);

if($data){
	echo "<script>alert('KKM Profile Updated')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/workshop2/adminLogin/kkmProfile.php">
	<?php
}

else{
	echo "<script>alert('Failed to update KKM profile')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/workshop2/adminLogin/kkmProfile.php">
	<?php
}

}
?>