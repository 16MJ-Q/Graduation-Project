<?php
session_start();
include('conn.php');
$uID=$_SESSION['uID'];
$username = $_POST['username'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$info = $_POST['info'];
$email = $_POST['email'];
$password = $_POST['pass'];
$password = MD5($password);
$regdate = time();
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password) < 6){
	exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
}
$check_query=mysql_query("SELECT uID FROM user WHERE username='$username' LIMIT 1");
if($result=mysql_fetch_array($check_query)){
	echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
}else{
$sql = "UPDATE user SET username='$username',birthday='$birthday',sex='$sex',info='$info',email='$email',password='$password' WHERE uID='$uID'";
if(mysql_query($sql,$conn)){
	echo "<script>alert('修改用户信息成功');location.href='http://localhost:8080/graduationproject/mbody.php?uID=$uID'</script>";
} else {
	echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
}
?>
