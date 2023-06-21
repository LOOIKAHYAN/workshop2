<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Local People Profile</title>
	<?php
	include "../function/navigationBarLocalPpl.php";
	?>
<style>

body{
	background: linear-gradient(lightpink,ghostwhite);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
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

.deleteBtn{
	background-color: red;
	color: white;
	width: 130px;
	font-size: 18px;
	height: 35px;
}

.insertBtn{
	background-color: blueviolet;
	color: white;
	width: 200px;
	font-size: 18px;
	height: 35px;
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
	width: 40%;
	border-radius: 100px;
	border: none;
	text-align: center;
}

table, th, td{
  border: 10px ridge gray;
  border-collapse: collapse;
  padding: 8px;
  text-align: left;
}

/*tr:nth-child(even) {
  background-color: #D6EEEE;
}*/

/*tr {
  background-color: #D6EEEE;
}
*/
</style>
</head>

<body>

<div class="overall">
<table border="5" cellspacing="5">
	
<tr>
	<th colspan="8" style="text-align: center;"><img class="userlogo" src="../image/user1.jpg"></th>
</tr>


<?php 
include("../connection/connection.php");
$query="select * from localpeople where username = '$username'";
$data = mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
if($total != 0){
	while($result=mysqli_fetch_assoc($data)){
		echo"
		<tr>
			<th>Local People Id</th>
			<td>".$result['localpplid']."</td>
		</tr>

		<tr>
			<th>First Name</th>
			<td>".$result['fname']."</td>
		</tr>

		<tr>
			<th>Last Name</th>
			<td>".$result['lname']."</td>
		</tr>

		<tr>
			<th>Gender</th> 
			<td>".$result['gender']."</td>
		</tr>

		<tr>
			<th>Email</th> 
			<td>".$result['email']."</td>
		</tr>

		<tr>
			<th>Phone No</th> 
			<td>".$result['phoneno']."</td>
		</tr>

		<tr>
			<th>Username</th> 
			<td>".$result['username']."</td>
		</tr>

		<tr>
			<th>Password</th> 
			<td>".$result['password']."</td>
		</tr>
		";

		echo"
	<tr>
		<td><a href='updateLocalPplProfile.php?localpplid=$result[localpplid]&fname=$result[fname]&lname=$result[lname]&gender=$result[gender]&email=$result[email]&phoneno=$result[phoneno]&username=$result[username]&password=$result[password]'><input type='submit' value='Update Profile' class='updateBtn'></td>
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