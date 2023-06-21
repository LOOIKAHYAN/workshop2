<html>
<head>
	<title>Display Report</title>
	<?php
		include "../function/navigationBarCpbv.php";
	?>
<style>

body{
	background: linear-gradient(lightgreen,ghostwhite);
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

	<h2>Local People Report</h2>
	<h3>🔷Table below shows the reports about dengue submitted by local people in Malacca.</h3>
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
	include("../connection/connection.php");
	error_reporting(0);

	$query="select * from feedback where type='Report'";
	$data = mysqli_query($conn, $query);
	$total=mysqli_num_rows($data);

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

	else{}
?>

</table>
</div>
</body>
</html>