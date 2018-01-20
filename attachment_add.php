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
<form action="attachment_AddSave.php" method="POST" enctype="multipart/form-data">
分类：
<select name="select">
<option value="1">初级</option>
<option value="2">中级</option>
<option value="3">高级</option>
<option value="4">文学</option>
<option value="5">漫画</option>
<option value="6">轻小说</option>
</select><br/><br/>
标题<input type="text" name="title"/><br/><br/>
作者<input type="text" name="author"/><br/><br/>
来源<input type="text" name="reference"/><br/><br/>
<div>
简介<textarea id="txtContent" name="info" style="width: 80%;"></textarea><br/><br/>
</div>
内容<br/><input type="file" name="file" id="file"><br/><br/>
<input type="submit" value="提交" class="push_3"/>
</form>
</div>

</body>
</html>