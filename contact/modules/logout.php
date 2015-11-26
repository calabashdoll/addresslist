<?php
/**
* 退出
*/
class logout
{
	public function defaultaction()
	{
		lib::setitem('user',NULL);
		lib::sendto();
	}
}