<?php
$connection = mysqli_connect('localhost','root','','workshop2');
$tables1 = array("admin","feedback","role","localpeople","logs","passwordupdatelogs");
$tables = array("localpeople","feedback","role","admin","logs","passwordupdatelogs");
$result = mysqli_query($connection,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
  $tables[] = $row[0];
}
$return = '';

foreach($tables1 as $table1){
  $result = mysqli_query($connection,"SELECT * FROM ".$table1);
  $num_fields = mysqli_num_fields($result);
  
  $return .= 'DROP TABLE '.$table1.';';
  // $return .= "\n".$row2[1]."\n";
  }

foreach($tables as $table){
  $result = mysqli_query($connection,"SELECT * FROM ".$table);
  $num_fields = mysqli_num_fields($result);
  
  // $return .= 'DROP TABLE '.$table.';';
  $row2 = mysqli_fetch_row(mysqli_query($connection,"SHOW CREATE TABLE ".$table));
  $return .= "\n\n".$row2[1].";\n";
  
  for($i=0;$i<$num_fields;$i++){
    while($row = mysqli_fetch_row($result)){
      $return .= "INSERT INTO ".$table." VALUES(";
      for($j=0;$j<$num_fields;$j++){
        $row[$j] = addslashes($row[$j]);
        if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
        else{ $return .= '""';}
        if($j<$num_fields-1){ $return .= ',';}
      }
      $return .= ");\n";
    }
  }
  $return .= "\n\n\n";
}
//save file
$handle = fopen("backup.sql","w+");
fwrite($handle,$return);
fclose($handle);
echo "<script>alert('Successfully backup')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../adminLogin/successLoginAdmin.php">
  <?php

// include "restore.php";
?>