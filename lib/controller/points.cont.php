<?php
session_start();
$uid=$_SESSION['uid'];
if(empty($uid)){
	header("location:index.php");
	exit();
}
$db = DB::getInstance($db_info);
$sql = "select name from user_info where uid=".$uid;
$username=$db->getOne($sql);
$username=$username['name'];
$sql = "select level,points from user where uid='".$uid."'";
$user=$db->getOne($sql);
$lev=$user['level'];
$level=$user_level[$lev];
$power=$user_power[$lev];
$points=$user['points'];

$smarty->assign("uid",$uid);
$smarty->assign("username",$username);
$smarty->assign("level",$level);
$smarty->assign("points",$points);
$smarty->assign("power",$power);

$smarty->display("./lib/view/points.html");
