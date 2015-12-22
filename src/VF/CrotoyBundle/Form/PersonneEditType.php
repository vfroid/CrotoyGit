<?php

namespace VF\CrotoyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonneEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function getName()
    {
        return 'vf_crotoybundle_personne_edit';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return new PersonneType();
    }
}
