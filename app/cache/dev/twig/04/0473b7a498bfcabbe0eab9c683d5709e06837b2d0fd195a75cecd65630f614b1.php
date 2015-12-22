<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a15b9836b601409594e6b27f7ed3dbcadb76f559348e1f87717ad0d29720be45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VFUserBundle::layoutUser.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'principal' => array($this, 'block_principal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFUserBundle::layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e9254f00f31fec7f6836cf9242acb60b62506bf1901fa4b7dee0979fa2a54cb = $this->env->getExtension("native_profiler");
        $__internal_2e9254f00f31fec7f6836cf9242acb60b62506bf1901fa4b7dee0979fa2a54cb->enter($__internal_2e9254f00f31fec7f6836cf9242acb60b62506bf1901fa4b7dee0979fa2a54cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9254f00f31fec7f6836cf9242acb60b62506bf1901fa4b7dee0979fa2a54cb->leave($__internal_2e9254f00f31fec7f6836cf9242acb60b62506bf1901fa4b7dee0979fa2a54cb_prof);

    }

    // line 3
    public function block_principal($context, array $blocks = array())
    {
        $__internal_1f890fdbcf633c3f23fcc6287b068d5c421313dcd0786ddf7e9f6e1e976d7f47 = $this->env->getExtension("native_profiler");
        $__internal_1f890fdbcf633c3f23fcc6287b068d5c421313dcd0786ddf7e9f6e1e976d7f47->enter($__internal_1f890fdbcf633c3f23fcc6287b068d5c421313dcd0786ddf7e9f6e1e976d7f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1f890fdbcf633c3f23fcc6287b068d5c421313dcd0786ddf7e9f6e1e976d7f47->leave($__internal_1f890fdbcf633c3f23fcc6287b068d5c421313dcd0786ddf7e9f6e1e976d7f47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VFUserBundle::layoutUser.html.twig" %}*/
/* */
/* {% block principal %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock %}*/
/* */
