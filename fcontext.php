<?php 
session_start();
include("conn.php");
$ID=$_GET['pID'];
$sql="UPDATE post SET reader=reader+'1' WHERE pID='$ID'"; 
$result3=mysql_query($sql);
$page=isset($_GET['page'])?(int)$_GET['page']:1;
$count=mysql_query("SELECT count(*) FROM repost WHERE pID=$ID");
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$perNumber=20;
$totalPage=ceil($totalNumber/$perNumber);
if(!isset($page)) {
 $page=1;
}
$startCount=($page-1)*$perNumber;
$result=mysql_query("SELECT * FROM post WHERE pID='$ID'"); 
$row=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style3.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
<title>日本語部屋</title>
 <script src="js/editor/kindeditor-all.js" type="text/javascript"></script>
 <script charset="utf-8" src="js/editor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#txtContent');
        });
</script>
<script language=JavaScript>
<!--
function InputCheck(ReForm)
{
  if(ReForm.username.value=="")
  {
    alert("昵称必填！");
    ReForm.username.focus();
    return (false);
  }
}
//-->
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
<div id="page">
<div class="word">
<?php echo "<h2>$row[1]</h2>";?>
</div>
<div class="iContent2">
  <a class="push_1" value="发帖" href="addpost.php">发&nbsp;&nbsp;贴</a>
  <br/>
  共<?php echo $totalNumber;?>条，20条/页，<?php echo $totalPage;?>页
  <hr width=100%>
  您是第<?php echo $row[3];?>位读者
  <div class="green">
   <?php echo $row[10];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[9];?>&nbsp;&nbsp;&nbsp;楼主
  </div>
  <br/>
  <div class="ConMain">
   <?php echo $row[2];?>
  </div>
  <?php
   $result2=mysql_query("SELECT * FROM repost WHERE pID='$ID' LIMIT $startCount,$perNumber");
   $i=2;
   while($row2=mysql_fetch_array($result2)){
  ?>
  <div class="green">
  <?php
	echo $row2[7];
  ?>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <?php 
    echo $row2[3];
	?>
	&nbsp;&nbsp;&nbsp;
	<?php	
	echo $i++;
  ?>
</div>
<br/>
<div class="ConMain">
<?php
	echo $row2[2];
?>
</div>
<?php
}
?>

→回复：<?php echo "<h3>$row[1]</h3>";?>
<hr>
<form action="RepostSave.php?pID=<?php echo $row[0];?>" method="POST" class="apost" onSubmit="return InputCheck(this)" id="ReForm" name="ReForm">
昵称：<input type="text" name="username">※必填
<br/><br/>
<div>
回复：<textarea id="txtContent" name="repost" style="width:80%;"></textarea><br/><br/>
</div>
<br/>
<input type="submit" value="回复" class="push_3" name="submit"/>
</form>
<br/>
    <ul class="pagination">
     <li><a href="fcontext.php?pID=<?php echo $ID;?>&page=1">首页</a></li>
 <?php
 if($page!=1){ 
?>
<li><a href="fcontext.php?pID=<?php echo $ID;?>&page=<?php echo $page-1;?>">上一页</a></li>
<?php
}
?>
<?php
 for($i=1;$i<=$totalPage;$i++){  //循环显示出页面
?>
  <li><a href="fcontext.php?pID=<?php echo $ID;?>&page=<?php echo $i;?>"><?php echo $i;?></a></li>
<?php
}
   if ($page<$totalPage){
?>
    <li><a href="fcontext.php?pID=<?php echo $ID;?>&page=<?php echo $page+1;?>">下一页</a></li>
	<li><a href="fcontext.php?pID=<?php echo $ID;?>&page=<?php echo $totalPage;?>">尾页</a></li>
<?php
} 
?>
   </ul>
</div>
</div>
</div>
   
<div id="foot">
 <iframe class="ifoot" src="foot.php" frameborder="0" scrolling="no"></iframe>
</div>

</body>
</html>
