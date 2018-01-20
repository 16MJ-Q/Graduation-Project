<?php
session_start();
include("conn.php");
$eID=$_GET["eID"];
$result=mysql_query("DELETE FROM essay WHERE eID='$eID'");
if($result){
	echo "<script>alert('删除成功');</script>";
	exit;
}
?>"
}