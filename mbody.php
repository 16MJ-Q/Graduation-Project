<?php
session_start();
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uID'])){
	header("Location:login.php");
	exit();
}
//包含数据库连接文件
include('conn.php');
$uID = $_SESSION['uID'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$user_query = mysql_query("select * from user where uID=$uID limit 1");
$row = mysql_fetch_array($user_query);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
</head>

<body>
<div class="board">
  <div class="modify"><a href="mbody2.php" class="push_1" target="_self">修改</a></div>
  <div class="mcollect"><a href="mcollect.php?uID=<?php echo $uID;?>" class="push_1" target="_self">我的收藏</a></div>
  <form action="ModifySave.php" method="POST" name="ModForm">
  <div class="info">
  用户名：<input name="username2" class="su" type="text" value="<?php echo $username ?>"><br/><br/>
  生&nbsp;&nbsp;&nbsp;日：<input type="text" value=<?php echo $row[9];?> name="birth" class="su"><br/><br/>
  性&nbsp;&nbsp;&nbsp;别：<input type="radio" value="女" name="sex">女&nbsp;&nbsp;&nbsp;<input type="radio" value="男" name="sex">男<br/><br/>
  头&nbsp;&nbsp;&nbsp;像：<img name="photo" src="<?php echo $row[3];?>" class="img"><br/><br/>
  签名档：<textarea name="info" class="su3"><?php echo $row[7];?></textarea><br/><br/>
  邮&nbsp;&nbsp;&nbsp;箱：<input class="su" value=<?php echo $row[4];?> type="text"><br/><br/>
  密&nbsp;&nbsp;&nbsp;码：<input name="pass" type="password" class="su" value="<?php echo $password ?>"><br/><br/>
  </div>
  </form>
</div>
</body>
</html>