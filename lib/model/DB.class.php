<?php
class DB{
	public static $myDB = null;	//判断DB是否被实例化
	public static $DB = null;	//存放实例化的数据库操作方法

	//初始化
	private function __construct($info){
		extract($info);
		//现在只支持mysqli与PDO
		switch ($type) {
			case 'PDO':
				self::$DB = DB_PDO::getInstance();
				break;
			case 'mysqli':
			default:
				self::$DB = DB_Mysqli::getInstance();
				break;
		}
		$this->connect($info);
	}

	//单例
	public static function getInstance($info){
		if(!self::$myDB instanceof self){
			self::$myDB = new self($info);
		}
		return self::$myDB;
	}

	//连接数据库
	private function connect($info){
		self::$DB->connect($info);
	}

	//取得一条数据的值
	public function getOne($sql){
		return self::$DB->getOne($sql);
	}

	//执行sql语句
	public function query($sql){
		return self::$DB->query($sql);
	}

	//取得uid
	public function getUid($type,$username){
		return self::$DB->getUid($type,$username);
	}

	//取得上次登录时间
	public function getLoginTime($uid){
		return self::$DB->getLoginTime($uid);
	}

	//设置登陆时间
	public function setLoginTime($uid){
		return self::$DB->setLoginTime($uid);
	}

	//取得用户名
	public function getUsername($type,$uid){
		return self::$DB->getUsername($type,$uid);
	}

	//取得密码
	public function getPassword($type,$username){
		return self::$DB->getPassword($type,$username);
	}

	//取得验证问题
	public function getQuestion($uid){
		return self::$DB->getQuestion($uid);
	}

	//设置验证问题
	public function setQuestion($uid,$question_id,$answer){
		return self::$DB->setQuestion($uid,$question_id,$answer);
	}

	//修改密码
	public function changePassword($type,$uid,$password){
		return self::$DB->changePassword($type,$uid,$password);
	}
	
	//验证此用户是否存在
	public function existUsername($type,$username){
		return self::$DB->existUsername($type,$username);
	}

	//取得插入的ID
	public function getInsertId($type,$username,$password){
		return self::$DB->getInsertId($type,$username,$password);
	}


	//取得$pageNum开始的$pageLength条数据信息
	public function getImfor($level,$pageNum,$pageLength){
		return self::$DB->getImfor($level,$pageNum,$pageLength);
	}

	//取得当前用户权限下能查询的用户总数
	public function getCount($level){
		return self::$DB->getCount($level);
	}

	//删除用户信息
	public function delData($level,$uid){
		return self::$DB->delData($level,$uid);
	}

	//提升权限
	public function levelUp($level,$uid){
		return self::$DB->levelUp($level,$uid);
	}

	//降低权限
	public function levelDown($level,$uid){
		return self::$DB->levelDown($level,$uid);
	}
	
}