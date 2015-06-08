<?php

namespace Dev\Pub\Providers;

use Silex\Application;
use Silex\ControllerProviderInterface;

class GlobalControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        // GlobalController
        $controllers->match('/', 'Dev\Pub\Controllers\GlobalController::indexAction');

        // UserController
        $controllers->match('/user', 'Dev\Pub\Controllers\UserController::listAction');
        $controllers->match('/user/{name}', 'Dev\Pub\Controllers\UserController::showAction');

        return $controllers;
    }
}