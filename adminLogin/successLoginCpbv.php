<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>CPBV Page</title>
<head>
	<?php
	include "../function/navigationBarCpbv.php";
	?>
<style>

body{
	background: linear-gradient(lightgreen,ghostwhite);
	color: light
	background-repeat: no repeat;
	background-attachment: fixed;
}

.overall{
		padding: 3%;
}

.section {
  background-color: white;
  border: 10px outset yellowgreen;
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
  height: 75%;
  width: 100%;
}

.zoom:hover {
  transform: scale(1.2); 
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
	<h3 style="background: yellowgreen;text-indent: 3%;">CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV CPBV</h3>

<div class="overall">

	<div class="instruction">
	<h2>CPBV Main Page</h2>
	<h3>🔷Select <span>View Local People Report</span> to view local people report on dengue cases in Malacca state.</h3>
	<h3>🔷Select <span>Insert Fieldworker</span> to add new status of fieldworkers.</h3>
	<h3>🔷Select <span>Fieldworker Map Application</span> to view location of fieldworkers and measure the distance between fieldworkers and dengue hotspots.</h3>
	</div><br>

	<div class="section">
	<a href="../cpbvFunction/displayReport.php" >
		<div class="alignment">
			<img style="width:55%" class="zoom" src="../image/view.png"><hr>
	</div alignment>
	<h1>View Local People Report</h1></a>
	</div section>

	<div class="section">
	<a href="https://arcg.is/1CC1za1" target="_blank">
	<div class="alignment">
	<img class="zoom" style="width:100%;border:2px solid black;" src="../image/4.jpg"><hr>
	</div alignment>
	<h1>Insert Fieldworker</h1></a>
	</div section>

	<div class="section">
		<a href="https://utem.maps.arcgis.com/apps/webappviewer/index.html?id=a524291c11e14e7abd23da5d3ff552c7" target="_blank"><img style="width:100%" class="zoom" src="../image/3.jpg"><hr>
		<h1>Fieldworker Map Application</h1></a>
	</div section>




</div>

</body>
</html>