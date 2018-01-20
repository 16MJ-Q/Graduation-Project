<?php
session_start();
include("conn.php");
$type=$_POST["select"];
$title=$_POST["title"];
$author=$_POST["author"];
$reference=$_POST["reference"];
$info=$_POST["info"];
$context=$_POST["context"];
$result=mysql_query("INSERT INTO video(vtitle,addtime,info,vtID,text,author,reference) VALUES ('$title',now(),'$info','$type','$context','$author','$reference')");

?>