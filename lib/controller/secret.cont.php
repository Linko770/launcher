<?php
session_start();
$uid=$_SESSION['uid'];
$type=$_SESSION['type'];
if(empty($uid)){
	header("location:index.php");
	exit();
}
$question=isset($_POST['question'])?$_POST['question']:false;
$new_pw=isset($_POST['new_pw'])?$_POST['new_pw']:false;
$db = DB::getInstance($db_info);
$username=$db->getUsername($type,$uid);
$msg="";

if($question && $new_pw ){
		if(strlen($new_pw)<1){
			$msg = "密保答案不能为空";
		}else{
			$db->setQuestion($uid,$question,$new_pw);
			$msg = "密保修改成功";
			$new_pw="";
		}
}else{
	$msg = "请将空白项填满后提交";
}
$smarty->assign("uid",$uid);
$smarty->assign("username",$username);
$smarty->assign("msg",$msg);
$smarty->assign("question",$question);
$smarty->assign("new_pw",$new_pw);
$smarty->display("./lib/view/secret.html");
