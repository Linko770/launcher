<?php
class Register{
	private $db;
	public function __construct($db){
		$this->db = $db;
	}
	
	/**
	 * 检查重名
	 * @param  int $type     用户种类
	 * @param  string $username 待验证的用户名
	 * @return bool           [false 无法建立]
	 */
	public function check($type,$username){
		$res = $this->db->existUsername($type,$username);
		if($res){
			//此时重名
			return false;
		}
		return true;
	}
}