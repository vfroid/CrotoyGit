<?php

/* ::layout.html.twig */
class __TwigTemplate_e273f70464fa014a7a916f6b9ffc758f8ece32bb786e24cf0180aba275b41c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'flash' => array($this, 'block_flash'),
            'core' => array($this, 'block_core'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'demarrage' => array($this, 'block_demarrage'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'principal' => array($this, 'block_principal'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89314df7d63ee62fc9f5c6768accc20d8c53f78e5b0c496c046203456caef12b = $this->env->getExtension("native_profiler");
        $__internal_89314df7d63ee62fc9f5c6768accc20d8c53f78e5b0c496c046203456caef12b->enter($__internal_89314df7d63ee62fc9f5c6768accc20d8c53f78e5b0c496c046203456caef12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  
  <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "63dff8e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63dff8e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/63dff8e_blog_1.css");
            // line 24
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" /> 
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> 
";
        } else {
            // asset "63dff8e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63dff8e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/63dff8e.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" /> 
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> 
";
        }
        unset($context["asset_url"]);
        // line 27
        echo "
</head>


<div class = \"container\">
  ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "\t
\t";
        // line 34
        $this->displayBlock('flash', $context, $blocks);
        // line 35
        echo "\t
\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
\t\t";
            // line 37
            $this->displayBlock('core', $context, $blocks);
            // line 38
            echo "\t";
        } else {
            echo " 
\t\t<div class = \"col-sm-12\">
\t\t";
            // line 40
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 41
            echo "\t\t";
            $this->displayBlock('demarrage', $context, $blocks);
            // line 42
            echo "\t\t</div>
\t";
        }
        // line 43
        echo " 
  

\t<div class=\"col-sm-12\">  
\t\t<body> 
\t\t\t";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "\t\t</body>
\t\t\t";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "\t</div>
</div>";
        
        $__internal_89314df7d63ee62fc9f5c6768accc20d8c53f78e5b0c496c046203456caef12b->leave($__internal_89314df7d63ee62fc9f5c6768accc20d8c53f78e5b0c496c046203456caef12b_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_6db0eed3f6ce0dddd580ea8454de51cbd2073eea2bafe9f83788229ea8660f6c = $this->env->getExtension("native_profiler");
        $__internal_6db0eed3f6ce0dddd580ea8454de51cbd2073eea2bafe9f83788229ea8660f6c->enter($__internal_6db0eed3f6ce0dddd580ea8454de51cbd2073eea2bafe9f83788229ea8660f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Maison du Crotoy";
        
        $__internal_6db0eed3f6ce0dddd580ea8454de51cbd2073eea2bafe9f83788229ea8660f6c->leave($__internal_6db0eed3f6ce0dddd580ea8454de51cbd2073eea2bafe9f83788229ea8660f6c_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c4c0c8bdde74266065e478b6ab712bb84f937bf82dd9a0e2f0bc847b90bfe57 = $this->env->getExtension("native_profiler");
        $__internal_2c4c0c8bdde74266065e478b6ab712bb84f937bf82dd9a0e2f0bc847b90bfe57->enter($__internal_2c4c0c8bdde74266065e478b6ab712bb84f937bf82dd9a0e2f0bc847b90bfe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2c4c0c8bdde74266065e478b6ab712bb84f937bf82dd9a0e2f0bc847b90bfe57->leave($__internal_2c4c0c8bdde74266065e478b6ab712bb84f937bf82dd9a0e2f0bc847b90bfe57_prof);

    }

    // line 34
    public function block_flash($context, array $blocks = array())
    {
        $__internal_d4d8e0753a8bb8312a6615b8726722e132f144ce18bf001fba4a42b52bbb69c2 = $this->env->getExtension("native_profiler");
        $__internal_d4d8e0753a8bb8312a6615b8726722e132f144ce18bf001fba4a42b52bbb69c2->enter($__internal_d4d8e0753a8bb8312a6615b8726722e132f144ce18bf001fba4a42b52bbb69c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        
        $__internal_d4d8e0753a8bb8312a6615b8726722e132f144ce18bf001fba4a42b52bbb69c2->leave($__internal_d4d8e0753a8bb8312a6615b8726722e132f144ce18bf001fba4a42b52bbb69c2_prof);

    }

    // line 37
    public function block_core($context, array $blocks = array())
    {
        $__internal_edccfc1302f79b49eb6b10594870c2dbf4937001b79be6192d69770d62a8dc08 = $this->env->getExtension("native_profiler");
        $__internal_edccfc1302f79b49eb6b10594870c2dbf4937001b79be6192d69770d62a8dc08->enter($__internal_edccfc1302f79b49eb6b10594870c2dbf4937001b79be6192d69770d62a8dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "core"));

        
        $__internal_edccfc1302f79b49eb6b10594870c2dbf4937001b79be6192d69770d62a8dc08->leave($__internal_edccfc1302f79b49eb6b10594870c2dbf4937001b79be6192d69770d62a8dc08_prof);

    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e694b69c57f6555a8ab7ecb024ec1740b40ed40a1c18e1bf2f258d6fff20d32 = $this->env->getExtension("native_profiler");
        $__internal_6e694b69c57f6555a8ab7ecb024ec1740b40ed40a1c18e1bf2f258d6fff20d32->enter($__internal_6e694b69c57f6555a8ab7ecb024ec1740b40ed40a1c18e1bf2f258d6fff20d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_6e694b69c57f6555a8ab7ecb024ec1740b40ed40a1c18e1bf2f258d6fff20d32->leave($__internal_6e694b69c57f6555a8ab7ecb024ec1740b40ed40a1c18e1bf2f258d6fff20d32_prof);

    }

    // line 41
    public function block_demarrage($context, array $blocks = array())
    {
        $__internal_2a587c7cc294ffa3dad1eb6123985899d4ae3446aef4a708b0ba8cb2d524fac8 = $this->env->getExtension("native_profiler");
        $__internal_2a587c7cc294ffa3dad1eb6123985899d4ae3446aef4a708b0ba8cb2d524fac8->enter($__internal_2a587c7cc294ffa3dad1eb6123985899d4ae3446aef4a708b0ba8cb2d524fac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "demarrage"));

        
        $__internal_2a587c7cc294ffa3dad1eb6123985899d4ae3446aef4a708b0ba8cb2d524fac8->leave($__internal_2a587c7cc294ffa3dad1eb6123985899d4ae3446aef4a708b0ba8cb2d524fac8_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af66bb0fe02dad160eb78b4b411006e25529aec67fe91a5c347e056c21c4d87 = $this->env->getExtension("native_profiler");
        $__internal_8af66bb0fe02dad160eb78b4b411006e25529aec67fe91a5c347e056c21c4d87->enter($__internal_8af66bb0fe02dad160eb78b4b411006e25529aec67fe91a5c347e056c21c4d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "\t\t\t\t";
        $this->displayBlock('menu', $context, $blocks);
        // line 50
        echo "\t\t\t\t";
        $this->displayBlock('principal', $context, $blocks);
        echo " 
\t\t\t";
        
        $__internal_8af66bb0fe02dad160eb78b4b411006e25529aec67fe91a5c347e056c21c4d87->leave($__internal_8af66bb0fe02dad160eb78b4b411006e25529aec67fe91a5c347e056c21c4d87_prof);

    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a7b1ff009f964d986cb9a91cb41ee8ec953068403a567f13e45d083036b4615 = $this->env->getExtension("native_profiler");
        $__internal_4a7b1ff009f964d986cb9a91cb41ee8ec953068403a567f13e45d083036b4615->enter($__internal_4a7b1ff009f964d986cb9a91cb41ee8ec953068403a567f13e45d083036b4615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_4a7b1ff009f964d986cb9a91cb41ee8ec953068403a567f13e45d083036b4615->leave($__internal_4a7b1ff009f964d986cb9a91cb41ee8ec953068403a567f13e45d083036b4615_prof);

    }

    // line 50
    public function block_principal($context, array $blocks = array())
    {
        $__internal_74b07f19eecfa771a8e6db77632c6e37c05a88a232db470e598cd749e9a63ed1 = $this->env->getExtension("native_profiler");
        $__internal_74b07f19eecfa771a8e6db77632c6e37c05a88a232db470e598cd749e9a63ed1->enter($__internal_74b07f19eecfa771a8e6db77632c6e37c05a88a232db470e598cd749e9a63ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        
        $__internal_74b07f19eecfa771a8e6db77632c6e37c05a88a232db470e598cd749e9a63ed1->leave($__internal_74b07f19eecfa771a8e6db77632c6e37c05a88a232db470e598cd749e9a63ed1_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b9d0c5198cc44996022c22a9fd20f7af29517654c70b05ed75d8a382dbacb1cd = $this->env->getExtension("native_profiler");
        $__internal_b9d0c5198cc44996022c22a9fd20f7af29517654c70b05ed75d8a382dbacb1cd->enter($__internal_b9d0c5198cc44996022c22a9fd20f7af29517654c70b05ed75d8a382dbacb1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b9d0c5198cc44996022c22a9fd20f7af29517654c70b05ed75d8a382dbacb1cd->leave($__internal_b9d0c5198cc44996022c22a9fd20f7af29517654c70b05ed75d8a382dbacb1cd_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 53,  233 => 50,  222 => 49,  212 => 50,  209 => 49,  203 => 48,  192 => 41,  181 => 40,  170 => 37,  159 => 34,  148 => 32,  136 => 17,  128 => 54,  126 => 53,  123 => 52,  121 => 48,  114 => 43,  110 => 42,  107 => 41,  105 => 40,  99 => 38,  97 => 37,  93 => 36,  90 => 35,  88 => 34,  85 => 33,  83 => 32,  76 => 27,  60 => 24,  56 => 21,  49 => 17,  32 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   */
/*   <title>{% block title %}La Maison du Crotoy{% endblock %}</title>*/
/* */
/* */
/* */
/* {% stylesheets filter='cssrewrite, yui_css'  */
/* 	'@VFBlogBundle/Resources/public/css/blog.css' */
/* 	 %}*/
/*   <link rel="stylesheet" href="{{ asset_url }}" type="text/css" /> */
/*   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> */
/* {% endstylesheets %}*/
/* */
/* </head>*/
/* */
/* */
/* <div class = "container">*/
/*   {% block header %}{% endblock %}*/
/* 	*/
/* 	{% block flash %}{% endblock %}*/
/* 	*/
/* 	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}  */
/* 		{% block core %}{% endblock %}*/
/* 	{% else %} */
/* 		<div class = "col-sm-12">*/
/* 		{% block fos_user_content %}{% endblock fos_user_content %}*/
/* 		{% block demarrage %}{% endblock %}*/
/* 		</div>*/
/* 	{% endif %} */
/*   */
/* */
/* 	<div class="col-sm-12">  */
/* 		<body> */
/* 			{% block body %}*/
/* 				{% block menu %}{% endblock %}*/
/* 				{% block principal %}{% endblock %} */
/* 			{% endblock %}*/
/* 		</body>*/
/* 			{% block footer %}{% endblock %}*/
/* 	</div>*/
/* </div>*/
