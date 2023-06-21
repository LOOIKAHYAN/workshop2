<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/navigationBarStyle.css">
	<?php 
		include "function/navigationBar.php";
	?>
	
<style>

.mySlides {
	display:none;
	height: 350px;
}

body{
	background-image: url("image/login11.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

.slideshow{
	margin: auto;
}

button{
 	font-size: 18px;
 	color: white;
 	background-color: lightcoral;
 	border-radius: 5%;
 	padding: 1%;
}

.overall{
	padding: 3%;
}

.title{
	text-align: center;
	padding: 5px 20px;
	color: darkgreen;
	font-weight: 600;
	font-family: Lucida Handwriting;
	font-size: 40px;
	background-color: rgba(255,255,255,0.8);
	margin: 0 3%;
}

.title span{
	color: lightseagreen;
}

.section{
	text-align: center;
}

.text{
	font-family:serif;
	font-style: italic;
	text-align: center;
	color: black;
	background-color: whitesmoke;
	opacity: 0.5;
	margin-left: 30%;
	margin-right: 30%;
}

</style>
</head>
<body>
<div class="overall">
	<br><br><br><h1 class="title">DENGUE<span> INTEGRATED</span> VECTOR <span>MANAGEMENT</span> SYSTEM</h1><br><br>

	<div class="section">
		<img class src="https://www.nea.gov.sg/images/default-source/default-album/fy21/default-album/stop-dengue-with-block-banner_prevent-aedes-page.png" style="width:95%">
	</div><br>

	<?php
		include "function/liveDateTime.php";
	?>

</body>
</html>