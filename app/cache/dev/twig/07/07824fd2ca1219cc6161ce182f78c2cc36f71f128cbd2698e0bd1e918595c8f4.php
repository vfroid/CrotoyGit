<?php

/* VFCrotoyBundle:Crotoy:accueil.html.twig */
class __TwigTemplate_ecfb23feed3ed3e874a1e78b7c9888009241d3a6119f7520438513218dac2385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle:Crotoy:accueil.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'accueil' => array($this, 'block_accueil'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4798da187902b7b2191e850d27a33f94d49630c5762fe47b0ea7f402f7e2cc6e = $this->env->getExtension("native_profiler");
        $__internal_4798da187902b7b2191e850d27a33f94d49630c5762fe47b0ea7f402f7e2cc6e->enter($__internal_4798da187902b7b2191e850d27a33f94d49630c5762fe47b0ea7f402f7e2cc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Crotoy:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4798da187902b7b2191e850d27a33f94d49630c5762fe47b0ea7f402f7e2cc6e->leave($__internal_4798da187902b7b2191e850d27a33f94d49630c5762fe47b0ea7f402f7e2cc6e_prof);

    }

    // line 4
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_9bb97b5637f667d648938617e8cfbf28ae9298e508a47ca92301a1fc6203455e = $this->env->getExtension("native_profiler");
        $__internal_9bb97b5637f667d648938617e8cfbf28ae9298e508a47ca92301a1fc6203455e->enter($__internal_9bb97b5637f667d648938617e8cfbf28ae9298e508a47ca92301a1fc6203455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        // line 5
        echo "    ";
        $this->displayBlock('accueil', $context, $blocks);
        
        $__internal_9bb97b5637f667d648938617e8cfbf28ae9298e508a47ca92301a1fc6203455e->leave($__internal_9bb97b5637f667d648938617e8cfbf28ae9298e508a47ca92301a1fc6203455e_prof);

    }

    public function block_accueil($context, array $blocks = array())
    {
        $__internal_2fe4eb9b25c19af8423d10c14da780a2ee1124bcaf37cb718d1be87b02d7ccd8 = $this->env->getExtension("native_profiler");
        $__internal_2fe4eb9b25c19af8423d10c14da780a2ee1124bcaf37cb718d1be87b02d7ccd8->enter($__internal_2fe4eb9b25c19af8423d10c14da780a2ee1124bcaf37cb718d1be87b02d7ccd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 6
        echo "         <section class = \"col-lg-10\">
            <h2>Bienvenue dans la maison du Crotoy !</h2>
             <img src=\"http://localhost/Crotoy/web/images/vue_aerienne.JPG\" alt=\"vue_aérienne\" width=\"600\" height=\"480\">
        <section >
    ";
        
        $__internal_2fe4eb9b25c19af8423d10c14da780a2ee1124bcaf37cb718d1be87b02d7ccd8->leave($__internal_2fe4eb9b25c19af8423d10c14da780a2ee1124bcaf37cb718d1be87b02d7ccd8_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Crotoy:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  41 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Crotoy/accueil.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/* {% block crotoy %}*/
/*     {% block accueil %}*/
/*          <section class = "col-lg-10">*/
/*             <h2>Bienvenue dans la maison du Crotoy !</h2>*/
/*              <img src="http://localhost/Crotoy/web/images/vue_aerienne.JPG" alt="vue_aérienne" width="600" height="480">*/
/*         <section >*/
/*     {% endblock %}*/
/* {% endblock %}*/
