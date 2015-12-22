<?php

/* VFBookingBundle:Booking:capter.html.twig */
class __TwigTemplate_4869da5bbb2c9fcf352ccd4243b91bec4c24cf13e161fddfb0d7b178bc601ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFBookingBundle::layoutBooking.html.twig", "VFBookingBundle:Booking:capter.html.twig", 3);
        $this->blocks = array(
            'calendrier' => array($this, 'block_calendrier'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFBookingBundle::layoutBooking.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d57e45e0fa1cff4719f098317428c5e2be7987eb604028f93ccea166cd59989a = $this->env->getExtension("native_profiler");
        $__internal_d57e45e0fa1cff4719f098317428c5e2be7987eb604028f93ccea166cd59989a->enter($__internal_d57e45e0fa1cff4719f098317428c5e2be7987eb604028f93ccea166cd59989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFBookingBundle:Booking:capter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d57e45e0fa1cff4719f098317428c5e2be7987eb604028f93ccea166cd59989a->leave($__internal_d57e45e0fa1cff4719f098317428c5e2be7987eb604028f93ccea166cd59989a_prof);

    }

    // line 5
    public function block_calendrier($context, array $blocks = array())
    {
        $__internal_de6e654197bac922bbb97b7806e4d0b37e1d0031686922b1fe4a12b8de687cff = $this->env->getExtension("native_profiler");
        $__internal_de6e654197bac922bbb97b7806e4d0b37e1d0031686922b1fe4a12b8de687cff->enter($__internal_de6e654197bac922bbb97b7806e4d0b37e1d0031686922b1fe4a12b8de687cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendrier"));

        // line 6
        echo "
<h2> Formulaire pour afficher le calendrier </h2>

<form action='calendrier' method=\"post\"/>
\t<p>
       <label for=\"date\">Début de l'affichage du calendrier :</label>
       <input type=\"date\"  value= ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["jour"]) ? $context["jour"] : $this->getContext($context, "jour")), "html", null, true);
        echo "  name=\"date\" id=\"date\" />
       
       </br>
       <label for=\"months\">Nombre de mois à afficher</label>
       <input type=\"number\" value=15 name=\"mois\" id=\"mois\" />
\t   </br> </br>
       <input type=\"submit\" value=\"Afficher\" />
   </p>
</form>

 </br> </br> </br>
\t<div>
\t\t<a class=\"btn btn-info\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        echo "\">Retour</a> 
\t</div>
";
        
        $__internal_de6e654197bac922bbb97b7806e4d0b37e1d0031686922b1fe4a12b8de687cff->leave($__internal_de6e654197bac922bbb97b7806e4d0b37e1d0031686922b1fe4a12b8de687cff_prof);

    }

    public function getTemplateName()
    {
        return "VFBookingBundle:Booking:capter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  48 => 12,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "VFBookingBundle::layoutBooking.html.twig" %}*/
/* */
/* {% block calendrier%}*/
/* */
/* <h2> Formulaire pour afficher le calendrier </h2>*/
/* */
/* <form action='calendrier' method="post"/>*/
/* 	<p>*/
/*        <label for="date">Début de l'affichage du calendrier :</label>*/
/*        <input type="date"  value= {{ jour }}  name="date" id="date" />*/
/*        */
/*        </br>*/
/*        <label for="months">Nombre de mois à afficher</label>*/
/*        <input type="number" value=15 name="mois" id="mois" />*/
/* 	   </br> </br>*/
/*        <input type="submit" value="Afficher" />*/
/*    </p>*/
/* </form>*/
/* */
/*  </br> </br> </br>*/
/* 	<div>*/
/* 		<a class="btn btn-info" href="{{ path('vf_crotoy_accueil') }}">Retour</a> */
/* 	</div>*/
/* {% endblock%}*/
