<?php
session_start();
include("conn.php");
$fID=$_GET["fID"];
$result=mysql_query("DELETE FROM forum WHERE fID='$fID'");
if($result){
	echo "<script>alert('删除成功');</script>";
	exit;
}
?>"
}