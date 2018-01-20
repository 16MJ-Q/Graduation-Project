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
function InputCheck(AddForm)
{
  if(AddForm.username.value=="")
  {
    alert("昵称必填！");
    AddForm.username.focus();
    return (false);
  }
  if(AddForm.titl.value=="")
  {
    alert("标题必填！");
    AddForm.title.focus();
    return (false);
  }
}
//-->
</script>
<body>
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
<div class="iContent2">
<form action="AddpostSave.php" method="POST" onSubmit="return InputCheck(this)" id="AddForm" name="AddForm">
所属板块：
<select class="select2" name="select">
<option value="1">学习&考试</option>
<option value="2">日本留学</option>
<option value="3">日本生活</option>
<option value="4">日本工作</option>
</select>
<br/><br/>
昵称：<input type="text" name="username" class="su">※必填<br/><br/>
标题：<input type="text" name="title" class="su">※必填<br/><br/>
<div>
内容：<textarea id="txtContent" name="post" style="width:80%;"></textarea><br/><br/>
</div>
<input type="submit"  value="发帖" class="push_3" name="submit"/>
</form>
</div>
<div class="foot">
 <iframe class="ifoot" src="foot.php" frameborder="0" scrolling="no"></iframe>
</div>
</body>
</html>