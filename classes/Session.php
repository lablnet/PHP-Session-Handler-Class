<?php
class Session
{

	//Method ____construct
	public function __construct(){

		if(session_status() === PHP_SESSION_NONE){

			session_start();

		}

	}

	//Method CheckStatus
	public function CheckStatus($name){

		if(isset($_SESSION[$name])){

			return true;

		}else{

			return false;

		}

	}

	//Method GetValue
	public function GetValue($name){

		if($this->CheckStatus($name) === true){

			return $_SESSION[$name];

		}else{

			return false;

		}
	}

	//Method SetValue
	public function SetValue($params){

		if(is_array($params)){

			if($this->CheckStatus($params['name']) === false){

				$_SESSION[$params['name']] = $params['value'];

			return $_SESSION[$params['name']];

			}else{

				return false;

			}
		}
	}

	//Method UnsetValue
	public function UnsetValue($name){

		if($this->CheckStatus($name) === true){

			session_unset($name);

			return true;

		}else{

			return false;

		}
	}
}