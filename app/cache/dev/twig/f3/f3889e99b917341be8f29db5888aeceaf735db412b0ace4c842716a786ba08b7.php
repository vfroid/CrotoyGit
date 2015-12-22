<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_00cc445bdf006aff13fe3261587b0f7478cc5006bd88dbc0989c658246458941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d984a932e78a0d1f0f991c1476d02da16e2d54e37b5c8f7b23d067ce5ac040b = $this->env->getExtension("native_profiler");
        $__internal_0d984a932e78a0d1f0f991c1476d02da16e2d54e37b5c8f7b23d067ce5ac040b->enter($__internal_0d984a932e78a0d1f0f991c1476d02da16e2d54e37b5c8f7b23d067ce5ac040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d984a932e78a0d1f0f991c1476d02da16e2d54e37b5c8f7b23d067ce5ac040b->leave($__internal_0d984a932e78a0d1f0f991c1476d02da16e2d54e37b5c8f7b23d067ce5ac040b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d19ff975f03fe0bc9bf30a9bea826e4fb2cb298a50aaa609fbb8c7dac99517ca = $this->env->getExtension("native_profiler");
        $__internal_d19ff975f03fe0bc9bf30a9bea826e4fb2cb298a50aaa609fbb8c7dac99517ca->enter($__internal_d19ff975f03fe0bc9bf30a9bea826e4fb2cb298a50aaa609fbb8c7dac99517ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

  
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
  
    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
  
    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Soumettre", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
</form>


";
        
        $__internal_d19ff975f03fe0bc9bf30a9bea826e4fb2cb298a50aaa609fbb8c7dac99517ca->leave($__internal_d19ff975f03fe0bc9bf30a9bea826e4fb2cb298a50aaa609fbb8c7dac99517ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 22,  71 => 18,  66 => 16,  62 => 15,  57 => 13,  53 => 12,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/*   */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*   */
/*     <label for="username">{{ 'Nom d\'utilisateur'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*   */
/*     <label for="password">{{ 'Mot de passe'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'Se souvenir de moi'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'Soumettre'|trans }}" />*/
/*     */
/* </form>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
