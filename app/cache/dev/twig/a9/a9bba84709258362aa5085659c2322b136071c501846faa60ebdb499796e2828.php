<?php

/* VFUserBundle::layoutUser.html.twig */
class __TwigTemplate_c6739318a38e8f88103117868d5b5517fad5186a89214490400f64fac21b9186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFUserBundle::layoutUser.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'menu_user' => array($this, 'block_menu_user'),
            'principal' => array($this, 'block_principal'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a590f15d669e402a97797f94e9475dde9aa5950038f6030814b732920c2aae2 = $this->env->getExtension("native_profiler");
        $__internal_1a590f15d669e402a97797f94e9475dde9aa5950038f6030814b732920c2aae2->enter($__internal_1a590f15d669e402a97797f94e9475dde9aa5950038f6030814b732920c2aae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFUserBundle::layoutUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a590f15d669e402a97797f94e9475dde9aa5950038f6030814b732920c2aae2->leave($__internal_1a590f15d669e402a97797f94e9475dde9aa5950038f6030814b732920c2aae2_prof);

    }

    // line 6
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_686bac964219a76e9944971b462898e7d9baa1df6af370e03590f0d85ca8d6bd = $this->env->getExtension("native_profiler");
        $__internal_686bac964219a76e9944971b462898e7d9baa1df6af370e03590f0d85ca8d6bd->enter($__internal_686bac964219a76e9944971b462898e7d9baa1df6af370e03590f0d85ca8d6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_686bac964219a76e9944971b462898e7d9baa1df6af370e03590f0d85ca8d6bd->leave($__internal_686bac964219a76e9944971b462898e7d9baa1df6af370e03590f0d85ca8d6bd_prof);

    }

    // line 10
    public function block_menu_user($context, array $blocks = array())
    {
        $__internal_ec254fe994b81bf28f2555a9cc0ddbe9cdf197192fb62e24224a597ce250a1b7 = $this->env->getExtension("native_profiler");
        $__internal_ec254fe994b81bf28f2555a9cc0ddbe9cdf197192fb62e24224a597ce250a1b7->enter($__internal_ec254fe994b81bf28f2555a9cc0ddbe9cdf197192fb62e24224a597ce250a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_user"));

        // line 11
        echo "\t <p>Mon profil</p>
\t  <ul>  
\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mon profil</a>
\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer le mot de passe</a></li>
\t  </ul>

";
        
        $__internal_ec254fe994b81bf28f2555a9cc0ddbe9cdf197192fb62e24224a597ce250a1b7->leave($__internal_ec254fe994b81bf28f2555a9cc0ddbe9cdf197192fb62e24224a597ce250a1b7_prof);

    }

    // line 22
    public function block_principal($context, array $blocks = array())
    {
        $__internal_bae79abd06400299d58d330e691257fe82ef55ec8bf5a7355f7f84f6358ea0ab = $this->env->getExtension("native_profiler");
        $__internal_bae79abd06400299d58d330e691257fe82ef55ec8bf5a7355f7f84f6358ea0ab->enter($__internal_bae79abd06400299d58d330e691257fe82ef55ec8bf5a7355f7f84f6358ea0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        echo " 
";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        echo " 
 ";
        
        $__internal_bae79abd06400299d58d330e691257fe82ef55ec8bf5a7355f7f84f6358ea0ab->leave($__internal_bae79abd06400299d58d330e691257fe82ef55ec8bf5a7355f7f84f6358ea0ab_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa0729c9a5954c1242f4703184002130f1d29f1a39b0a2e049282047d0ab1fa6 = $this->env->getExtension("native_profiler");
        $__internal_fa0729c9a5954c1242f4703184002130f1d29f1a39b0a2e049282047d0ab1fa6->enter($__internal_fa0729c9a5954c1242f4703184002130f1d29f1a39b0a2e049282047d0ab1fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo " ";
        
        $__internal_fa0729c9a5954c1242f4703184002130f1d29f1a39b0a2e049282047d0ab1fa6->leave($__internal_fa0729c9a5954c1242f4703184002130f1d29f1a39b0a2e049282047d0ab1fa6_prof);

    }

    public function getTemplateName()
    {
        return "VFUserBundle::layoutUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  78 => 22,  67 => 15,  63 => 14,  59 => 13,  55 => 11,  49 => 10,  37 => 6,  11 => 3,);
    }
}
/* {# src/VF/UserBundle/Resources/views/layoutUser.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/*       */
/* */
/*  {% block crotoy %} {% endblock %} */
/* */
/* */
/* */
/* {% block menu_user %}*/
/* 	 <p>Mon profil</p>*/
/* 	  <ul>  */
/* 			<li><a href="{{ path('fos_user_profile_show') }}">Profil</a>*/
/* 			<li><a href="{{ path('fos_user_profile_edit') }}">Modifier mon profil</a>*/
/* 			<li><a href="{{ path('fos_user_change_password') }}">Changer le mot de passe</a></li>*/
/* 	  </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block principal %} */
/* {% block fos_user_content %} {% endblock %} */
/*  {% endblock %} */
