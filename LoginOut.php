<?php
session_start();
include('conn.php');
//注销登录
if($_GET['action']=="logout"){
    unset($_SESSION['uID']);
    unset($_SESSION['username']);
    echo '<center>注销登录成功！点击此处 <a href="index.php" target="_top">回到主页</a></center>';
    exit;
}
?>