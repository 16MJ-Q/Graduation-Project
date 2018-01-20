<?php
session_start();
include("conn.php");
$vID=$_GET["vID"];
$type=$_POST["select"];
$title=$_POST["title"];
$author=$_POST["author"];
$reference=$_POST["reference"];
$info=$_POST["info"];
$context=$_POST["context"];
$result=mysql_query("UPDATE video SET vtitle='$title',info='$info',vtID='$type',text='$context',author='$author',reference='$reference' WHERE vID='$vID'");
if($result){
	echo "<script>alert('修改成功');</script>";
	exit;
}
?>