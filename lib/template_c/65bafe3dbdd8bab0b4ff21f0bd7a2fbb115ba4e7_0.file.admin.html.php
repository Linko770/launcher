<?php
/* Smarty version 3.1.29, created on 2016-05-01 08:52:54
  from "D:\wamp64\www\launcher\lib\view\admin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57255366db2930_21978621',
  'file_dependency' => 
  array (
    '65bafe3dbdd8bab0b4ff21f0bd7a2fbb115ba4e7' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\admin.html',
      1 => 1462063974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57255366db2930_21978621 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/jquery/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/js/admin.js"><?php echo '</script'; ?>
>
<head>
	<meta charset="UTF-8">
	<title>管理员操作</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎您，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>管理员操作</h2>
			</div>
		</div>
		<hr>
		<div class="list cont">
			<h3>账号基本信息</h3>
			<hr>
			<form action="index.php?action=admin" method="post">
			<table class="table">
				<tr>
					<th>编号</th>
					<th>uid</th>
					<th>用户名</th>
					<th>账号类型</th>
					<th>等级</th>
					<th>创建时间</th>
					<th>登录时间</th>
					<th>积分</th>
					<th>操作</th>
				</tr>

				<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable(((string)($_smarty_tpl->tpl_vars['pageLength']->value*($_smarty_tpl->tpl_vars['pageNum']->value-1)+1)), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "i", 0);?>
				<?php $_smarty_tpl->tpl_vars["j"] = new Smarty_Variable("0", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "j", 0);?>
				<?php
$_from = $_smarty_tpl->tpl_vars['user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user_name']->value[$_smarty_tpl->tpl_vars['j']->value];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['value']->value['type'] == 0) {?>普通帐号<?php } else { ?>邮箱帐号<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['level'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['create_time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['login_time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['points'];?>
</td>
					<td>
					<input type="submit" value="删除" onclick="del(<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
);">
					<input type="submit" value="提升一级" onclick="levelup(<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
);">
					<input type="submit" value="降低一级" onclick="leveldown(<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
);">
					</td>
				</tr>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
				<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable($_smarty_tpl->tpl_vars['j']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'j', 0);?>
				<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
			</table>
			<input type="hidden" name="act_type" id="act_type">
			<input type="hidden" name="act_num" id="act_num">
			<input type="hidden" name="page" id="page" value="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
">
			</form>
			<hr>
			<p>共有 <label class="red"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</label> 名您可以管理的用户,此屏显示从第 <label class="red"><?php echo $_smarty_tpl->tpl_vars['pageLength']->value*($_smarty_tpl->tpl_vars['pageNum']->value-1)+1;?>
</label> 条开始，到第 <label class="red"><?php echo $_smarty_tpl->tpl_vars['i']->value-1;?>
</label> 条结束的用户记录</p>
			<p>
			<br>
			<div class="pageNav">
			
			<?php if ($_smarty_tpl->tpl_vars['pageNum']->value != 1) {?>
			<a href="index.php?action=admin&page=1">首页</a>
			<a href="index.php?action=admin&page=<?php echo $_smarty_tpl->tpl_vars['pageNum']->value-1;?>
">上一页</a>
			<?php } else { ?>
			首页 上一页
			<?php }?>
			<?php
$_from = $_smarty_tpl->tpl_vars['pageNav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_1_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_1_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
				<?php if ($_smarty_tpl->tpl_vars['val']->value == $_smarty_tpl->tpl_vars['pageNum']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

				<?php } else { ?>
					<a href="index.php?action=admin&page=<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</a>
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_local_item;
}
if ($__foreach_val_1_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_1_saved_item;
}
?>
			
			<?php if ($_smarty_tpl->tpl_vars['pageNum']->value != $_smarty_tpl->tpl_vars['pageSum']->value) {?>
			<a href="index.php?action=admin&page=<?php echo $_smarty_tpl->tpl_vars['pageNum']->value+1;?>
">下一页</a>
			<a href="index.php?action=admin&page=<?php echo $_smarty_tpl->tpl_vars['pageSum']->value;?>
">尾页</a>
			<?php } else { ?>
			下一页 尾页
			<?php }?>
			
				<p>
				<form action="index.php" method="get">
					<label>跳转到</label>
					<input type="hidden" name="action" value="admin">
					<input type="text" name="page" id="page"  placeholder="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
">
					<label>页</label>
					<input type="submit" value="Go">
				</form>
					
				</p>
			</div>
			
			<br>
			</p>
		</div>
		<div>
			<a href="index.php?action=main">单击返回上一层</a>
		</div>
	</div>
	<div class="footer_blank"></div>
	<div class="footer">
		<p class="fr">Powered by lin &copy; 2016</p>
	</div>
</body>
</html><?php }
}
