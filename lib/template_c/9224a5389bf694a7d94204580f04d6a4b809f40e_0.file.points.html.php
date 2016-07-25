<?php
/* Smarty version 3.1.29, created on 2016-04-22 23:10:06
  from "D:\wamp64\www\launcher\lib\view\points.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571a3ece6fbbf7_28229815',
  'file_dependency' => 
  array (
    '9224a5389bf694a7d94204580f04d6a4b809f40e' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\points.html',
      1 => 1461337804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571a3ece6fbbf7_28229815 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<head>
	<meta charset="UTF-8">
	<title>积分管理</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎您，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>积分管理</h2>
			</div>
		</div>
		<hr>
		<div class="list">
			<p>您现在拥有的积分为:</p>
			<p class="points red"><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</p>
			<p>您当前的等级为:</p>
			<p class="points red"><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</p>
			<p>您所在等级可以做下面的事:</p>
			<?php
$_from = $_smarty_tpl->tpl_vars['power']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
			<p class="points red"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</p>
			<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?>
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
