<?php

/* VFCrotoyBundle:Proprietaire:accueil.html.twig */
class __TwigTemplate_87341fd92a22154f0cc338fc388a20ced5ae6cf1404809791754d6353b82d8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutProprietaire.html.twig", "VFCrotoyBundle:Proprietaire:accueil.html.twig", 3);
        $this->blocks = array(
            'proprietaire' => array($this, 'block_proprietaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutProprietaire.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10473b0f829129c2b3ef2553d51af4a92a993660d50d6aa5d8c2e7020642e440 = $this->env->getExtension("native_profiler");
        $__internal_10473b0f829129c2b3ef2553d51af4a92a993660d50d6aa5d8c2e7020642e440->enter($__internal_10473b0f829129c2b3ef2553d51af4a92a993660d50d6aa5d8c2e7020642e440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Proprietaire:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10473b0f829129c2b3ef2553d51af4a92a993660d50d6aa5d8c2e7020642e440->leave($__internal_10473b0f829129c2b3ef2553d51af4a92a993660d50d6aa5d8c2e7020642e440_prof);

    }

    // line 5
    public function block_proprietaire($context, array $blocks = array())
    {
        $__internal_4c65896c3a9991f53766e3107f4d6940b98887777da9d89e56b1abb8946b3d45 = $this->env->getExtension("native_profiler");
        $__internal_4c65896c3a9991f53766e3107f4d6940b98887777da9d89e56b1abb8946b3d45->enter($__internal_4c65896c3a9991f53766e3107f4d6940b98887777da9d89e56b1abb8946b3d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proprietaire"));

        // line 6
        echo "    <h2>Explications</h2>
\t<p>Ce site est consultable par des personnes ayant au moins un des rôles suivants:</p>
\t</br>
\t<ul>
\t  <li><strong>[ROLE_INVITE]</strong> : personne séjournant dans la maison sur invitation des seuls propriétaires</li>
\t  <li><strong>[ROLE_RESERVANT]</strong> : personne pouvant s'octroyer un séjour personnel (ex. Paul, Romain, Marine). Elle dispose aussi des droits du [ROLE_INVITE].</li>
\t  <li><strong>[ROLE_PROPRIETAIRE]</strong> : peut octroyer des séjours à des invités et dispose des droits des autres rôles.</li>
\t</ul>
\t</br>
\t<p>Le menu de gauche donne accès aux actions possibles.</p>
\t</br>
\t<p>Il est adapté au rôle de la personne connectée au site. 
\t   (p.ex. l'action 'Réserver un séjour pour un invité' n'est visible que pour le propriétaire.</p>
\t</br></br>  
\t<p>Par 'Personnes', on entend la liste des individus responsables d'un séjour, enregistrée dans la base de données.</p>
\t<p> Une réservation comporte les coordonnées de la personne responsable, enregistrée, et les dates de début, de fin ainsi que le nombre de personnes adultes ou jeunes prévues pour le séjour.</p>
\t 
\t
\t<div>
\t\t<a class=\"btn btn-info\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        // line 26
        echo "\">Accueil</a> 
\t</div>

\t 
\t
";
        
        $__internal_4c65896c3a9991f53766e3107f4d6940b98887777da9d89e56b1abb8946b3d45->leave($__internal_4c65896c3a9991f53766e3107f4d6940b98887777da9d89e56b1abb8946b3d45_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Proprietaire:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  61 => 25,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Proprietaire/accueil.html.twig #}*/
/* */
/* {% extends "VFCrotoyBundle::layoutProprietaire.html.twig" %}*/
/* */
/* {% block proprietaire %}*/
/*     <h2>Explications</h2>*/
/* 	<p>Ce site est consultable par des personnes ayant au moins un des rôles suivants:</p>*/
/* 	</br>*/
/* 	<ul>*/
/* 	  <li><strong>[ROLE_INVITE]</strong> : personne séjournant dans la maison sur invitation des seuls propriétaires</li>*/
/* 	  <li><strong>[ROLE_RESERVANT]</strong> : personne pouvant s'octroyer un séjour personnel (ex. Paul, Romain, Marine). Elle dispose aussi des droits du [ROLE_INVITE].</li>*/
/* 	  <li><strong>[ROLE_PROPRIETAIRE]</strong> : peut octroyer des séjours à des invités et dispose des droits des autres rôles.</li>*/
/* 	</ul>*/
/* 	</br>*/
/* 	<p>Le menu de gauche donne accès aux actions possibles.</p>*/
/* 	</br>*/
/* 	<p>Il est adapté au rôle de la personne connectée au site. */
/* 	   (p.ex. l'action 'Réserver un séjour pour un invité' n'est visible que pour le propriétaire.</p>*/
/* 	</br></br>  */
/* 	<p>Par 'Personnes', on entend la liste des individus responsables d'un séjour, enregistrée dans la base de données.</p>*/
/* 	<p> Une réservation comporte les coordonnées de la personne responsable, enregistrée, et les dates de début, de fin ainsi que le nombre de personnes adultes ou jeunes prévues pour le séjour.</p>*/
/* 	 */
/* 	*/
/* 	<div>*/
/* 		<a class="btn btn-info" href="{{ path('vf_crotoy_accueil'*/
/* 		) }}">Accueil</a> */
/* 	</div>*/
/* */
/* 	 */
/* 	*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
