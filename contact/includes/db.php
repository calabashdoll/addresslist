<?php
/**
* db
*/
abstract class db
{
	public static function factory($type)
	{
		return call_user_func(array($type,'getInstance'));
	}

	abstract public function execute($query);
	abstract public function getArray($query);
	abstract public function insertGetID($query);
	abstract public function clean($string);
}