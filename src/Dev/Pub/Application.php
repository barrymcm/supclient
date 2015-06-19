<?php 

namespace Dev\Pub;

use Dev\Pub\Providers\GlobalControllerProvider;
use Dev\Pub\Providers\HelloServiceProvider;
use Dev\Pub\Providers\ConfigProvider;
use Silex\Application as SilexApplication;
use Silex\Provider\TwigServiceProvider;
use Dev\Pub\Resources\ApiResource;
use Dev\Pub\Providers\GlobalServiceProvider;

class Application extends SilexApplication
{
 	public function __construct(array $values = array())
 	{
 		parent::__construct($values);
 		
 		$app = $this;

 		$this->loadControllers($app);
 		$this->loadExternalProviders($app);
		$this->loadInternalServices($app);
		$this->loadApiResources($app);

 		return $app;
 	}
 	
 	private function rootPath($path)
 	{
 		return $app['root.directory'] = __DIR__.'/'.$path;
 	}
 
 	private function loadControllers(Application $app)
 	{
 		$app->mount('/', new GlobalControllerProvider());
 	}

 	private function loadInternalServices(Application $app)
 	{
 		$app->register(new GlobalServiceProvider());
 	}
 
 	private function loadExternalProviders(Application $app)
 	{
 		$app->register(new TwigServiceProvider(), array(
 			'twig.path' => $this->rootPath('Views/')
 		));
 	}

 	public function loadApiResources(Application $app)
 	{
 		$app->register(new ApiResource());
 	}
}



