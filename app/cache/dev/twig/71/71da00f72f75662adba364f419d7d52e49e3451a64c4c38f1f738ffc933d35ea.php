<?php

/* VFCrotoyBundle:Habiter:menu.html.twig */
class __TwigTemplate_8e955e90a27e60da20353dad651eb8a07de4c36d4c94b5e03a766e0593add0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutHabiter.html.twig ", "VFCrotoyBundle:Habiter:menu.html.twig", 1);
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
        $__internal_638db27f8190375340500e3519e621c5e9bb1668327c43388c2d0cf0c013ec32 = $this->env->getExtension("native_profiler");
        $__internal_638db27f8190375340500e3519e621c5e9bb1668327c43388c2d0cf0c013ec32->enter($__internal_638db27f8190375340500e3519e621c5e9bb1668327c43388c2d0cf0c013ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Habiter:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638db27f8190375340500e3519e621c5e9bb1668327c43388c2d0cf0c013ec32->leave($__internal_638db27f8190375340500e3519e621c5e9bb1668327c43388c2d0cf0c013ec32_prof);

    }

    // line 4
    public function block_menu_user($context, array $blocks = array())
    {
        $__internal_2f0f5ddc951f8892d2d1fe1bd9845c38fded861894352cc7264805e7418480b4 = $this->env->getExtension("native_profiler");
        $__internal_2f0f5ddc951f8892d2d1fe1bd9845c38fded861894352cc7264805e7418480b4->enter($__internal_2f0f5ddc951f8892d2d1fe1bd9845c38fded861894352cc7264805e7418480b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_user"));

        
        $__internal_2f0f5ddc951f8892d2d1fe1bd9845c38fded861894352cc7264805e7418480b4->leave($__internal_2f0f5ddc951f8892d2d1fe1bd9845c38fded861894352cc7264805e7418480b4_prof);

    }

    // line 9
    public function block_menu_reservation($context, array $blocks = array())
    {
        $__internal_4945315048cc1dd2f380ceb9f6e48d65e7223ecdb99e34a6e07c220bfa358345 = $this->env->getExtension("native_profiler");
        $__internal_4945315048cc1dd2f380ceb9f6e48d65e7223ecdb99e34a6e07c220bfa358345->enter($__internal_4945315048cc1dd2f380ceb9f6e48d65e7223ecdb99e34a6e07c220bfa358345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reservation"));

        
        $__internal_4945315048cc1dd2f380ceb9f6e48d65e7223ecdb99e34a6e07c220bfa358345->leave($__internal_4945315048cc1dd2f380ceb9f6e48d65e7223ecdb99e34a6e07c220bfa358345_prof);

    }

    // line 10
    public function block_menu_personne($context, array $blocks = array())
    {
        $__internal_0fd261def52f226f724088fe133a12e7ab56c11d603a21973c4f49d1c2d66841 = $this->env->getExtension("native_profiler");
        $__internal_0fd261def52f226f724088fe133a12e7ab56c11d603a21973c4f49d1c2d66841->enter($__internal_0fd261def52f226f724088fe133a12e7ab56c11d603a21973c4f49d1c2d66841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_personne"));

        
        $__internal_0fd261def52f226f724088fe133a12e7ab56c11d603a21973c4f49d1c2d66841->leave($__internal_0fd261def52f226f724088fe133a12e7ab56c11d603a21973c4f49d1c2d66841_prof);

    }

    // line 13
    public function block_principal($context, array $blocks = array())
    {
        $__internal_92525fafc0bd755a421e0c128a9bf73e6dfed330c8d61960d9454ae06a5b2ba4 = $this->env->getExtension("native_profiler");
        $__internal_92525fafc0bd755a421e0c128a9bf73e6dfed330c8d61960d9454ae06a5b2ba4->enter($__internal_92525fafc0bd755a421e0c128a9bf73e6dfed330c8d61960d9454ae06a5b2ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        // line 14
        echo "
\t<div> 
\t\t<table class=\"table table-bordered table-striped table-condensed\">
\t\t\t\t\t<caption>Gérance de la maison</caption>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Thèmes</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 23
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")), $context["l"], array(), "array"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</table>
\t</div>


";
        
        $__internal_92525fafc0bd755a421e0c128a9bf73e6dfed330c8d61960d9454ae06a5b2ba4->leave($__internal_92525fafc0bd755a421e0c128a9bf73e6dfed330c8d61960d9454ae06a5b2ba4_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Habiter:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  93 => 24,  90 => 23,  86 => 22,  76 => 14,  70 => 13,  59 => 10,  48 => 9,  37 => 4,  11 => 1,);
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
/* 		<table class="table table-bordered table-striped table-condensed">*/
/* 					<caption>Gérance de la maison</caption>*/
/* 						<tr>*/
/* 						<th>Thèmes</th>*/
/* 						</tr>*/
/* 						*/
/* 						{% for l in lieux %}*/
/* 							<tr>*/
/* 							<td><a href="{{ liens[l]  }}" target="_blank">{{ l }}</a></td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 		</table>*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
