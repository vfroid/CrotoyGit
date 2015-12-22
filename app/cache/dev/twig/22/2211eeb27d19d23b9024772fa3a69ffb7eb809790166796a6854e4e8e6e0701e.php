<?php

/* VFCrotoyBundle:Reservation:toutes.html.twig */
class __TwigTemplate_9312cd0130c656e43a36f49103fb49d99d88ab8372e554fc61fa80543eca7124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'reservation' => array($this, 'block_reservation'),
            'toutes' => array($this, 'block_toutes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5714acfe520be171074f62dca6770ddd11099dad0df57c053478ebdf5351af1 = $this->env->getExtension("native_profiler");
        $__internal_f5714acfe520be171074f62dca6770ddd11099dad0df57c053478ebdf5351af1->enter($__internal_f5714acfe520be171074f62dca6770ddd11099dad0df57c053478ebdf5351af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Reservation:toutes.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        $this->displayBlock('reservation', $context, $blocks);
        
        $__internal_f5714acfe520be171074f62dca6770ddd11099dad0df57c053478ebdf5351af1->leave($__internal_f5714acfe520be171074f62dca6770ddd11099dad0df57c053478ebdf5351af1_prof);

    }

    public function block_reservation($context, array $blocks = array())
    {
        $__internal_d8be12380093f123f2554c745e75900bc22c9495204d58a56a12d53427bdfead = $this->env->getExtension("native_profiler");
        $__internal_d8be12380093f123f2554c745e75900bc22c9495204d58a56a12d53427bdfead->enter($__internal_d8be12380093f123f2554c745e75900bc22c9495204d58a56a12d53427bdfead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo "  

";
        // line 5
        $this->displayBlock('toutes', $context, $blocks);
        // line 36
        echo "
";
        
        $__internal_d8be12380093f123f2554c745e75900bc22c9495204d58a56a12d53427bdfead->leave($__internal_d8be12380093f123f2554c745e75900bc22c9495204d58a56a12d53427bdfead_prof);

    }

    // line 5
    public function block_toutes($context, array $blocks = array())
    {
        $__internal_fbd1a382a6501651ffd55045c52c3662c686de5aee3e12b3483d250550f0f81f = $this->env->getExtension("native_profiler");
        $__internal_fbd1a382a6501651ffd55045c52c3662c686de5aee3e12b3483d250550f0f81f->enter($__internal_fbd1a382a6501651ffd55045c52c3662c686de5aee3e12b3483d250550f0f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toutes"));

        // line 6
        echo "<section>
\t            <table class=\"table table-bordered table-striped table-condensed\">
\t            <caption>Liste des réservations enregistrées</caption>
\t\t\t\t\t<tr>
\t\t\t\t\t<th>n°</th>
\t\t\t\t\t<th>Locataire</th>
\t\t\t\t\t<th>Début</th>
\t\t\t\t\t<th>Fin</th>
\t\t\t\t\t<th>Adultes</th>
\t\t\t\t\t<th>Jeunes</th>
\t\t\t\t\t</tr>
 
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["toutes"]) ? $context["toutes"] : $this->getContext($context, "toutes")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 19
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "personne", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "personne", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "debut", array()), "d.m.Y"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "fin", array()), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nadulte", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "njeunes", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t</table>
\t\t<div>
\t\t<a class=\"btn btn-info\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        // line 31
        echo "\">Retour</a> 
\t</div>
</section>
    
";
        
        $__internal_fbd1a382a6501651ffd55045c52c3662c686de5aee3e12b3483d250550f0f81f->leave($__internal_fbd1a382a6501651ffd55045c52c3662c686de5aee3e12b3483d250550f0f81f_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Reservation:toutes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  114 => 30,  110 => 28,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  83 => 21,  79 => 20,  76 => 19,  72 => 18,  58 => 6,  52 => 5,  44 => 36,  42 => 5,  27 => 3,  24 => 2,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Reservation/toutes.html.twig #}*/
/* */
/*   {% block reservation %}  */
/* */
/* {% block toutes %}*/
/* <section>*/
/* 	            <table class="table table-bordered table-striped table-condensed">*/
/* 	            <caption>Liste des réservations enregistrées</caption>*/
/* 					<tr>*/
/* 					<th>n°</th>*/
/* 					<th>Locataire</th>*/
/* 					<th>Début</th>*/
/* 					<th>Fin</th>*/
/* 					<th>Adultes</th>*/
/* 					<th>Jeunes</th>*/
/* 					</tr>*/
/*  */
/* 					{% for r in toutes %}*/
/* 						<tr>*/
/* 						<td>{{ r.id }}</td>*/
/* 						<td>{{ r.personne.prenom  }} {{ r.personne.nom  }} </td>*/
/* 						<td>{{ r.debut | date("d.m.Y")  }} </td>*/
/* 						<td>{{ r.fin | date("d.m.Y") }}</td>*/
/* 						<td>{{ r.nadulte  }} </td>*/
/* 						<td>{{ r.njeunes }}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 					</table>*/
/* 		<div>*/
/* 		<a class="btn btn-info" href="{{ path('vf_crotoy_accueil'*/
/* 		) }}">Retour</a> */
/* 	</div>*/
/* </section>*/
/*     */
/* {% endblock %}*/
/* */
/* {% endblock %}*/
