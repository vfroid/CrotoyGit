<?php

/* ::layout.html.twig */
class __TwigTemplate_2e869f7fe24316fcaa659462b119c828c5be53ab914d5093c0ffc874967c2488 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63dff8e_0") : $this->env->getExtension('asset')->getAssetUrl("css/63dff8e_blog_1.css");
            // line 24
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" /> 
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> 
";
        } else {
            // asset "63dff8e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_63dff8e") : $this->env->getExtension('asset')->getAssetUrl("css/63dff8e.css");
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "La Maison du Crotoy";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
    }

    // line 34
    public function block_flash($context, array $blocks = array())
    {
    }

    // line 37
    public function block_core($context, array $blocks = array())
    {
    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_demarrage($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "\t\t\t\t";
        $this->displayBlock('menu', $context, $blocks);
        // line 50
        echo "\t\t\t\t";
        $this->displayBlock('principal', $context, $blocks);
        echo " 
\t\t\t";
    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 50
    public function block_principal($context, array $blocks = array())
    {
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
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
        return array (  184 => 53,  179 => 50,  174 => 49,  167 => 50,  164 => 49,  161 => 48,  156 => 41,  151 => 40,  146 => 37,  141 => 34,  136 => 32,  130 => 17,  125 => 54,  123 => 53,  120 => 52,  118 => 48,  111 => 43,  107 => 42,  104 => 41,  102 => 40,  96 => 38,  94 => 37,  90 => 36,  87 => 35,  85 => 34,  82 => 33,  80 => 32,  73 => 27,  57 => 24,  53 => 21,  46 => 17,  29 => 2,);
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
