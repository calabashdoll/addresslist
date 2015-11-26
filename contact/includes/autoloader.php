<?php
/**
* 自动加载
*/
class autoloader
{
	
	public static function moduleautoloader($class){

		$path = $_SERVER['DOCUMENT_ROOT']."modules/{$class}.php";
		if(is_readable($path)) require $path;

	}

	public static function daoautoloader($class){

		$path = $_SERVER['DOCUMENT_ROOT']."dataobjects/{$class}.php";
		if(is_readable($path)) require $path;

	}

	public static function includeautoloader($class){

		$path = $_SERVER['DOCUMENT_ROOT']."/includes/{$class}.php"; 
		if(is_readable($path)) require $path;

	}
}

function registerAutoload($func = 'autoloader::moduleautoloader',$enable = true){
			$enable ? spl_autoload_register($func) : spl_autoload_unregister($func);
}

$autoloaders = array(
	           'autoloader::moduleautoloader',
	           'autoloader::daoautoloader',
	           'autoloader::includeautoloader'
	           );

foreach($autoloaders as $key=>$autoClass){
	registerAutoload($autoClass);
}
//改进
//spl_autoload_register('autoloader::moduleautoloader');
//spl_autoload_register('autoloader::daoautoloader');
//spl_autoload_register('autoloader::includeautoloader');
