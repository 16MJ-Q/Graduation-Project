<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$vID=$_GET['vID'];
$result=mysql_query("DELETE FROM vcollect WHERE uID='$uID' AND vID='$vID'");
header("location:http://localhost:8080/graduationproject/my.php");
?>