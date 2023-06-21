<?php
	error_reporting(0);
	session_start();

	$conn = mysqli_connect("localhost","root","","workshop2");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "select * from localpeople where username = '$username' and password = '$password'")
		 or die("Failed to query database ".mysql_error());
	$row = mysqli_fetch_array($result);

	if($row[6] == $username && $row[7] == $password){
		$_SESSION['username'] = $username;
		$localpplid = $row[0];
		// echo "$row[0]";
		echo "<script>alert('Local People successfully login!!! ');</script>";
		echo"<meta http-equiv='refresh' content='0; url=localPplSuccessLogin.php'/>";

	}else{
		echo "<script>alert('Please check your credentials')</script>";
		echo"<meta http-equiv='refresh' content='0; url=localPplLogin.php'/>";

	}
?>