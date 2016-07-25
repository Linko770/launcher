<?php
/* Smarty version 3.1.29, created on 2016-04-27 20:16:14
  from "D:\wamp64\www\launcher\lib\view\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5720ad8ea0fd47_30702460',
  'file_dependency' => 
  array (
    '4c7646a917f3d873d5f42d171982b4569ab21709' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\login.html',
      1 => 1461759371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5720ad8ea0fd47_30702460 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
</head>
<link rel="stylesheet" type="text/css" href="./lib/css/login.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/jquery/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/js/login.js"><?php echo '</script'; ?>
>

<body>
<div class="bg"><img id="bg"src="" alt=""></div>
<div class="header">
	<div class="fr header_r">欢迎登录</div>
</div>
<div class="main">
	<div class="left">
		说好的广告位
	</div>
	<div class="right">
		<div class="tab">
			<div class="tab_menu">
				<ul>
					<li class="selected">帐号密码登录</li>
					<li >邮箱登录</li>
				</ul>
			</div>
			<div class="tab_box">
				<div>
					<form autocomplete="off" action="index.php" method="post" onsubmit="return checksubmit();">
						<p class="msg"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
						<ul>
							<li><input type="text" name="username" id="username1" placeholder="请输入帐号" maxlength="40"></li>
							<li><input type="password" name="password" id="password1" placeholder="请输入密码" maxlength="40"></li>
							<li><div class="code_div"><input type="text" name="code" id="code" placeholder="验证码" maxlength="4"><a href="javascript:void(0);" onclick="code_refresh();"><img id="codeimg" border="1" src="./lib/model/captcha.class.php?r=<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
">看不清？</a></div></li>
							<input type="hidden" name="type" value="0">
							<li><input type="submit" value="帐  号  登  录" class="submit"></li>
							<li class="foot_text">
							<p class="fl">还没有帐号，<a href="index.php?action=register">注册账号</a></p>
							<p class="fr">拥有账号，但<a href="index.php?action=lost">忘记密码？</a></p>
							</li>
						</ul>
					</form>
				</div>
				<div class="hide tab_box2">
					<form autocomplete="off" action="index.php" method="post">
						<p class="msg"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
						<ul>
							<li><input type="text" name="username" id="username2" placeholder="请输入邮箱" maxlength="40"></li>
							<li><input type="password" name="password" id="password2" placeholder="请输入密码" maxlength="40"></li>
							<input type="hidden" name="type" value="1">
							<li><input type="submit" value="邮  箱  登  录" class="submit"></li>
							<li class="foot_text">
							<p class="fl">还没有帐号，<a href="index.php?action=register">注册账号</a></p>
							<p class="fr">拥有账号，但<a href="index.php?action=lost">忘记密码？</a></p>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html><?php }
}
