<?php
session_start();
include("../connection/connection.php");
error_reporting(0);
$username = $_SESSION['username'];
?>

<html>
<head>
<title>Insert Feedback</title>
	<?php
	include "../function/navigationBarLocalPpl.php";
	?>
<head>
<style>

table{
	width: 32%;
	font-size: 18px;
  border: 10px double grey;
  border-collapse: collapse;
  text-align:left;
  margin: auto;
}

th,td{
	 padding: 10px;
}

input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: none;
font-family: serif;
background-color: rgb(255,255,255,0.6);
  font-display: block;
	font-size: 18px;
}


.insertBtn{
	font-family:serif;
	background-color: blueviolet;
	color: white;
	width: 120px;
	font-size: 18px;
	height: 35px;
}

body{
	background: linear-gradient(lightpink,ghostwhite);
}

.overall{
	padding: 3%;
}

.column{
	width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  font-display: block;
  font-family: serif;
	font-size: 18px;
}


</style>
</head>

<body>
<div class="overall">
<form action="" method="GET">
<!-- <table border="0" bgcolor="black" align="center" cellspacing="20"> -->
<table cellspacing="10">
<!-- <tr>
	<td>Statistics Id</td>
	<td><input type="text" value="<?php echo "$si" ?>" name="statisticsId" required></td>
</tr> -->

<!-- <tr>
	<td>DateTime</td>
	<td><input class="column"  name="datetime" value="<?php echo date("Y-m-d h:i:sa");?>" required></td>
</tr> -->

<tr>
	<td>Type</td>
	<td><select class="column" name="type">
      <option value="">-- Select type --</option>
      <option value="Complaint">Complaint</option>
      <option value="Report">Report</option>
      <option value="Feedback">Feedback</option>
  </select></p></td>
</tr>

<tr>
	<td>Comments</td>
	<td><textarea class="column" rows="4" cols="80" name="comments" required></textarea></td>
	<!-- <td><input type="textarea" value="<?php echo "$comments" ?>" name="comments" required></td> -->
</tr>

<tr>
	<td colspan="2" align="center"><input class="insertBtn" type="submit" name="submit" value="Insert"></td>
</tr>

</form>
</table>
</div>
</body>
</html>

<?php
if($_GET['submit']){
	$result = mysqli_query($conn, "select * from localpeople where username = '$username'");
	$row = mysqli_fetch_array($result);
	$type = $_GET['type'];
	$comments = $_GET['comments'];
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$datetime = date("Y-m-d H:i:sa",$d);
	if($type != ""){
	$query = "INSERT INTO feedback (type, datetime, comments,localpplid) VALUES ('$type', '$datetime', '$comments','$row[0]')";
	$data = mysqli_query($conn,$query);

	if($data){
	echo "<script>alert('New feedback inserted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/workshop2/localPpl/displayFeedback.php">
	<?php
	}
}

	else{
	echo "<script>alert('Failed to insert new feedback')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/workshop2/localPpl/displayFeedback.php">
	<?php
	}

}

?>