<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>	
	<!-- <link rel="stylesheet" type="text/css" href="../css/loginRegistrationStyle.css"> -->
	<?php
	include "../function/navigationBarLocalPpl.php";
	?>
<style>

body{
	background: linear-gradient(lightpink,ghostwhite);
	color: light
	background-repeat: no repeat;
	background-attachment: fixed;
}

.overall{
		padding: 3%;
}
/*
h1{
font-family:trebuchet ms;
text-align:right;
margin-right:5%;
font-size: 15px;
}

.part1{
	font-family: trebuchet ms;
	font-size: 18px;
		background-color: rgba(100,200,250,0.8);
	text-align: center;
	border-radius: 10px;
	padding: 2%;
	
}

.image{
	border-radius: 1000px;
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
}
*/

.section {
  background-color: white;
  border: 10px outset deeppink;
  padding: 50px;
  margin: 17px;
  float: left;
  height: 220px;
  width: 285px;
}

h1{
	margin-top: 4%;
	text-align: center;
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
  width:60%;
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
	
<h3 style="background:deeppink;text-indent: 3%;">LOCALPEOPLE LOCALPEOPLE LOCALPEOPLE LOCALPE0PLE LOCALPEOPLE LOCALPEOPLE LOCALPEOPLE LOCALPEOPLE LOCALPEOPLE</h3>
<div class="overall">

	<div class="instruction">
	<h2>Local People Main Page</h2>
	<h3>🔷Select <span>Submit Feedback/ Complaint/ Report</span> to submit new feedback.
	</div><br>

	<div class="section">
	<a href="displayFeedback.php" >
	<div class="alignment">
	<img class="zoom" src="data:image/png;base64,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"><hr>
	</div alignment>
	<h1>Submit Feedback/ Complaint/ Report</h1></a>
	</div section>

</div>

</body>
</html>