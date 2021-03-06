<?php

namespace Dev\Pub\Providers;

use Silex\Application;
use Silex\ControllerProviderInterface;

class GlobalControllerProvider implements ControllerProviderInterface
{
    /**
     * [creates application routes]
     * @param  Application $app [application instance]
     * @return [type]           [description]
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        // UserController
        $controllers->match('/users', 'Dev\Pub\Controllers\UserController::listAction');
        $controllers->match('/user/{name}', 'Dev\Pub\Controllers\UserController::showAction');

        // CompanyController
        $controllers->match('/companies', 'Dev\Pub\Controllers\CompanyController::listAction');
        $controllers->match('/company/{id}', 'Dev\Pub\Controllers\CompanyController::showAction');
        $controllers->match('/company/add/new', 'Dev\Pub\Controllers\CompanyController::createAction');
        $controllers->match('/company/add/new', 'Dev\Pub\Controllers\CompanyController::createAction');
        

        return $controllers;
    }
}