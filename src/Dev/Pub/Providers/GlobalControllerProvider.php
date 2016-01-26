<?php

namespace Dev\Pub\Providers;

use Silex\Application;
use Silex\ControllerProviderInterface;

class GlobalControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        // UserController
        $controllers->match('/users', 'Dev\Pub\Controllers\UserController::listAction');
        $controllers->match('/user/{name}', 'Dev\Pub\Controllers\UserController::showAction');

        // CompanyController
        $controllers->match('/companies', 'Dev\Pub\Controllers\CompanyController::listAction');
        $controllers->match('/company/{id}', 'Dev\Pub\Controllers\CompanyController::showAction');

        return $controllers;
    }
}