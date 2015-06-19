<?php

namespace Dev\Pub\Controllers;

use Dev\Pub\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
	/**
	 * [listAction description]
	 * @param  Request
	 * @return [type]
	 */
    public function listAction(Request $request)
    {
    	$app = new Application();
    
        return $app['twig']->render('user.html.twig', array());
    }

    /**
     * [showAction description]
     * @return [type]
     */
    public function showAction(Request $request)
    {
        $app = new Application();
        // $methods = get_class_methods($request);
        $name = $request->get('name');


    	return $app['twig']->render('user.html.twig', array(
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