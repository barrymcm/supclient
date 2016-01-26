<?php 

namespace Dev\Pub\Config;

use Dev\Pub\Application;

/**
 * Application Service
 */
class Configuration
{
	/**
	 * json decoded config file
	 * 
	 * @var [type]
	 */
	private $config;

	public function get()
	{
		$args = func_get_args();
		$fileName = array_shift($args);
		$configPath = $this->getConfigPath($fileName);
		$params = $this->load($configPath, $args);
		$endPoint = $params[$args[0]][$args[1]];
		
		return $endPoint;
	}

	/**
	 * [getConfigPath description]
	 * @param  [type] $fileName [description]
	 * @return $path string           [description]
	 */
	private function getConfigPath($fileName)
 	{
 		switch ($fileName) 
 		{
 			case 'config.json' :
 				$path = CONFIG_ROOT.$fileName;
 				break;
 		}
 		return $path;
 	}

 	/**
 	 * [load description]
 	 * @return array $params
 	 */
	public function load($configPath, $args = array())
	{
		$jsonVals = file_get_contents($configPath);	
	 	$params = json_decode($jsonVals, true);

	 	return $params;
	}	
}