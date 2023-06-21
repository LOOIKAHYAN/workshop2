<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>KKM Page</title>
<head>
	<?php
	include "../function/navigationBarKkm.php";
	?>
<style>

body{
	background: linear-gradient(lightblue,ghostwhite);
	background-repeat: no repeat;
	background-attachment: fixed;
}

.overall{
		padding: 3%;
}

.instruction{
	background-color: rgba(255,255,255,0.8);
	margin: 0 10px;
	padding: 10px;
}

span{
	color: orangered;
}

/*h1{
font-family:trebuchet ms;
text-align:right;
margin-right:5%;
font-size: 15px;
}

.part1{
	font-family: trebuchet ms;
	font-szie: 18px;
	background-color: rgba(100,200,250,0.8);
	text-align: center;
	border-radius: 10px;
	padding: 2%;
	margin-left:20px;
	margin-right:20px;
}


.image{
	
	border-radius: 12px;
	width: 50%;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}*/

.section {
  background-color: white;
  border: 10px outset lightslategrey;
  padding: 50px;
  margin: 10px;
  float: left;
  height: 220px;
  width: 285px;
}

h1{
	text-align: center;
		margin-top: 4%;
		font-size: 25px;
}

a{	
	text-decoration: none;
}

.alignment{
	text-align: center;
}

.zoom{
  transition: transform .2s;
  width: 180px;
}

.zoom:hover {
  transform: scale(1.2); 
}

</style>
</head>
<body>
	
<h3 style="background:lightslategrey;text-indent: 3%;">KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM KKM</h3>
<div class="overall">

	<div class="instruction">
	<h2>KKM Main Page</h2>
	<h3>🔷Select <span>View Local People Report</span> to view local people report on dengue cases in Malacca state.</h3>
	<h3>🔷Select <span>Edit/Delete Fieldworker</span> to update or delete the status of fieldworkers.</h3>
	<h3>🔷Select <span>Fieldworker Dashboard</span> to view the status of fieldworkers.</h3>
	<h3>🔷Select <span>Fieldworker Map Application</span> to track and monitor the location of fieldworkers.</h3>
	</div><br>
	
	<div class="section">
	<a href="../kkmFunction/displayReport.php" >
		<div class="alignment">
			<img style="width:55%" class="zoom" src="../image/view.png"><hr>
	</div alignment>
	<h1>View Local People Report</h1></a>
	</div section>

	<div class="section">
	<a href="https://arcg.is/HLi8D" target="_blank">
	<div class="alignment">
	<img style="width:100%" class="zoom" src="../image/hotspot.jpg"><hr>
	</div alignment>
	<h1>Edit/Delete Fieldworker</h1></a>
	</div section>

	<div class="section">
		<a href="https://utem.maps.arcgis.com/apps/dashboards/7bbe8b38fa004666a82bfd200cd69d2b" target="_blank"><img style="width:100%" class="zoom" src="../image/2.jpg"><hr>
		<h1>Fieldworker Dashboard</h1></a>
	</div section>

	<div class="section">
		<a href="https://utem.maps.arcgis.com/apps/webappviewer/index.html?id=a524291c11e14e7abd23da5d3ff552c7" target="_blank"><img style="width:100%" class="zoom" src="../image/3.jpg"><hr>
		<h1>Fieldworker Map Application</h1></a>
	</div section>

</div>


</body>
</html>