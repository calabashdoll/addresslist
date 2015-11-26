<?php
/**
* 
*/
class index
{
	public function defaultaction()
	{

		if(!auth::isloggedin()){
			lib::sendto('/login');
		}else{
			$contacts = new contactscollection(lib::getitem("user"));
			$contacts->getwithdata();
	
			echo view::show('contacts/browse',array('contacts'=>$contacts));
		}
	}
}