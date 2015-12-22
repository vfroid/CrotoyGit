<?php

/* VFCrotoyBundle:Personne:locataires.html.twig */
class __TwigTemplate_6ee5c03e0d30e33dbd10bb991c67f99e7d70e488fa75eda61493d64a9c735525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'locataires' => array($this, 'block_locataires'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_153644a493070aa002a928f403d7541bedff0f008c70537f452ecda80ea247ef = $this->env->getExtension("native_profiler");
        $__internal_153644a493070aa002a928f403d7541bedff0f008c70537f452ecda80ea247ef->enter($__internal_153644a493070aa002a928f403d7541bedff0f008c70537f452ecda80ea247ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Personne:locataires.html.twig"));

        // line 2
        echo "



";
        // line 6
        $this->displayBlock('locataires', $context, $blocks);
        // line 28
        echo "
";
        
        $__internal_153644a493070aa002a928f403d7541bedff0f008c70537f452ecda80ea247ef->leave($__internal_153644a493070aa002a928f403d7541bedff0f008c70537f452ecda80ea247ef_prof);

    }

    // line 6
    public function block_locataires($context, array $blocks = array())
    {
        $__internal_ff4c85c772bfdb9f285acb21dcb8cc196f2d72fc400a84c57aaffc31b000db91 = $this->env->getExtension("native_profiler");
        $__internal_ff4c85c772bfdb9f285acb21dcb8cc196f2d72fc400a84c57aaffc31b000db91->enter($__internal_ff4c85c772bfdb9f285acb21dcb8cc196f2d72fc400a84c57aaffc31b000db91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "locataires"));

        // line 7
        echo "<section>
\t            <table class=\"table table-bordered table-striped table-condensed\">
\t            <caption>Liste des personnes enregistrées</caption>
\t\t\t\t\t<tr>
\t\t\t\t\t<th>n°</th>
\t\t\t\t\t<th>Nom et prénom</th>
\t\t\t\t\t<th>Courriel</th>
\t\t\t\t\t</tr>
 
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["toutes"]) ? $context["toutes"] : $this->getContext($context, "toutes")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prenom", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "courriel", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t</table>
</section>
    
\t<div><a class=\"btn btn-info\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        echo "\">Retour</a> </div>
";
        
        $__internal_ff4c85c772bfdb9f285acb21dcb8cc196f2d72fc400a84c57aaffc31b000db91->leave($__internal_ff4c85c772bfdb9f285acb21dcb8cc196f2d72fc400a84c57aaffc31b000db91_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Personne:locataires.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  82 => 23,  73 => 20,  67 => 19,  63 => 18,  60 => 17,  56 => 16,  45 => 7,  39 => 6,  31 => 28,  29 => 6,  23 => 2,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Personne/locataires.html.twig #}*/
/* */
/* */
/* */
/* */
/* {% block locataires %}*/
/* <section>*/
/* 	            <table class="table table-bordered table-striped table-condensed">*/
/* 	            <caption>Liste des personnes enregistrées</caption>*/
/* 					<tr>*/
/* 					<th>n°</th>*/
/* 					<th>Nom et prénom</th>*/
/* 					<th>Courriel</th>*/
/* 					</tr>*/
/*  */
/* 					{% for p in toutes %}*/
/* 						<tr>*/
/* 						<td>{{ p.id }}</td>*/
/* 						<td>{{ p.prenom  }}  {{ p.nom  }}</td>*/
/* 						<td>{{ p.courriel }}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 					</table>*/
/* </section>*/
/*     */
/* 	<div><a class="btn btn-info" href="{{ path('vf_crotoy_accueil') }}">Retour</a> </div>*/
/* {% endblock %}*/
/* */
/* */
