<?php

/**
* 装饰器
*/
class decoratoremail implements decoratorinterface
{
	public function decorate($item)
	{
		$return = ' <a href="mailto:'.$item.'"> ' .$itme.'</a>';

		return $return;
	}
}