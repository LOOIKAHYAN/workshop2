<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<?php
		include "../function/navigationBar.php";
	?>
<style>

body{
	background-image: url("../image/login11.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

.form{
	margin: auto; 
	font-display: block;
	font-size: 20px;
	background-color: rgb(255,255,255,0.5);
	border: solid black 3px;
	border-radius: 12px;
	width: 30%;
	padding: 2%;
}

.image{
	float:left;
	border-radius: 1000px;
	width: 18%;
}

.text{
font-family: serif;
font-size: 32px;
color: black;
text-align: center;
line-height:25px;
}

input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
	font-family: serif;
	font-size: 18px;
}

input[type=password] {
  width: 100%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
  font-family: serif;
	font-size: 18px;
}

input[type=submit]{
	margin-top: 2%;
 	width: 25%;
	text-align: center;
  padding: 10px 20px;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 5px;
  font-display: block;
	font-family: serif;
	font-size: 18px;
	background-color: pink;
  color:black;
  border-radius: 5px;
}

input[type=submit]:hover{
  background-color: red;
}

.form a:hover{
  color: red;
}

.overall{
	padding: 3%;
}

</style>
</head>

<body>
<div class="overall">
	<div class="form">
		<h1 class="text"><img class="image" src="../image/usericon2.png"><br>ADMIN LOGIN</h1><br>
		<form action="adminLoginProcess.php" method ="POST">
			<br><p><label>AdminName</label><input type ="text" placeholder="AdminName" name="adminname" required autofocus></p>

			<p><label>Password</label><input type ="password" placeholder="Password" name="password" required autofocus>
		
			<p><input type="submit" value="Login"</p><br>
		</form>
	</div>
</div>

</body>
</html>