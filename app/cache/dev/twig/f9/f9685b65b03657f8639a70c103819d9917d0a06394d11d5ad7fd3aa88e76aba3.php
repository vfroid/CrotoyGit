<?php

/* VFCrotoyBundle::layoutHabiter.html.twig  */
class __TwigTemplate_dc6c0029348720954ec37744cf3fcded9b15141de8c90c379589ab1c1eb1d4a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle::layoutHabiter.html.twig ", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'menu_habiter' => array($this, 'block_menu_habiter'),
            'proprietaire' => array($this, 'block_proprietaire'),
            'locataires' => array($this, 'block_locataires'),
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
        $__internal_66f19da21f6faa139b0c4f624dba5adb19b37180450307588d134774274a9b59 = $this->env->getExtension("native_profiler");
        $__internal_66f19da21f6faa139b0c4f624dba5adb19b37180450307588d134774274a9b59->enter($__internal_66f19da21f6faa139b0c4f624dba5adb19b37180450307588d134774274a9b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle::layoutHabiter.html.twig "));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f19da21f6faa139b0c4f624dba5adb19b37180450307588d134774274a9b59->leave($__internal_66f19da21f6faa139b0c4f624dba5adb19b37180450307588d134774274a9b59_prof);

    }

    // line 6
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_50f7bb5a77af1661bb8fb6a48a1cfc1d76b3e2539c52c3bedec06f4103fd95f1 = $this->env->getExtension("native_profiler");
        $__internal_50f7bb5a77af1661bb8fb6a48a1cfc1d76b3e2539c52c3bedec06f4103fd95f1->enter($__internal_50f7bb5a77af1661bb8fb6a48a1cfc1d76b3e2539c52c3bedec06f4103fd95f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_50f7bb5a77af1661bb8fb6a48a1cfc1d76b3e2539c52c3bedec06f4103fd95f1->leave($__internal_50f7bb5a77af1661bb8fb6a48a1cfc1d76b3e2539c52c3bedec06f4103fd95f1_prof);

    }

    // line 9
    public function block_menu_habiter($context, array $blocks = array())
    {
        $__internal_de441ffacf38d8558726e3b38e6a5c9553bc727815af38f88e7668a1a80bc07c = $this->env->getExtension("native_profiler");
        $__internal_de441ffacf38d8558726e3b38e6a5c9553bc727815af38f88e7668a1a80bc07c->enter($__internal_de441ffacf38d8558726e3b38e6a5c9553bc727815af38f88e7668a1a80bc07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_habiter"));

        echo " 
\t";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_INVITE")) {
            // line 11
            echo "\t  <p>Guide pratique</p>
\t<ul>
\t    <li><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("vf_habiter_accueil");
            echo "\" >Accueil</a></li>
\t    <li><a href=\"https://www.service-client.veoliaeau.fr/home.html\" target=\"_blank\">Veolia (eau et gaz)</a></li>
\t\t<li><a href=\"https://particulier.edf.fr/fr/accueil.html#\" target=\"_blank\">EDF (électricité)</a></li>
\t\t<li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("vf_habiter_internet");
            echo "\" target=\"_blank\">Internet, TV, téléphone</a></li>
\t\t<li><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("vf_habiter_gerer");
            echo "\">Liens pratiques</a></li>
      </ul>
    ";
        }
        // line 20
        echo " ";
        
        $__internal_de441ffacf38d8558726e3b38e6a5c9553bc727815af38f88e7668a1a80bc07c->leave($__internal_de441ffacf38d8558726e3b38e6a5c9553bc727815af38f88e7668a1a80bc07c_prof);

    }

    // line 25
    public function block_proprietaire($context, array $blocks = array())
    {
        $__internal_e475b6b07022ee0344fc58966dff075d961d49220a3a77d0a4937fb82892325c = $this->env->getExtension("native_profiler");
        $__internal_e475b6b07022ee0344fc58966dff075d961d49220a3a77d0a4937fb82892325c->enter($__internal_e475b6b07022ee0344fc58966dff075d961d49220a3a77d0a4937fb82892325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proprietaire"));

        echo "  
\t                ";
        // line 26
        $this->displayBlock('locataires', $context, $blocks);
        // line 27
        echo "\t\t\t\t\t";
        $this->displayBlock('toutes', $context, $blocks);
        echo " 
\t                ";
        // line 28
        $this->displayBlock('ajouter', $context, $blocks);
        echo " 
\t\t\t\t\t";
        // line 29
        $this->displayBlock('voir', $context, $blocks);
        echo "   
\t\t\t\t\t";
        // line 30
        $this->displayBlock('editer', $context, $blocks);
        echo " 
\t\t\t\t\t";
        // line 31
        $this->displayBlock('delete', $context, $blocks);
        echo " 

  
  ";
        
        $__internal_e475b6b07022ee0344fc58966dff075d961d49220a3a77d0a4937fb82892325c->leave($__internal_e475b6b07022ee0344fc58966dff075d961d49220a3a77d0a4937fb82892325c_prof);

    }

    // line 26
    public function block_locataires($context, array $blocks = array())
    {
        $__internal_f509e2eb9119abf4363d76ed78fc8140613435fb2883da90ed67289fe87fb76c = $this->env->getExtension("native_profiler");
        $__internal_f509e2eb9119abf4363d76ed78fc8140613435fb2883da90ed67289fe87fb76c->enter($__internal_f509e2eb9119abf4363d76ed78fc8140613435fb2883da90ed67289fe87fb76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "locataires"));

        
        $__internal_f509e2eb9119abf4363d76ed78fc8140613435fb2883da90ed67289fe87fb76c->leave($__internal_f509e2eb9119abf4363d76ed78fc8140613435fb2883da90ed67289fe87fb76c_prof);

    }

    // line 27
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_3589593c0780006e36cc1133b780d2d3c259b5cd801148ecbfb157dbb12715c4 = $this->env->getExtension("native_profiler");
        $__internal_3589593c0780006e36cc1133b780d2d3c259b5cd801148ecbfb157dbb12715c4->enter($__internal_3589593c0780006e36cc1133b780d2d3c259b5cd801148ecbfb157dbb12715c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        
        $__internal_3589593c0780006e36cc1133b780d2d3c259b5cd801148ecbfb157dbb12715c4->leave($__internal_3589593c0780006e36cc1133b780d2d3c259b5cd801148ecbfb157dbb12715c4_prof);

    }

    // line 28
    public function block_ajouter($context, array $blocks = array())
    {
        $__internal_4c4ff0938a876c7ead54512eaa8d485747304f6a35a40afdce67a5a19391021a = $this->env->getExtension("native_profiler");
        $__internal_4c4ff0938a876c7ead54512eaa8d485747304f6a35a40afdce67a5a19391021a->enter($__internal_4c4ff0938a876c7ead54512eaa8d485747304f6a35a40afdce67a5a19391021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ajouter"));

        
        $__internal_4c4ff0938a876c7ead54512eaa8d485747304f6a35a40afdce67a5a19391021a->leave($__internal_4c4ff0938a876c7ead54512eaa8d485747304f6a35a40afdce67a5a19391021a_prof);

    }

    // line 29
    public function block_voir($context, array $blocks = array())
    {
        $__internal_521af07cf0547fef17ac4d2daa8ddf123cc88e4e56bbe3067e94e40ec9d82871 = $this->env->getExtension("native_profiler");
        $__internal_521af07cf0547fef17ac4d2daa8ddf123cc88e4e56bbe3067e94e40ec9d82871->enter($__internal_521af07cf0547fef17ac4d2daa8ddf123cc88e4e56bbe3067e94e40ec9d82871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "voir"));

        
        $__internal_521af07cf0547fef17ac4d2daa8ddf123cc88e4e56bbe3067e94e40ec9d82871->leave($__internal_521af07cf0547fef17ac4d2daa8ddf123cc88e4e56bbe3067e94e40ec9d82871_prof);

    }

    // line 30
    public function block_editer($context, array $blocks = array())
    {
        $__internal_54809b6eb61ffd7622f878491c6d0b21ebbbfaf3d9c8baee310485c38e2afbef = $this->env->getExtension("native_profiler");
        $__internal_54809b6eb61ffd7622f878491c6d0b21ebbbfaf3d9c8baee310485c38e2afbef->enter($__internal_54809b6eb61ffd7622f878491c6d0b21ebbbfaf3d9c8baee310485c38e2afbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editer"));

        
        $__internal_54809b6eb61ffd7622f878491c6d0b21ebbbfaf3d9c8baee310485c38e2afbef->leave($__internal_54809b6eb61ffd7622f878491c6d0b21ebbbfaf3d9c8baee310485c38e2afbef_prof);

    }

    // line 31
    public function block_delete($context, array $blocks = array())
    {
        $__internal_b7cf572569c0f8e5f5030a27477a6de2a960b2fd53414c50d65ae3ab11e11f4d = $this->env->getExtension("native_profiler");
        $__internal_b7cf572569c0f8e5f5030a27477a6de2a960b2fd53414c50d65ae3ab11e11f4d->enter($__internal_b7cf572569c0f8e5f5030a27477a6de2a960b2fd53414c50d65ae3ab11e11f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete"));

        
        $__internal_b7cf572569c0f8e5f5030a27477a6de2a960b2fd53414c50d65ae3ab11e11f4d->leave($__internal_b7cf572569c0f8e5f5030a27477a6de2a960b2fd53414c50d65ae3ab11e11f4d_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle::layoutHabiter.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 31,  173 => 30,  162 => 29,  151 => 28,  140 => 27,  129 => 26,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 27,  99 => 26,  91 => 25,  84 => 20,  78 => 17,  74 => 16,  68 => 13,  64 => 11,  62 => 10,  54 => 9,  42 => 6,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/layoutHabiter.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/*       */
/* */
/*  {% block crotoy %} {% endblock %} */
/* */
/* */
/*  {% block menu_habiter %} */
/* 	{% if is_granted('ROLE_INVITE') %}*/
/* 	  <p>Guide pratique</p>*/
/* 	<ul>*/
/* 	    <li><a href="{{ path('vf_habiter_accueil') }}" >Accueil</a></li>*/
/* 	    <li><a href="https://www.service-client.veoliaeau.fr/home.html" target="_blank">Veolia (eau et gaz)</a></li>*/
/* 		<li><a href="https://particulier.edf.fr/fr/accueil.html#" target="_blank">EDF (électricité)</a></li>*/
/* 		<li><a href="{{ path('vf_habiter_internet') }}" target="_blank">Internet, TV, téléphone</a></li>*/
/* 		<li><a href="{{ path('vf_habiter_gerer') }}">Liens pratiques</a></li>*/
/*       </ul>*/
/*     {% endif %}*/
/*  {% endblock %} */
/* */
/* */
/*  */
/*  */
/*   {% block proprietaire %}  */
/* 	                {% block locataires %}{% endblock %}*/
/* 					{% block toutes %}{% endblock %} */
/* 	                {% block ajouter %}{% endblock %} */
/* 					{% block voir %}{% endblock %}   */
/* 					{% block editer %}{% endblock %} */
/* 					{% block delete %}{% endblock %} */
/* */
/*   */
/*   {% endblock%}*/
/* */
