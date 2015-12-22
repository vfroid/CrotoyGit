<?php

/* VFCrotoyBundle:Reservation:recherche.html.twig */
class __TwigTemplate_5aca4400194bb3f3157924dc668b794016f1f61a9dafdc4f20a6a7bfc283fcd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutReservation.html.twig", "VFCrotoyBundle:Reservation:recherche.html.twig", 3);
        $this->blocks = array(
            'toutes' => array($this, 'block_toutes'),
            'recherche' => array($this, 'block_recherche'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutReservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e5048b00dcae7be5325b7f80e346a3c59cf34509afed3b7a8f24cb0aefef290 = $this->env->getExtension("native_profiler");
        $__internal_1e5048b00dcae7be5325b7f80e346a3c59cf34509afed3b7a8f24cb0aefef290->enter($__internal_1e5048b00dcae7be5325b7f80e346a3c59cf34509afed3b7a8f24cb0aefef290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Reservation:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5048b00dcae7be5325b7f80e346a3c59cf34509afed3b7a8f24cb0aefef290->leave($__internal_1e5048b00dcae7be5325b7f80e346a3c59cf34509afed3b7a8f24cb0aefef290_prof);

    }

    // line 5
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_820ecce350965cc888ade7e2153b640412ff4d9591889748b9fb895608c8b0fe = $this->env->getExtension("native_profiler");
        $__internal_820ecce350965cc888ade7e2153b640412ff4d9591889748b9fb895608c8b0fe->enter($__internal_820ecce350965cc888ade7e2153b640412ff4d9591889748b9fb895608c8b0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        echo "  ";
        // line 6
        echo "   ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VFCrotoyBundle:Reservation:toutes"));
        echo "
";
        
        $__internal_820ecce350965cc888ade7e2153b640412ff4d9591889748b9fb895608c8b0fe->leave($__internal_820ecce350965cc888ade7e2153b640412ff4d9591889748b9fb895608c8b0fe_prof);

    }

    // line 11
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_79cd551281ce690037c10b094343d5412edc2afe713507c077813905b4fac1c4 = $this->env->getExtension("native_profiler");
        $__internal_79cd551281ce690037c10b094343d5412edc2afe713507c077813905b4fac1c4->enter($__internal_79cd551281ce690037c10b094343d5412edc2afe713507c077813905b4fac1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 12
        echo "<p>Rechercher un séjour par son n°</p>

 <div class=\"well\">
  ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 18
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "njeunes", array()), 'label', array("label" => "n° du séjour"));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "njeunes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t
  ";
        // line 25
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Trouver", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


  
  ";
        // line 30
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_79cd551281ce690037c10b094343d5412edc2afe713507c077813905b4fac1c4->leave($__internal_79cd551281ce690037c10b094343d5412edc2afe713507c077813905b4fac1c4_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Reservation:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  84 => 25,  78 => 21,  74 => 20,  68 => 18,  63 => 15,  58 => 12,  52 => 11,  42 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Reservation/recherche.html.twig #}*/
/* */
/* {% extends "VFCrotoyBundle::layoutReservation.html.twig" %}*/
/* */
/* {% block toutes %}  {# toutes ne marche pas, pourquoi? #}*/
/*    {{ render(controller("VFCrotoyBundle:Reservation:toutes")) }}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block recherche %}*/
/* <p>Rechercher un séjour par son n°</p>*/
/* */
/*  <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/* 	{{ form_label(form.njeunes,"n° du séjour")}}*/
/*     {{ form_widget(form.njeunes, {'attr': {'class': 'form-control'}}) }}*/
/* */
/* 	*/
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.Trouver, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/* */
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
