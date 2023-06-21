<?php
session_start();
$adminname = $_SESSION['adminname'];
?>

<html>
<head>
	<title>Display Admin Activities</title>
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
	font-family:serif;
	background-color: green;
	color: white;
	width: 100px;
	font-size: 18px;
	height: 35px;
}	

.deleteBtn{
	font-family:serif;
	background-color: red;
	color: white;
	width: 100px;
	font-size: 18px;
	height: 35px;
}

.insertBtn{
	font-family:serif;
	background-color: blueviolet;
	color: white;
	width: 120px;
	font-size: 18px;
	height: 35px;
}

.overall{
	padding: 3%;
}

table, th, td{
	font-size: 18px;
  border: 5px groove darkblue;
  border-collapse: collapse;
  padding: 5px;
  text-align:left;
  margin: auto;
}

/*tr:nth-child(even) {
  background-color: #CDF3F1;
}

tr:nth-child(odd) {
  background-color: #AAC0EA;
}*/

tr {
  background-color: rgb(255,255,255);
}

.instruction{
	background-color: rgba(255,255,255,0.8);
	margin: 0 10px;
	padding: 10px;
}

span{
	color: orangered;
}


</style>
</head>

<body>
<div class="overall">

	<div class="instruction">
	<h2>Admin activities</h2>
	<h3>🔷Table below shows the admin activities.</h3>
	</div><br>

<table border="2" cellspacing="7" style="width:100%;">
<tr style="background-color: rgb(79, 208, 152);">
	<th style="width:10%;">Id</th>
	<th style="width:10%;">Admin Id</th>
	<th style="width:20%;">Old Password</th>
	<th style="width:20%;">New Password</th>
	<th style="width:20%;">Action</th>
	<th style="width:20%;">DateTime</th>
</tr>

<?php
	include("../connection/connection.php");
	error_reporting(0);
	$query="select * from passwordupdatelogs where adminid = (select adminid from admin where adminname = '$adminname')";
	$data = mysqli_query($conn, $query);
	$total=mysqli_num_rows($data);

	if($total != 0){
		while($result=mysqli_fetch_assoc($data)){
			echo"
				<tr>
				<td>".$result['id']."</td>
				<td>".$result['adminid']."</td>
				<td>".$result['oldpassword']."</td>
				<td>".$result['newpassword']."</td>
				<td>".$result['action']."</td>
				<td>".$result['datetime']."</td>
			";
		}
	}

	else{}
?>

</table>
</div>
</body>
</html>