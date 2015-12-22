<?php

/* VFCrotoyBundle:Personne:menu.html.twig */
class __TwigTemplate_87859533739c63bdd111b4f47034522ab6f84935e2445b879b9c335ac60c778a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu_personne' => array($this, 'block_menu_personne'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2607a61559501397f4c2edf084296cc61e145b1053d0177941af69e91e8c0a89 = $this->env->getExtension("native_profiler");
        $__internal_2607a61559501397f4c2edf084296cc61e145b1053d0177941af69e91e8c0a89->enter($__internal_2607a61559501397f4c2edf084296cc61e145b1053d0177941af69e91e8c0a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Personne:menu.html.twig"));

        // line 2
        echo "


";
        // line 5
        $this->displayBlock('menu_personne', $context, $blocks);
        // line 14
        echo "




";
        
        $__internal_2607a61559501397f4c2edf084296cc61e145b1053d0177941af69e91e8c0a89->leave($__internal_2607a61559501397f4c2edf084296cc61e145b1053d0177941af69e91e8c0a89_prof);

    }

    // line 5
    public function block_menu_personne($context, array $blocks = array())
    {
        $__internal_c43eac4fe34815e38acfba3bf82b225ca2fe0e7e5145a4d07b30dd7dc99e08c9 = $this->env->getExtension("native_profiler");
        $__internal_c43eac4fe34815e38acfba3bf82b225ca2fe0e7e5145a4d07b30dd7dc99e08c9->enter($__internal_c43eac4fe34815e38acfba3bf82b225ca2fe0e7e5145a4d07b30dd7dc99e08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_personne"));

        echo "  

\t<p>Personnes</p>
\t  <ul>  
\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("vf_personne_recherche");
        echo "\">Toutes</a>
\t\t\t";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_RESERVANT")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("vf_personne_add");
            echo "\">Enregistrer une personne</a>";
        }
        // line 11
        echo "\t\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("vf_personne_recherche");
        echo "\">Rechercher une personne</a></li>
\t  </ul>
";
        
        $__internal_c43eac4fe34815e38acfba3bf82b225ca2fe0e7e5145a4d07b30dd7dc99e08c9->leave($__internal_c43eac4fe34815e38acfba3bf82b225ca2fe0e7e5145a4d07b30dd7dc99e08c9_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Personne:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 10,  53 => 9,  42 => 5,  30 => 14,  28 => 5,  23 => 2,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Personne/menu.html.twig #}*/
/* */
/* */
/* */
/* {% block menu_personne %}  */
/* */
/* 	<p>Personnes</p>*/
/* 	  <ul>  */
/* 			<li><a href="{{ path('vf_personne_recherche') }}">Toutes</a>*/
/* 			{% if is_granted('ROLE_RESERVANT') %}<li><a href="{{ path('vf_personne_add') }}">Enregistrer une personne</a>{% endif %}*/
/* 			<li><a href="{{ path('vf_personne_recherche') }}">Rechercher une personne</a></li>*/
/* 	  </ul>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
