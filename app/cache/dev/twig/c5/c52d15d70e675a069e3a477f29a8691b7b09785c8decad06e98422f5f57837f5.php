<?php

/* VFCrotoyBundle::layoutCrotoy.html.twig */
class __TwigTemplate_c6145f62c16b8008b9f1401ad3b8247682277bef9e43ed386cb29b9cb4ad8c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle::layoutCrotoy.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'accueil' => array($this, 'block_accueil'),
            'photos' => array($this, 'block_photos'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65aac156b21712a65b2f57cf8b602ad206953e7a01ee30d409aba51bf42d7de4 = $this->env->getExtension("native_profiler");
        $__internal_65aac156b21712a65b2f57cf8b602ad206953e7a01ee30d409aba51bf42d7de4->enter($__internal_65aac156b21712a65b2f57cf8b602ad206953e7a01ee30d409aba51bf42d7de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle::layoutCrotoy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65aac156b21712a65b2f57cf8b602ad206953e7a01ee30d409aba51bf42d7de4->leave($__internal_65aac156b21712a65b2f57cf8b602ad206953e7a01ee30d409aba51bf42d7de4_prof);

    }

    // line 5
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_2a70f68b156b3ad27ad9a2dab47783b2d8b8054725f634d7598f8fd7f8020d6a = $this->env->getExtension("native_profiler");
        $__internal_2a70f68b156b3ad27ad9a2dab47783b2d8b8054725f634d7598f8fd7f8020d6a->enter($__internal_2a70f68b156b3ad27ad9a2dab47783b2d8b8054725f634d7598f8fd7f8020d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo "  
      ";
        // line 6
        $this->displayBlock('accueil', $context, $blocks);
        // line 7
        echo "      ";
        $this->displayBlock('photos', $context, $blocks);
        echo " 
   ";
        
        $__internal_2a70f68b156b3ad27ad9a2dab47783b2d8b8054725f634d7598f8fd7f8020d6a->leave($__internal_2a70f68b156b3ad27ad9a2dab47783b2d8b8054725f634d7598f8fd7f8020d6a_prof);

    }

    // line 6
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_c50fde4f1a750129d7caed3f098dd84f19cc78185903051bcab1fb61424de8ff = $this->env->getExtension("native_profiler");
        $__internal_c50fde4f1a750129d7caed3f098dd84f19cc78185903051bcab1fb61424de8ff->enter($__internal_c50fde4f1a750129d7caed3f098dd84f19cc78185903051bcab1fb61424de8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        
        $__internal_c50fde4f1a750129d7caed3f098dd84f19cc78185903051bcab1fb61424de8ff->leave($__internal_c50fde4f1a750129d7caed3f098dd84f19cc78185903051bcab1fb61424de8ff_prof);

    }

    // line 7
    public function block_photos($context, array $blocks = array())
    {
        $__internal_7f9ad52bf3a5909be27e41f088c08cc86ab3504af01b5e5e2150fe808a4cb703 = $this->env->getExtension("native_profiler");
        $__internal_7f9ad52bf3a5909be27e41f088c08cc86ab3504af01b5e5e2150fe808a4cb703->enter($__internal_7f9ad52bf3a5909be27e41f088c08cc86ab3504af01b5e5e2150fe808a4cb703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "photos"));

        
        $__internal_7f9ad52bf3a5909be27e41f088c08cc86ab3504af01b5e5e2150fe808a4cb703->leave($__internal_7f9ad52bf3a5909be27e41f088c08cc86ab3504af01b5e5e2150fe808a4cb703_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle::layoutCrotoy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  56 => 6,  46 => 7,  44 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/layoutCrotoy.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/*       */
/*    {% block crotoy %}  */
/*       {% block accueil %}{% endblock %}*/
/*       {% block photos %}{% endblock %} */
/*    {% endblock%}*/
/* */
