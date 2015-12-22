<?php

namespace VF\CrotoyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class sejourType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('debut', 'date')
            ->add('fin', 'date')
            ->add('nadulte', 'integer')
            ->add('njeunes', 'integer')
            ->add('Enregistrer',      'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VF\CrotoyBundle\Entity\sejour'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vf_crotoybundle_sejour';
    }
}
