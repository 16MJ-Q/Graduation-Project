<?php
include('conn.php');
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
//注册信息判断
if(!preg_match('/^[\w\x80-\xff]{3,12}$/', $username)){
	exit('<center>错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a></center>');
}
if(strlen($password) < 6){
	exit('<center>错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a></center>');
}
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('<center>错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a></center>');
}
//检测用户名是否已被注册
$check_query=mysql_query("SELECT uID FROM user WHERE username='$username' limit 1");
//检测邮箱是否已被注册
$check_query2=mysql_query("SELECT uID FROM user WHERE email='$email' limit 1");
if(mysql_fetch_array($check_query)){
	echo '<center>错误：用户名 ',$username,' 已存在<a href="javascript:history.back(-1);">返回</a></center>';
	exit;
}
if(mysql_fetch_array($check_query2)){
	echo '<center>错误：邮箱 ',$email,' 已存在<a href="javascript:history.back(-1);">返回</a></center>';
	exit;
}
//写入数据，MD5加密
$password=MD5($password);
$regdate=time();
$sql="INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email',$regdate)";
if(mysql_query($sql,$conn)){
	exit('<center>用户注册成功！点击此处 <a href="login.php">登录</a></center>');
}else{
	echo '<center>抱歉！添加数据失败：',mysql_error(),'<br/></center>';
	echo '<center>点击此处 <a href="javascript:history.back(-1);">返回</a>重试</center>';
}
?>