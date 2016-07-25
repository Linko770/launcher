<?php
header("Content-type:text/html;charset=utf-8");
$action = isset($_REQUEST['action'])?$_REQUEST['action']:"login";
error_reporting(0);

require_once "./lib/conf/config.php";
require_once './lib/smarty/Smarty.class.php';
require_once "./lib/model/comm.func.php";
require_once "./lib/model/DB.class.php";
require_once "./lib/model/mysqli.class.php";
require_once "./lib/model/pdo.class.php";

date_default_timezone_set('Asia/Chongqing');
$smarty = new Smarty;
$smarty->template_dir="./lib/view";	//html模版地址
$smarty->compile_dir="./lib/template_c";//模版编译生成位置
//smarty end

//require_once "./lib/controller/login.cont.php";
//require_once "./lib/view/".$action.".html";
require_once "./lib/controller/".$action.".cont.php";
//require $load;
