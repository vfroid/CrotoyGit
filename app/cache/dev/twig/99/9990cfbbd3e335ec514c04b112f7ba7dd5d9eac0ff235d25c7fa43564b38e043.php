<?php

/* VFCrotoyBundle:Reservation:add.html.twig */
class __TwigTemplate_91782dcacf5a36b2901dc8c40ede0f1a2c14d5c7b75b0ed37ccbc87222e25c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutReservation.html.twig", "VFCrotoyBundle:Reservation:add.html.twig", 3);
        $this->blocks = array(
            'ajouter' => array($this, 'block_ajouter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutReservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_915720aa5df37eecf32052b7989c7147e9fad07ac9722c447d6db2f578e91139 = $this->env->getExtension("native_profiler");
        $__internal_915720aa5df37eecf32052b7989c7147e9fad07ac9722c447d6db2f578e91139->enter($__internal_915720aa5df37eecf32052b7989c7147e9fad07ac9722c447d6db2f578e91139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Reservation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915720aa5df37eecf32052b7989c7147e9fad07ac9722c447d6db2f578e91139->leave($__internal_915720aa5df37eecf32052b7989c7147e9fad07ac9722c447d6db2f578e91139_prof);

    }

    // line 6
    public function block_ajouter($context, array $blocks = array())
    {
        $__internal_cdd58e4c17e6ff5b4ad649a5f05e0fc6c06aff71e9877291543317fd360e4cbe = $this->env->getExtension("native_profiler");
        $__internal_cdd58e4c17e6ff5b4ad649a5f05e0fc6c06aff71e9877291543317fd360e4cbe->enter($__internal_cdd58e4c17e6ff5b4ad649a5f05e0fc6c06aff71e9877291543317fd360e4cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ajouter"));

        echo "  
<h3>Réservation du séjour pour ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "nom", array()), "html", null, true);
        echo "</h3>

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

\t
    <div class=\"form-group\">
      ";
        // line 18
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "debut", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Début du séjour"));
        echo "

      ";
        // line 21
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "debut", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "debut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 30
        echo "    <div class=\"form-group\">
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fin", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Fin"));
        echo "
      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fin", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

\t
\t<div class=\"form-group\">
      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nadulte", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nombre d'adultes"));
        echo "
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nadulte", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nadulte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

\t<div class=\"form-group\">
      ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "njeunes", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nombre de jeunes (< 18 ans)"));
        echo "
      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "njeunes", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "njeunes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

  ";
        // line 56
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  
  <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
        echo "\">Annuler l'enregistrement</>

  ";
        // line 63
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 66
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_cdd58e4c17e6ff5b4ad649a5f05e0fc6c06aff71e9877291543317fd360e4cbe->leave($__internal_cdd58e4c17e6ff5b4ad649a5f05e0fc6c06aff71e9877291543317fd360e4cbe_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Reservation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  149 => 63,  144 => 58,  138 => 56,  131 => 51,  126 => 49,  122 => 48,  114 => 43,  109 => 41,  105 => 40,  96 => 34,  91 => 32,  87 => 31,  84 => 30,  76 => 25,  69 => 21,  63 => 18,  55 => 13,  50 => 10,  42 => 7,  34 => 6,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Reservation/formSejourtout.html.twig #}*/
/* */
/* {% extends "VFCrotoyBundle::layoutReservation.html.twig" %}*/
/* */
/* */
/*  {% block ajouter %}  */
/* <h3>Réservation du séjour pour {{ personne.prenom }} {{ personne.nom }}</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/* 	*/
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.debut, "Début du séjour", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.debut) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.debut, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# Idem pour un autre champ. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.fin, "Fin", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.fin) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.fin, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* 	*/
/* 	<div class="form-group">*/
/*       {{ form_label(form.nadulte, "Nombre d'adultes", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.nadulte) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.nadulte, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* 	<div class="form-group">*/
/*       {{ form_label(form.njeunes, "Nombre de jeunes (< 18 ans)", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.njeunes) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.njeunes, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.Enregistrer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   */
/*   <a href="{{ path('vf_reservation_recherche') }}">Annuler l'enregistrement</>*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*   {{ form_rest(form) }}*/
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* {% endblock %}*/
