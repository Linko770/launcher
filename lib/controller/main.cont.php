<?php
session_start();
$uid=$_SESSION['uid'];
$type=$_SESSION['type'];
$login_time=$_SESSION['login_time'];
if(empty($uid)){
	header("location:index.php");
	exit();
}
$db = DB::getInstance($db_info);
$username = $db->getUsername($type,$uid);
$sql = "select level,points from user where uid='".$uid."'";
$user=$db->getOne($sql);
$level=$user['level'];
$points=$user['points'];
$_SESSION['level'] = $level;

$smarty->assign("uid",$uid);
$smarty->assign("username",$username);
$smarty->assign("level",$level);
$smarty->assign("login_time",$login_time);
$smarty->assign("points",$points);

$smarty->display("./lib/view/main.html");
