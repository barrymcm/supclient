<?php 

namespace Dev\Pub\Resources;

use Silex\Application;
use Dev\Pub\Config\Configuration;
use Silex\ServiceProviderInterface;

/**
 * Provides the applications Api Endpoints through
 * the $app[config] container.
 * Use this class to set up api endpoints
 */
class ApiResource implements ServiceProviderInterface
{
	public function register(Application $app)
	{
		$app['endpoint.troff'] = $app->share(function () use ($app) {
			return $app['config']->get("config.json", "serviceEndpoints", "troff");
		});

		$app['endpoint.8000'] = $app->share(function () use ($app) {
			return $app['config']->get("config.json", "serviceEndpoints", "8000");
		});

		$app['endpoint.3000'] = $app->share(function () use ($app) {
			return $app['config']->get("config.json", "serviceEndpoints", "3000");
		});
	}

	public function boot(Application $app)
	{
		// null	
	}
}