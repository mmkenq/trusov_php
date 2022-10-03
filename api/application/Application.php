<?php 

require('user/User.php');
require('db/DB.php');

class Application {
	function _construct(){
		$db = new DB();
		$this->user = new User($db);
	}

	public function login($params){
		if($params['login'] && $params['password']){
			return $this->user->login($params['login'], $params['password']);
		};
	}
};