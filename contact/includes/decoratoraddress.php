<?php
/**
* 
*/
class decoratoraddress implements decoratorinterface
{
	public function decorate($item)
	{
		$return  = '<a href="http:://maps.google.com/map?q='.urlencode($item).'">'.$item.'</a>';

		return $return;
	}
}