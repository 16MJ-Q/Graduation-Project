<?php
include('conn.php');
session_start();
$uID=$_SESSION['uID'];
$allowedExts=array("gif", "jpeg", "jpg", "png");
$temp=explode(".", $_FILES["file"]["name"]);
$extension=end($temp);
if ((($_FILES["file"]["type"]=="image/gif")
|| ($_FILES["file"]["type"]=="image/jpeg")
|| ($_FILES["file"]["type"]=="image/jpg")
|| ($_FILES["file"]["type"]=="image/pjpeg")
|| ($_FILES["file"]["type"]=="image/x-png")
|| ($_FILES["file"]["type"]=="image/png"))
&& ($_FILES["file"]["size"] < 5024000)
&& in_array($extension, $allowedExts)){
if ($_FILES["file"]["error"] > 0){
	echo "返回: " . $_FILES["file"]["error"] . "<br>";
}else{
	echo "上传: " . $_FILES["file"]["name"] . "<br>";
	echo "大小: " . ($_FILES["file"]["size"] / 1024) . " KB<br>";
}
if (file_exists("uploadimg/" . $_FILES["file"]["name"])){
	echo $_FILES["file"]["name"] . " already exists. ";
}else{
	move_uploaded_file($_FILES["file"]["tmp_name"],"uploadimg/" . $_FILES["file"]["name"]);
	$photo="uploadimg/" . $_FILES["file"]["name"];
	$sql=mysql_query("UPDATE user SET photo='$photo' WHERE uID='$uID'");
	echo "<script>alert('头像已上传');location.href=''</script>";
	}
}
else{
	echo "头像上传错误";
}
?>
