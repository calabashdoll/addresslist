<?php
/**
* 外观模式
*/
class facadecontactinformation
{
	public  $contact;
	public 	$groups;
	public  $methods = array();

	public function __construct($id)
	{
		$this->contact = new contact($id);
		$this->populategroups();
		$this->populatemethods();
	}

	protected function populategroups()
	{
		$this->groups =  new contactgroupscollection($this->contact);
		$this->groups->getwithdata();
	}

	protected function populatemethods()
	{
		foreach ($this->groups as $group) {
			$this->methods[$group->id] = new contactmethodscollection($group);
			$this->methods[$group->id]->getwithdata();
		}
	}
}
