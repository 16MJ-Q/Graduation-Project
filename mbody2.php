<?php
session_start();
include('conn.php');
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uID'])){
	header("Location:login.php");
	exit();
}
$uID = $_SESSION['uID'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$user_query = mysql_query("SELECT * FROM user WHERE uID=$uID LIMIT 1");
$row = mysql_fetch_array($user_query);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_self"/>
</head>

<body>
<div class="board">
  <div class="modify"><a href="photo.php?uID=<?php echo $uID;?>" class="push_1">修改头像</a></div>
  <form action="ModifySave.php?uID=<?php echo $uID;?>" method="POST" id="ModForm" name="ModForm">
  <div class="info">
  用户名：<input type="text" value="<?php echo $username ?>" class="su" name="username"><br/><br/>
  生&nbsp;&nbsp;&nbsp;日：<input type="text" class="su" name="birthday"><br/><br/>
  性&nbsp;&nbsp;&nbsp;别：<input type="radio" value="女" name="sex">女&nbsp;&nbsp;&nbsp;<input type="radio" value="男" name="sex">男<br/><br/>
  签名档：<textarea name="info" class="su3"></textarea><br/><br/>
  邮&nbsp;&nbsp;&nbsp;箱：<input type="text" class="su" name="email"><br/><br/>
  密&nbsp;&nbsp;&nbsp;码：<input type="password" value="<?php echo $password ?>" name="pass" class="su"><br/><br/>
  <p><input class="push_3"  value="确认修改" type="submit" name="submit"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="mbody.php" class="icon">返回前页</a>
  </div>
  </form>
</div>
</body>
</html>