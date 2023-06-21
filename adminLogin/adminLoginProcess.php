<?php
	include "../connection/connection.php";
	session_start();
	error_reporting(0);

	$adminname = $_POST['adminname'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "select * from admin where adminname = '$adminname' and password = '$password'")
		 or die("Failed to query database ".mysql_error());

	$row = mysqli_fetch_array($result);

	if($row[1] == $adminname && $row[2] == $password && $row[3] == 1){
	$_SESSION['adminname'] = $adminname;
		echo "<script>alert('Admin successfully login!!!');</script>";
		echo"<meta http-equiv='refresh' content='0; url=successLoginAdmin.php'/>";
	}
	else if($row[1] == $adminname && $row[2] == $password && $row[3] == 2){
	$_SESSION['adminname'] = $adminname;
		echo "<script>alert('KKM successfully login!!!');</script>";
		echo"<meta http-equiv='refresh' content='0; url=successLoginKkm.php'/>";
	}
	else if($row[1] == $adminname && $row[2] == $password && $row[3] == 3){
	$_SESSION['adminname'] = $adminname;
		echo "<script>alert('CPBV successfully login!!!');</script>";
		echo"<meta http-equiv='refresh' content='0; url=successLoginCpbv.php'/>";
	}
	else{
		echo "<script>alert('Please check your credentials')</script>";
		echo"<meta http-equiv='refresh' content='0; url=adminLogin.php'/>";
	}

?>