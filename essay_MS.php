<?php
session_start();
include("conn.php");
$eID=$_GET["eID"];
$type=$_POST["select"];
$title=$_POST["title"];
$author=$_POST["author"];
$reference=$_POST["reference"];
$info=$_POST["info"];
$context=$_POST["context"];
$result=mysql_query("UPDATE essay SET etitle='$title',info='$info',etID='$type',text='$context',author='$author',reference='$reference' WHERE eID='$eID'");
if($result){
	echo "<script>alert('修改成功');</script>";
	exit;
}
?>