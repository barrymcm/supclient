<?php 

namespace Dev\Pub\Providers;

use Silex\Application;
use Dev\Pub\Config\Configuration;
use Silex\ServiceProviderInterface;

class GlobalServiceProvider implements ServiceProviderInterface
{
	/**
	 * registers the applications api services
	 * @param  Application $app [description]
	 * @return $app application containers
	 */
	public function register(Application $app)
	{
		$app['config'] = $app->share(function ($app) {
	        return new Configuration();
		});
	}

	public function boot(Application $app)
	{
		// @boot
	}
}