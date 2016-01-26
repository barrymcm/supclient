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
    public function listAction()
    {
    	$app = new Application();
        $response = $this->get('/companies');

        if($response->getStatusCode() == 200) {
            $companies = $response->json();
        }

        print_r($companies);

        return $app['twig']->render('company/companies.html.twig', array($companies));
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