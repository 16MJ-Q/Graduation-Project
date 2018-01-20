<?php
session_start();
include ('conn.php');
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

<body style="height:640px;">
<div style="height:620px;padding:10px;">
<?php
 $perNumber=12; 
 $page=isset($_GET['page'])?(int)$_GET['page']:1;
 $ID=$_GET['atID'];
 $count=mysql_query("SELECT count(*) FROM attachment WHERE atID=$ID");
 $rs=mysql_fetch_array($count); 
 $totalNumber=$rs[0];
 $totalPage=ceil($totalNumber/$perNumber); //计算总页数
 if(!isset($page)){
	 $page=1;
 }
 $startCount=($page-1)*$perNumber; //开始分页
 $result=mysql_query("SELECT * FROM attachment WHERE atID=$ID ORDER BY aID DESC LIMIT $startCount,$perNumber");
 while($row=mysql_fetch_array($result)){
?>
  <a href="acontext.php?aID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a>
  <br/><br/>
<?php
}
?>
 <div class="fpage">
 <ul class="pagination">
 <li><a href="alist.php?atID=<?php echo $ID;?>&page=1" target="iframe_context">首页</a></li>
 <?php
 if($page!=1){ 
?>
  
  <li><a href="alist.php?atID=<?php echo $ID;?>&page=<?php echo $page-1;?>" target="iframe_context">上一页</a></li>
<?php
}
?>

<?php
$step=floor(($page-1)/4)*4+1;
 for($i=$step;$i<=$step+4;$i++){  //循环显示出页面
?>
  <li><a href="alist.php?atID=<?php echo $ID;?>&page=<?php echo $i;?>" target="iframe_context"><?php echo $i;?></a></li>
<?php
}
   if ($page<$totalPage){
?>
    <li><a href="alist.php?atID=<?php echo $ID;?>&page=<?php echo $page+1;?>" target="iframe_context">下一页</a></li>
	<li><a href="alist.php?atID=<?php echo $ID;?>&page=<?php echo $totalPage;?>" target="iframe_context">尾页</a></li>
<?php
} 
?>
</ul>
</div>
</div>

</body>
</html>