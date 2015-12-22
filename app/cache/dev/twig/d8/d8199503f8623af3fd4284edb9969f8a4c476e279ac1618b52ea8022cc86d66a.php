<?php

/* VFBlogBundle:Blog:accueil.html.twig */
class __TwigTemplate_15e8fdd461b7a4224d5bf780fffe9c8ea9d00f1c8f7c5ae0f0fb9c761e3a689d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body_blog' => array($this, 'block_body_blog'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a362d4674f07f72c39afa1c2e3474a2e4ebbb7a8c89856f8eebc76502acae7 = $this->env->getExtension("native_profiler");
        $__internal_75a362d4674f07f72c39afa1c2e3474a2e4ebbb7a8c89856f8eebc76502acae7->enter($__internal_75a362d4674f07f72c39afa1c2e3474a2e4ebbb7a8c89856f8eebc76502acae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFBlogBundle:Blog:accueil.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_blog', $context, $blocks);
        // line 6
        echo "
";
        
        $__internal_75a362d4674f07f72c39afa1c2e3474a2e4ebbb7a8c89856f8eebc76502acae7->leave($__internal_75a362d4674f07f72c39afa1c2e3474a2e4ebbb7a8c89856f8eebc76502acae7_prof);

    }

    // line 3
    public function block_body_blog($context, array $blocks = array())
    {
        $__internal_988488d501da76ac723bc79f0a139eae1d56d323abc5ea8314c2c368368e5f66 = $this->env->getExtension("native_profiler");
        $__internal_988488d501da76ac723bc79f0a139eae1d56d323abc5ea8314c2c368368e5f66->enter($__internal_988488d501da76ac723bc79f0a139eae1d56d323abc5ea8314c2c368368e5f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_blog"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VFBlogBundle:Blog:derniers"));
        echo "
";
        
        $__internal_988488d501da76ac723bc79f0a139eae1d56d323abc5ea8314c2c368368e5f66->leave($__internal_988488d501da76ac723bc79f0a139eae1d56d323abc5ea8314c2c368368e5f66_prof);

    }

    public function getTemplateName()
    {
        return "VFBlogBundle:Blog:accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  36 => 3,  28 => 6,  26 => 3,  23 => 2,);
    }
}
/* {# /src/VF/BlogBundle/Ressources/Blog/accueil.html.twig #}*/
/* */
/* {% block body_blog %}*/
/*     {{ render(controller("VFBlogBundle:Blog:derniers")) }}*/
/* {% endblock %}*/
/* */
/* */
