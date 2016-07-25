<?php
session_start();
require_once './lib/model/register.class.php';
$captcha=isset($_SESSION['captcha'])?$_SESSION['captcha']:false;
$username=isset($_POST['username'])?$_POST['username']:false;
$question=isset($_POST['question'])?$_POST['question']:false;
$new_pw2=isset($_POST['new_pw2'])?$_POST['new_pw2']:false;
$ac_type=isset($_POST['ac_type'])?$_POST['ac_type']:false;
$code=isset($_POST['code'])?$_POST['code']:false;
$msg="";
$rand = rand();
$username= htmlspecialchars($username);
$question= htmlspecialchars($question);
$new_pw2= htmlspecialchars($new_pw2);
/*
先在user表中建立数据 由于auto_increament所以用last_insert_id取得id,
之后根据帐号或邮箱添加到user_info或user_mail表中，对应id;
由此，登录页面可以根据两个表进行登录
 */
if($ac_type!==false){
	if($captcha===$code){
		if((strlen($username)>=6)&&(strlen($new_pw2)>=1)){
			if(checkInput($username) && strlen($new_pw2)>0){
					$db = DB::getInstance($db_info);
					$register = new Register($db);
					//先检查用户名或邮箱
					if($ac_type==0){
						if(!checkEmail($username)){
							if(!$register->check('0',$username)){
								$uid = $db->getUid('0',$username);
								$question_array = $db->getQuestion($uid);
								$question_id = $question_array['question_id'];
								$answer =  $question_array['answer'];
								if($question_id == $question && $answer == $new_pw2){
									$db->changePassword($ac_type,$uid,passwordsalt(DEFAULT_PW));
									$msg = "找回成功，默认密码设置为".DEFAULT_PW;
								}else{
									$msg = "提供的密保信息出现错误";
								}
							}else{
								$msg = "此账户不存在";
							}
						}else{
							$msg = "邮箱格式用户名，请选择邮箱方式查询";
						}
					}else if($ac_type==1){
						if(checkEmail($username)){
							if(!$register->check('1',$username)){
								$uid = $db->getUid('1',$username);
								$question_array = $db->getQuestion($uid);
								$question_id = $question_array['question_id'];
								$answer =  $question_array['answer'];
								if($question_id == $question && $answer == $new_pw2){
									$db->changePassword($ac_type,$uid,passwordsalt(DEFAULT_PW));
									$msg = "找回成功，默认密码设置为".DEFAULT_PW;
								}else{
									$msg = "提供的密保信息出现错误";
								}
							}else{
								$msg = "此邮箱不存在";
							}
						}else{
							$msg = "请使用邮箱格式注册用户名";
						}
					}
			}else{
				//用户名或密码输入非法
				if(!checkInput($username)){
					$msg = "用户名中含有非法字符";
				}else{
					$msg = "密码中含有非法字符";
				}
			}
		}else{
			//排查是哪项不符合要求
			if(strlen($username)<6){
				$msg = "用户名长度不能小于6";
			}else if(strlen($new_pw2)<1){
				$msg = "重复密码不能小于6位";
			}
		}
	}else{
		$msg = "验证码错误";
	}
}
$smarty->assign("rand",$rand);
$smarty->assign("msg",$msg);
$smarty->assign("username",$username);
$smarty->assign("new_pw2",$new_pw2);
$smarty->display("./lib/view/lost.html");
