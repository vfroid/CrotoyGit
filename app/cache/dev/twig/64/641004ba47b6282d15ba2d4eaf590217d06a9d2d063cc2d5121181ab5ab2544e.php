<?php

/* VFCrotoyBundle::layoutProprietaire.html.twig */
class __TwigTemplate_79e4537cd224fc44c4ab3e52a8164b8daefeac548d6901364c99e15e61e25071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFCrotoyBundle::layoutProprietaire.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'menu_proprietaire' => array($this, 'block_menu_proprietaire'),
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
        $__internal_f9eef8d89d03416b41b2808653b3e3d9f3012acaf5426ceb79c3a7bf1881a032 = $this->env->getExtension("native_profiler");
        $__internal_f9eef8d89d03416b41b2808653b3e3d9f3012acaf5426ceb79c3a7bf1881a032->enter($__internal_f9eef8d89d03416b41b2808653b3e3d9f3012acaf5426ceb79c3a7bf1881a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle::layoutProprietaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9eef8d89d03416b41b2808653b3e3d9f3012acaf5426ceb79c3a7bf1881a032->leave($__internal_f9eef8d89d03416b41b2808653b3e3d9f3012acaf5426ceb79c3a7bf1881a032_prof);

    }

    // line 6
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_cb40d89f6a14c9d70db0e9a2caebae1ae267244be4ccf0d19581298d60fa83f2 = $this->env->getExtension("native_profiler");
        $__internal_cb40d89f6a14c9d70db0e9a2caebae1ae267244be4ccf0d19581298d60fa83f2->enter($__internal_cb40d89f6a14c9d70db0e9a2caebae1ae267244be4ccf0d19581298d60fa83f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_cb40d89f6a14c9d70db0e9a2caebae1ae267244be4ccf0d19581298d60fa83f2->leave($__internal_cb40d89f6a14c9d70db0e9a2caebae1ae267244be4ccf0d19581298d60fa83f2_prof);

    }

    // line 9
    public function block_menu_proprietaire($context, array $blocks = array())
    {
        $__internal_b3b6c4a35ba13e7be0bdf96a4dc4bbbb292f4772964fe333f126f7329ff227a1 = $this->env->getExtension("native_profiler");
        $__internal_b3b6c4a35ba13e7be0bdf96a4dc4bbbb292f4772964fe333f126f7329ff227a1->enter($__internal_b3b6c4a35ba13e7be0bdf96a4dc4bbbb292f4772964fe333f126f7329ff227a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_proprietaire"));

        echo " 
\t";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_PROPRIETAIRE")) {
            // line 11
            echo "\t  <p>Propriétaire</p>
\t<ul>
\t\t<li><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("vf_proprietaire_accueil");
            echo "\" target=\"_blank\">Explications</a></li>
        <li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("vf_proprietaire_recherche");
            echo "\" target=\"_blank\">Réserver un séjour pour un invité</a></li>
      </ul>
    ";
        }
        // line 17
        echo " ";
        
        $__internal_b3b6c4a35ba13e7be0bdf96a4dc4bbbb292f4772964fe333f126f7329ff227a1->leave($__internal_b3b6c4a35ba13e7be0bdf96a4dc4bbbb292f4772964fe333f126f7329ff227a1_prof);

    }

    // line 22
    public function block_proprietaire($context, array $blocks = array())
    {
        $__internal_af480cd42f2116aa0dd7adfa084e66c7efbaaa82ca8c655bc2ef7b53832d9c08 = $this->env->getExtension("native_profiler");
        $__internal_af480cd42f2116aa0dd7adfa084e66c7efbaaa82ca8c655bc2ef7b53832d9c08->enter($__internal_af480cd42f2116aa0dd7adfa084e66c7efbaaa82ca8c655bc2ef7b53832d9c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proprietaire"));

        echo "  
\t                ";
        // line 23
        $this->displayBlock('locataires', $context, $blocks);
        // line 24
        echo "\t\t\t\t\t";
        $this->displayBlock('toutes', $context, $blocks);
        echo " 
\t                ";
        // line 25
        $this->displayBlock('ajouter', $context, $blocks);
        echo " 
\t\t\t\t\t";
        // line 26
        $this->displayBlock('voir', $context, $blocks);
        echo "   
\t\t\t\t\t";
        // line 27
        $this->displayBlock('editer', $context, $blocks);
        echo " 
\t\t\t\t\t";
        // line 28
        $this->displayBlock('delete', $context, $blocks);
        echo " 

  
  ";
        
        $__internal_af480cd42f2116aa0dd7adfa084e66c7efbaaa82ca8c655bc2ef7b53832d9c08->leave($__internal_af480cd42f2116aa0dd7adfa084e66c7efbaaa82ca8c655bc2ef7b53832d9c08_prof);

    }

    // line 23
    public function block_locataires($context, array $blocks = array())
    {
        $__internal_390772ca2a1e7a45db2641cfc202f68118b18534ccd9a543ed27ede0fd21ec9c = $this->env->getExtension("native_profiler");
        $__internal_390772ca2a1e7a45db2641cfc202f68118b18534ccd9a543ed27ede0fd21ec9c->enter($__internal_390772ca2a1e7a45db2641cfc202f68118b18534ccd9a543ed27ede0fd21ec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "locataires"));

        
        $__internal_390772ca2a1e7a45db2641cfc202f68118b18534ccd9a543ed27ede0fd21ec9c->leave($__internal_390772ca2a1e7a45db2641cfc202f68118b18534ccd9a543ed27ede0fd21ec9c_prof);

    }

    // line 24
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_8136002fa0e4c0276f0f1e412454af837748bcdd4c1a44f8571dad314b23b91c = $this->env->getExtension("native_profiler");
        $__internal_8136002fa0e4c0276f0f1e412454af837748bcdd4c1a44f8571dad314b23b91c->enter($__internal_8136002fa0e4c0276f0f1e412454af837748bcdd4c1a44f8571dad314b23b91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        
        $__internal_8136002fa0e4c0276f0f1e412454af837748bcdd4c1a44f8571dad314b23b91c->leave($__internal_8136002fa0e4c0276f0f1e412454af837748bcdd4c1a44f8571dad314b23b91c_prof);

    }

    // line 25
    public function block_ajouter($context, array $blocks = array())
    {
        $__internal_4d827b57074c1708b3ff1605b2a7e603e1961c9a9e2a5958fcebe629b953ba5d = $this->env->getExtension("native_profiler");
        $__internal_4d827b57074c1708b3ff1605b2a7e603e1961c9a9e2a5958fcebe629b953ba5d->enter($__internal_4d827b57074c1708b3ff1605b2a7e603e1961c9a9e2a5958fcebe629b953ba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ajouter"));

        
        $__internal_4d827b57074c1708b3ff1605b2a7e603e1961c9a9e2a5958fcebe629b953ba5d->leave($__internal_4d827b57074c1708b3ff1605b2a7e603e1961c9a9e2a5958fcebe629b953ba5d_prof);

    }

    // line 26
    public function block_voir($context, array $blocks = array())
    {
        $__internal_b6bed562fbfd513be62133973b5a80c11eba32c8342258e824954f70a8e0f8f8 = $this->env->getExtension("native_profiler");
        $__internal_b6bed562fbfd513be62133973b5a80c11eba32c8342258e824954f70a8e0f8f8->enter($__internal_b6bed562fbfd513be62133973b5a80c11eba32c8342258e824954f70a8e0f8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "voir"));

        
        $__internal_b6bed562fbfd513be62133973b5a80c11eba32c8342258e824954f70a8e0f8f8->leave($__internal_b6bed562fbfd513be62133973b5a80c11eba32c8342258e824954f70a8e0f8f8_prof);

    }

    // line 27
    public function block_editer($context, array $blocks = array())
    {
        $__internal_0a8cf2cb8bec19b86c34752c7c4ae4029a5610d35eeee26cd35b7778b4b0e881 = $this->env->getExtension("native_profiler");
        $__internal_0a8cf2cb8bec19b86c34752c7c4ae4029a5610d35eeee26cd35b7778b4b0e881->enter($__internal_0a8cf2cb8bec19b86c34752c7c4ae4029a5610d35eeee26cd35b7778b4b0e881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editer"));

        
        $__internal_0a8cf2cb8bec19b86c34752c7c4ae4029a5610d35eeee26cd35b7778b4b0e881->leave($__internal_0a8cf2cb8bec19b86c34752c7c4ae4029a5610d35eeee26cd35b7778b4b0e881_prof);

    }

    // line 28
    public function block_delete($context, array $blocks = array())
    {
        $__internal_cfe4c0ce961935cecd0817b690be0c410e9893e444f083b497671d7e419eb81e = $this->env->getExtension("native_profiler");
        $__internal_cfe4c0ce961935cecd0817b690be0c410e9893e444f083b497671d7e419eb81e->enter($__internal_cfe4c0ce961935cecd0817b690be0c410e9893e444f083b497671d7e419eb81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete"));

        
        $__internal_cfe4c0ce961935cecd0817b690be0c410e9893e444f083b497671d7e419eb81e->leave($__internal_cfe4c0ce961935cecd0817b690be0c410e9893e444f083b497671d7e419eb81e_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle::layoutProprietaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 28,  167 => 27,  156 => 26,  145 => 25,  134 => 24,  123 => 23,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  95 => 24,  93 => 23,  85 => 22,  78 => 17,  72 => 14,  68 => 13,  64 => 11,  62 => 10,  54 => 9,  42 => 6,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/layoutProprietaire.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/*       */
/* */
/*  {% block crotoy %} {% endblock %} */
/* */
/* */
/*  {% block menu_proprietaire %} */
/* 	{% if is_granted('ROLE_PROPRIETAIRE') %}*/
/* 	  <p>Propriétaire</p>*/
/* 	<ul>*/
/* 		<li><a href="{{ path('vf_proprietaire_accueil') }}" target="_blank">Explications</a></li>*/
/*         <li><a href="{{ path('vf_proprietaire_recherche') }}" target="_blank">Réserver un séjour pour un invité</a></li>*/
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
