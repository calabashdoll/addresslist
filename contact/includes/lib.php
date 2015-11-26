<?php
/**
* 存储控制器
*/
class lib
{
	const SETTING_AN_ARRAY = TRUE;
	const NO_PERSISTENT_STORAGE = FALSE;
	
	public static function getitem($name,$persist=TRUE){

		$return  = NULL;
		if(isset($_SESSION[$name])){
			$return = $_SESSION[$name];
			if(!$persist) unset($_SESSION[$name]);
 		}

 		return $return;
	}

	public static function setitem($name,$value,$array=FALSE){

		if($array){
			if(!$_SESSION[$name]){
				$_SESSION[$name] =array();
				$_SESSION[$name][] = $value;
			}
		}else{
			$_SESSION[$name] = $value;
		}
	}

	public static function sendto($url = '')
	{
		if(empty($url)){
			$url = '/';
		}

		die(header("Location: " .$url));
	}

	public static function seterror($error){
		self::setitem('error',$error,self::SETTING_AN_ARRAY);
	}

	public static function makehashedpassword(user $user,$pasword)
	{
		return sha1($user->username.$pasword);
	}
}

