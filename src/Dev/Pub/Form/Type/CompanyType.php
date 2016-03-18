<?php

namespace Dev\Pub\Form\Type;

use Symfony\Component\Validator\Constraints;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyType extends AbstractType 
{

	public function buildForm(FormBuilderInterface $formBuilder, array $options)
	{
		$formBuilder
			->add('name', 'text')
            ->add('country', 'text')
            ->add('region', 'text')
            ->add('city', 'text')
            ->add('street', 'text')
            ->add('postCode', 'text')
            ->add('regNo', 'text')
            ->add('taxNo', 'text')
            ->add('website', 'text')
            ->add('loginDetails', SignupType::class)
            ->add('submit', 'submit', ['label' => 'Create']);
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
		return 'new_company';
	}
}
