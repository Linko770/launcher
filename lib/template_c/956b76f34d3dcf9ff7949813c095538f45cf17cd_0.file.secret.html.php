<?php
/* Smarty version 3.1.29, created on 2016-04-28 11:29:44
  from "D:\wamp64\www\launcher\lib\view\secret.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572183a876f8e2_76827385',
  'file_dependency' => 
  array (
    '956b76f34d3dcf9ff7949813c095538f45cf17cd' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\secret.html',
      1 => 1461814138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572183a876f8e2_76827385 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/jquery/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/js/secret.js"><?php echo '</script'; ?>
>
<head>
	<meta charset="UTF-8">
	<title>密保问题</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎您，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
	</div>
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>密保问题</h2>
			</div>
		</div>
		<hr>
		<div class="list cont">
			<h3>密保修改</h3>
			<form autocomplete="off" action="index.php?action=secret" method="post" onsubmit="return checksubmit();">
				<ul>
				<li>
				<span>密保问题</span>
				<select name="question">
				<option value="1">母亲的名字</option>
				<option value="2">爷爷的名字</option>
				<option value="3">父亲出生的城市</option>
				<option value="4">您其中一位老师的名字</option>
				<option value="5">您个人计算机的型号</option>
				<option value="6">您最喜欢的餐馆名称</option>
				<option value="7">驾驶执照最后四位数字</option>
				</select>
				</li>
				<li><span>密保答案</span> <input type="text" name="new_pw" id="new_pw" value="<?php echo $_smarty_tpl->tpl_vars['new_pw']->value;?>
" maxlength="40"></li>
				<li><input type="submit" value="修改密保"></li>
				<li><p class="msg red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p></li>
				</ul>
			</form>
		</div>
		<div class="cont">
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
