<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$aID=$_GET['aID'];
$result=mysql_query("SELECT * FROM attachment WHERE aID=$aID");
$row=mysql_fetch_array($result);
$check_query=mysql_query("SELECT * FROM acollect WHERE aID='$aID' AND uID='$uID' LIMIT 1");
if(mysql_fetch_array($check_query)){
	echo "<script>alert('已收藏');location.href='http://localhost:8080/graduationproject/acontext.php?aID=$aID'</script>";
	exit;
}
$result2=mysql_query("INSERT INTO acollect(uID,aID,title)VALUES('$uID','$aID','$row[1]')");
header("location:http://localhost:8080/graduationproject/acontext.php?aID=$aID");
?>