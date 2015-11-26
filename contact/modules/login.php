<?php
/**
* 
*/
class Login
{
	
	public function defaultaction()
	{
		if(auth::isloggedin()){
			echo '你已经登录了该嘎哈,嘎哈去行吗?';
			exit;
		}
		echo view::show('login/form');
	}

	public function process()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username)){
			lib::seterror('Please enter a username');
			lib::sendto('/login');
		}

		if(empty($password)){
			lib::setitem('username',$username);
			lib::seterror("Please enter a Password.");
			lib::sendto('/login');
		}

		$user = new user(array("username"=>$username));

		if(auth::authenticate($user,$password)){
			lib::setitem('user',$user);
			lib::sendto();
		}else{
			lib::setitem('username',$username);
			lib::seterror('Invalid username or password.');
			lib::sendto('/login');
		}
	}

}