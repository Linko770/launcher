<?php
/* Smarty version 3.1.29, created on 2016-04-26 19:10:10
  from "D:\wamp64\www\launcher\lib\view\changepw.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f4c92416d20_52166441',
  'file_dependency' => 
  array (
    '5ffc21017105c482929bb00a0f1c0d68302c3a0a' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\changepw.html',
      1 => 1461669009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571f4c92416d20_52166441 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/jquery/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/js/changepw.js"><?php echo '</script'; ?>
>
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎您，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>修改密码</h2>
			</div>
		</div>
		<hr>
		<div class="list">
			<h3>密码修改</h3>
			<form autocomplete="off" action="index.php?action=changepw" method="post" onsubmit="return checksubmit();">
				<ul>
				<li><span>原密码</span> <input type="password" name="pre_pw" id="pre_pw" value="<?php echo $_smarty_tpl->tpl_vars['pre_pw']->value;?>
"></li>
				<li><span>新密码</span> <input type="password" name="new_pw" id="new_pw" value="<?php echo $_smarty_tpl->tpl_vars['new_pw']->value;?>
"></li>
				<li><span>重复输入新密码</span> <input type="password" name="new_pw2" id="new_pw2" value="<?php echo $_smarty_tpl->tpl_vars['new_pw2']->value;?>
"></li>
				<li><input type="submit" value="修改密码"></li>
				<li><p class="msg red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p></li>
				</ul>
			</form>
		</div>
		<div>
			<a href="index.php?action=main">单击返回上一层</a>
		</div>
	</div>
	<div class="footer">
		<p class="fr">Powered by lin &copy; 2016</p>
	</div>
</body>
</html><?php }
}
