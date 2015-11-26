<?php
/**
* 导入建造者模式
*/
class importcontactsarraybulider
{
	protected $importedstring;

	public function __construct($importedstring){
		$this->importedstring = $importedstring;
	}
/*
	public function buildarray()
	{
		$lines = explode("\n", $this->importedstring);
		$keys  = explode(',',array_shift($lines));

		$array = array();

		foreach($lines as $line){
			if(!empty($line)){
				$keys = array_combine($keys, explode(',', $line));
				$array[] = $keyed;
			}
		}
		return $array;
	}
*/
	public function buildcollection($type)
	{
		//代理
		$classname = "{$type}importcontactsarraydelegate";

		$delegate = new $classname;
		//决定定义接口 2个接口 分别是 setcontents getArray
		$delegate->setcontents($this->importedstring);
		$array    = $delegate->getArray();

		return $array; 
	}
}