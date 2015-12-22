<?php

/* VFCoreBundle:Default:index.html.twig */
class __TwigTemplate_26e5d045063fd2c286a884a7828766461f7cb3df59694347096b016c16437d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCoreBundle:Default:index.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1ada91bca241de2368890f036d9405aad695891bf337db9658ac5ed2caa38f6 = $this->env->getExtension("native_profiler");
        $__internal_d1ada91bca241de2368890f036d9405aad695891bf337db9658ac5ed2caa38f6->enter($__internal_d1ada91bca241de2368890f036d9405aad695891bf337db9658ac5ed2caa38f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ada91bca241de2368890f036d9405aad695891bf337db9658ac5ed2caa38f6->leave($__internal_d1ada91bca241de2368890f036d9405aad695891bf337db9658ac5ed2caa38f6_prof);

    }

    public function getTemplateName()
    {
        return "VFCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 3,);
    }
}
/* {# src/VF/CoreBundle/Resources/views/Default/index.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/* */
