<?php 

namespace Dev\Pub;

use Dev\Pub\Providers\ConfigProvider;
use Dev\Pub\Resources\ApiResource;
use Dev\Pub\Providers\HelloServiceProvider;
use Dev\Pub\Providers\GlobalServiceProvider;
use Dev\Pub\Providers\GlobalControllerProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Application as SilexApplication;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\SessionServiceProvider;

class Application extends SilexApplication
{
	/**
	 * Construct the app instance
	 * @param array $values [description]
	 * @return $app
	 */
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
 	
 	/**
 	 * Creates the apps root path
 	 * @param  [type] $path [description]
 	 * @return [type]       [description]
 	 */
 	private function rootPath($path)
 	{
 		return $app['root.directory'] = __DIR__.'/'.$path;
 	}
 
 	/**
 	 * Loads the applications controllers
 	 * @param  Application $app [description]
 	 * @return [type]           [description]
 	 */
 	private function loadControllers(Application $app)
 	{
 		$app->mount('/', new GlobalControllerProvider());
 	}

 	/**
 	 * Loads the applications internal service providers
 	 * @param  Application $app [description]
 	 * @return [type]           [description]
 	 */
 	private function loadInternalServices(Application $app)
 	{
 		$app->register(new GlobalServiceProvider());
 	}
 
 	/**
 	 * Loads the applications external service providers
 	 * @param  Application $app [description]
 	 * @return [type]           [description]
 	 */
 	private function loadExternalProviders(Application $app)
 	{
 		$app->register(new TranslationServiceProvider(), array(
    		'translator.messages' => array(),
));
 		$app->register(new TwigServiceProvider(), array(
 			'twig.path' => $this->rootPath('Views/')
 		));
 		$app->register(new FormServiceProvider());
 		$app->register(new ValidatorServiceProvider());
 		$app->register(new SessionServiceProvider());
 	}

 	/**
 	 * Provides the applications API endpoints
 	 * @param  Application $app [description]
 	 * @return [type]           [description]
 	 */
 	public function loadApiResources(Application $app)
 	{
 		$app->register(new ApiResource());
 	}
}



