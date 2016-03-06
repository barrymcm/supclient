<?php

namespace Dev\Pub\Controllers;

use Dev\Pub\Application;
use Dev\Pub\Form\Company;
use Symfony\Component\Form\FormError;
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

        $id = $request->get('id');
        $company = $this->get("company/".$id);
    	return $app['twig']->render('company/company.html.twig', $company);
    }

    /**
     * [createAction add a new company]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createAction(Request $request) 
    {
        $app = new Application();

        $form = $app['form.factory']->createBuilder(new Company())->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $result = $this->post('company/add/new', $request->getContent());
            if($result) {    
                $app['session']->getFlashBag()->add('success', 'You have added a new company');
            }
        } else {
            $form->addError(new FormError('Error processing validation of the form!'));
        }

        return $app['twig']->render('company/newcompany.html.twig', ['form' => $form->createView()]);

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