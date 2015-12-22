<?php

/* VFCrotoyBundle::layoutReservation.html.twig */
class __TwigTemplate_1aa5f76b7dd82465c0a1f06f4e9e3cb98b63d1071452da7d3f42debc29a89d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle::layoutReservation.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'menu_reservation' => array($this, 'block_menu_reservation'),
            'reservation' => array($this, 'block_reservation'),
            'toutes' => array($this, 'block_toutes'),
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
        $__internal_368ded7cbbdf82d204d2706b04cb55c46833d0f91a7f884328fcceb7e4216b7a = $this->env->getExtension("native_profiler");
        $__internal_368ded7cbbdf82d204d2706b04cb55c46833d0f91a7f884328fcceb7e4216b7a->enter($__internal_368ded7cbbdf82d204d2706b04cb55c46833d0f91a7f884328fcceb7e4216b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle::layoutReservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368ded7cbbdf82d204d2706b04cb55c46833d0f91a7f884328fcceb7e4216b7a->leave($__internal_368ded7cbbdf82d204d2706b04cb55c46833d0f91a7f884328fcceb7e4216b7a_prof);

    }

    // line 6
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_7417962228686d23db65f6b956bc2825183452765f5fd334e87476ece91f2f85 = $this->env->getExtension("native_profiler");
        $__internal_7417962228686d23db65f6b956bc2825183452765f5fd334e87476ece91f2f85->enter($__internal_7417962228686d23db65f6b956bc2825183452765f5fd334e87476ece91f2f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_7417962228686d23db65f6b956bc2825183452765f5fd334e87476ece91f2f85->leave($__internal_7417962228686d23db65f6b956bc2825183452765f5fd334e87476ece91f2f85_prof);

    }

    // line 9
    public function block_menu_reservation($context, array $blocks = array())
    {
        $__internal_1e972a3a93285dd9cebf81eea2f18183838d581947a49154fe360b7268ea2bfa = $this->env->getExtension("native_profiler");
        $__internal_1e972a3a93285dd9cebf81eea2f18183838d581947a49154fe360b7268ea2bfa->enter($__internal_1e972a3a93285dd9cebf81eea2f18183838d581947a49154fe360b7268ea2bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reservation"));

        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VFCrotoyBundle:Reservation:menu"));
        echo " ";
        
        $__internal_1e972a3a93285dd9cebf81eea2f18183838d581947a49154fe360b7268ea2bfa->leave($__internal_1e972a3a93285dd9cebf81eea2f18183838d581947a49154fe360b7268ea2bfa_prof);

    }

    // line 14
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_aac74a6dcbb9c39aa31a4a8b96ebb6b2b5387abfc417a7ca3b7a88e723222558 = $this->env->getExtension("native_profiler");
        $__internal_aac74a6dcbb9c39aa31a4a8b96ebb6b2b5387abfc417a7ca3b7a88e723222558->enter($__internal_aac74a6dcbb9c39aa31a4a8b96ebb6b2b5387abfc417a7ca3b7a88e723222558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo "  
\t
\t\t\t\t\t";
        // line 16
        $this->displayBlock('toutes', $context, $blocks);
        echo " 
    ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_RESERVANT")) {
            echo " \t
\t                ";
            // line 18
            $this->displayBlock('ajouter', $context, $blocks);
            echo " 
\t";
        }
        // line 20
        echo "\t\t\t\t\t";
        $this->displayBlock('voir', $context, $blocks);
        echo "   
\t\t\t\t\t";
        // line 21
        $this->displayBlock('editer', $context, $blocks);
        echo " 
\t\t\t\t\t";
        // line 22
        $this->displayBlock('delete', $context, $blocks);
        echo " 

  
  ";
        
        $__internal_aac74a6dcbb9c39aa31a4a8b96ebb6b2b5387abfc417a7ca3b7a88e723222558->leave($__internal_aac74a6dcbb9c39aa31a4a8b96ebb6b2b5387abfc417a7ca3b7a88e723222558_prof);

    }

    // line 16
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_b101bfc75d30763f18a1019007630874959e99f4aa6d0b747d0dec0997001653 = $this->env->getExtension("native_profiler");
        $__internal_b101bfc75d30763f18a1019007630874959e99f4aa6d0b747d0dec0997001653->enter($__internal_b101bfc75d30763f18a1019007630874959e99f4aa6d0b747d0dec0997001653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        
        $__internal_b101bfc75d30763f18a1019007630874959e99f4aa6d0b747d0dec0997001653->leave($__internal_b101bfc75d30763f18a1019007630874959e99f4aa6d0b747d0dec0997001653_prof);

    }

    // line 18
    public function block_ajouter($context, array $blocks = array())
    {
        $__internal_f899eb148f8743047cf22902d72dbecef893036b9f39389f9224fed969352a26 = $this->env->getExtension("native_profiler");
        $__internal_f899eb148f8743047cf22902d72dbecef893036b9f39389f9224fed969352a26->enter($__internal_f899eb148f8743047cf22902d72dbecef893036b9f39389f9224fed969352a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ajouter"));

        
        $__internal_f899eb148f8743047cf22902d72dbecef893036b9f39389f9224fed969352a26->leave($__internal_f899eb148f8743047cf22902d72dbecef893036b9f39389f9224fed969352a26_prof);

    }

    // line 20
    public function block_voir($context, array $blocks = array())
    {
        $__internal_8b882b2e1117a9440904ead0ced16e1ff5acab46502c2e26f97bde2f7df68ba6 = $this->env->getExtension("native_profiler");
        $__internal_8b882b2e1117a9440904ead0ced16e1ff5acab46502c2e26f97bde2f7df68ba6->enter($__internal_8b882b2e1117a9440904ead0ced16e1ff5acab46502c2e26f97bde2f7df68ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "voir"));

        
        $__internal_8b882b2e1117a9440904ead0ced16e1ff5acab46502c2e26f97bde2f7df68ba6->leave($__internal_8b882b2e1117a9440904ead0ced16e1ff5acab46502c2e26f97bde2f7df68ba6_prof);

    }

    // line 21
    public function block_editer($context, array $blocks = array())
    {
        $__internal_aa57c3c1444d4f7e5ee1abb30d7bffb238eb166fb54f3c82c7a48acf4dc6a422 = $this->env->getExtension("native_profiler");
        $__internal_aa57c3c1444d4f7e5ee1abb30d7bffb238eb166fb54f3c82c7a48acf4dc6a422->enter($__internal_aa57c3c1444d4f7e5ee1abb30d7bffb238eb166fb54f3c82c7a48acf4dc6a422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editer"));

        
        $__internal_aa57c3c1444d4f7e5ee1abb30d7bffb238eb166fb54f3c82c7a48acf4dc6a422->leave($__internal_aa57c3c1444d4f7e5ee1abb30d7bffb238eb166fb54f3c82c7a48acf4dc6a422_prof);

    }

    // line 22
    public function block_delete($context, array $blocks = array())
    {
        $__internal_d19324a05155d5184b4858ce0bcc83dec0e939e7d33bd1d2bf40d734ccb16b08 = $this->env->getExtension("native_profiler");
        $__internal_d19324a05155d5184b4858ce0bcc83dec0e939e7d33bd1d2bf40d734ccb16b08->enter($__internal_d19324a05155d5184b4858ce0bcc83dec0e939e7d33bd1d2bf40d734ccb16b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete"));

        
        $__internal_d19324a05155d5184b4858ce0bcc83dec0e939e7d33bd1d2bf40d734ccb16b08->leave($__internal_d19324a05155d5184b4858ce0bcc83dec0e939e7d33bd1d2bf40d734ccb16b08_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle::layoutReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 22,  142 => 21,  131 => 20,  120 => 18,  109 => 16,  98 => 22,  94 => 21,  89 => 20,  84 => 18,  80 => 17,  76 => 16,  67 => 14,  53 => 9,  41 => 6,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/layoutReservation.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/*       */
/* */
/*  {% block crotoy %} {% endblock %} */
/* */
/* */
/*  {% block menu_reservation %}  {{ render(controller("VFCrotoyBundle:Reservation:menu")) }} {% endblock %} */
/* */
/* */
/*  */
/*  */
/*   {% block reservation %}  */
/* 	*/
/* 					{% block toutes %}{% endblock %} */
/*     {% if is_granted('ROLE_RESERVANT') %} 	*/
/* 	                {% block ajouter %}{% endblock %} */
/* 	{% endif %}*/
/* 					{% block voir %}{% endblock %}   */
/* 					{% block editer %}{% endblock %} */
/* 					{% block delete %}{% endblock %} */
/* */
/*   */
/*   {% endblock%}*/
/* */
