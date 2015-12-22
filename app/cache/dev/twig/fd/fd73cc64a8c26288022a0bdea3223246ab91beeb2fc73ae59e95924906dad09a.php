<?php

/* VFBlogBundle:Blog:liste.html.twig */
class __TwigTemplate_3d110ebb5ed3787a14df6e00d3ec130f851c1f4001e6762f60ec085cc9b6db5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFBlogBundle::layoutBlog.html.twig ", "VFBlogBundle:Blog:liste.html.twig", 3);
        $this->blocks = array(
            'principal' => array($this, 'block_principal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFBlogBundle::layoutBlog.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43433d8d7846fd4f712558b82ad876ddd3f6e33e0a755aae4683eceed4669aff = $this->env->getExtension("native_profiler");
        $__internal_43433d8d7846fd4f712558b82ad876ddd3f6e33e0a755aae4683eceed4669aff->enter($__internal_43433d8d7846fd4f712558b82ad876ddd3f6e33e0a755aae4683eceed4669aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFBlogBundle:Blog:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43433d8d7846fd4f712558b82ad876ddd3f6e33e0a755aae4683eceed4669aff->leave($__internal_43433d8d7846fd4f712558b82ad876ddd3f6e33e0a755aae4683eceed4669aff_prof);

    }

    // line 5
    public function block_principal($context, array $blocks = array())
    {
        $__internal_93a230e91829263e3b26c1a9eae64347f268be92dceb008fba5829304137a3c8 = $this->env->getExtension("native_profiler");
        $__internal_93a230e91829263e3b26c1a9eae64347f268be92dceb008fba5829304137a3c8->enter($__internal_93a230e91829263e3b26c1a9eae64347f268be92dceb008fba5829304137a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        // line 6
        echo "
<section>
\t            <table class=\"table table-bordered table-striped table-condensed\">
\t            <caption>Derniers articles</caption>
\t\t\t\t\t<tr>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t</tr>
 
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 17
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vf_article_voir", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "titre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "auteur", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</table>

    
\t<!-- <div><a class=\"btn btn-info\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("vf_blog_accueil");
        echo "\">Retour</a> </div>
\t-->


</section>
";
        
        $__internal_93a230e91829263e3b26c1a9eae64347f268be92dceb008fba5829304137a3c8->leave($__internal_93a230e91829263e3b26c1a9eae64347f268be92dceb008fba5829304137a3c8_prof);

    }

    public function getTemplateName()
    {
        return "VFBlogBundle:Blog:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  78 => 23,  69 => 20,  63 => 19,  59 => 18,  56 => 17,  52 => 16,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# /src/VF/BlogBundleResources/views/Blog/listearticles.html.twig #}*/
/* */
/* {% extends "VFBlogBundle::layoutBlog.html.twig "%}*/
/* */
/* {% block principal %}*/
/* */
/* <section>*/
/* 	            <table class="table table-bordered table-striped table-condensed">*/
/* 	            <caption>Derniers articles</caption>*/
/* 					<tr>*/
/* 					<th>Date</th>*/
/* 					<th>Titre</th>*/
/* 					<th>Auteur</th>*/
/* 					</tr>*/
/*  */
/* 					{% for a in liste %}*/
/* 						<tr>*/
/* 						<td>{{ a.date | date("d.m.Y") }}</td>*/
/* 						<td><a href="{{ path('vf_article_voir',{ 'id': a.id }) }}">{{ a.titre  }}</a></td>*/
/* 						<td>{{ a.auteur  }}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 				</table>*/
/* */
/*     */
/* 	<!-- <div><a class="btn btn-info" href="{{ path('vf_blog_accueil') }}">Retour</a> </div>*/
/* 	-->*/
/* */
/* */
/* </section>*/
/* {% endblock %}*/
