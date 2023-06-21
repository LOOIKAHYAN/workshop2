<?php
error_reporting(0);
$connection = mysqli_connect('localhost','root','','workshop2_restore');

$filename = 'backup.sql';
$handle = fopen($filename,"r+");
$contents = fread($handle,filesize($filename));

$sql = explode(';',$contents);
echo "<script>alert('Successfully restore')</script>";
foreach($sql as $query){
  $result = mysqli_query($connection,$query);
  if($result){
      echo '<tr><td><br></td></tr>';
      echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
      echo '<tr><td><br></td></tr>';
  }

    ?>

  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/phpmyadmin/index.php?route=/database/structure&db=workshop2_restore">
  <?php


}
fclose($handle);
echo 'Successfully imported';
