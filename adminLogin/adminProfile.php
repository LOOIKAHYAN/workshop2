<?php
session_start();
$adminname = $_SESSION['adminname'];
?>

<!DOCTYPE html>
<html>
	<title>Admin Profile</title>
<head>
	<?php
		include "../function/navigationBarAdmin.php";
	?>
<style>

body{
	background: linear-gradient(lightsteelblue,ghostwhite);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}

.updateBtn{
	background-color: green;
	color: white;
	width: 140px;
	font-size: 20px;
	height: 38px;
	font-family: serif;
}	

input[type=submit]:hover{
	background-color: darkblue;
}

.overall{
	padding: 3%;
}

.userlogo{
	width: 20%;
	border: none;
	text-align: center;
}

table, th, td{
  border: 10px ridge darkslateblue;
  border-collapse: collapse;
  padding: 8px;
  text-align:left;
  margin: auto;
  font-size: 20px;
}

tr:nth-child(odd) {
  background-color: rgb(191, 202, 255);
}

tr:nth-child(even) {
  background-color: rgb(191, 202, 225);
}


</style>
</head>

<body>

<div class="overall">
<table border="5" cellspacing="5" style="width:40%;">
	 
<tr>
	<th colspan="2" style="text-align: center;"><img class="userlogo" src="../image/admin4.jpg"></th>
</tr>


<?php 
include("../connection/connection.php");
$query = "select * from admin where adminname = '$adminname'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0){
	while($result=mysqli_fetch_assoc($data)){
		echo"
		<tr>
			<th >Admin Id</th>
			<td>".$result['adminid']."</td>
		</tr>

		<tr>
			<th>Admin Name</th>
			<td>".$result['adminname']."</td>
		</tr>

		<tr>
			<th>Password</th>
			<td>".$result['password']."</td>
		</tr>

		<tr>
			<th>Role Id</th> 
			<td>".$result['roleid']."</td>
		</tr>
		";

			echo"
	<tr>
		<td><a href='updateAdminProfile.php?adminid=$result[adminid]&adminname=$result[adminname]&password=$result[password]&roleid=$result[roleid]'><input type='submit' value='Update Profile' class='updateBtn'></td>
		<td></td>
	</tr>
	";
	}

	

}
else{
}
?>

</table>
</div>
</body>
</html>