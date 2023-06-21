<?php
session_start();
$username = $_SESSION['username'];
?>

<html>
<head>
	<title>Display Feedback</title>
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
	width: 180px;
	font-size: 18px;
	height: 35px;
}

.overall{
	padding: 3%;
}

table, th, td{
	font-size: 18px;
  border: 10px double grey;
  border-collapse: collapse;
  padding: 5px;
  text-align:left;
  margin: auto;
}

tr:nth-child(even) {
  background-color: #CDF3F1;
}

tr:nth-child(odd) {
  background-color: #AAC0EA;
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
	<h2>Local People Feedback</h2>
	<h3>🔷Table below shows the local people feedback/complaint/report.</h3>
	<h3>🔷Press <span>Submit New</span> button to add new feedback.</h3>
	</div><br>

<table border="2" cellspacing="7" style="width: 100%">
<tr>
	<th style="width: 15%;">DateTime</th>
	<th style="width: 10%;">Type</th>
	<th style="width: 75%;">Comments</th>
	<!-- <th>Local People Id</th> -->
</tr>

<?php 
include("../connection/connection.php");
error_reporting(0);
$query="select * from feedback where localpplid = (select localpplid from localpeople where username = '$username')";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0){
	while($result=mysqli_fetch_assoc($data)){
		echo"
		<tr>
		<td>".$result['datetime']."</td>
		<td>".$result['type']."</td>
		<td>".$result['comments']."</td>
		</tr>
		";
		// $localpplid = $result['localpplid'];
	
	}
		echo"
	<td><a href='insertFeedback.php?feedbackid=$result[feedbackId]&datetime=$result[datetime]&type$result[type]&comments=$result[comments]&localpplid=$result[localpplid]'><input type='submit' value='Submit New' class='insertBtn'></td>
	";
	
}
else{
	echo"
	<td><a href='insertFeedback.php?feedbackid=$result[feedbackId]&datetime=$result[datetime]&type$result[type]&comments=$result[comments]&localpplid=$result[localpplid]'><input type='submit' value='Submit New' class='insertBtn'></td>
	";
	
}
?>

</table>
</div>
</body>
</html>