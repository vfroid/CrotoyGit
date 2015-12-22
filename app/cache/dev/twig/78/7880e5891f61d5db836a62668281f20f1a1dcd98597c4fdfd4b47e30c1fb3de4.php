<?php

/* VFCrotoyBundle:Crotoy:menu.html.twig */
class __TwigTemplate_e23aa3487b9f64d405cdbd1265ce4122c4dd55ef85fa82a88ca3faeca017c418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'recherche' => array($this, 'block_recherche'),
            'menu_proprietaire' => array($this, 'block_menu_proprietaire'),
            'menu_user' => array($this, 'block_menu_user'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eed01d9b5e0d3568dac548cffe328e0ae9682e23fed714aea269bfcf518c07b = $this->env->getExtension("native_profiler");
        $__internal_3eed01d9b5e0d3568dac548cffe328e0ae9682e23fed714aea269bfcf518c07b->enter($__internal_3eed01d9b5e0d3568dac548cffe328e0ae9682e23fed714aea269bfcf518c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Crotoy:menu.html.twig"));

        // line 2
        echo "


";
        // line 5
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "




";
        
        $__internal_3eed01d9b5e0d3568dac548cffe328e0ae9682e23fed714aea269bfcf518c07b->leave($__internal_3eed01d9b5e0d3568dac548cffe328e0ae9682e23fed714aea269bfcf518c07b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2e759d0c6ba94459065a0559ba8860730185ae3e45c376fca1dc6fa828ba3e8 = $this->env->getExtension("native_profiler");
        $__internal_b2e759d0c6ba94459065a0559ba8860730185ae3e45c376fca1dc6fa828ba3e8->enter($__internal_b2e759d0c6ba94459065a0559ba8860730185ae3e45c376fca1dc6fa828ba3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        $this->displayBlock('recherche', $context, $blocks);
        // line 7
        echo "  <h4>Menu</h4>
     ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_RESERVANT")) {
            // line 9
            echo "\t  <ul>  
\t\t\t<li><a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
            echo "\">Réservations</a>
\t\t\t<li><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("vf_personne_recherche");
            echo "\">Personnes</a>
\t\t\t<li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("vf_blog_accueil");
            echo "\">Blog</a></li>
\t\t\t<li><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("vf_voyager_menu");
            echo "\">Voyager</a></li>
\t\t\t<li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("vf_user_menu");
            echo "\">Mon compte</a></li>
\t\t\t";
            // line 15
            if ($this->env->getExtension('security')->isGranted("ROLE_PROPRIETAIRE")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("vf_proprietaire_menu");
                echo "\">Propriétaire</a></li>";
            }
            // line 16
            echo "\t  </ul>
\t  
     ";
        }
        // line 19
        echo "\t 
\t 
\t ";
        // line 21
        $this->displayBlock('menu_proprietaire', $context, $blocks);
        // line 22
        echo "\t ";
        $this->displayBlock('menu_user', $context, $blocks);
        // line 23
        echo "\t  
\t  
";
        
        $__internal_b2e759d0c6ba94459065a0559ba8860730185ae3e45c376fca1dc6fa828ba3e8->leave($__internal_b2e759d0c6ba94459065a0559ba8860730185ae3e45c376fca1dc6fa828ba3e8_prof);

    }

    // line 6
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_5c414a246bd33f2edfa0c33cfb3bf2d0fa939d9de7b37d74f17770da110ac528 = $this->env->getExtension("native_profiler");
        $__internal_5c414a246bd33f2edfa0c33cfb3bf2d0fa939d9de7b37d74f17770da110ac528->enter($__internal_5c414a246bd33f2edfa0c33cfb3bf2d0fa939d9de7b37d74f17770da110ac528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_5c414a246bd33f2edfa0c33cfb3bf2d0fa939d9de7b37d74f17770da110ac528->leave($__internal_5c414a246bd33f2edfa0c33cfb3bf2d0fa939d9de7b37d74f17770da110ac528_prof);

    }

    // line 21
    public function block_menu_proprietaire($context, array $blocks = array())
    {
        $__internal_65d1bbc4f32fdf3fd7182ab248857ae8c90da734541e61c3f49ed7a5140151cf = $this->env->getExtension("native_profiler");
        $__internal_65d1bbc4f32fdf3fd7182ab248857ae8c90da734541e61c3f49ed7a5140151cf->enter($__internal_65d1bbc4f32fdf3fd7182ab248857ae8c90da734541e61c3f49ed7a5140151cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_proprietaire"));

        echo " ";
        
        $__internal_65d1bbc4f32fdf3fd7182ab248857ae8c90da734541e61c3f49ed7a5140151cf->leave($__internal_65d1bbc4f32fdf3fd7182ab248857ae8c90da734541e61c3f49ed7a5140151cf_prof);

    }

    // line 22
    public function block_menu_user($context, array $blocks = array())
    {
        $__internal_c50d88b50d7bd837b5b50e0bb08647c427b8201b75f9862381913a49b94bbbc8 = $this->env->getExtension("native_profiler");
        $__internal_c50d88b50d7bd837b5b50e0bb08647c427b8201b75f9862381913a49b94bbbc8->enter($__internal_c50d88b50d7bd837b5b50e0bb08647c427b8201b75f9862381913a49b94bbbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_user"));

        echo " ";
        
        $__internal_c50d88b50d7bd837b5b50e0bb08647c427b8201b75f9862381913a49b94bbbc8->leave($__internal_c50d88b50d7bd837b5b50e0bb08647c427b8201b75f9862381913a49b94bbbc8_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Crotoy:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 22,  121 => 21,  110 => 6,  101 => 23,  98 => 22,  96 => 21,  92 => 19,  87 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  45 => 5,  33 => 26,  31 => 5,  26 => 2,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Crotoy/menu.html.twig #}*/
/* */
/* */
/* */
/* {% block menu %}*/
/* {% block recherche %}{% endblock %}*/
/*   <h4>Menu</h4>*/
/*      {% if is_granted('ROLE_RESERVANT') %}*/
/* 	  <ul>  */
/* 			<li><a href="{{ path('vf_reservation_recherche') }}">Réservations</a>*/
/* 			<li><a href="{{ path('vf_personne_recherche') }}">Personnes</a>*/
/* 			<li><a href="{{ path('vf_blog_accueil') }}">Blog</a></li>*/
/* 			<li><a href="{{ path('vf_voyager_menu') }}">Voyager</a></li>*/
/* 			<li><a href="{{ path('vf_user_menu') }}">Mon compte</a></li>*/
/* 			{% if is_granted("ROLE_PROPRIETAIRE") %}<li><a href="{{ path('vf_proprietaire_menu') }}">Propriétaire</a></li>{% endif %}*/
/* 	  </ul>*/
/* 	  */
/*      {% endif %}*/
/* 	 */
/* 	 */
/* 	 {% block menu_proprietaire %} {% endblock %}*/
/* 	 {% block menu_user %} {% endblock %}*/
/* 	  */
/* 	  */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
