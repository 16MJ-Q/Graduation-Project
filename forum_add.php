<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<title>管理页面</title>   
<script language="javascript">
var maxl=25//总长
document.onkeydown=function(){
   var s=document.getElementById("text").value.length +1;
   if(s>maxl)document.getElementById("text").value=document.getElementById("text").value.substr(0,maxl-1)
   else document.getElementById("a").innerHTML="已输入："+s+"/"+maxl+" 字符"
}
</script> 
</head>

<body>
<div>
<form action="forum_AddSave.php" method="POST">
版块名称<input type="text" name="title"/><br/><br/>
板块介绍（不超过25个字）<br/><textarea id="text" name="info" style="width:500px;height:150px;"></textarea><br/><br/>
<div><span id="a">已输入字符: </span></div>
<input type="submit" value="提交" class="push_3"/>
</form>
</div>

</body>
</html>