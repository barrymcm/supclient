<?php 

namespace Dev\Pub\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;

class SignupType extends AbstractType
{
	public function buildForm(FormBuilderInterface $formBuilder, array $options)
	{
		$formBuilder
			->add('email', 'text')	
			->add('password', 'password')
			->add('repeatPassword', 'password');
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array());
	}

	/**
	 * creates the id of the form tag
	 * and also creates a hidden input with a unique token 
	 * to prevent csrf
	 * 	
	 * @return [type] [description]
	 */
	public function getName()
	{
		return 'login_details';
	}
}