<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Admin Page</title>
<head>
	<?php
	include "../function/navigationBarAdmin.php";
	?>
<style>

body{
	background: linear-gradient(lightsteelblue,ghostwhite);
	color: light
	background-repeat: no repeat;
	background-attachment: fixed;
}

.overall{
		padding: 3%;
}

.section {
  background-color: white;
  border: 10px outset steelblue;
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

.zoom{
  transition: transform .2s;
  height: 80%;
  width:100%;
}

.zoom:hover {
  transform: scale(1.2); 
}

.alignment{
	text-align: center;
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
	
<h3 style="background: steelblue;text-indent: 3%;">ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN ADMIN </h3>
<div class="overall">

	<div class="instruction">
	<h2>Admin Main Page</h2>
	<h3>🔷Select <span>View Feedback/Complaint/Report</span> to view local people feedback.</h3>
	<h3>🔷Select <span>View User Activities</span> to view local people activities.</h3>
	<h3>🔷Select <span>View Admin Activities</span> to view admin activities.</h3>
	<h3>🔷Select <span>Database Backup</span> for undergoing backup in sql format.</h3>
	<h3>🔷Select <span>Database Recovery</span> for undergoing recovery in phpmyadmin.</h3>
	</div><br>
	
	<div class="section">
	<a href="../adminFunction/searchFeedback.php"><img class="zoom" src="../image/feedback.png"><hr>
	<h1>View Feedback/ Complaint /Report</h1></a>
	</div section>

	<div class="section">
	<a href="../adminFunction/displayUserActivities.php"><img class="zoom" src="../image/activity.png"><hr>
	<h1>View User Activities</h1></a>
	</div section>

	<div class="section">
	<a href="../adminLogin/displayAdminActivities.php"><img class="zoom" src="../image/adminactivity.png"><hr>
	<h1>View Admin Activities</h1></a>
	</div section>

	<!-- <div class="section">
		<div class="alignment">
	<a target="_blank" href="../backup/backup.php"><img style="width: 60%" class="zoom" src="../image/backup.png"><hr>
	<h1>Database Backup and Recovery</h1></a>
</div>
</div> -->

	<div class="section">
		<div class="alignment">
	<a target="_blank" href="../backup/backup.php"><img style="width: 60%" class="zoom" src="../image/backup2.jpg"><hr>
	<h1>Database Backup</h1></a>
</div>
</div>

<div class="section">
		<div class="alignment">
	<a target="_blank" href="../backup/restore.php"><img style="width: 60%" class="zoom" src="../image/backup.png"><hr>
	<h1>Database Recovery</h1></a>
</div>
</div>





</div>

</body>
</html>