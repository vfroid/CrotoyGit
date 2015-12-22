<?php

/* VFCrotoyBundle:Habiter:internet.html.twig */
class __TwigTemplate_dbe9657a175ea1f472baaa9a96f1b49e08db11f2f8a1178a6a0adce5d177f8ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutHabiter.html.twig ", "VFCrotoyBundle:Habiter:internet.html.twig", 1);
        $this->blocks = array(
            'menu_user' => array($this, 'block_menu_user'),
            'menu_reservation' => array($this, 'block_menu_reservation'),
            'menu_personne' => array($this, 'block_menu_personne'),
            'principal' => array($this, 'block_principal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutHabiter.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56aa7b013ef246feda44afb056eb43addc85b1c58347bdafa30b42d065acdcb = $this->env->getExtension("native_profiler");
        $__internal_c56aa7b013ef246feda44afb056eb43addc85b1c58347bdafa30b42d065acdcb->enter($__internal_c56aa7b013ef246feda44afb056eb43addc85b1c58347bdafa30b42d065acdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Habiter:internet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56aa7b013ef246feda44afb056eb43addc85b1c58347bdafa30b42d065acdcb->leave($__internal_c56aa7b013ef246feda44afb056eb43addc85b1c58347bdafa30b42d065acdcb_prof);

    }

    // line 4
    public function block_menu_user($context, array $blocks = array())
    {
        $__internal_10e1c04ef6f444559106974322598553103ba4ae4da1a57a64be9b1bbef5b8c7 = $this->env->getExtension("native_profiler");
        $__internal_10e1c04ef6f444559106974322598553103ba4ae4da1a57a64be9b1bbef5b8c7->enter($__internal_10e1c04ef6f444559106974322598553103ba4ae4da1a57a64be9b1bbef5b8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_user"));

        
        $__internal_10e1c04ef6f444559106974322598553103ba4ae4da1a57a64be9b1bbef5b8c7->leave($__internal_10e1c04ef6f444559106974322598553103ba4ae4da1a57a64be9b1bbef5b8c7_prof);

    }

    // line 9
    public function block_menu_reservation($context, array $blocks = array())
    {
        $__internal_a574153f4159767cc2809fd496fbdd7c4ccb0fcf22c4630fed59ae08ed12c6d0 = $this->env->getExtension("native_profiler");
        $__internal_a574153f4159767cc2809fd496fbdd7c4ccb0fcf22c4630fed59ae08ed12c6d0->enter($__internal_a574153f4159767cc2809fd496fbdd7c4ccb0fcf22c4630fed59ae08ed12c6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reservation"));

        
        $__internal_a574153f4159767cc2809fd496fbdd7c4ccb0fcf22c4630fed59ae08ed12c6d0->leave($__internal_a574153f4159767cc2809fd496fbdd7c4ccb0fcf22c4630fed59ae08ed12c6d0_prof);

    }

    // line 10
    public function block_menu_personne($context, array $blocks = array())
    {
        $__internal_181c931357aa4adafe3865771ed7a6cd55782fbfb2e596b85d69673ff7638982 = $this->env->getExtension("native_profiler");
        $__internal_181c931357aa4adafe3865771ed7a6cd55782fbfb2e596b85d69673ff7638982->enter($__internal_181c931357aa4adafe3865771ed7a6cd55782fbfb2e596b85d69673ff7638982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_personne"));

        
        $__internal_181c931357aa4adafe3865771ed7a6cd55782fbfb2e596b85d69673ff7638982->leave($__internal_181c931357aa4adafe3865771ed7a6cd55782fbfb2e596b85d69673ff7638982_prof);

    }

    // line 13
    public function block_principal($context, array $blocks = array())
    {
        $__internal_3b26c872e2186dbc650fbb2bcf47d297c3209d11bafcf5695da19df4123c55ac = $this->env->getExtension("native_profiler");
        $__internal_3b26c872e2186dbc650fbb2bcf47d297c3209d11bafcf5695da19df4123c55ac->enter($__internal_3b26c872e2186dbc650fbb2bcf47d297c3209d11bafcf5695da19df4123c55ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        // line 14
        echo "
\t<div> 
\t\t<h2>Internet, TV, téléphone</h2>
\t\t</br>
\t\t<h3>Internet</h3>
\t\t<p>Le Domino d'Orange, petite boîte noire, sert de routeur WIFI pour l'accès à Internet, avec des forfaits de données chargeables.</p>
\t\t<p>Ceux-ci s'achètent à raison d'1G pour 14 j , à la papèterie du Crotoy: recharge \"Let's Go\" d'Orange à 10 Euros la pièce.</p>
\t\t</br>
\t\t<p>Ceux-ci s'achètent à raison d'1G pour 14 j , à la papèterie du Crotoy: recharge \"Let's Go\" d'Orange à 10 Euros la pièce.</p>
\t\t</br>
\t\t<h3>TV</h3>
\t\t<p>On peut regarder des DVD, mais pas la TV</p>
\t\t
\t\t</br>
\t\t<p> mettre ici de quoi renseigner sur l'utilisation de Domino et les recharges internet, etc</p>
\t</div>


";
        
        $__internal_3b26c872e2186dbc650fbb2bcf47d297c3209d11bafcf5695da19df4123c55ac->leave($__internal_3b26c872e2186dbc650fbb2bcf47d297c3209d11bafcf5695da19df4123c55ac_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Habiter:internet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  70 => 13,  59 => 10,  48 => 9,  37 => 4,  11 => 1,);
    }
}
/* {% extends "VFCrotoyBundle::layoutHabiter.html.twig "%}*/
/* */
/* */
/* {% block menu_user %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block menu_reservation %}{% endblock %}*/
/* {% block menu_personne %}{% endblock %}*/
/* */
/* */
/* {% block principal %}*/
/* */
/* 	<div> */
/* 		<h2>Internet, TV, téléphone</h2>*/
/* 		</br>*/
/* 		<h3>Internet</h3>*/
/* 		<p>Le Domino d'Orange, petite boîte noire, sert de routeur WIFI pour l'accès à Internet, avec des forfaits de données chargeables.</p>*/
/* 		<p>Ceux-ci s'achètent à raison d'1G pour 14 j , à la papèterie du Crotoy: recharge "Let's Go" d'Orange à 10 Euros la pièce.</p>*/
/* 		</br>*/
/* 		<p>Ceux-ci s'achètent à raison d'1G pour 14 j , à la papèterie du Crotoy: recharge "Let's Go" d'Orange à 10 Euros la pièce.</p>*/
/* 		</br>*/
/* 		<h3>TV</h3>*/
/* 		<p>On peut regarder des DVD, mais pas la TV</p>*/
/* 		*/
/* 		</br>*/
/* 		<p> mettre ici de quoi renseigner sur l'utilisation de Domino et les recharges internet, etc</p>*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
