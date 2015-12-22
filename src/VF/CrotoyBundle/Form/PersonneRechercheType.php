<?php

namespace VF\CrotoyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonneRechercheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		    ->remove('nom')
			->remove('prenom')
            ->remove('datene')
            ->remove('genre')
			->remove('rue')
			->remove('numero')
			->remove('ville')
			->remove('pays')
			->remove('tel1')
			->remove('tel2')
			->remove('courriel')
			->remove('Enregistrer')
			->add('Rechercher', 'submit')
		;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function getName()
    {
        return 'vf_crotoybundle_personne_recherche';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return new PersonneType();
    }
}
