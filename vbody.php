<?php
session_start();
include('conn.php');
$result=mysql_query("SELECT * FROM video ORDER BY reader DESC LIMIT 9");
$count=mysql_query("SELECT count(*) FROM video");
$rs=mysql_fetch_array($count);
$total=$rs[0];
$best=mysql_query("SELECT * FROM video ORDER BY reader DESC LIMIT 1");
$row2=mysql_fetch_array($best);
$last=mysql_query("SELECT * FROM video ORDER BY vID DESC LIMIT 1");
$row3=mysql_fetch_array($last);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style2.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
</head>

<body class="all">
<div class="wholeessay">
 <ul>
  <li>
   <a href="vlist.php?vtID=1" target="iframe_context">学习</a>
  </li>
  <li>
   <a href="vlist.php?vtID=2" target="iframe_context">新闻</a>
  </li>
  <div class="dropdown">
   <a target="iframe_context" class="dropbtn">娱乐</a>
   <div class="dropdown-content">
    <a href="vlist.php?vtID=3" target="iframe_context">日剧</a>
    <a href="vlist.php?vtID=4" target="iframe_context">日影</a>
    <a href="vlist.php?vtID=5" target="iframe_context">日漫</a>
   </div>
  </div>
 </ul>
 <iframe name="iframe_context" src="vlist.php?vtID=1" class="i" frameborder="0" scrolling="no"></iframe>
</div>

<div class="best">
 <div class="mingreen">视频精选</div>
 <br/>
 <?php
  while($row=mysql_fetch_array($result)){
 ?>
 &nbsp;&nbsp;&nbsp; <a href="vcontext.php?vID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a>
  <br/><br/>
 <?php
  } 
 ?>
</div>
<div class="link">
现存视频总数：<?php echo "$total";?>
<br/><br/>
人气最高：<a href="vcontext.php?vID=<?php echo $row2[0];?>" class="aa"><?php echo "$row2[1]";?></a>
<br/><br/>
最新视频：<a href="vcontext.php?vID=<?php echo $row3[0];?>" class="aa"><?php echo "$row3[1]";?></a>
<br/><br/>
</div>

</body>
</html>