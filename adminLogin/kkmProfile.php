<?php
session_start();
$adminname = $_SESSION['adminname'];
?>

<!DOCTYPE html>
<html>
	<title>KKM Profile</title>
<head>

	<?php
	include "../function/navigationBarKkm.php";
	?>
<style>

body{
	background: linear-gradient(lightblue,ghostwhite);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}

.updateBtn{
	background-color: green;
	color: white;
	font-size: 20px;
	height: 38px;
	font-family: serif;
	width: 140px;
}	

input[type=submit]:hover{
	background-color: darkblue;
}

.overall{
	padding: 3%;
}

table{
	color: black;
	border-radius: 10px;
	margin:auto;
	background: linear-gradient(white,ghostwhite);
	padding: 10px;
	font-size: 20px;
	border: 2px solid black;
	opacity: 0.8;
}

.userlogo{
	width: 30%;
	border-radius: 100px;
	border: none;
	text-align: center;
}

table, th, td{
  border: 10px ridge darkslateblue;
  border-collapse: collapse;
  padding: 8px;
  text-align: left;
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
	<th colspan="2" style="text-align: center;"><img class="userlogo" src="../image/kkm.jpg"></th>
</tr>


<?php 
include("../connection/connection.php");
$query="select * from admin where adminid = (select adminid where adminname = '$adminname')";
$data = mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
if($total != 0){
	while($result=mysqli_fetch_assoc($data)){
		echo"
		<tr>
			<th>Admin Id</th>
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
		<td><a href='updateKkmProfile.php?adminid=$result[adminid]&adminname=$result[adminname]&password=$result[password]&roleid=$result[roleid]'><input type='submit' value='Update Profile' class='updateBtn'></td>
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