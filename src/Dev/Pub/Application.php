<?php 

namespace Dev\Pub;

use Dev\Pub\Providers\GlobalControllerProvider;
use Dev\Pub\Providers\HelloServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Application as SilexApplication;

class Application extends SilexApplication
{
 	public function __construct(array $values = array())
 	{
 		parent::__construct($values);
 		
 		$app = $this;
 		$this->mountControllers($app);
 		$this->mountServiceProviders($app);
 
 		return $app;
 	}
 	
 	private function rootPath($path)
 	{
 		$app['config.root'] = __DIR__.'/'.$path;
 		return $app['config.root'];
 	}
 
 	private function mountControllers(Application $app)
 	{
 		$app->mount('/', new GlobalControllerProvider());
 	}
 
 	private function mountServiceProviders(Application $app)
 	{
 		$app->register(new TwigServiceProvider(), array(
 			'twig.path' => $this->rootPath('views')
 		));
 	}

 	private function createApiEndpoint(Application $app)
 	{
 		$app['api.troff'] = $app->share(function() use ($app){
	            $apiEndpoint = new Config();
	            return $apiConfig->load($app['config.root'] . '/config.xml');
	        });
 		});
        $app['config.root'] = CONFIG_ROOT;
    }

 	}
}