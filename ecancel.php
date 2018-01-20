<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$eID=$_GET['eID'];
$result=mysql_query("DELETE FROM ecollect WHERE uID='$uID' AND eID='$eID'");
header("location:http://localhost:8080/graduationproject/my.php");
?>