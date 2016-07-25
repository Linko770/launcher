<?php
/* Smarty version 3.1.29, created on 2016-04-29 20:24:50
  from "D:\wamp64\www\launcher\lib\view\lost.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57235292a906f0_47443936',
  'file_dependency' => 
  array (
    '84b473af55cca612a3b31a2fa7e3a410721655cd' => 
    array (
      0 => 'D:\\wamp64\\www\\launcher\\lib\\view\\lost.html',
      1 => 1461932676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57235292a906f0_47443936 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./lib/css/account.css">
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/jquery/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./lib/js/lost.js"><?php echo '</script'; ?>
>
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
</head>
<body>
	<div class="header">
		<div class="header_r fr">找回密码</div>
	</div>
	
	<div class="main cont">
		<div class="title">
			<div class="fl">
				<h2>找回密码</h2>
			</div>
		</div>
		<hr>
		<div class="list cont">
			<h3>请您回忆以下信息</h3>
			<div class="list_title">
				<p>请选择您当时注册的账号类型</p>
				<ul>
					<li>
					<input type="radio" name="type" class="type" id="type0" checked="checked">
					<label for="type0">我记得当时注册的是<lable class="red">用户名类型</lable>帐号</label>
					</li>
					<li>
					<input type="radio" name="type" class="type" id="type1">
					<label for="type1">我记得当时注册的是<lable class="red">邮箱类型</lable>帐号</label>
					</li>
				</ul>
				
				
				<div class="short_hr"><hr></div>
			</div>
			<form autocomplete="off" action="index.php?action=lost" method="post" onsubmit="return checksubmit();">
				<ul>
				<li><span id="username_label">用户名</span><input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" placeholder="请输入用户名"><lable class="red"> *</lable></li>
				<li><span>密保问题</span>
				<select name="question">
				<option value="1">母亲的名字</option>
				<option value="2">爷爷的名字</option>
				<option value="3">父亲出生的城市</option>
				<option value="4">您其中一位老师的名字</option>
				<option value="5">您个人计算机的型号</option>
				<option value="6">您最喜欢的餐馆名称</option>
				<option value="7">驾驶执照最后四位数字</option>
				</select>
				<lable class="red"> *</lable></li>
				<li><span>问题答案</span><input type="text" name="new_pw2" id="new_pw2" value="<?php echo $_smarty_tpl->tpl_vars['new_pw2']->value;?>
" placeholder="请输入密保问题的答案" maxlength="40"><lable class="red"> *</lable></li>
				<input type="hidden" name="ac_type" id="ac_type" value="0">
				<li><span class="fl">验证码</span><input class="fl" type="text" name="code" id="code" placeholder="验证码" maxlength="4"><div class="code_div fl"><a href="javascript:void(0);" onclick="code_refresh();"><img id="codeimg" border="1" src="./lib/model/captcha.class.php?r=<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
"><label for="codeimg">&nbsp;看不清？</label></a></div></li>
				<div class="short_hr"><hr></div>
				<li><input type="submit" value="提&nbsp;交">&nbsp;<input type="reset" value="重&nbsp;置"></li>
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
