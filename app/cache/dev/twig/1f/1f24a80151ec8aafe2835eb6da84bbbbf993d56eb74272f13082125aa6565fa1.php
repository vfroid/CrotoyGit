<?php

/* VFCrotoyBundle:Habiter:accueil.html.twig */
class __TwigTemplate_9b0fd3527f21ba8a5476190ebeac650a69bc1bb3007b6a05338f244959325740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutHabiter.html.twig", "VFCrotoyBundle:Habiter:accueil.html.twig", 3);
        $this->blocks = array(
            'habiter' => array($this, 'block_habiter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutHabiter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7997b111f18a8a78759033395f988188b9e0098e0e17a355a0c5947640299dbd = $this->env->getExtension("native_profiler");
        $__internal_7997b111f18a8a78759033395f988188b9e0098e0e17a355a0c5947640299dbd->enter($__internal_7997b111f18a8a78759033395f988188b9e0098e0e17a355a0c5947640299dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Habiter:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7997b111f18a8a78759033395f988188b9e0098e0e17a355a0c5947640299dbd->leave($__internal_7997b111f18a8a78759033395f988188b9e0098e0e17a355a0c5947640299dbd_prof);

    }

    // line 5
    public function block_habiter($context, array $blocks = array())
    {
        $__internal_2b5c19ca013524cf48bcd0faa4f097e3172f505862be7cc45802e63704bcf499 = $this->env->getExtension("native_profiler");
        $__internal_2b5c19ca013524cf48bcd0faa4f097e3172f505862be7cc45802e63704bcf499->enter($__internal_2b5c19ca013524cf48bcd0faa4f097e3172f505862be7cc45802e63704bcf499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "habiter"));

        // line 6
        echo "    <h2>Guide pratique</h2>
\t<p>Mettre ici le guide pratique écrit au Crotoy pour arrivée et départ</p>
\t
\t
\t<div>
\t\t<a class=\"btn btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        // line 12
        echo "\">Accueil du site</a> 
\t</div>

\t 
\t
";
        
        $__internal_2b5c19ca013524cf48bcd0faa4f097e3172f505862be7cc45802e63704bcf499->leave($__internal_2b5c19ca013524cf48bcd0faa4f097e3172f505862be7cc45802e63704bcf499_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Habiter:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  47 => 11,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Habiter/accueil.html.twig #}*/
/* */
/* {% extends "VFCrotoyBundle::layoutHabiter.html.twig" %}*/
/* */
/* {% block habiter %}*/
/*     <h2>Guide pratique</h2>*/
/* 	<p>Mettre ici le guide pratique écrit au Crotoy pour arrivée et départ</p>*/
/* 	*/
/* 	*/
/* 	<div>*/
/* 		<a class="btn btn-info" href="{{ path('vf_crotoy_accueil'*/
/* 		) }}">Accueil du site</a> */
/* 	</div>*/
/* */
/* 	 */
/* 	*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
