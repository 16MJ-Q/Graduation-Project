<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
<script language=JavaScript>
<!--
function InputCheck(RegForm)
{
  if(RegForm.username.value=="")
  {
    alert("用户名不可为空！");
    RegForm.username.focus();
    return (false);
  }
    if(RegForm.username.value=="admin")
  {
    alert("预留用户名不可被注册！");
    RegForm.username.focus();
    return (false);
  }
    if(RegForm.email.value=="")
  {
    alert("电子邮箱不可为空！");
    RegForm.email.focus();
    return (false);
  }
  if(RegForm.password.value=="")
  {
    alert("必须设定登陆密码！");
    RegForm.password.focus();
    return (false);
  }
  if(RegForm.repassword.value!=RegForm.password.value)
  {
    alert("两次密码不一致！");
    RegForm.repassword.focus();
    return (false);
  }
}
//-->
</script>
</head>

<body class="all">
<form action="RegisterSave.php" method="post" onSubmit="return InputCheck(this)" class="sign-up" id="RegForm" name="RegForm">
  <p><h1>加入日本語学習ウェブサイト</h1></p>
  <p><h3>日本語学習ウェブサイト是一个完全免费的学习网站</h3></p>
  <hr width="400px">
  <p><h3>创建一个日本語学習ウェブサイト账号</h3></p>
  <p>输入用户名：</p>
  <input type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;输入用户名" class="su" name="username"/>
  <p>输入邮箱：</p>
  <input type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;输入邮箱" class="su" name="email"/>
  <p>创建密码:</p>
  <input type="password" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;输入6位以上密码" class="su" name="password"/>
  <p>确认密码:</p>
  <input type="password" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;确认密码" class="su" name="repassword"/>
  <p>
   <input type="submit" value="注&nbsp;&nbsp;&nbsp;&nbsp;册" class="push_3" name="submit"/>
   <a href="login.php" class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(直接登录?)</a>
  </p>
</form>
 
</body>
</html>