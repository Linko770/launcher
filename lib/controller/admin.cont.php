<?php
session_start();
require_once './lib/model/admin.class.php';
$act_type=isset($_REQUEST['act_type'])?$_REQUEST['act_type']:false;
$act_num=isset($_REQUEST['act_num'])?$_REQUEST['act_num']:false;
$uid=$_SESSION['uid'];
$level=$_SESSION['level'];
$type=$_SESSION['type'];
if(empty($uid) || $level < 4){
	header("location:index.php");
	exit();
}

$db = DB::getInstance($db_info);

if($act_type && $act_num){
	switch($act_type){
		//删除用户
		case 'delete':
			$db->delData($level,$act_num);
			break;
		//提升一级
		case 'levelup':
			$db->levelUp($level,$act_num);
			break;
		//降低一级
		case 'leveldown':
			$db->levelDown($level,$act_num);
			break;
		default:
			header("location:index.php?action=main");
	}
	$ac_type=$act_num=false;
}

$pageLength=3;//每页显示条目数
$pageNavLength=10;//数字导航栏的长度


$username=$db->getUsername($type,$uid);
$count = $db->getCount($level);
$pageSum = ceil($db->getCount($level) / $pageLength);

if(isset($_REQUEST['page'])){
	if($_REQUEST['page']>$pageSum){
		$pageNum = $pageSum;
	}else if(($_REQUEST['page']>0) && ($_REQUEST['page']<=$pageSum)){
		$pageNum = $_REQUEST['page'];
	}else{
		$pageNum = 1;
	}
}else{
	$pageNum = 1;
}

$user = $db->getImfor($level,$pageNum,$pageLength);
$user_name = array();
foreach($user as $value){
	$user_name[] = $db->getUsername($value['type'],$value['uid']);
}

$pageNav = pageNav($pageNum,$pageSum,$pageNavLength);

$smarty->assign("user",$user);
$smarty->assign("user_name",$user_name);
$smarty->assign("username",$username);
$smarty->assign("pageNum",$pageNum);
$smarty->assign("pageSum",$pageSum);
$smarty->assign("pageLength",$pageLength);
$smarty->assign("count",$count);
$smarty->assign("pageNav",$pageNav);
$smarty->display("./lib/view/admin.html");
