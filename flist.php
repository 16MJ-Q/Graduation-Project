<?php
session_start();
include ('conn.php');
$perNumber=30;
$page=isset($_GET['page'])?(int) $_GET['page']:1;
$ID=$_GET['fID'];
$count=mysql_query("SELECT count(*) FROM post WHERE fID=$ID"); 
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber);
if(!isset($page)){
	$page=1;
} 
$startCount=($page-1)*$perNumber; 
$result=mysql_query("SELECT * FROM post WHERE fID=$ID LIMIT $startCount,$perNumber"); 
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
</head>

<body>
<div id="container">
<div class="head">
 <iframe class="ihead" src="head.php" frameborder="0" scrolling="no"></iframe>
</div>

<div id="page2">
 <div class="iContent2">
  <div>
   <a class="push_1" value="发帖" href="addpost.php">发&nbsp;&nbsp;贴</a>
  </div>
 <div class="sitePagflist">
  共<?php echo $totalNumber;?>条，30条/页，<?php echo $totalPage;?>页
  <hr width=100%>
  <div style="background-color:#98bf21">帖子标题…………页数→回复数-点击数
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;楼主
  </div>
  </div>
<?php
while ($row=mysql_fetch_array($result)) {
?> 
<a href="fcontext.php?pID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a>
<br/><br/>
<div class="author2">
<?php
 echo "$row[10]";
?>
</div>
<?php
}
?>

    <ul class="pagination">
     <li><a href="flist.php?fID=<?php echo $ID;?>&page=1">首页</a></li>
 <?php
 if($page!=1){ 
?>
<li><a href="flist.php?fID=<?php echo $ID;?>&page=<?php echo $page-1;?>">上一页</a></li>
<?php
}
?>
<?php
$step=floor(($page-1)/4)*4+1;
 for($i=$step;$i<=$step+4;$i++){  //循环显示出页面
?>
  <li><a href="flist.php?fID=<?php echo $ID;?>&page=<?php echo $i;?>"><?php echo $i;?></a></li>
<?php
}
   if ($page<$totalPage){
?>
    <li><a href="flist.php?fID=<?php echo $ID;?>&page=<?php echo $page+1;?>">下一页</a></li>
	<li><a href="flist.php?fID=<?php echo $ID;?>&page=<?php echo $totalPage;?>">尾页</a></li>
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