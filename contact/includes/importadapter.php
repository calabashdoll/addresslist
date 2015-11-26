<?php
/**
* 工厂类
*/
class importadapter
{
	
	public static function factory($type)
	{	
		$clasname = "{$type}contactimportadapter";
		return new $clasname;
	}
}