<?php
session_start();
include("conn.php");
$pID=$_GET["pID"];
$result=mysql_query("DELETE FROM post WHERE pID='$pID'");
if($result){
	echo "<script>alert('删除成功');</script>";
	exit;
}
?>"
}