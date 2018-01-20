<?php
session_start();
include("conn.php");
$ID=$_GET["vID"];
$result=mysql_query("SELECT * FROM video WHERE vID=$ID");
$row=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="iframe_manage"/>
<title>管理页面</title>
 <script src="js/editor/kindeditor-all.js" type="text/javascript"></script>
 <script charset="utf-8" src="js/editor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#txtContent');
        });
</script>
    
</head>

<body>
<div>
<form action="video_MS.php?vID=<?php echo $ID;?>" method="POST">
分类：
<select name="select">
<option value="1">学习</option>
<option value="2">新闻</option>
<option value="3">日剧</option>
<option value="4">日影</option>
<option value="5">日漫</option>
</select><br/><br/>
标题<input type="text" name="title" value="<?php echo $row[1];?>"/><br/><br/>
作者<input type="text" name="author" value="<?php echo $row[7];?>"/><br/><br/>
来源<input type="text" name="reference" value="<?php echo $row[8];?>"/><br/><br/>
简介<input type="text" name="info" value="<?php echo $row[3];?>" style="width:500px;height:50px;"/><br/><br/>
<div>
内容<textarea id="txtContent" name="context" style="width: 80%;"><pre><?php echo $row[6];?></pre></textarea>
<br/><br/>
</div>
<input type="submit" value="提交"/>
<br/>
</form>
<iframe  name="iframe_manage" frameborder="0" width=100% height=1000px srcolling=no></iframe>
</div>

</body>
</html>