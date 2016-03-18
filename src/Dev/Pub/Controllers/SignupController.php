<?php

namespace Dev\Pub\Controllers;

use Dev\Pub\Application;
use Symfony\Component\HttpFoundation\Request;
use Dev\Pub\Controllers\ApplicationController;
use Symfony\Component\HttpFoundation\Response;

class SignupController extends ApplicationController
{
	/**
	 * [create a new users account login in details]
	 * @param  Request $request [post request of email - pass and confirm pass]
	 * @return [http response]           [201]
	 */
	public function createAction(Request $request)
	{
		$app = new Application();

		// $form = $app['form.factory']->createBuilder(new SignupType())->getForm();
		// $form->handleRequest($request);

		// if($form->isSubmitted() && $form->isValid()) {
		// 	$result->$this->post('user_account/new', $request->getContents());

		// 	if($result) {
		// 		$app['session']->getFlashBag()->add('success', 'You have created your new account');
		// 	}
		// } else {
		// 	$form->addError(new FormError('Error processing validation of the form!'));
		// }

		// return $app['twig']->render('company/newcompany.html.twig', ['form' => $form->createView()]);
	}
}