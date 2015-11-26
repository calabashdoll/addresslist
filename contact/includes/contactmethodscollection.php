<?php
/**
* 添加联系方法
*/
class contactmethodscollection extends daocollection implements daocollectioninterface
{
	protected $group;

	public function __construct(dao $group)
	{
		$this->group = $group;
	}

	public function getwithdata()
	{
		$connection = db::factory('mysql');

		$sql = "select * from contactmethod where contactgroupid=".$this->group->id." order by type"; 
		$results = $connection->getArray($sql);

		$this->populate($results,'contactmethod'); 
	}

	public function generateimportmethods($import)
	{
		$results = array();

		$addressline = $import["{$this->group->label} Street"].' '.
					   $import["{$this->group->label} Street 2"].' '.
					   $import["{$this->group->label} Street 3"].' '.
					   $import["{$this->group->label} City"].' '.
					   $import["{$this->group->label} State"].' '.
					   $import["{$this->group->label} Postal Code"];
		$results[] = array('type'=>'address','value'=>$addressline,
							'contactgroupid'=>$this->group->id);
		
		$this->populate($results,'contactmethod');
	}
}