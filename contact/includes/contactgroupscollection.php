<?php
/**
* 联系组
*/
class contactgroupscollection extends daocollection implements daocollectioninterface
{
	protected $contact;

	public function __construct(dao $contact)
	{
		$this->contact = $contact;
	}

	public function getwithdata()
	{
		$connection = db::factory('mysql');

		$sql = "select * from contactgroup where contactid =". $this->contact->id.' order by label';

		$results = $connection->getArray($sql);

		$this->populate($results,'contactgroup');
	}
}