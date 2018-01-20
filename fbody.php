<?php
session_start();
include ('conn.php');
$result=mysql_query("SELECT * FROM post WHERE fID=1 ORDER BY pID DESC LIMIT 3"); 
$result2=mysql_query("SELECT * FROM post WHERE fID=2 ORDER BY pID DESC LIMIT 3"); 
$result3=mysql_query("SELECT * FROM post WHERE fID=3 ORDER BY pID DESC LIMIT 3"); 
$result4=mysql_query("SELECT * FROM post WHERE fID=4 ORDER BY pID DESC LIMIT 3"); 
$result5=mysql_query("SELECT * FROM post WHERE fID=5 ORDER BY pID DESC LIMIT 10");
$result6=mysql_query("SELECT * FROM post WHERE repost>=100 ORDER BY pID DESC LIMIT 10");
$result7=mysql_query("SELECT * FROM forum WHERE fID=1");
$row7=mysql_fetch_array($result7);
$result8=mysql_query("SELECT * FROM forum WHERE fID=2");
$row8=mysql_fetch_array($result8);
$result9=mysql_query("SELECT * FROM forum WHERE fID=3");
$row9=mysql_fetch_array($result9);
$result10=mysql_query("SELECT * FROM forum WHERE fID=4");
$row10=mysql_fetch_array($result10);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style3.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
</head>

<body>
<ul class="u2">
<li><a href="forum.php" class="line">首页|</a></li>
<li><a href="flist.php?fID=1" class="line">学习&考试|</a></li>
<li><a href="flist.php?fID=2" class="line">日本留学|</a></li>
<li><a href="flist.php?fID=3" class="line">日本生活|</a></li>
<li><a href="flist.php?fID=4" class="line">日本工作</a></li>
</ul>

<div class="post1">
<h4>学习&考试</h4><h5><?php echo $row7[3];?></h5>
<hr>
<?php
while ($row=mysql_fetch_array($result)){
?> 
<a href="fcontext.php?pID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a>
<br/><br/>
<div class="author3">
<?php
echo $row[10];
?>
</div>
<?php
}
?>
</div>

<div class="post2">
<h4>日本留学</h4><h5><?php echo $row8[3];?></h5>
<hr>
<?php
while ($row2=mysql_fetch_array($result2)){
?> 
<a href="fcontext.php?pID=<?php echo $row2[0];?>" class="aa"><?php echo $row2[1];?></a>
<br/><br/>
<div class="author3">
<?php
echo $row2[10];
?>
</div>
<?php
}
?>
</div>

<div class="post3">
<h4>日本生活</h4><h5><?php echo $row9[3];?></h5>
<hr>
<?php
while ($row3=mysql_fetch_array($result3)){
?> 
<a href="fcontext.php?pID=<?php echo $row3[0];?>" class="aa"><?php echo $row3[1];?></a>
<br/><br/>
<div class="author3">
<?php
echo $row3[10];
?>
</div>
<?php
}
?>
</div>

<div class="post4">
<h4>日本工作</h4><h5><?php echo $row10[3];?></h5>
<hr>
<?php
while ($row4=mysql_fetch_array($result4)){
?> 
<a href="fcontext.php?pID=<?php echo $row4[0];?>" class="aa"><?php echo $row4[1];?></a>
<br/><br/>
<div class="author3">
<?php
echo $row4[10];
?>
</div>
<?php
}
?>
</div>

<div class="right1">
<h4>※公告</h4>
<hr>
<?php
while($row5=mysql_fetch_array($result5)){
?>
<a href="fcontext.php?pID=<?php echo $row5[0];?>" class="aa"><?php echo $row5[1];?></a>
<br/><br/>
<?php	
}
?>
</div>
<div class="right2">
<h4>※精华</h4>
<hr>
<?php
while ($row6=mysql_fetch_array($result6)){
?> 
<a href="fcontext.php?pID=<?php echo $row6[0];?>" class="aa"><?php echo $row6[1];?></a>
<br/><br/>
<div class="author5">
<?php
echo $row6[10];
?>
</div>
<?php
}
?>
</div>
</body>

</html>