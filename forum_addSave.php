<?php
session_start();
include("conn.php");
$title=$_POST["title"];
$info=$_POST["info"];
$result=mysql_query("INSERT INTO forum(name,info) VALUES ('$title','$info')");
if($result){
	echo "<script>alert('添加成功');</script>";
	exit;
}
?>