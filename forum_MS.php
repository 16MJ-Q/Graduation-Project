<?php
session_start();
include("conn.php");
$fID=$_GET["fID"];
$title=$_POST["title"];
$info=$_POST["info"];
$result=mysql_query("UPDATE forum SET name='$title',info='$info' WHERE fID='$fID'");
if($result){
	echo "<script>alert('修改成功');</script>";
	exit;
}
?>