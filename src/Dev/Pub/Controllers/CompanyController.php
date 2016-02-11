<?php

namespace Dev\Pub\Controllers;

use Dev\Pub\Application;
use Dev\Pub\Controllers\ApplicationController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends ApplicationController
{
	/**
	 * [listAction description]
	 * @param  Request
	 * @return [type]
	 */
    public function listAction(Request $request)
    {
    	$app = new Application();

        $companies = $this->get('companies');

        return $app['twig']->render('company/companies.html.twig', $companies);
    }

    /**
     * [showAction description]
     * @return [type]
     */
    public function showAction(Request $request)
    {
        $app = new Application();
        
        $name = $request->get('id');
    	return $app['twig']->render('company/company.html.twig', array(
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