<?php
session_start();
include("conn.php");
$type=$_POST["select"];
$title=$_POST["title"];
$author=$_POST["author"];
$reference=$_POST["reference"];
$info=$_POST["info"];
$context=$_POST["context"];
$result=mysql_query("INSERT INTO essay(etitle,addtime,info,etID,text,author,reference) VALUES ('$title',now(),'$info','$type','$context','$author','$reference')");
if($result){
	echo "<script>alert('添加成功');</script>";
	exit;
}
?>