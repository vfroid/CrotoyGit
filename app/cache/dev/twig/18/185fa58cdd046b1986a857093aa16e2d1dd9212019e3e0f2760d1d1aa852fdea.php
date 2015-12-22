<?php

/* VFCrotoyBundle::layoutHabiter.html.twig */
class __TwigTemplate_6651953a87a52a9cb74aed1195b84ae9a17951bd7d876fdaf17d16de4e5dfe16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle::layoutHabiter.html.twig", 3);
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
        $__internal_aa27b4d524958854a1acc2a4965f5d16a25dc7d2301a466fe40a8bfb1b8c1303 = $this->env->getExtension("native_profiler");
        $__internal_aa27b4d524958854a1acc2a4965f5d16a25dc7d2301a466fe40a8bfb1b8c1303->enter($__internal_aa27b4d524958854a1acc2a4965f5d16a25dc7d2301a466fe40a8bfb1b8c1303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle::layoutHabiter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa27b4d524958854a1acc2a4965f5d16a25dc7d2301a466fe40a8bfb1b8c1303->leave($__internal_aa27b4d524958854a1acc2a4965f5d16a25dc7d2301a466fe40a8bfb1b8c1303_prof);

    }

    // line 6
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_eefeec23f4ae759ea3cbfb5d4ac886d4b45fc3d035e363e8b00af00d4969affd = $this->env->getExtension("native_profiler");
        $__internal_eefeec23f4ae759ea3cbfb5d4ac886d4b45fc3d035e363e8b00af00d4969affd->enter($__internal_eefeec23f4ae759ea3cbfb5d4ac886d4b45fc3d035e363e8b00af00d4969affd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_eefeec23f4ae759ea3cbfb5d4ac886d4b45fc3d035e363e8b00af00d4969affd->leave($__internal_eefeec23f4ae759ea3cbfb5d4ac886d4b45fc3d035e363e8b00af00d4969affd_prof);

    }

    // line 9
    public function block_menu_habiter($context, array $blocks = array())
    {
        $__internal_e2ec8ade58b405c787ddf6aaa1658bca63eadfb61a8e17dad352894b07d43c9c = $this->env->getExtension("native_profiler");
        $__internal_e2ec8ade58b405c787ddf6aaa1658bca63eadfb61a8e17dad352894b07d43c9c->enter($__internal_e2ec8ade58b405c787ddf6aaa1658bca63eadfb61a8e17dad352894b07d43c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_habiter"));

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
        
        $__internal_e2ec8ade58b405c787ddf6aaa1658bca63eadfb61a8e17dad352894b07d43c9c->leave($__internal_e2ec8ade58b405c787ddf6aaa1658bca63eadfb61a8e17dad352894b07d43c9c_prof);

    }

    // line 25
    public function block_proprietaire($context, array $blocks = array())
    {
        $__internal_d10fa0ad8b7089aca3a1c6ec87e43fc5eb9c2731bd73fa1d3886ade7d8a37a1a = $this->env->getExtension("native_profiler");
        $__internal_d10fa0ad8b7089aca3a1c6ec87e43fc5eb9c2731bd73fa1d3886ade7d8a37a1a->enter($__internal_d10fa0ad8b7089aca3a1c6ec87e43fc5eb9c2731bd73fa1d3886ade7d8a37a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proprietaire"));

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
        
        $__internal_d10fa0ad8b7089aca3a1c6ec87e43fc5eb9c2731bd73fa1d3886ade7d8a37a1a->leave($__internal_d10fa0ad8b7089aca3a1c6ec87e43fc5eb9c2731bd73fa1d3886ade7d8a37a1a_prof);

    }

    // line 26
    public function block_locataires($context, array $blocks = array())
    {
        $__internal_c1cb044aee86b4023d753785a661f18fffecafb997d7f150a9a19508a27e5d5c = $this->env->getExtension("native_profiler");
        $__internal_c1cb044aee86b4023d753785a661f18fffecafb997d7f150a9a19508a27e5d5c->enter($__internal_c1cb044aee86b4023d753785a661f18fffecafb997d7f150a9a19508a27e5d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "locataires"));

        
        $__internal_c1cb044aee86b4023d753785a661f18fffecafb997d7f150a9a19508a27e5d5c->leave($__internal_c1cb044aee86b4023d753785a661f18fffecafb997d7f150a9a19508a27e5d5c_prof);

    }

    // line 27
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_64e1a2209cf49e2058b50a43a4ff5b61ecb79145ba2516c5e23b1b352ac6c0cc = $this->env->getExtension("native_profiler");
        $__internal_64e1a2209cf49e2058b50a43a4ff5b61ecb79145ba2516c5e23b1b352ac6c0cc->enter($__internal_64e1a2209cf49e2058b50a43a4ff5b61ecb79145ba2516c5e23b1b352ac6c0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        
        $__internal_64e1a2209cf49e2058b50a43a4ff5b61ecb79145ba2516c5e23b1b352ac6c0cc->leave($__internal_64e1a2209cf49e2058b50a43a4ff5b61ecb79145ba2516c5e23b1b352ac6c0cc_prof);

    }

    // line 28
    public function block_ajouter($context, array $blocks = array())
    {
        $__internal_4d7c8b2437e390181626832d400468b7c4ef75f946fb740301da5c2195187848 = $this->env->getExtension("native_profiler");
        $__internal_4d7c8b2437e390181626832d400468b7c4ef75f946fb740301da5c2195187848->enter($__internal_4d7c8b2437e390181626832d400468b7c4ef75f946fb740301da5c2195187848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ajouter"));

        
        $__internal_4d7c8b2437e390181626832d400468b7c4ef75f946fb740301da5c2195187848->leave($__internal_4d7c8b2437e390181626832d400468b7c4ef75f946fb740301da5c2195187848_prof);

    }

    // line 29
    public function block_voir($context, array $blocks = array())
    {
        $__internal_6bc992fac6d1ea1b0e6d6a45eed2b44487fe0eb6d36ea73e310bb53f5346d4c0 = $this->env->getExtension("native_profiler");
        $__internal_6bc992fac6d1ea1b0e6d6a45eed2b44487fe0eb6d36ea73e310bb53f5346d4c0->enter($__internal_6bc992fac6d1ea1b0e6d6a45eed2b44487fe0eb6d36ea73e310bb53f5346d4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "voir"));

        
        $__internal_6bc992fac6d1ea1b0e6d6a45eed2b44487fe0eb6d36ea73e310bb53f5346d4c0->leave($__internal_6bc992fac6d1ea1b0e6d6a45eed2b44487fe0eb6d36ea73e310bb53f5346d4c0_prof);

    }

    // line 30
    public function block_editer($context, array $blocks = array())
    {
        $__internal_f83b0d5096fd3164acbb41c3c44f6ca06d620056abdaa1f36e2a4df476092ea9 = $this->env->getExtension("native_profiler");
        $__internal_f83b0d5096fd3164acbb41c3c44f6ca06d620056abdaa1f36e2a4df476092ea9->enter($__internal_f83b0d5096fd3164acbb41c3c44f6ca06d620056abdaa1f36e2a4df476092ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editer"));

        
        $__internal_f83b0d5096fd3164acbb41c3c44f6ca06d620056abdaa1f36e2a4df476092ea9->leave($__internal_f83b0d5096fd3164acbb41c3c44f6ca06d620056abdaa1f36e2a4df476092ea9_prof);

    }

    // line 31
    public function block_delete($context, array $blocks = array())
    {
        $__internal_9f54cea591211d3e6381ba285c03426147033dfdd3d42bc372c35564d9ab4f36 = $this->env->getExtension("native_profiler");
        $__internal_9f54cea591211d3e6381ba285c03426147033dfdd3d42bc372c35564d9ab4f36->enter($__internal_9f54cea591211d3e6381ba285c03426147033dfdd3d42bc372c35564d9ab4f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete"));

        
        $__internal_9f54cea591211d3e6381ba285c03426147033dfdd3d42bc372c35564d9ab4f36->leave($__internal_9f54cea591211d3e6381ba285c03426147033dfdd3d42bc372c35564d9ab4f36_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle::layoutHabiter.html.twig";
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
