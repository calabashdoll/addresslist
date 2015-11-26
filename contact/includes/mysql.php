<?php
/**
* mysql
*/
class mysql extends db implements singletoninterface
{
	protected static $instance = null;
	protected $link;

	public static function getInstance()
	{
		if(is_null(self::$instance)){
			self::$instance  = new self;
		}
		return self::$instance;
	}

	protected function __construct()
	{
		$user = 'root';
		$pass = '123456';
		$host = '127.0.0.1';
		$db   = 'contacts';

		$this->link = mysql_connect($host,$user,$pass);
		mysql_select_db($db,$this->link);
	}

	public function clean($string)
	{
		return mysql_real_escape_string($string,$this->link);
	}

	public function getArray($query)
	{
		$result = mysql_query($query,$this->link);

		$return = array();

		if($result){
			while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
				$return[] = $row;
			}
		}
		return $return;
	}

	public function execute($query)
	{
		mysql_query($query,$this->link);
	}

	public function insertGetID($query)
	{
		$this->execute($query);
		return mysql_insert_id($this->link);
	}
}