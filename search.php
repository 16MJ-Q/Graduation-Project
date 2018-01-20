<?php
session_start();
include('conn.php');
$search=$_POST['input'];
$select=$_POST['select'];
$result=mysql_query("SELECT * FROM post WHERE $select LIKE '%$search%'");
$result2=mysql_query("SELECT * FROM essay WHERE $select LIKE '%$search%'");
$result3=mysql_query("SELECT * FROM video WHERE $select LIKE '%$search%'");
$result4=mysql_query("SELECT * FROM attachment WHERE $select LIKE '%$search%'");
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
<div id="page2">
<div class="iContent2">
<?php
switch($select){
	case "ptitle":
	while($row=mysql_fetch_array($result)){
?>
    <a href="fcontext.php?pID=<?php echo $row[0];?>" class="aa">
	<h4><?php echo $row[1];?></h4></a>
    <br/><br/>
<?php
    }
    break;
    case "etitle":
	while($row2=mysql_fetch_array($result2)){
?>
    <a href="econtext.php?eID=<?php echo $row2[0];?>" class="aa">
	<h4><?php echo $row2[1];?></h4><br/><p style="font-size:10px;"><?php echo $row2[3];?></p></a>
    <br/><br/>
<?php
    }
	break;
	case "vtitle":
	while($row3=mysql_fetch_array($result3)){
?>
    <a href="vcontext.php?vID=<?php echo $row3[0];?>" class="aa">
	<h4><?php echo $row3[1];?></h4><br/><p style="font-size:10px;"><?php echo $row3[3];?></p></a>
	<br/><br/>
<?php
	}
	break;
	case "atitle":
	while($row4=mysql_fetch_array($result4)){
?>
    <a href="acontext.php?aID=<?php echo $row4[0];?>" class="aa">
	<h4><?php echo $row4[1];?></h4><br/><p style="font-size:10px;"><?php echo $row4[3];?></p></a>
	<br/><br/>
	<?php
	}
}
	?>
</div>
</div>
</div>

<div id="foot">
 <iframe src="foot.php" class="ifoot" frameborder="0" scrolling="no"></iframe>
</div>
</body>
</html>
