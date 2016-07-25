<?php
session_start();
$uid=$_SESSION['uid'];
$type=$_SESSION['type'];
if(empty($uid)){
	header("location:index.php");
	exit();
}
$pre_pw=isset($_POST['pre_pw'])?$_POST['pre_pw']:false;
$new_pw=isset($_POST['new_pw'])?$_POST['new_pw']:false;
$new_pw2=isset($_POST['new_pw2'])?$_POST['new_pw2']:false;
$db = DB::getInstance($db_info);
$username=$db->getUsername($type,$uid);
$msg="";

if($pre_pw && $new_pw && $new_pw2){
	if($new_pw === $new_pw2){
		if(strlen($new_pw)<6){
			$msg = "新密码不能少于6位";
		}else{
			$password=$db->getPassword($type,$username);
			if($password === passwordsalt($pre_pw)){
				$db->changePassword($type,$uid,passwordsalt($new_pw));
				if($db->getPassword($type,$username)==passwordsalt($new_pw)){
					$msg = "密码修改成功";
				}else{
					$msg = "密码修改失败";
				}
				
				$pre_pw=$new_pw=$new_pw2="";
			}else{
				$msg = "原密码输入错误";
			}
		}
	}else{
		$msg = "两次输入的新密码不同，请检查后再次提交";
	}
}elseif($pre_pw===false && $new_pw===false && $new_pw2===false){

}else{
	$msg = "请将空白项填满后提交";
}
$smarty->assign("uid",$uid);
$smarty->assign("username",$username);
$smarty->assign("msg",$msg);
$smarty->assign("pre_pw",$pre_pw);
$smarty->assign("new_pw",$new_pw);
$smarty->assign("new_pw2",$new_pw2);
$smarty->display("./lib/view/changepw.html");
