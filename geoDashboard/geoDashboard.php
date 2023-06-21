
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GeoDashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/navigationBarStyle.css">
 	<?php
		include "../function/navigationBar.php"
	?>

<style>

body{
	background-image: url("../image/login11.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

.overall{
	padding: 3%;
}

.image{
	
  width: 100%;
	border: none;
	text-align: center;
}

.section {
  background-color: white;
  border: 15px ridge slategray;
  padding: 50px;
  margin: 10px;
  float: left;
  height: 220px;
  width: 290px;
}

.zoom{
  transition: transform .5s;
  border: 5px solid black;
  height: 80%;
  width: 100%;
}

.zoom:hover {
  transform: scale(1.2); 
}

a{	
	text-decoration: none;
}

h1{
	margin-top: 4%;
	text-align: center;
	font-size: 25px;
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


<div class = "overall">

	<div class="instruction">
	<h2>GeoDashboard</h2>
	<h3>🔷Select <span>KKM Dashboard</span> to view the location of KKM in Malacca. KKM types consist of hospital, klinik desa, klinik komuniti and klinik kesihatan.</h3>
	<h3>🔷Select <span>Dengue Cases Dashboard</span> to view dengue cases in Malacca. The dengue cases could be view based on district including Alor Gajah, Melaka Tengah and Jasin.</h3>
	<h3>🔷Select <span>KKM and Dengue Buffer Dashboard</span> to view the number of dengue cases within 2km of the particular KKM location.</h3>
	</div><br>

	<div class="section">
		<a href="https://utem.maps.arcgis.com/apps/dashboards/b23b6c3af8234ee8978a0619769b64bf" target="_blank"><img class="zoom" src="../image/geo1.jpg"><hr>
		<h1>KKM Dashboard</h1></a>
	</div section>

<div class="section">
		<a href="https://utem.maps.arcgis.com/apps/dashboards/6da1252dca63491e9993b922b592da0e" target="_blank"><img class="zoom" src="../image/geo.jpg"><hr>
		<h1>Dengue Cases Dashboard</h1></a>
	</div section>

	<div class="section">
		<a href="https://utem.maps.arcgis.com/apps/dashboards/9883e2bbcec54f0c946c9254a28bfaa5" target="_blank"><img class="zoom" src="../image/geo3.jpg"><hr>
		<h1>KKM and Dengue Buffer Dashboard</h1></a>
	</div section>

</div overall>
</body>
</html>