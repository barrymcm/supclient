<?php 

namespace Dev\Pub\config;


class Config 
{
	/**
	 * json decoded config file
	 * 
	 * @var [type]
	 */
	private $config;

	const CONFIG_PATH = "config\config.json";

	public function __construct($appConfigFile)
	{
	 	$config = json_decode($appConfigFile);
	 	print_r($config);
	}

	public function load()
	{
		
	}	
}