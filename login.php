<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
<script language=JavaScript>
<!--
function InputCheck(LogForm)
{
  if (LogForm.username.value=="")
  {
    alert("请输入用户名！");
    LogForm.username.focus();
    return (false);
  }
  if (LogForm.password.value=="")
  {
    alert("请输入密码！");
    LogForm.password.focus();
    return (false);
  }
  if(LogForm.imgCode.value=="")
  {
	  alert("请输入验证码！");
	  LogForm.imgCode.focus();
	  return(false);
  }
}
function changeImage()
{
	document.getElementById("imgRandom").src=document.getElementById("imgRandom").src+'?';
}
//-->
</script>
</head>

<body>
<form action="LoginSave.php" method="post" onSubmit="return InputCheck(this)" class="sign-in" id="LogForm" name="LogForm">
 <div class="thin">
  <h3 style="color:#FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;欢迎回到日本語学習ウェブサイト</h3>
 </div>
 <div class="thick">
  <p>输入用户名或邮箱：</p>
  <input type="text"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;输入用户名或邮箱："class="su" name="username"/>
  <p>输入密码:</p>
  <input type="password" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;输入密码" class="su" name="password"/>	
  <p>请输入上面图片的字符：</p>
  <p>
   <input type="text" class="su2" name="imgCode"/>
   <img src="code.php" alt= "点击更换" onClick="changeImage(this);" width="100px" height="30px" align="absmiddle" id="imgRandom"/>
  </p>	
  <input type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;录" class="push_3"/>
   <a href="register.php" class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(还未注册?)</a>
 </div>
</form>

</body>
</html>