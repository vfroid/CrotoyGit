<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cefad5209bfef8d01844bf1eeb561a2ec31dbf768995c2adb64e82def353fce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c2a23155d9de1636c6f0901ed714cc581f7adda8e4c2f758b7fda1ef406bd2b = $this->env->getExtension("native_profiler");
        $__internal_6c2a23155d9de1636c6f0901ed714cc581f7adda8e4c2f758b7fda1ef406bd2b->enter($__internal_6c2a23155d9de1636c6f0901ed714cc581f7adda8e4c2f758b7fda1ef406bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6c2a23155d9de1636c6f0901ed714cc581f7adda8e4c2f758b7fda1ef406bd2b->leave($__internal_6c2a23155d9de1636c6f0901ed714cc581f7adda8e4c2f758b7fda1ef406bd2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
