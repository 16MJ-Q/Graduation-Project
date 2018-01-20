<?php
session_start();
include('conn.php');
$uID=$_GET['uID'];
$result=mysql_query("SELECT * FROM acollect WHERE uID=$uID");
$result2=mysql_query("SELECT * FROM ecollect WHERE uID=$uID");
$result3=mysql_query("SELECT * FROM vcollect WHERE uID=$uID");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
</head>
<body>
<div class="board">
<button class="mcollect">资料收藏</button><br/><br/>
<?php
while($row=mysql_fetch_array($result)){
?>
  <a href="acontext.php?aID=<?php echo $row[1];?>" class="aa"><?php echo $row[2];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="acancel.php?aID=<?php echo $row[1];?>" class="aa">取消收藏</a>
  <br/><br/>

<?php
}
?>
<button class="mcollect">文章收藏</button><br/><br/>
<?php
while($row2=mysql_fetch_array($result2)){
	?>
  <a href="econtext.php?eID=<?php echo $row2[1];?>" class="aa"><?php echo $row2[2];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ecancel.php?eID=<?php echo $row2[1];?>" class="aa">取消收藏</a>
  <br/><br/>
<?php
}
?>
<button class="mcollect">视频收藏</button><br/><br/>
<?php
while($row3=mysql_fetch_array($result3)){
	?>
  <a href="vcontext.php?vID=<?php echo $row3[1];?>" class="aa"><?php echo $row3[2];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="vcancel.php?vID=<?php echo $row3[1];?>" class="aa">取消收藏</a>
  <br/><br/>
  <?php
}
?>
</div>
</body>
</html>