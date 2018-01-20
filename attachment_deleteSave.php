<?php
session_start();
include("conn.php");
$aID=$_GET["aID"];
$result=mysql_query("DELETE FROM attachment WHERE aID='$aID'");
if($result){
	echo "<script>alert('删除成功');</script>";
	exit;
}
?>"
}