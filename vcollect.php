<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$vID=$_GET['vID'];
$result=mysql_query("SELECT * FROM video WHERE vID=$vID");
$row=mysql_fetch_array($result);
$check_query=mysql_query("SELECT * FROM vcollect WHERE vID='$vID' AND uID='$uID' LIMIT 1");
if(mysql_fetch_array($check_query)){
	echo "<script>alert('已收藏');location.href='http://localhost:8080/graduationproject/vcontext.php?vID=$vID'</script>";
	exit;
}
$result=mysql_query("INSERT INTO vcollect(vID,uID,title)VALUES('$vID','$uID','$row[1]')");
header("location:http://localhost:8080/graduationproject/vcontext.php?vID=$vID");
?>