<?php
/* Smarty version 3.1.29, created on 2016-05-01 08:49:10
  from "D:\wamp64\www\launcher\lib\view\main.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57255286ab1ba5_01569436',
  'file_dependency' => 
  array (
    '9a7e7dd6b95219073b4b99a9a7069ea668118f60' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\main.html',
      1 => 1462063748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57255286ab1ba5_01569436 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/main.css">
<head>
	<meta charset="UTF-8">
	<title>lin的登录系统DEMO</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎您，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>Welcome to lin's login system</h2>
				<p>欢迎回来，您上次的登录时间为:<?php echo $_smarty_tpl->tpl_vars['login_time']->value;?>
</p>
			</div>
			<div class="short fr">
				<p>积分:<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
  
				等级:<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</p>
			</div>
		</div>
		<hr>
		<div class="list cont">
			<h3>要进行的操作</h3>
			<ul>
				<li><a href="index.php?action=account">我的帐号</a><br></li>
				<li><a href="index.php?action=changepw">修改密码</a><br></li>
				<li><a href="index.php?action=points">积分管理</a><br></li>
				<li><a href="index.php?action=secret">密保问题</a><br></li>
				<?php if ($_smarty_tpl->tpl_vars['level']->value >= 4) {?>
				<li><a href="index.php?action=admin">管理员操作</a><br></li>
				<?php }?>
				<li><a href="index.php?action=logout">安全退出</a><br></li>
			</ul>	
		</div>
	</div>
	<div class="footer">
		<p class="fr">Powered by lin &copy; 2016</p>
	</div>
</body>
</html><?php }
}
