<?php
session_start();
include('conn.php');
$result=mysql_query("SELECT * FROM post WHERE fID=1 ORDER BY pID DESC LIMIT 2"); 
$result2=mysql_query("SELECT * FROM post WHERE fID=2 ORDER BY pID DESC LIMIT 2"); 
$result3=mysql_query("SELECT * FROM post WHERE fID=3 ORDER BY pID DESC LIMIT 2"); 
$result4=mysql_query("SELECT * FROM post WHERE fID=4 ORDER BY pID DESC LIMIT 2"); 
$result5=mysql_query("SELECT * FROM essay ORDER BY eID DESC LIMIT 5");
$result6=mysql_query("SELECT * FROM video ORDER BY vID DESC LIMIT 5");
$result7=mysql_query("SELECT * FROM attachment ORDER BY aID DESC LIMIT 5");
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
<div class="essay">
 <a href="essay.php" class="push_3">文章精选</a>
 <br/>
 <?php
  while ($row5=mysql_fetch_array($result5)){
 ?> 
 &nbsp;&nbsp;
 <a href="econtext.php?eID=<?php echo $row5[0];?>" class="aa"><?php echo $row5[1];?></a>
 <br/><br/>
 <?php
  }
 ?>
</div>

<div class="video">
 <a href="video.php" class="push_3">视频精选</a>
 <br/>
 <?php
  while ($row6=mysql_fetch_array($result6)){
 ?> 
 &nbsp;&nbsp;
 <a href="vcontext.php?vID=<?php echo $row6[0];?>" class="aa"><?php echo $row6[1];?></a>
 <br/><br/>
 <?php
  }
 ?>
</div>

<div class="attachment">
 <a href="attachment.php" class="push_3">资料下载</a>
 <br/>
 <?php
  while ($row7=mysql_fetch_array($result7)){
 ?> 
 &nbsp;&nbsp;
 <a href="acontext.php?aID=<?php echo $row7[0];?>" class="aa"><?php echo $row7[1];?></a>
 <br/><br/>
 <?php
  }
 ?>
</div>

<div class="forum">
 <a href="forum.php" class="push_3">在线论坛</a>
 <a href="flist.php?fID=1" class="aa"><h4>&nbsp;&nbsp;学习&考试</h4></a>
 <hr>
 <?php
  while($row=mysql_fetch_array($result)){
 ?> 
 &nbsp;&nbsp;
 <a href="fcontext.php?pID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a>
 <br/><br/>
 <div class="author6">
 <?php
  echo $row[10];
 ?>
 </div>
 <?php
  }
 ?>
 <a href="flist.php?fID=2" class="aa"><h4>&nbsp;&nbsp;日本留学</h4></a>
 <hr>
 <?php
  while ($row2=mysql_fetch_array($result2)){
 ?> 
 &nbsp;&nbsp;
 <a href="fcontext.php?pID=<?php echo $row2[0];?>" class="aa"><?php echo $row2[1];?></a>
 <br/><br/>
 <div class="author6">
 <?php
  echo $row2[10];
 ?>
 </div>
 <?php
  }
 ?>

 <a href="flist.php?fID=3" class="aa"><h4>&nbsp;&nbsp;日本生活</h4></a>
 <hr>
 <?php
  while ($row3=mysql_fetch_array($result3)){
 ?> 
 &nbsp;&nbsp;
 <a href="fcontext.php?pID=<?php echo $row3[0];?>" class="aa"><?php echo $row3[1];?></a>
 <br/><br/>
 <div class="author6">
 <?php
  echo $row3[10];
 ?>
 </div>
 <?php
  }
 ?>

 <a href="flist.php?fID=4" class="aa"><h4>&nbsp;&nbsp;日本工作</h4></a>
 <hr>
 <?php
  while ($row4=mysql_fetch_array($result4)){
 ?> 
 &nbsp;&nbsp;
 <a href="fcontext.php?pID=<?php echo $row4[0];?>" class="aa"><?php echo $row4[1];?></a>
 <br/><br/>
 <div class="author6">
 <?php
  echo $row4[10];
 ?>
 </div>
 <?php
  }
 ?>
</div>

<div class="pic">
 <iframe src="pic.php" class="pic" frameborder="0" scrolling="no"></iframe>
<div>

</body>
</html>