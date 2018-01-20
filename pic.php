<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.4.5/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.4.5/themes/icon.css">
<link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.4.5/demo/demo.css">
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico"/>
<base target="_top"/>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/jquery-easyui-1.4.5/jquery.easyui.min.js"></script>
<script>
 $(function(){
   var index = 0;
   var t = $('#tt');
   var tabs = t.tabs('tabs');
   setInterval(function(){
   t.tabs('select', tabs[index].panel('options').title);
   index++;
   if (index >= tabs.length){
     index = 0;
	}
   }, 3000);
 });
</script>
</head>

<body>
<div id="tt" class="easyui-tabs">
 <div title="文章精选" style="padding:10px;">
  <a href="essay.php">
   <img src="img/1.jpg" class="tab"/>
  </a>
 </div>
 <div title="视频精选" style="padding:10px;">
  <a href="video.php">
   <img src="img/2.jpg" class="tab"/>
  </a>
 </div>
 <div title="资料下载" style="padding:10px;">
  <a href="attachment.php">
   <img src="img/3.jpg" class="tab"/>
  </a>
 </div>
 <div title="在线论坛" style="padding:10px;">
  <a href="forum.php">
   <img src="img/4.jpg" class="tab"/>
  </a>
 </div>
</div>

</body>
<html>