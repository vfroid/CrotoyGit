<?php

/* VFCoreBundle::layoutCore.html.twig */
class __TwigTemplate_54e79f46a1c14339e852517cd86cbbb0b52669340ad358e458c5f8621c7daccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "VFCoreBundle::layoutCore.html.twig", 3);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'core' => array($this, 'block_core'),
            'demarrage' => array($this, 'block_demarrage'),
            'flash' => array($this, 'block_flash'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'menu_user' => array($this, 'block_menu_user'),
            'menu_proprietaire' => array($this, 'block_menu_proprietaire'),
            'menu_reservation' => array($this, 'block_menu_reservation'),
            'menu_personne' => array($this, 'block_menu_personne'),
            'menu_blog' => array($this, 'block_menu_blog'),
            'menu_voyager' => array($this, 'block_menu_voyager'),
            'menu_habiter' => array($this, 'block_menu_habiter'),
            'principal' => array($this, 'block_principal'),
            'recherche' => array($this, 'block_recherche'),
            'reservation' => array($this, 'block_reservation'),
            'personne' => array($this, 'block_personne'),
            'proprietaire' => array($this, 'block_proprietaire'),
            'booking' => array($this, 'block_booking'),
            'voyager' => array($this, 'block_voyager'),
            'habiter' => array($this, 'block_habiter'),
            'crotoy' => array($this, 'block_crotoy'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "  <header class = \"row\">
        <div id=\"header\" class=\"jumbotron\">
            <div class=\"row\">
\t\t\t  <section>
                <div class = \"col-lg-2\">
                <img src=\"http://localhost/Crotoy/web/images/roseau.JPG\" alt=\"roseau\" width=\"100\" height=\"80\">
\t            <div>
\t\t      </section>
\t\t\t  <section>
\t            <div class = \"col-lg-8 col-lg-offset-1\">
                    <h1>La maison du Crotoy</h1>
\t            </div>
\t\t\t  </section>
\t        </div>
            <div>
                ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 25
            echo "\t\t\t\t    <ul>
                        <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
\t\t\t\t\t    <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Mot de passe oublié ?</a></li>
\t\t\t\t\t</ul>
                ";
        }
        // line 30
        echo "            </div>
\t\t\t
\t    </div>
    </header>
  ";
    }

    // line 39
    public function block_core($context, array $blocks = array())
    {
        // line 40
        echo "     <div class=\"navbar navbar-default\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        echo "\">Accueil</a></li>
\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("vf_blog_accueil");
        echo "\">Blog</a></li>
        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_photos");
        echo "\">Photos</a></li>
        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
        echo "\">Réservation</a></li>
\t\t<li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("vf_personne_recherche");
        echo "\">Personnes</a></li>
\t\t<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("vf_voyager_menu");
        echo "\">Voyager</a></li>
\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("vf_habiter_accueil");
        echo "\">Habiter</a></li>
\t\t<li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mon compte utilisateur</a></li>
\t\t ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_PROPRIETAIRE")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("vf_proprietaire_accueil");
            echo "\">Propriétaire</a></li>";
        }
        // line 51
        echo "\t\t 
      </ul>
\t </div>
    ";
    }

    // line 56
    public function block_demarrage($context, array $blocks = array())
    {
        // line 57
        echo "          <p><img src=\"http://localhost/Crotoy/web/images/baie_bleue.JPG\" alt=\"baie_bleue\" width=\"1100\" height=\"500\"></p>
\t";
    }

    // line 62
    public function block_flash($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "           <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "           <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo " ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "\t<div class=\"row\">
\t<div class=\"col-sm-2\">
\t";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
\t\t";
            // line 77
            $this->displayBlock('menu', $context, $blocks);
            // line 89
            echo "\t";
        }
        // line 90
        echo "    </div>
\t
\t
\t
\t<div class=\"col-sm-9 col-sm-offset-1\">
\t";
        // line 95
        $this->displayBlock('principal', $context, $blocks);
        // line 114
        echo "      

