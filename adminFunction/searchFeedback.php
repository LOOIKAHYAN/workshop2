<html>
<head>
	<title>Search Feedback</title>
	<?php
		error_reporting(0);
		include "../function/navigationBarAdmin.php";

	?>


<style>

	body{
	background: linear-gradient(lightsteelblue,ghostwhite);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}

.submitBtn{
	font-family:serif;
	background-color: green;
	color: white;
	width: 100px;
	font-size: 18px;
	height: 35px;
}	

	.overall{
		padding: 3%;
	}

	.alignment{
		text-align: center;
		background-color: lightskyblue;
		padding: 25px 0;
		border: 2px solid black;
		background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXvb4TO-CWZYxn1ILHZ5Kl4nxquCxVZXDO0g&usqp=CAU");
		background-attachment: scroll;
	}
	input[type=text] {
		text-align: left;
  width: 50%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: 2px solid black;
font-family: serif;

background-color: rgb(255,255,255);
  font-display: block;
	font-size: 18px;
	height: 45px;
}


input[type=submit] {
  width: 10%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: 2px solid black;
font-family: serif;
background-color: green;
  font-display: block;
	font-size: 18px;
	height: 45px;
}


table, th, td{
	font-size: 18px;
  border: 5px groove darkblue;
  border-collapse: collapse;
  padding: 5px;
  text-align:left;
  margin: auto;
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
	<h3>🔷Search for <span>feedback type(feedback/complaint/report)</span> in the search bar below.</h3>
	</div><br>

	<div class="alignment">
	<form action="" method="post">
	<input type="text" name="search" placeholder="Search for feedback type (Report/Complaint/Feedback)">
<input class="submitBtn" type ="submit" value="Search">
</form>
</div><br>

<table border="2" cellspacing="7" style="width:100%;">
	<tr style="background-color: rgb(79, 208, 152);">
	<th style="width:10%;">Feedback Id</th>
	<th style="width:13%;">DateTime</th>
	<th style="width:10%;">Type</th>
	<th style="width:55%;">Comments</th>
	<th style="width:12%;">Local People Id</th>
	</tr>

	<?php	

	$search = $_POST['search'];

	include "../connection/connection.php";

	$query = "select * from feedback where type like '%$search%'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);

	if($total != 0){
		while($result=mysqli_fetch_assoc($data)){
			echo"
			<tr>
			<td>".$result['feedbackid']."</td>
			<td>".$result['datetime']."</td>
			<td>".$result['type']."</td>
			<td>".$result['comments']."</td>
			<td>".$result['localpplid']."</td>
			";
		}	
	}
 else {}

?>



</div>
</table>
</body>
</html>
