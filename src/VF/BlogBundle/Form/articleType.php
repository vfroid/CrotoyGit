<?php

namespace VF\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class articleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text')
            ->remove('date','date')
            ->add('auteur','text')
            ->add('texte','textarea')
            ->add('tags','text')
            ->add('categories', 'entity', array(
				'class'    => 'VFBlogBundle:Category',
				'property' => 'name',
				'multiple' => true))
			->remove('etat')
			->add('image', new ImageType(), array('required' => false))
			->add('Sauver','submit')
        ;
		
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {	
		//pour protection CSRF sans {{ form_end  }}, qui rajoute tous les autres champs!!! => http://symfony.com/fr/doc/current/book/forms.html#forms-csrf
        $resolver->setDefaults(array(
            'data_class' => 'VF\BlogBundle\Entity\article'	//,
			//'csrf_protection' => true,
            //'csrf_field_name' => '_token'
            // une clé unique pour aider à la génération du jeton secret
            //'intention'       => 'task_item',
        ));

		}

    /**
     * @return string
     */
    public function getName()
    {
        return 'vf_blogbundle_article';
    }
}
