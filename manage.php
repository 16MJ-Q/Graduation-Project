<?php
session_start();
include('conn.php');
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uID'])){
	header("Location:login.php");
	exit();
}
if($_SESSION['uID']!=7){
	header("Location:login.php");
	exit();	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style2.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="iframe_manage"/>
<title>管理页面</title>
</head>

<body>
<div id="container">
<div>
<ul>
<li><a href="essay_manage.php" class="aa" target="iframe_manage">文章管理|</a></li>
<li><a href="video_manage.php" class="aa" target="iframe_manage">视频管理|</a></li>
<li><a href="attachment_manage.php" class="aa" target="iframe_manage">资料管理|</a></li>
<li><a href="forum_manage.php" class="aa" target="iframe_manage">论坛管理</a></li>
</ul>
</div>
<div id="page">
<div class="ileft">
<iframe  name="iframe_manage" frameborder="0" width=30% height=1000px scrolling="no"></iframe>
</div>
<div class="iright">
<iframe  name="detail_manage" frameborder="0" width=70% height=1000px scrolling="no"></iframe>
</div>
</div>
</div>
<div id="footer">
 <iframe src="foot.php" class="ifoot" frameborder="0" scrolling="no"></iframe>
</div>

</body>
</html>