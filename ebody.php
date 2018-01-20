<?php
session_start();
include('conn.php');
$result=mysql_query("SELECT * FROM essay ORDER BY reader DESC LIMIT 9");
$count=mysql_query("SELECT count(*) FROM essay");
$rs=mysql_fetch_array($count);
$total=$rs[0];
$best=mysql_query("SELECT * FROM essay ORDER BY reader DESC LIMIT 1");
$row2=mysql_fetch_array($best);
$last=mysql_query("SELECT * FROM essay ORDER BY eID DESC LIMIT 1");
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

<body>
<div class="wholeessay">
 <ul>
  <li>
   <a href="elist.php?etID=1" target="iframe_context">方法</a>
  </li>
  <li>
   <a href="elist.php?etID=2" target="iframe_context">初级</a>
  </li>
  <li>
   <a href="elist.php?etID=3" target="iframe_context">中级</a>
  </li>
  <li>
   <a href="elist.php?etID=4" target="iframe_context">高级</a>
  </li>
  <div class="dropdown">
   <a target="iframe_context" class="dropbtn">故事</a>
   <div class="dropdown-content">
    <a href="elist.php?etID=5" target="iframe_context">书单</a>
    <a href="elist.php?etID=6" target="iframe_context">经验</a>
    <a href="elist.php?etID=7" target="iframe_context">新闻</a>
   </div>
  </div>
 </ul>
 <iframe name="iframe_context" src="elist.php?etID=1" class="i" frameborder="0" scrolling="no"></iframe>
</div>

<div class="best">
 <div class="mingreen">文章精选</div>
 <br/>
 <?php
  while($row=mysql_fetch_array($result)){
 ?>
  &nbsp;&nbsp;&nbsp; <a href="econtext.php?eID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a>
  <br/><br/>
 <?php
  } 
 ?>
</div>
<div class="link">
现存文章总数：<?php echo "$total";?>
<br/><br/>
人气最高：<a href="econtext.php?eID=<?php echo $row2[0];?>" class="aa"><?php echo "$row2[1]";?></a>
<br/><br/>
最新文章：<a href="econtext.php?eID=<?php echo $row3[0];?>" class="aa"><?php echo "$row3[1]";?></a>
<br/><br/>
</div>

</body>
</html>