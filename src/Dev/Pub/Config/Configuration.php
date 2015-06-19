<?php 

namespace Dev\Pub\Config;

use Dev\Pub\Application;

class Configuration
{
	/**
	 * json decoded config file
	 * 
	 * @var [type]
	 */
	private $config;

	public function get($fileName)
	{
		$args = func_get_args();
		$path = $this->getConfigPath($args[0]);

		foreach($args as $arg)
		{
			// Pass in the nodes to specify the api endpoint
		}
	}

	private function getConfigPath($fileName)
 	{
 		switch ($fileName) 
 		{
 			case 'config.json' :
 				$path = CONFIG_ROOT.$fileName;
 				break;
 			default :
 				$path = "";
 				break;	
 		}
 		return $path;
 	}

	public function load($fileName)
	{
		$configFile = $this->getConfigPath($fileName);
		$contents = file_get_contents($configFile);	
	 	$config = json_decode($contents, true);

	 	$config["serviceEndpoints"]["troff"]."<br/>";

	 	return $config;
	}	
}