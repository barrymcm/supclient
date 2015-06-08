<?php 

namespace Dev\Pub\Providers;

use Dev\Pub\Application;
use Silex\ServiceProviderInterface;

class GlobalServiceProvider implements ServiceProviderInterface
{
	public function register(Application $app)
	{
		$app['provider.global'] = $app->protect(function ($name) use ($app) {
			$default = $app['global.default_name'] ? $app['global.default_name'] : "";
			$name = $name?: $default;

			return 'global '.$app->escape($name);
		});
	}

	public function boot(Application $app)
	{
		// @boot
	}
}