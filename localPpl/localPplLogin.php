<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Local People Login</title>
	<link rel="stylesheet" type="text/css" href="../css/navigationBarStyle.css">
	<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
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

/*body{
font-size: 20px;
}
*/

.form{
	margin: auto; 
	font-size: 20px;
	font-display: block;
	background-color: rgb(255,255,255,0.5);
	border: solid black 3px;
	border-radius: 12px;
	width: 40%;
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
line-height: 105px;
}

input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-family: serif;
  font-display: block;
font-size: 18px;
}


input[type=password] {
  width: 100%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-family: serif;
  font-display: block;
font-size: 18px;
}

input[type=submit]{
margin-top: 2%;
 width: 20%;
text-align: center;
  padding: 10px 20px;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 5px;
  font-family: serif;
  font-display: block;
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
		<p class="text"><b><img class="image" src="../image/usericon2.png">LOCAL PEOPLE LOGIN</b></p>
		<form action="localPplLoginProcess.php" method ="POST">

		<p><label>Username</label><input type ="text" placeholder="Username" name="username" required autofocus></p>
			
			<p><label>Password</label><input type ="password" placeholder="Password" name="password" required autofocus>
			</p>
		
			<p><input type="submit" value="Login"</p>
	
			<br><br><p><a title="Click here to go for registration" href="http://localhost/workshop2/localPpl/localPplRegister.php">Registration?</a></p>
			
	
		</form>
	</div>

</div>
</body>
</html>