";
    }

    // line 77
    public function block_menu($context, array $blocks = array())
    {
        echo " 
\t\t\t<aside>
\t\t\t\t\t";
        // line 80
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_user', $context, $blocks);
        // line 81
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_proprietaire', $context, $blocks);
        // line 82
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_reservation', $context, $blocks);
        // line 83
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_personne', $context, $blocks);
        // line 84
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_blog', $context, $blocks);
        // line 85
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_voyager', $context, $blocks);
        // line 86
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_habiter', $context, $blocks);
        // line 87
        echo "\t\t\t</aside>
\t\t";
    }

    // line 80
    public function block_menu_user($context, array $blocks = array())
    {
    }

    // line 81
    public function block_menu_proprietaire($context, array $blocks = array())
    {
    }

    // line 82
    public function block_menu_reservation($context, array $blocks = array())
    {
    }

    // line 83
    public function block_menu_personne($context, array $blocks = array())
    {
    }

    // line 84
    public function block_menu_blog($context, array $blocks = array())
    {
    }

    // line 85
    public function block_menu_voyager($context, array $blocks = array())
    {
    }

    // line 86
    public function block_menu_habiter($context, array $blocks = array())
    {
        echo " ";
    }

    // line 95
    public function block_principal($context, array $blocks = array())
    {
        // line 96
        echo "\t\t
\t\t ";
        // line 97
        $this->displayBlock('recherche', $context, $blocks);
        // line 98
        echo "\t\t ";
        $this->displayBlock('reservation', $context, $blocks);
        // line 99
        echo "\t\t ";
        $this->displayBlock('personne', $context, $blocks);
        // line 100
        echo "\t\t ";
        $this->displayBlock('proprietaire', $context, $blocks);
        // line 101
        echo "\t\t ";
        $this->displayBlock('booking', $context, $blocks);
        // line 102
        echo "\t\t ";
        $this->displayBlock('voyager', $context, $blocks);
        // line 103
        echo "\t\t ";
        $this->displayBlock('habiter', $context, $blocks);
        // line 104
        echo "\t\t 
\t\t ";
        // line 105
        $this->displayBlock('crotoy', $context, $blocks);
        // line 113
        echo "\t</div>
\t";
    }

    // line 97
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 98
    public function block_reservation($context, array $blocks = array())
    {
    }

    // line 99
    public function block_personne($context, array $blocks = array())
    {
    }

    // line 100
    public function block_proprietaire($context, array $blocks = array())
    {
    }

    // line 101
    public function block_booking($context, array $blocks = array())
    {
    }

    // line 102
    public function block_voyager($context, array $blocks = array())
    {
    }

    // line 103
    public function block_habiter($context, array $blocks = array())
    {
    }

    // line 105
    public function block_crotoy($context, array $blocks = array())
    {
        // line 106
        echo "\t\t\t ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 107
            echo "\t\t\t\t <section class = \"col-lg-10\">
\t\t\t\t   <h2>Bienvenue dans la maison du Crotoy !</h2>
\t\t\t\t<p><img src=\"http://localhost/Crotoy/web/images/vue_aerienne.JPG\" alt=\"vue_aérienne_20.11\" width=\"600\" height=\"480\"></p>
\t\t\t\t </section>
\t\t   ";
        }
        // line 112
        echo "\t\t ";
    }

    // line 118
    public function block_footer($context, array $blocks = array())
    {
        // line 119
        echo " <footer class = \"row\">
   <div class = \"col-lg-12\">
    ";
        // line 121
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
        <p>A bientôt! </p>  
    ";
        } else {
            // line 124
            echo "    ";
        }
        // line 125
        echo "   </div>
 </footer>

