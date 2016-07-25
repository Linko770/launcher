<?php
class DB_Mysqli{
	public static $instance = null;
	public static $mysqli = null;
	private function __construct(){
		
	}

	public static function getInstance(){
		if(!self::$instance instanceof self){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function connect($info){
		extract($info);
		self::$mysqli = new mysqli($host,$username,$password,$database);
		if(self::$mysqli->connect_errno){
			die("数据库连接错误");
		}
		self::$mysqli->query("set names utf8");
	}

	public function getOne($sql){
		$res = self::$mysqli->query($sql);
		$res = mysqli_fetch_assoc($res);
		return $res;
	}

	public function query($sql){
		return self::$mysqli->query($sql);
	}

	public function getUid($type,$username){
		$table = ($type==0)?'user_info':'user_mail';
		$sql = "select uid from ".$table." where name='".$username."'";
		$uid = $this->getOne($sql);
		return $uid['uid'];
	}

	public function getLoginTime($uid){
		$sql = "select login_time from user where uid='".$uid."'";
		$login_time = $this->getOne($sql);
		return $login_time['login_time'];
	}

	public function setLoginTime($uid){
		$sql = "update user set login_time='".date("Y-m-d H:i:s",time())."' where uid=".$uid;
		$this->query($sql);
	}

	public function getUsername($type,$uid){
		$table = ($type==0)?'user_info':'user_mail';
		$sql = "select name from ".$table." where uid=?";
		$stmt = self::$mysqli->prepare($sql);
		$stmt->bind_param('i',$uid);
		$stmt->execute();
		$res = $stmt->get_result();
		$res = mysqli_fetch_assoc($res);
		return $res['name'];
	}

	public function changePassword($type,$uid,$password){
		$table = ($type==0)?'user_info':'user_mail';
		$sql =	"update ".$table." set password=? where uid=?";
		$stmt = self::$mysqli->prepare($sql);
		$stmt->bind_param('si',$password,$uid);
		$stmt->execute();
	}

	public function getPassword($type,$username){
		$table = ($type==0)?'user_info':'user_mail';
		$stmt = self::$mysqli->prepare("select password from ".$table." where name=?");
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$res = $stmt->get_result();
		$res = mysqli_fetch_assoc($res);
		$res = $res['password'];
		return $res;
	}

	public function getQuestion($uid){
		$stmt = self::$mysqli->prepare("select question_id,answer from question where uid=?");
		$stmt->bind_param('i', $uid);
		$stmt->execute();
		$res = $stmt->get_result();
		$res = mysqli_fetch_assoc($res);
		return $res;
	}

	public function setQuestion($uid,$question_id,$answer){
		$sql = 'select question_id from question where uid='.$uid;
		$res = self::$mysqli->query($sql);
		if($res){
			$sql = 'delete from question where uid='.$uid;
			$res = self::$mysqli->query($sql);
		}
		$sql = "insert into question values (?,?,?)";
		$stmt = self::$mysqli->prepare($sql);
		$stmt->bind_param('iis',$uid,$question_id,$answer);
		$stmt->execute();
	}

	public function existUsername($type,$username){
		$table = ($type==0)?'user_info':'user_mail';
		$sql = "select uid from ".$table." where name=?";
		$stmt = self::$mysqli->prepare($sql);
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$res = $stmt->get_result();
		$res = mysqli_fetch_assoc($res);
		$res = $res['uid'];
		return $res;
	}


	public function getInsertId($type,$username,$password){
		$sql = 'insert into user (type) values ('.$type.')';
		self::$mysqli->query($sql);
		$sql = 'select last_insert_id()';
		$res = self::$mysqli->query($sql);
		$newid = mysqli_fetch_array($res)[0];//$newid为最新插入的uid
		//检查question表
		$sql = 'select question_id from question where uid='.$newid;
		$res = self::$mysqli->query($sql);
		if($res){
			$sql = 'delete from question where uid='.$newid;
			$res = self::$mysqli->query($sql);
		}
		$sql = 'insert into question (uid) values ('.$newid.')';
		self::$mysqli->query($sql);

		$table = ($type==0)?'user_info':'user_mail';//选择要操作的table
		$sql = 'select name from '.$table.' where uid='.$newid;
		$res = self::$mysqli->query($sql);
		//如果 user_info / user_mail表中存在uid的项，则应先删除
		if($res){
			$sql = 'delete from '.$table.' where uid='.$newid;
			$res = self::$mysqli->query($sql);
		}
		$sql = 'insert into '.$table.' values (?,?,?)';
		$stmt = self::$mysqli->prepare($sql);
		$stmt->bind_param('iss',$newid,$username,$password);
		$stmt->execute();
	}

	public function getImfor($level,$pageNum,$pageLength){
		$sql = 'select uid,type,level,create_time,login_time,points from user where level<? order by level desc limit ?,?';
		$stmt = self::$mysqli->prepare($sql);
		$temp = $pageLength*($pageNum-1);
		$stmt->bind_param('iii',$level,$temp,$pageLength);
		$stmt->execute();
		$res = $stmt->get_result();
		$res_arr = array();
		while($line = mysqli_fetch_assoc($res)){
			$res_arr[]=$line;
		}
		return $res_arr;
	}

	public function getCount($level){
		$sql = 'select count(uid) from user where level<'.$level;
		$res = self::$mysqli->query($sql);
		$res = mysqli_fetch_array($res);
		return $res[0];
	}

	public function delData($level,$uid){
		$sql = 'select level,type from user where uid='.$uid;
		$user = self::$mysqli->query($sql);
		if(!$user){return false;}
		$user = mysqli_fetch_assoc($user);
		$level2 = $user['level'];
		$type = $user['type'];
		if($level > $level2){
			$table = ($type==0)?'user_info':'user_mail';
			$sql = "delete from user where uid=".$uid;
			self::$mysqli->query($sql);
			$sql = "delete from ".$table." where uid=".$uid;
			self::$mysqli->query($sql);
			$sql = "delete from question where uid=".$uid;
			self::$mysqli->query($sql);
		}
	}

	public function levelUp($level,$uid){
		$sql = 'select level from user where uid='.$uid;
		$user = self::$mysqli->query($sql);
		if(!$user){return false;}
		$user = mysqli_fetch_assoc($user);
		$level2 = $user['level'];
		$level2++;
		if($level2 < $level){
			$sql = 'update user set level = '.$level2.' where uid='.$uid;
			self::$mysqli->query($sql);
		}
	}

	public function levelDown($level,$uid){
		$sql = 'select level from user where uid='.$uid;
		$user = self::$mysqli->query($sql);
		if(!$user){return false;}
		$user = mysqli_fetch_assoc($user);
		$level2 = $user['level'];
		$level3 = $level2 - 1;
		if(($level2 < $level) && ($level3>=0)){
			$sql = 'update user set level = '.$level3.' where uid='.$uid;
			self::$mysqli->query($sql);
		}
	}
}
