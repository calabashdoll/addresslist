<?php

/**
* 适配器
*/
class outlookcontactimportadapter implements importadapterinterface
{
	public function setcontents($import){
		$this->firstname = $import['First Name'];
		$this->middlename = $import['Middle Name'];
		$this->lastname   = $import['Last Name'];
	}
}