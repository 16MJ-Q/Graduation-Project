<?php
session_start();
include('conn.php');
$username = ($_POST['username']);
$password = MD5($_POST['password']);
$imgcode = ($_POST['imgCode']);
$imagecode  = ($_SESSION['thisimagecode']) ;

if($imgcode!=$imagecode){
     echo '<center>请输入正确的验证码<a href="javascript:history.back(-1);">返回</a></center>';
	 exit;
}
//验证登录
$check_query = mysql_query("SELECT uID FROM user WHERE username='$username' AND password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
	//登录成功
	$_SESSION['uID'] = $result['uID'];
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
	if($_SESSION['username']=="admin"){
		echo '<center>欢迎进入<a href="manage.php" target="_top">管理页面</a><br/></center>';
	}else{
		echo '<center>',$username,' 欢迎你！回到 <a href="index.php" target="_top">首页</a><br/>','</center>';
	}
	exit;
}else{
	exit('<center>用户名或密码不正确！点击此处 <a href="javascript:history.back(-1);">返回</a>重试</center>');
}
?>