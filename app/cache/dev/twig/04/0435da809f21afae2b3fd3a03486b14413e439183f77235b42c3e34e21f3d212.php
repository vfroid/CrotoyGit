<?php

/* VFCrotoyBundle:Reservation:menu.html.twig */
class __TwigTemplate_decfef7cff8df10071616a656bb1787f91b4637ea51915f2877a57947ce13a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu_reservation' => array($this, 'block_menu_reservation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dda28ec9737853a331e881aeb1880977efcbc51802649ae048522dde3948367 = $this->env->getExtension("native_profiler");
        $__internal_2dda28ec9737853a331e881aeb1880977efcbc51802649ae048522dde3948367->enter($__internal_2dda28ec9737853a331e881aeb1880977efcbc51802649ae048522dde3948367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Reservation:menu.html.twig"));

        // line 2
        echo "


";
        // line 5
        $this->displayBlock('menu_reservation', $context, $blocks);
        // line 15
        echo "




";
        
        $__internal_2dda28ec9737853a331e881aeb1880977efcbc51802649ae048522dde3948367->leave($__internal_2dda28ec9737853a331e881aeb1880977efcbc51802649ae048522dde3948367_prof);

    }

    // line 5
    public function block_menu_reservation($context, array $blocks = array())
    {
        $__internal_9d1c9874b501c0f00bda3ec8adb4f2d020f04670597599226ae3ceb779ffb425 = $this->env->getExtension("native_profiler");
        $__internal_9d1c9874b501c0f00bda3ec8adb4f2d020f04670597599226ae3ceb779ffb425->enter($__internal_9d1c9874b501c0f00bda3ec8adb4f2d020f04670597599226ae3ceb779ffb425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reservation"));

        echo "  
   <p>Réservations</p>
\t  <ul>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
        echo "\">Toutes</a></li>
\t\t";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_RESERVANT")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("vf_reservation_add");
            echo "\">Réserver un séjour pour soi</a></li> ";
        }
        // line 10
        echo "\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROPRIETAIRE")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("vf_personne_recherche");
            echo "\">Réserver un séjour pour un invité</a></li>";
        }
        // line 11
        echo "\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
        echo "\">Rechercher une réservation</a></li>
\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("vf_booking_capter");
        echo "\">Calendrier</a></li>
      </ul>
";
        
        $__internal_9d1c9874b501c0f00bda3ec8adb4f2d020f04670597599226ae3ceb779ffb425->leave($__internal_9d1c9874b501c0f00bda3ec8adb4f2d020f04670597599226ae3ceb779ffb425_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Reservation:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  69 => 11,  62 => 10,  56 => 9,  52 => 8,  42 => 5,  30 => 15,  28 => 5,  23 => 2,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Reservation/menu.html.twig #}*/
/* */
/* */
/* */
/* {% block menu_reservation %}  */
/*    <p>Réservations</p>*/
/* 	  <ul>*/
/*         <li><a href="{{ path('vf_reservation_recherche') }}">Toutes</a></li>*/
/* 		{% if is_granted('ROLE_RESERVANT') %}<li><a href="{{ path('vf_reservation_add') }}">Réserver un séjour pour soi</a></li> {% endif %}*/
/* 		{% if is_granted('ROLE_PROPRIETAIRE') %}<li><a href="{{ path('vf_personne_recherche') }}">Réserver un séjour pour un invité</a></li>{% endif %}*/
/* 		<li><a href="{{ path('vf_reservation_recherche') }}">Rechercher une réservation</a></li>*/
/* 		<li><a href="{{ path('vf_booking_capter') }}">Calendrier</a></li>*/
/*       </ul>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
