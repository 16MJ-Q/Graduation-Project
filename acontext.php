<?php
session_start();
include('conn.php');
$ID=$_GET['aID'];
$result=mysql_query("SELECT * FROM attachment WHERE aID=$ID");
$row=mysql_fetch_array($result);
$result2=mysql_query("UPDATE attachment SET reader=reader+'1' WHERE aID=$ID");
$result3=mysql_query("SELECT * FROM attachment ORDER BY reader DESC LIMIT 6");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
<title>日本語部屋</title>
<script language="JavaScript">
text.innerhtml=sever.Htmlencode("Data")
</script>
</head>

<body>
<div id="container">
<?php
 if(isset($_SESSION['uID'])){
?>
<div class="head">
 <iframe  src="head2.php" class="ihead" frameborder="0" scrolling="no"></iframe>
</div>
<?php
 }else{
?>
<div class="head">
 <iframe  src="head.php" class="ihead" frameborder="0" scrolling="no"></iframe>
</div>
<?php
 }
?>
<div id="page2">
<div class="text">
<h3><?php echo $row[1];?></h3>
<form action="acollect.php?aID=<?php echo $ID;?>" method="POST">
<button type="submit" class="collect">收藏</button>
</form>
<hr>
作者：<?php echo $row[6];?>
<br/>
来源：<?php echo $row[7];?>
<br/>
发布时间：<?php echo $row[2];?>
<br/>
<?php echo "$row[3]";?><br/>
<?php echo "$row[4]";?>
<br/>
<?php
 if(isset($_SESSION['uID'])){

?>
<a href="download.php?aID=<?php echo $ID;?>" class="aa">下载</a>


</div>
<div class="rec">
<div class="mingreen2">热门资料</div>
<br/>
<?php
while($row2=mysql_fetch_array($result3)){
?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="acontext.php?aID=<?php echo $row2[0];?>" class="aa"><?php echo $row2[1];?></a>
<br/><br/>
<?php
}
?>
</div>
<?php
 }else{
echo "<script>alert('您还没有登录');location.href='http://localhost:8080/graduationproject/login.php'</script>";
 }
 ?>
 </div>
 </div>
<div id="foot">
 <iframe src="foot.php" class="ifoot" frameborder="0" scrolling="no"></iframe>
</div>
</body>
</html>