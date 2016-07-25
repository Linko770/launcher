<?php
/* Smarty version 3.1.29, created on 2016-04-27 11:08:22
  from "D:\wamp64\www\launcher\lib\view\account.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57202d266764a1_77224362',
  'file_dependency' => 
  array (
    '21c3b803ecae6b5918c389cd047df065c4370039' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\account.html',
      1 => 1461726498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57202d266764a1_77224362 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<head>
	<meta charset="UTF-8">
	<title>我的帐号</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎您，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>我的帐号</h2>
			</div>
		</div>
		<hr>
		<div class="list">
			<h3>账号基本信息</h3>
			<ul>
				<li><span>uid:</span><label class="red"><?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
</label></li>
				<li><span>账户名:</span><label class="red"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</label></li>
				<li><span>注册时间:</span><label class="red"><?php echo $_smarty_tpl->tpl_vars['create_time']->value;?>
</label></li>
				<li><span>上次登录时间:</span><label class="red"><?php echo $_smarty_tpl->tpl_vars['login_time']->value;?>
</label></li>
				<li><span>账号等级:</span><label class="red"><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</label></li>
				<li><span>积分:</span><label class="red"><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</label></li>
			</ul>
		</div>
		<div>
			<a href="javascript:history.back(-1);">单击返回上一层</a>
		</div>
	</div>
	<div class="footer">
		<p class="fr">Powered by lin &copy; 2016</p>
	</div>
</body>
</html><?php }
}
