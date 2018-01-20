<?php
include ('conn.php');
session_start();

$username = $_POST['username'];
$title = $_POST['title'];
$text = $_POST['post'];
$fID = $_POST['select'];
$check_query = mysql_query("SELECT pID FROM post WHERE ptitle='$title' LIMIT 1");
if(mysql_fetch_array($check_query)){
	echo '错误：帖子 ',$title,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	exit;
}
//写入数据
$sql="INSERT INTO post(ptitle,text,addtime,user,fID)VALUES('$title','$text',now(),'$username','$fID')";
$sql2="UPDATE forum SET allpost=allpost+'1' WHERE fID = '$fID'"; 
$result=mysql_query($sql2);
if(mysql_query($sql,$conn)){
	echo "<script>alert('发帖成功');location.href=''</script>";
} else {
	echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
