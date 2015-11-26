<?php
/**
* 
*/
class authstandard implements authenticatorinterface
{
	public function authenticate(user $user,$password)
	{
		if($user->password == lib::makehashedpassword($user,$password)){
			return true;
		}else{
			return false;
		}
	}
}