<?php 

namespace Dev\Pub\Providers;

use Silex\Application;
use Dev\Pub\Config\Configuration;
use Silex\ServiceProviderInterface;

class GlobalServiceProvider implements ServiceProviderInterface
{
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