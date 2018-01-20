<?php
session_start();
include('conn.php');
$uID=$_SESSION['uID'];
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
</head>

<body class="all">
<div class="left">
 <a href="index.php" class="icon"><h1>日本語部屋</h1></a>
</div>

<div class="middle">	
 <form action="search.php" method="post">
 <input type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;搜索帖子、文章、视频、资料" class="search" name="input"/>
 <select class="select" name="select">
  <option value="ptitle">贴子</option>
  <option value="etitle">文章</option>
  <option value="vtitle">视频</option>
  <option value="atitle">资料</option>
 </select>
 </form>
</div>

<div>
 <ul class="u1">
  <li>
   <a class="push_1" href="my.php?uID=<?php echo $uID?>"><?php echo $username ?></a>
  </li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>
   <a class="push_2" href="LoginOut.php?action=logout" target="iframe_body">退出登录</a>
  </li>
 </ul>
</div>

</body>
</html>