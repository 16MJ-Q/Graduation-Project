<?php
session_start();
include('conn.php');
$ID=$_GET['aID'];
$result=mysql_query("SELECT * FROM attachment WHERE aID=$ID");
$row=mysql_fetch_array($result);
$filename = "$row[4]";    
  
header("Content-Type: application-x/force-download");


header("Content-Disposition: attachment; filename=".basename($filename));  
readfile($filename);
 
?>