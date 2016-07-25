<?php
//指定根目录
define("PATH",dirname(dirname(__dir__)));
//数据库信息
$db_info=array(
	'type'=>'mysqli',
	'host'=>'localhost',
	'username'=>'launcher',
	'password'=>'123456',
	'database'=>'lin_launcher'
);
//密码盐
define("PASSWORD_SALT","Mysalt");
//用户级别名称[0-5]
$user_level = array("游客","普通会员","高级会员","版主","管理员","超级管理员");
//用户权利
$user_power = array(
	array("进入系统"),
	array("进入系统","特权头衔"),
	array("进入系统","VIP特权头衔"),
	array("进入系统","VIP特权头衔","板块管理"),
	array("进入系统","VIP特权头衔","板块管理","管理其他用户"),
	array("进入系统","VIP特权头衔","板块管理","管理其他用户","管理管理员")
);
//验证码类型 
//1->数字;2->数字+字母;3->中文
define("captcha_type","1");
//找回密码的默认密码
define("DEFAULT_PW","123456");

