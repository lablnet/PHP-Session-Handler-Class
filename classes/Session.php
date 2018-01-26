<?php
	/**
	 * This package Can handel session.
	 *
	 * @author   Malik Umer Farooq <lablnet01@gmail.com>
	 * @author-profile https://www.facebook.com/malikumerfarooq01/
	 * @license MIT 
	 * @link      https://github.com/Lablnet/PHP-Sessuib-Handler-Class
	 */
class Session
{

	 /**
     * Start the session if not already start
     * @return void
    */
	public function __construct(){

		if(session_status() === PHP_SESSION_NONE){

			session_start();

		}

	}

		
     /** 
     *Check if session is already set with specific name
     * @param $name (string) name of session e.g users
     * @return boolean
    */
	public function CheckStatus($name){

		if(isset($_SESSION[$name])){

			return true;

		}else{

			return false;

		}

	}

     /**
     * Get the session value by providing session name
     * @param $name (string) name of session e.g users
     * @return string
    */
	public function GetValue($name){

		if($this->CheckStatus($name) === true){

			return $_SESSION[$name];

		}else{

			return false;

		}
	}

     /**
     * Set/store value in session
     * @param $params (array) 
     * 'name' => name of session e.g users
     * 'value' => value store in session e.g user token 
     * @return string
    */
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

    /**
     * Delete/unset the session
     * @param $name (string) name of session e.g users
     * @return boolean
    */ 
	public function UnsetValue($name){

		if($this->CheckStatus($name) === true){

			session_unset($name);

			return true;

		}else{

			return false;

		}
	}
}