<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$eID=$_GET['eID'];
$result=mysql_query("SELECT * FROM essay WHERE eID=$eID");
$row=mysql_fetch_array($result);
$check_query=mysql_query("SELECT * FROM ecollect WHERE eID='$eID' AND uID='$uID' LIMIT 1");
if(mysql_fetch_array($check_query)){
	echo "<script>alert('已收藏');location.href='http://localhost:8080/graduationproject/econtext.php?eID=$eID'</script>";
	exit;
}
$result=mysql_query("INSERT INTO ecollect(uID,eID,title)VALUES('$uID','$eID','$row[1]')");
header("location:http://localhost:8080/graduationproject/econtext.php?eID=$eID");
?>