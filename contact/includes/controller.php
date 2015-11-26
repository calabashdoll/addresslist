<?php
/**
* 控制器
*/
class controller
{
	protected $parts;
	public    $params;
	
	public function __construct($urlString){

		$urlString = strtolower($urlString);

		if(substr($urlString, -1,1) == '/'){
			$urlString = substr($urlString, 0,strlen($urlString)-1);
		}

		$parts = explode('/', $urlString);

		if(empty($parts[0])){
			$parts[0] = 'index';
		}

		if(empty($parts[1])){
			$parts[1] = 'defaultaction';
		}

		$this->parts = $parts;
		//$this->sectionaction = $parts[0].'/'.$parts[1];
		array_shift($parts);
		array_shift($parts);
		$this->params = $parts;
	}

	public function render(){
		
		if(!class_exists($this->parts[0])){
			throw new SectionDoesntExistException("{$this->parts[0]} is ".
				"not a valid module.");
			
		}

		if(!method_exists($this->parts[0], $this->parts[1])){
			throw new ActionDoesntExistException("{$this->parts[1]} of".
				"module {$this->parts[0]} is not a valid action.");
			
		}

		$called = call_user_func_array(array(new $this->parts[0],$this->parts[1]),array($this->params));

		if($called === FALSE){
			throw new ActionFailedException("{$this->parts[1]} of section".
				"{$this->parts[0]} failed to execute properly.");
			
		}

	}

}