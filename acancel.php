<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$aID=$_GET['aID'];
$result=mysql_query("DELETE FROM acollect WHERE uID='$uID' AND aID='$aID'");
header("");
?>
