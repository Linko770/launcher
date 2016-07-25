<?php
/* Smarty version 3.1.29, created on 2016-04-29 20:24:53
  from "D:\wamp64\www\launcher\lib\view\register.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572352950cd787_24306399',
  'file_dependency' => 
  array (
    '65f7211aef7e7d27d5f2b9b8640e99b70b364e5f' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\register.html',
      1 => 1461932688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572352950cd787_24306399 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/jquery/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/js/register.js"><?php echo '</script'; ?>
>
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">欢迎注册</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>用户注册</h2>
			</div>
		</div>
		<hr>
		<div class="list cont">
			<h3>请完善以下信息</h3>
			<div class="list_title">
				<p>请选择您想注册的账号类型</p>
				<ul>
					<li>
					<input type="radio" name="type" class="type" id="type0" checked="checked">
					<label for="type0">帐号注册</label>
					</li>
					<li>
					<input type="radio" name="type" class="type" id="type1">
					<label for="type1">邮箱注册</label>
					</li>
				</ul>
				
				
				<div class="short_hr"><hr></div>
			</div>
			<form autocomplete="off" action="index.php?action=register" method="post" onsubmit="return checksubmit();">
				<ul>
				<li><span id="username_label">用户名</span><input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" placeholder="请输入用户名"><lable class="red"> *</lable></li>
				<li><span>密码</span><input type="password" name="new_pw" id="new_pw" value="<?php echo $_smarty_tpl->tpl_vars['new_pw']->value;?>
" placeholder="请输入密码" maxlength="40"><lable class="red"> *</lable></li>
				<li><span>重复输入密码</span><input type="password" name="new_pw2" id="new_pw2" value="<?php echo $_smarty_tpl->tpl_vars['new_pw2']->value;?>
" placeholder="请重复输入密码" maxlength="40"><lable class="red"> *</lable></li>
				<input type="hidden" name="ac_type" id="ac_type" value="0">
				<li><span class="fl">验证码</span><input class="fl" type="text" name="code" id="code" placeholder="验证码" maxlength="4"><div class="code_div fl"><a href="javascript:void(0);" onclick="code_refresh();"><img id="codeimg" border="1" src="./lib/model/captcha.class.php?r=<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
"><label for="codeimg">&nbsp;看不清？</label></a></div></li>
				<div class="short_hr"><hr></div>
				<li
				.><input type="checkbox" name="xuke" id="xuke" checked="checked"> <label for="xuke">我已经阅读并同意<a href="./lib/view/xuke.html" target="_blank">《许可协议》</a></label></li>
				<li><input type="submit" value="注&nbsp;册">&nbsp;<input type="reset" value="重&nbsp;置"></li>
				<li><p class="msg red"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p></li>
				</ul>
			</form>
		</div>
		<div class="cont">
			<a href="index.php">单击返回上一层</a>
		</div>
	</div>
	<div class="footer_blank"></div>
	<div class="footer">
		<p class="fr">Powered by lin &copy; 2016</p>
	</div>
</body>
</html><?php }
}
