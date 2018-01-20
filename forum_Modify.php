<?php
session_start();
include("conn.php");
$result=mysql_query("SELECT * FROM forum");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style3.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<title>管理页面</title>
</head>

<body>
<?php
while($row=mysql_fetch_array($result)){
?>
<a href="forum_ModifySave.php?fID=<?php echo $row[0];?>" class="aa"><?php echo $row[1];?></a><br/><br/>
<?php
}
?>
</body>