<?php

/* VFCrotoyBundle::layoutPersonne.html.twig */
class __TwigTemplate_9d706e375e0e09a22d6d2ca0914f07adf077fcead970bedea11855fe18b4866b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle::layoutPersonne.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'menu_personne' => array($this, 'block_menu_personne'),
            'personne' => array($this, 'block_personne'),
            'toutes' => array($this, 'block_toutes'),
            'locataires' => array($this, 'block_locataires'),
            'ajouter' => array($this, 'block_ajouter'),
            'voir' => array($this, 'block_voir'),
            'editer' => array($this, 'block_editer'),
            'delete' => array($this, 'block_delete'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bc3d3f9582ac9a08dc1905818e358d2a60741a41313f3cf3ca7bd7d0523e14b = $this->env->getExtension("native_profiler");
        $__internal_6bc3d3f9582ac9a08dc1905818e358d2a60741a41313f3cf3ca7bd7d0523e14b->enter($__internal_6bc3d3f9582ac9a08dc1905818e358d2a60741a41313f3cf3ca7bd7d0523e14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle::layoutPersonne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc3d3f9582ac9a08dc1905818e358d2a60741a41313f3cf3ca7bd7d0523e14b->leave($__internal_6bc3d3f9582ac9a08dc1905818e358d2a60741a41313f3cf3ca7bd7d0523e14b_prof);

    }

    // line 5
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_4dbfef702e8cac1de2ef7d272eeb6559ec56cd8f16b8bcb25c93947126a57dde = $this->env->getExtension("native_profiler");
        $__internal_4dbfef702e8cac1de2ef7d272eeb6559ec56cd8f16b8bcb25c93947126a57dde->enter($__internal_4dbfef702e8cac1de2ef7d272eeb6559ec56cd8f16b8bcb25c93947126a57dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_4dbfef702e8cac1de2ef7d272eeb6559ec56cd8f16b8bcb25c93947126a57dde->leave($__internal_4dbfef702e8cac1de2ef7d272eeb6559ec56cd8f16b8bcb25c93947126a57dde_prof);

    }

    // line 8
    public function block_menu_personne($context, array $blocks = array())
    {
        $__internal_e51bd40675ccd24aa45fc5304f70b05266d62eac5ff897aaac109bcd732a8c92 = $this->env->getExtension("native_profiler");
        $__internal_e51bd40675ccd24aa45fc5304f70b05266d62eac5ff897aaac109bcd732a8c92->enter($__internal_e51bd40675ccd24aa45fc5304f70b05266d62eac5ff897aaac109bcd732a8c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_personne"));

        echo " 
\t";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VFCrotoyBundle:Personne:menu"));
        echo "
 ";
        
        $__internal_e51bd40675ccd24aa45fc5304f70b05266d62eac5ff897aaac109bcd732a8c92->leave($__internal_e51bd40675ccd24aa45fc5304f70b05266d62eac5ff897aaac109bcd732a8c92_prof);

    }

    // line 14
    public function block_personne($context, array $blocks = array())
    {
        $__internal_da7585348fb7502aac0e7e57b84f6bda0bcd5f539b8b31e3819884a517c0303a = $this->env->getExtension("native_profiler");
        $__internal_da7585348fb7502aac0e7e57b84f6bda0bcd5f539b8b31e3819884a517c0303a->enter($__internal_da7585348fb7502aac0e7e57b84f6bda0bcd5f539b8b31e3819884a517c0303a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne"));

        echo "  
\t\t\t\t";
        // line 15
        $this->displayBlock('toutes', $context, $blocks);
        echo " 
\t\t\t    ";
        // line 16
        $this->displayBlock('locataires', $context, $blocks);
        echo " 
\t\t\t\t";
        // line 17
        $this->displayBlock('ajouter', $context, $blocks);
        // line 18
        echo "\t\t\t\t";
        $this->displayBlock('voir', $context, $blocks);
        echo "   
                ";
        // line 19
        $this->displayBlock('editer', $context, $blocks);
        echo " 
\t\t\t\t";
        // line 20
        $this->displayBlock('delete', $context, $blocks);
        echo " 
  
";
        
        $__internal_da7585348fb7502aac0e7e57b84f6bda0bcd5f539b8b31e3819884a517c0303a->leave($__internal_da7585348fb7502aac0e7e57b84f6bda0bcd5f539b8b31e3819884a517c0303a_prof);

    }

    // line 15
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_f5c8954c631b366ea94c499da279d8898ee58de4fd1eb3d9eafb3172aabcbbdc = $this->env->getExtension("native_profiler");
        $__internal_f5c8954c631b366ea94c499da279d8898ee58de4fd1eb3d9eafb3172aabcbbdc->enter($__internal_f5c8954c631b366ea94c499da279d8898ee58de4fd1eb3d9eafb3172aabcbbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        
        $__internal_f5c8954c631b366ea94c499da279d8898ee58de4fd1eb3d9eafb3172aabcbbdc->leave($__internal_f5c8954c631b366ea94c499da279d8898ee58de4fd1eb3d9eafb3172aabcbbdc_prof);

    }

    // line 16
    public function block_locataires($context, array $blocks = array())
    {
        $__internal_64334efb0f21a75bd17e7fe44ddb8e1676bf04bfaa613bdaeab23d9794e55465 = $this->env->getExtension("native_profiler");
        $__internal_64334efb0f21a75bd17e7fe44ddb8e1676bf04bfaa613bdaeab23d9794e55465->enter($__internal_64334efb0f21a75bd17e7fe44ddb8e1676bf04bfaa613bdaeab23d9794e55465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "locataires"));

        
        $__internal_64334efb0f21a75bd17e7fe44ddb8e1676bf04bfaa613bdaeab23d9794e55465->leave($__internal_64334efb0f21a75bd17e7fe44ddb8e1676bf04bfaa613bdaeab23d9794e55465_prof);

    }

    // line 17
    public function block_ajouter($context, array $blocks = array())
    {
        $__internal_d1054b9b643aefc5d589f531c79e85f83895b7b0ced984eecbc58de6c41f91ac = $this->env->getExtension("native_profiler");
        $__internal_d1054b9b643aefc5d589f531c79e85f83895b7b0ced984eecbc58de6c41f91ac->enter($__internal_d1054b9b643aefc5d589f531c79e85f83895b7b0ced984eecbc58de6c41f91ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ajouter"));

        
        $__internal_d1054b9b643aefc5d589f531c79e85f83895b7b0ced984eecbc58de6c41f91ac->leave($__internal_d1054b9b643aefc5d589f531c79e85f83895b7b0ced984eecbc58de6c41f91ac_prof);

    }

    // line 18
    public function block_voir($context, array $blocks = array())
    {
        $__internal_cb848ba5e24166464db4710ca2136b1001f48cb5e347bc1259de72879ffeff17 = $this->env->getExtension("native_profiler");
        $__internal_cb848ba5e24166464db4710ca2136b1001f48cb5e347bc1259de72879ffeff17->enter($__internal_cb848ba5e24166464db4710ca2136b1001f48cb5e347bc1259de72879ffeff17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "voir"));

        
        $__internal_cb848ba5e24166464db4710ca2136b1001f48cb5e347bc1259de72879ffeff17->leave($__internal_cb848ba5e24166464db4710ca2136b1001f48cb5e347bc1259de72879ffeff17_prof);

    }

    // line 19
    public function block_editer($context, array $blocks = array())
    {
        $__internal_fd1cb6321e77d4d10e84a6927c93bd858d8b7f4d9dfd0e3e5a90907c7d37e2b3 = $this->env->getExtension("native_profiler");
        $__internal_fd1cb6321e77d4d10e84a6927c93bd858d8b7f4d9dfd0e3e5a90907c7d37e2b3->enter($__internal_fd1cb6321e77d4d10e84a6927c93bd858d8b7f4d9dfd0e3e5a90907c7d37e2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editer"));

        
        $__internal_fd1cb6321e77d4d10e84a6927c93bd858d8b7f4d9dfd0e3e5a90907c7d37e2b3->leave($__internal_fd1cb6321e77d4d10e84a6927c93bd858d8b7f4d9dfd0e3e5a90907c7d37e2b3_prof);

    }

    // line 20
    public function block_delete($context, array $blocks = array())
    {
        $__internal_14ea43feb61fbc6e63468df2711df807ec1ed6e2f175acf066bcc3aa5125dad6 = $this->env->getExtension("native_profiler");
        $__internal_14ea43feb61fbc6e63468df2711df807ec1ed6e2f175acf066bcc3aa5125dad6->enter($__internal_14ea43feb61fbc6e63468df2711df807ec1ed6e2f175acf066bcc3aa5125dad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete"));

        
        $__internal_14ea43feb61fbc6e63468df2711df807ec1ed6e2f175acf066bcc3aa5125dad6->leave($__internal_14ea43feb61fbc6e63468df2711df807ec1ed6e2f175acf066bcc3aa5125dad6_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle::layoutPersonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 20,  152 => 19,  141 => 18,  130 => 17,  119 => 16,  108 => 15,  98 => 20,  94 => 19,  89 => 18,  87 => 17,  83 => 16,  79 => 15,  71 => 14,  62 => 9,  54 => 8,  42 => 5,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/layoutPersonne.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/* */
/* {% block crotoy %} {% endblock %}     */
/* */
/* */
/*  {% block menu_personne %} */
/* 	{{ render(controller("VFCrotoyBundle:Personne:menu")) }}*/
/*  {% endblock %}*/
/*  */
/* */
/* */
/* {% block personne %}  */
/* 				{% block toutes %}{% endblock %} */
/* 			    {% block locataires %}{% endblock %} */
/* 				{% block ajouter %}{% endblock %}*/
/* 				{% block voir %}{% endblock %}   */
/*                 {% block editer %}{% endblock %} */
/* 				{% block delete %}{% endblock %} */
/*   */
/* {% endblock%}*/
/* */
/* */
/* */
