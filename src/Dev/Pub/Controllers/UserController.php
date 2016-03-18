<?php

namespace Dev\Pub\Controllers;

use Dev\Pub\Application;
use Dev\Pub\Controllers\ApplicationController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends ApplicationController
{
	/**
	 * [listAction description]
	 * @param  Request
	 * @return [type]
	 */
    public function listAction()
    {
    	$app = new Application();

        $response = $this->get('user');
    
        return $app['twig']->render('user/user.html.twig', array());
    }

    /**
     * [showAction description]
     * @return [type]
     */
    public function showAction(Request $request)
    {
        $app = new Application();
        
        $name = $request->get('name');
    	return $app['twig']->render('user/user.html.twig', array(
    		'name' => $name
    	));
    }

    /**
     * [editAction description]
     * @return [type]
     */
    public function editAction(Request $request)
    {

    }

    /**
     * [editAction description]
     * @return [type]
     */
    public function updateAction(Request $request)
    {

    }

    /**
     * [editAction description]
     * @return [type]
     */
    public function deleteAction(Request $request)
    {

    }

    /**
     * [editAction description]
     * @return [type]
     */
    public function destroyAction(Request $request)
    {

    }
}