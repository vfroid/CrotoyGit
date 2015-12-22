<?php

namespace VF\CrotoyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
			->add('prenom', 'text')
            ->add('datene','birthday')
            ->add('genre', 'choice', array('choices'   => array('m' => 'Masculin', 'f' => 'Féminin'),'required'  => true,))
            ->add('rue', 'text')
            ->add('numero', 'text')
            ->add('cp', 'integer')
            ->add('ville', 'text')
            ->add('pays', 'text')
            ->add('tel1', 'text')
            ->add('tel2', 'text')
            ->add('courriel', 'text')
			->add('Enregistrer', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VF\CrotoyBundle\Entity\Personne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vf_crotoybundle_personne';
    }
}
