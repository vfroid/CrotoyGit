<?php

/* VFCrotoyBundle:Personne:formRecherche.html.twig */
class __TwigTemplate_7272dce923d2dce9c831057073d06ac9f2f5e45bfa533910a27c1ec719423c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutPersonne.html.twig", "VFCrotoyBundle:Personne:formRecherche.html.twig", 3);
        $this->blocks = array(
            'recherche' => array($this, 'block_recherche'),
            'locataires' => array($this, 'block_locataires'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutPersonne.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd0368bc19f0ce259a260ef6eef24afc21327656459f18a79123d9d810c05f7d = $this->env->getExtension("native_profiler");
        $__internal_dd0368bc19f0ce259a260ef6eef24afc21327656459f18a79123d9d810c05f7d->enter($__internal_dd0368bc19f0ce259a260ef6eef24afc21327656459f18a79123d9d810c05f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Personne:formRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0368bc19f0ce259a260ef6eef24afc21327656459f18a79123d9d810c05f7d->leave($__internal_dd0368bc19f0ce259a260ef6eef24afc21327656459f18a79123d9d810c05f7d_prof);

    }

    // line 6
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_7939b51dabd7530249959c233388b2109998d9269a741a627f318a1716c8808a = $this->env->getExtension("native_profiler");
        $__internal_7939b51dabd7530249959c233388b2109998d9269a741a627f318a1716c8808a->enter($__internal_7939b51dabd7530249959c233388b2109998d9269a741a627f318a1716c8808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 7
        echo "<p>Rechercher par n°</p>

 <div class=\"well\">
  ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 13
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'label', array("label" => "n° de la personne"));
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t
  ";
        // line 20
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


  
  ";
        // line 25
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_7939b51dabd7530249959c233388b2109998d9269a741a627f318a1716c8808a->leave($__internal_7939b51dabd7530249959c233388b2109998d9269a741a627f318a1716c8808a_prof);

    }

    // line 31
    public function block_locataires($context, array $blocks = array())
    {
        $__internal_2da2f885ed207221497375ee67d96e47774fc16907879bd4030a165adc89fc07 = $this->env->getExtension("native_profiler");
        $__internal_2da2f885ed207221497375ee67d96e47774fc16907879bd4030a165adc89fc07->enter($__internal_2da2f885ed207221497375ee67d96e47774fc16907879bd4030a165adc89fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "locataires"));

        // line 32
        echo "   ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VFCrotoyBundle:Personne:locataires"));
        echo "
";
        
        $__internal_2da2f885ed207221497375ee67d96e47774fc16907879bd4030a165adc89fc07->leave($__internal_2da2f885ed207221497375ee67d96e47774fc16907879bd4030a165adc89fc07_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Personne:formRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  87 => 31,  75 => 25,  67 => 20,  61 => 16,  57 => 15,  51 => 13,  46 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Personne/formRecherche.html.twig #}*/
/* */
/* {% extends "VFCrotoyBundle::layoutPersonne.html.twig" %}*/
/* */
/* */
/* {% block recherche %}*/
/* <p>Rechercher par n°</p>*/
/* */
/*  <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/* 	{{ form_label(form.cp,"n° de la personne")}}*/
/*     {{ form_widget(form.cp, {'attr': {'class': 'form-control'}}) }}*/
/* */
/* 	*/
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.Rechercher, {'attr': {'class': 'btn btn-primary'}}) }}*/
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
/* {% block locataires %}*/
/*    {{ render(controller("VFCrotoyBundle:Personne:locataires")) }}*/
/* {% endblock %}*/
