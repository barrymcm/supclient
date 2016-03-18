<?php

namespace Dev\Pub\Controllers;

use Dev\Pub\Application;
use Dev\Pub\Form\Company;
use Symfony\Component\Form\FormError;
use Dev\Pub\Controllers\ApplicationController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends ApplicationController
{
    /**
     * [createAction add a new company]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createAction(Request $request) 
    {
        $app = new Application();

        $form = $app['form.factory']->createBuilder(new Address())->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $result = $this->post('address/add/new', $request->getContent());

            if($result) {    
                $app['session']->getFlashBag()->add('success', 'You have added a new company');
            }
        } else {
            $form->addError(new FormError('Error processing validation of the form!'));
        }
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