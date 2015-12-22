<?php

/* VFCrotoyBundle:Crotoy:photos.html.twig */
class __TwigTemplate_fe25ad89ec1c0abb838b1eb88da869e24f5283eef13d9d2da24cf97750f7f5f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCrotoyBundle::layoutCrotoy.html.twig", "VFCrotoyBundle:Crotoy:photos.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'photos' => array($this, 'block_photos'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCrotoyBundle::layoutCrotoy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d6ebc2d2b0cabd51a3de2155eee76f340e4139abd75db9b579f97e0116c41ce = $this->env->getExtension("native_profiler");
        $__internal_0d6ebc2d2b0cabd51a3de2155eee76f340e4139abd75db9b579f97e0116c41ce->enter($__internal_0d6ebc2d2b0cabd51a3de2155eee76f340e4139abd75db9b579f97e0116c41ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCrotoyBundle:Crotoy:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6ebc2d2b0cabd51a3de2155eee76f340e4139abd75db9b579f97e0116c41ce->leave($__internal_0d6ebc2d2b0cabd51a3de2155eee76f340e4139abd75db9b579f97e0116c41ce_prof);

    }

    // line 10
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_b8ffdee9297e242a24bee7fa9279a05c673bcb15fa0ec9044092d7928de0a076 = $this->env->getExtension("native_profiler");
        $__internal_b8ffdee9297e242a24bee7fa9279a05c673bcb15fa0ec9044092d7928de0a076->enter($__internal_b8ffdee9297e242a24bee7fa9279a05c673bcb15fa0ec9044092d7928de0a076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo "   
    ";
        // line 11
        $this->displayBlock('photos', $context, $blocks);
        // line 20
        echo " ";
        
        $__internal_b8ffdee9297e242a24bee7fa9279a05c673bcb15fa0ec9044092d7928de0a076->leave($__internal_b8ffdee9297e242a24bee7fa9279a05c673bcb15fa0ec9044092d7928de0a076_prof);

    }

    // line 11
    public function block_photos($context, array $blocks = array())
    {
        $__internal_6e63851fa0ec8e991b95d8b89cbb290a4543599c8c39e18e461b5d14d1b49ee8 = $this->env->getExtension("native_profiler");
        $__internal_6e63851fa0ec8e991b95d8b89cbb290a4543599c8c39e18e461b5d14d1b49ee8->enter($__internal_6e63851fa0ec8e991b95d8b89cbb290a4543599c8c39e18e461b5d14d1b49ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "photos"));

        // line 12
        echo "\t<div class =\" container \">
\t<section class=\"row\">
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 15
            echo "\t\t\t<div class =\"col-xs-4 col-sm-3 col-md-2\"><img src=\"http://localhost/Crotoy/web/images/";
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo " \" width=\"100\" height=\"80\" class =\"img-thumbnail\"></div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</section>
\t</div>
    ";
        
        $__internal_6e63851fa0ec8e991b95d8b89cbb290a4543599c8c39e18e461b5d14d1b49ee8->leave($__internal_6e63851fa0ec8e991b95d8b89cbb290a4543599c8c39e18e461b5d14d1b49ee8_prof);

    }

    public function getTemplateName()
    {
        return "VFCrotoyBundle:Crotoy:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  66 => 15,  62 => 14,  58 => 12,  52 => 11,  45 => 20,  43 => 11,  35 => 10,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/Default/photos.html.twig #}*/
/* */
/* {% extends "VFCrotoyBundle::layoutCrotoy.html.twig" %}*/
/* */
/* */
/* */
/* {# {% block menu %} {{ render(controller("VFCrotoyBundle:Crotoy:menu")) }} {% endblock   #}*/
/*  */
/*  */
/*  {% block crotoy %}   */
/*     {% block photos %}*/
/* 	<div class =" container ">*/
/* 	<section class="row">*/
/* 		{% for f in liste %}*/
/* 			<div class ="col-xs-4 col-sm-3 col-md-2"><img src="http://localhost/Crotoy/web/images/{{ f }}" alt="{{ f }} " width="100" height="80" class ="img-thumbnail"></div>*/
/* 		{% endfor %}*/
/* 	</section>*/
/* 	</div>*/
/*     {% endblock %}*/
/*  {% endblock %}*/
/* */
