<?php
/**
* 联系方式
*/
class contactscollection extends daocollection implements daocollectioninterface
{
	protected $user;

	public function __construct(dao $user)
	{
		$this->user = $user;
	}

	public function getwithdata()
	{
		$connection = db::factory('mysql');

		$sql = "select * from contact where ownerid =" .$this->user->id .' order by firstname';

		$results = $connection->getArray($sql);

		$this->populate($results,'contact');
	}
}