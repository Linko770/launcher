<?php
class DB_PDO{
	public static $instance = null;
	private function __construct(){
		echo "PDO_class";
	}

	public static function getInstance(){
		if(!self::$instance instanceof self){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function connect($info){
		foreach ($info as $key => $value) {
			echo $key,"==>",$value,"<br/>";
		}
	}

	public function test1($test){
		echo "pdo_class".$test;
	}
}