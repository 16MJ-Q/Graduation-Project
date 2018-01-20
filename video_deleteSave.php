<?php
session_start();
include("conn.php");
$vID=$_GET["vID"];
$result=mysql_query("DELETE FROM video WHERE vID='$vID'");
if($result){
	echo "<script>alert('删除成功');</script>";
	exit;
}
?>"
}