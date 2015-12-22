<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f78aed324a868e0dc49c3d8ac00bee2198cdda3289d353a6d3dcd5680878ddfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a725f501e5f7013f8b6e14102f741e139319185e46eea3afb705bd6921a4c16 = $this->env->getExtension("native_profiler");
        $__internal_9a725f501e5f7013f8b6e14102f741e139319185e46eea3afb705bd6921a4c16->enter($__internal_9a725f501e5f7013f8b6e14102f741e139319185e46eea3afb705bd6921a4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a725f501e5f7013f8b6e14102f741e139319185e46eea3afb705bd6921a4c16->leave($__internal_9a725f501e5f7013f8b6e14102f741e139319185e46eea3afb705bd6921a4c16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60dac9da4214adce2f05a912cc622fe3b0825c6fddb6d322746f3d9bfe833bcc = $this->env->getExtension("native_profiler");
        $__internal_60dac9da4214adce2f05a912cc622fe3b0825c6fddb6d322746f3d9bfe833bcc->enter($__internal_60dac9da4214adce2f05a912cc622fe3b0825c6fddb6d322746f3d9bfe833bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_60dac9da4214adce2f05a912cc622fe3b0825c6fddb6d322746f3d9bfe833bcc->leave($__internal_60dac9da4214adce2f05a912cc622fe3b0825c6fddb6d322746f3d9bfe833bcc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_daa558cf12e63dc07e5637a12d2273556a75936825fe3f57fe046cfbc5a86e9f = $this->env->getExtension("native_profiler");
        $__internal_daa558cf12e63dc07e5637a12d2273556a75936825fe3f57fe046cfbc5a86e9f->enter($__internal_daa558cf12e63dc07e5637a12d2273556a75936825fe3f57fe046cfbc5a86e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_daa558cf12e63dc07e5637a12d2273556a75936825fe3f57fe046cfbc5a86e9f->leave($__internal_daa558cf12e63dc07e5637a12d2273556a75936825fe3f57fe046cfbc5a86e9f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74c7b9fe9c964ae3bbc473e56854d81176215a927727b97e967a42bbdd223d0b = $this->env->getExtension("native_profiler");
        $__internal_74c7b9fe9c964ae3bbc473e56854d81176215a927727b97e967a42bbdd223d0b->enter($__internal_74c7b9fe9c964ae3bbc473e56854d81176215a927727b97e967a42bbdd223d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_74c7b9fe9c964ae3bbc473e56854d81176215a927727b97e967a42bbdd223d0b->leave($__internal_74c7b9fe9c964ae3bbc473e56854d81176215a927727b97e967a42bbdd223d0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
