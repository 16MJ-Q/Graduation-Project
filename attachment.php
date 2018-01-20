<?php
session_start();
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
<title>日本語部屋</title>
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
<div id="page" class="body">
 <iframe src="abody.php" class="ibody" frameborder="0" scrolling="no" name="iframe_body"></iframe>
</div>
</div>
<div id="foot">
 <iframe src="foot.php" class="ifoot" frameborder="0" scrolling="no"></iframe>
</div>

</body>
</html>