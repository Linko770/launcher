<?php
session_start();
$username = isset($_POST['username'])?$_POST['username']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
$code = isset($_POST['code'])?$_POST['code']:"";
$type = isset($_POST['type'])?$_POST['type']:"";
$msg="";
$rand=rand();

if($username){
	if((strtolower($code) == $_SESSION['captcha'] && $type == 0) || ($type == 1)){
		$db = DB::getInstance($db_info);
		$pass = $db->getPassword($type,$username);
		$password = passwordsalt($password);
		if($pass === $password){
			$uid = $db->getUid($type,$username);
			$login_time = $db->getLoginTime($uid);
			$_SESSION['uid']=$uid;
			$_SESSION['type']=$type;
			$_SESSION['login_time']=$login_time;
			$db->setLoginTime($uid);
			header("location:index.php?action=main");
		}else{
			if($username==="" && $password===""){
				$msg = "";
			}elseif($username===""){
				$msg = "用户名为空，请检查后输入";
			}elseif($password===""){
				$msg = "密码为空，请检查后输入";
			}else{
				$msg = "错误的用户名或密码，请检查后输入";
			}
		}
	}else{
		$msg = "验证码错误，请检查后输入";
	}
}
$smarty->assign("msg",$msg);
$smarty->assign("rand",$rand);
$smarty->display('./lib/view/login.html');