";
    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 131,  411 => 130,  404 => 125,  401 => 124,  395 => 121,  391 => 119,  388 => 118,  384 => 112,  377 => 107,  374 => 106,  371 => 105,  366 => 103,  361 => 102,  356 => 101,  351 => 100,  346 => 99,  341 => 98,  336 => 97,  331 => 113,  329 => 105,  326 => 104,  323 => 103,  320 => 102,  317 => 101,  314 => 100,  311 => 99,  308 => 98,  306 => 97,  303 => 96,  300 => 95,  294 => 86,  289 => 85,  284 => 84,  279 => 83,  274 => 82,  269 => 81,  264 => 80,  259 => 87,  256 => 86,  253 => 85,  250 => 84,  247 => 83,  244 => 82,  241 => 81,  238 => 80,  232 => 77,  226 => 114,  224 => 95,  217 => 90,  214 => 89,  212 => 77,  208 => 76,  204 => 74,  201 => 73,  197 => 70,  188 => 68,  183 => 67,  174 => 65,  169 => 64,  167 => 63,  164 => 62,  159 => 57,  156 => 56,  149 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  107 => 40,  104 => 39,  96 => 30,  90 => 27,  86 => 26,  83 => 25,  78 => 23,  73 => 22,  71 => 21,  54 => 6,  51 => 5,  11 => 3,);
    }
}
/* {# src/VF/CoreBundle/Resources/views/layoutCore.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/*   {% block header %}*/
/*   <header class = "row">*/
/*         <div id="header" class="jumbotron">*/
/*             <div class="row">*/
/* 			  <section>*/
/*                 <div class = "col-lg-2">*/
/*                 <img src="http://localhost/Crotoy/web/images/roseau.JPG" alt="roseau" width="100" height="80">*/
/* 	            <div>*/
/* 		      </section>*/
/* 			  <section>*/
/* 	            <div class = "col-lg-8 col-lg-offset-1">*/
/*                     <h1>La maison du Crotoy</h1>*/
/* 	            </div>*/
/* 			  </section>*/
/* 	        </div>*/
/*             <div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     Connecté en tant que {{ app.user.username }}*/
/*                     <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*                 {% else %}*/
/* 				    <ul>*/
/*                         <li><a href="{{ path('fos_user_security_login') }}">Connexion</a></li>*/
/* 					    <li><a href="{{ path('fos_user_resetting_request') }}">Mot de passe oublié ?</a></li>*/
/* 					</ul>*/
/*                 {% endif %}*/
/*             </div>*/
/* 			*/
/* 	    </div>*/
/*     </header>*/
/*   {% endblock %}*/
/* */
/* */
/*  */
/* */
/*     {% block core %}*/
/*      <div class="navbar navbar-default">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="{{ path('vf_crotoy_accueil') }}">Accueil</a></li>*/
/* 		<li><a href="{{ path('vf_blog_accueil') }}">Blog</a></li>*/
/*         <li><a href="{{ path('vf_crotoy_photos') }}">Photos</a></li>*/
/*         <li><a href="{{ path('vf_reservation_recherche') }}">Réservation</a></li>*/
/* 		<li><a href="{{ path('vf_personne_recherche') }}">Personnes</a></li>*/
/* 		<li><a href="{{ path('vf_voyager_menu') }}">Voyager</a></li>*/
/* 		<li><a href="{{ path('vf_habiter_accueil') }}">Habiter</a></li>*/
/* 		<li><a href="{{ path('fos_user_profile_show') }}">Mon compte utilisateur</a></li>*/
/* 		 {% if is_granted("ROLE_PROPRIETAIRE") %}<li><a href="{{ path('vf_proprietaire_accueil') }}">Propriétaire</a></li>{% endif %}*/
/* 		 */
/*       </ul>*/
/* 	 </div>*/
/*     {% endblock %}*/
/*     */
/* 	   {% block demarrage %}*/
/*           <p><img src="http://localhost/Crotoy/web/images/baie_bleue.JPG" alt="baie_bleue" width="1100" height="500"></p>*/
/* 	{% endblock %}*/
/* */
/* */
/* */
/*  {% block flash %}*/
/*     {# On affiche tous les messages flash dont le nom est « info » #}*/
/*         {% for message in app.session.flashbag.get('info') %}*/
/*            <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*         {% endfor %}*/
/* 		{% for message in app.session.flashbag.get('notice') %}*/
/*            <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*         {% endfor %}*/
/*  {% endblock %}*/
/* */
/*  */
/*  {% block body %}*/
/* 	<div class="row">*/
/* 	<div class="col-sm-2">*/
/* 	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}  */
/* 		{% block menu %} */
/* 			<aside>*/
/* 					{# {{ render(controller("VFCrotoyBundle:Crotoy:menu")) }}   #}*/
/* 					{% block menu_user %}{% endblock %}*/
/* 					{% block menu_proprietaire %}{% endblock %}*/
/* 					{% block menu_reservation %}{% endblock %}*/
/* 					{% block menu_personne %}{% endblock %}*/
/* 					{% block menu_blog %}{% endblock %}*/
/* 					{% block menu_voyager %}{% endblock %}*/
/* 					{% block menu_habiter %} {% endblock %}*/
/* 			</aside>*/
/* 		{% endblock %}*/
/* 	{% endif %}*/
/*     </div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	<div class="col-sm-9 col-sm-offset-1">*/
/* 	{% block principal %}*/
/* 		*/
/* 		 {% block recherche %}{% endblock %}*/
/* 		 {% block reservation %}{% endblock %}*/
/* 		 {% block personne %}{% endblock %}*/
/* 		 {% block proprietaire %}{% endblock %}*/
/* 		 {% block booking %}{% endblock %}*/
/* 		 {% block voyager %}{% endblock %}*/
/* 		 {% block habiter %}{% endblock %}*/
/* 		 */
/* 		 {% block crotoy %}*/
/* 			 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 				 <section class = "col-lg-10">*/
/* 				   <h2>Bienvenue dans la maison du Crotoy !</h2>*/
/* 				<p><img src="http://localhost/Crotoy/web/images/vue_aerienne.JPG" alt="vue_aérienne_20.11" width="600" height="480"></p>*/
/* 				 </section>*/
/* 		   {% endif %}*/
/* 		 {% endblock %}*/
/* 	</div>*/
/* 	{% endblock %}      */
/* */
/* {% endblock %} */
/* */
/* {% block footer %}*/
/*  <footer class = "row">*/
/*    <div class = "col-lg-12">*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %} */
/*         <p>A bientôt! </p>  */
/*     {% else %}*/
/*     {% endif %}*/
/*    </div>*/
/*  </footer>*/
/* */
/* {% endblock %} */
/* */
/* {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* */
