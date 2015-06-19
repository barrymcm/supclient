<?php 

namespace Dev\Pub\Resources;

use Silex\Application;
use Dev\Pub\Config\Configuration;
use Silex\ServiceProviderInterface;

class ApiResource implements ServiceProviderInterface
{
	public function register(Application $app)
	{
		$app['endpoint.troff'] = $app->share(function () use ($app) {
			$app['config']->get("config.json", "serviceEndpoints", "troff");
			print_r($app['config']);
			return $app['config'];
		});

		print_r($app['endpoint.troff']);
	}

	public function boot(Application $app)
	{

	}
}