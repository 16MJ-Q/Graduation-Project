<?php
session_start();
include ('conn.php');

$username=$_POST['username'];
$text=$_POST['repost'];
$ID=$_GET['pID'];
//写入数据
$sql="INSERT INTO repost(text,addtime,user,pID)VALUES('$text',now(),'$username','$ID')";
$sql2="UPDATE post SET repost=repost+'1' WHERE pID = '$ID'"; 
$sql3="UPDATE post SET page=page+'1' WHERE repost >= '20'"; 
$result=mysql_query($sql2);
$result2=mysql_query($sql3);
if(mysql_query($sql,$conn)){
	echo "<script>alert('回复成功');location.href='http://localhost:8080/graduationproject/fcontext.php?pID=$ID'</script>";
} else {
	echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
