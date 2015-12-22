<?php

namespace VF\CrotoyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class sejourRechercheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
	 
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('debut')
            ->remove('fin')
            ->remove('nadulte')
			->remove('Enregistrer')
			->add('Trouver', 'submit')
			;
    }
    
   
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function getName()
    {
        return 'vf_crotoybundle_sejour_recherche';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return new sejourType();
    }
}