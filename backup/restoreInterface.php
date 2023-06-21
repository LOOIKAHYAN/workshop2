<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Backup and Recovery in phpmyadmin</title>
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

.backupBtn{
	border: 5px solid black;
	padding: 15px 20px;
	background-color: steelblue;
	text-decoration: none;
	color: white;
	font-weight: 600;
	width: 130px;
	font-size: 20px;
	font-family: serif;
}

a:hover{
	background-color: slateblue;
}

a:active{
	background-color: red;
}

.image{
	width:10%;
	float: left;
	margin-right: 10px;
}

h1{
	margin-bottom: 30px;
}

</style>
</head>

<body>

<div class="overall">
<img class="image" src="../image/backup.png">
<h1>Phpmyadmin Database Backup</h1>
<a href="recover.php" class="backupBtn">Recovery</a><br><br><br><br>
</div>

</body>
</html>