<?php
function passwordsalt($password){
	$res = md5(md5($password).PASSWORD_SALT);
	return $res;
}

/**
 * [检查输入内容是否合法]
 * @param  [string] $str [输入的字符串]
 * @return [boolean]      [true合法 ; false非法]
 */
function checkInput($str){
	$pattern="/[0-9a-zA-Z_@.]+$/";
	if(!preg_match($pattern,$str)){
		return false;
	}
	if(strlen($str)>40 || strlen($str)<6){
		return false;
	}
	return true;
}

/**
 * [检查输入内容是否为邮箱]
 * @param  [string] $str [输入的字符串]
 * @return [boolean]      [true合法 ; false非法]
 */
function checkEmail($str){
	$pattern="/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/";
	if(preg_match($pattern,$str)){
		return true;
	}
	return false;
}

/**
 * 调试用
 * @param  [type] $msg [description]
 * @return [type]      [description]
 */
function alartMsg($msg){
	echo "<script>alert(".$msg.");</script>";
}
