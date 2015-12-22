<?php

/* VFBlogBundle::layoutBlog.html.twig  */
class __TwigTemplate_03578aba42edbd9994febbcbc653f4381f8ed27d18593e89326173ae6d53fe7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFBlogBundle::layoutBlog.html.twig ", 3);
        $this->blocks = array(
            'principal' => array($this, 'block_principal'),
            'body_blog' => array($this, 'block_body_blog'),
            'menu_blog' => array($this, 'block_menu_blog'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e557adcd15625451a922c83c3910c971b0ceb3f52643883f617a16ba725082b9 = $this->env->getExtension("native_profiler");
        $__internal_e557adcd15625451a922c83c3910c971b0ceb3f52643883f617a16ba725082b9->enter($__internal_e557adcd15625451a922c83c3910c971b0ceb3f52643883f617a16ba725082b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFBlogBundle::layoutBlog.html.twig "));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e557adcd15625451a922c83c3910c971b0ceb3f52643883f617a16ba725082b9->leave($__internal_e557adcd15625451a922c83c3910c971b0ceb3f52643883f617a16ba725082b9_prof);

    }

    // line 7
    public function block_principal($context, array $blocks = array())
    {
        $__internal_79c930d645fa28defad7261b7398aa3bfc1af89a2f4c17d66d15336e15d51b51 = $this->env->getExtension("native_profiler");
        $__internal_79c930d645fa28defad7261b7398aa3bfc1af89a2f4c17d66d15336e15d51b51->enter($__internal_79c930d645fa28defad7261b7398aa3bfc1af89a2f4c17d66d15336e15d51b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        // line 8
        echo "

<body role=\"document\">

<div id=\"wrapper\">
\t
    <header id=\"header\">
        <div class=\"row\">
\t\t\t  <!-- <section>
                <div class = \"col-lg-2\">
                <img src=\"http://localhost/Crotoy/web/images/maison.JPG\" alt=\"maison\" width=\"100\" height=\"80\">
\t            <div>
\t\t      </section> -->
\t\t\t  <section>
\t            <div class = \"col-lg-8 col-lg-offset-1\">
                    <h3>BLOG</h3>
\t            </div>
\t\t\t  </section>
\t        </div>
    </header>
\t
    <div id=\"sub-wrapper\">
        <aside id=\"sidebar\" role=\"complementary\">
\t\t
\t\t</aside>
\t\t
        <div id=\"main\" role=\"main\">
\t\t";
        // line 35
        $this->displayBlock('body_blog', $context, $blocks);
        // line 36
        echo "\t\t</div>
\t\t
\t</div>
\t
    <footer id=\"footer\" role=\"contentinfo\">
\t</footer>\t
\t
</div>
    
</body>
</html>

";
        
        $__internal_79c930d645fa28defad7261b7398aa3bfc1af89a2f4c17d66d15336e15d51b51->leave($__internal_79c930d645fa28defad7261b7398aa3bfc1af89a2f4c17d66d15336e15d51b51_prof);

    }

    // line 35
    public function block_body_blog($context, array $blocks = array())
    {
        $__internal_4cf388d49fa2602b16d39f40c1b364224d8a0a01358a41c6e7a4db7290e0bc15 = $this->env->getExtension("native_profiler");
        $__internal_4cf388d49fa2602b16d39f40c1b364224d8a0a01358a41c6e7a4db7290e0bc15->enter($__internal_4cf388d49fa2602b16d39f40c1b364224d8a0a01358a41c6e7a4db7290e0bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_blog"));

        
        $__internal_4cf388d49fa2602b16d39f40c1b364224d8a0a01358a41c6e7a4db7290e0bc15->leave($__internal_4cf388d49fa2602b16d39f40c1b364224d8a0a01358a41c6e7a4db7290e0bc15_prof);

    }

    // line 50
    public function block_menu_blog($context, array $blocks = array())
    {
        $__internal_e944b947f11f2880cd6ce0b75b04873f5333e3b44272d51faa10fcd4f5d671d6 = $this->env->getExtension("native_profiler");
        $__internal_e944b947f11f2880cd6ce0b75b04873f5333e3b44272d51faa10fcd4f5d671d6->enter($__internal_e944b947f11f2880cd6ce0b75b04873f5333e3b44272d51faa10fcd4f5d671d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_blog"));

        // line 51
        echo "\t  <p>Blog</p>
\t\t<ul>
\t\t <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("vf_blog_accueil");
        echo "\">Accueil du blog</a></li>
\t\t <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("vf_blog_listearticles");
        echo "\">Tous les articles</a></li>
         <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("vf_article_add");
        echo "\">Ajouter un article</a></li>
        </ul>\t
\t\t<form action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("vf_blog_tag");
        echo "\" method=\"post\" >
\t\t\tArticles selon le tag (mot-clef) :<br>
\t\t\t<input name=\"tag\" type=\"text\">
\t\t\t<input type=\"submit\" value=\"Chercher\">
\t\t</form>
\t\t
\t";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("vf_blog_etat");
            echo "\" method=\"post\" >
\t\t\t<p>
\t\t\t\t<label for=\"etat\">Articles selon leur statut</label><br />
\t\t\t\t<select name=\"etat\" id=\"idetat\">
\t\t\t\t\t<option value=\"Soumis\" selected>Soumis</option>
\t\t\t\t\t<option value=\"Publie\">Publie</option>
\t\t\t\t\t<option value=\"Refuse\">Refuse</option>
\t\t\t\t</select>
\t\t\t</p>
\t\t\t<input type=\"submit\" value=\"Chercher\">
\t\t</form>
\t";
        }
        
        $__internal_e944b947f11f2880cd6ce0b75b04873f5333e3b44272d51faa10fcd4f5d671d6->leave($__internal_e944b947f11f2880cd6ce0b75b04873f5333e3b44272d51faa10fcd4f5d671d6_prof);

    }

    public function getTemplateName()
    {
        return "VFBlogBundle::layoutBlog.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  135 => 63,  126 => 57,  121 => 55,  117 => 54,  113 => 53,  109 => 51,  103 => 50,  92 => 35,  73 => 36,  71 => 35,  42 => 8,  36 => 7,  11 => 3,);
    }
}
/* {# src/VF/CoreBundle/Resources/views/layoutCore.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/* */
/* */
/* */
/* {% block principal %}*/
/* */
/* */
/* <body role="document">*/
/* */
/* <div id="wrapper">*/
/* 	*/
/*     <header id="header">*/
/*         <div class="row">*/
/* 			  <!-- <section>*/
/*                 <div class = "col-lg-2">*/
/*                 <img src="http://localhost/Crotoy/web/images/maison.JPG" alt="maison" width="100" height="80">*/
/* 	            <div>*/
/* 		      </section> -->*/
/* 			  <section>*/
/* 	            <div class = "col-lg-8 col-lg-offset-1">*/
/*                     <h3>BLOG</h3>*/
/* 	            </div>*/
/* 			  </section>*/
/* 	        </div>*/
/*     </header>*/
/* 	*/
/*     <div id="sub-wrapper">*/
/*         <aside id="sidebar" role="complementary">*/
/* 		*/
/* 		</aside>*/
/* 		*/
/*         <div id="main" role="main">*/
/* 		{% block body_blog %}{% endblock %}*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/*     <footer id="footer" role="contentinfo">*/
/* 	</footer>	*/
/* 	*/
/* </div>*/
/*     */
/* </body>*/
/* </html>*/
/* */
/* {% endblock principal %}*/
/* */
/* {% block menu_blog %}*/
/* 	  <p>Blog</p>*/
/* 		<ul>*/
/* 		 <li><a href="{{ path('vf_blog_accueil') }}">Accueil du blog</a></li>*/
/* 		 <li><a href="{{ path('vf_blog_listearticles') }}">Tous les articles</a></li>*/
/*          <li><a href="{{ path('vf_article_add') }}">Ajouter un article</a></li>*/
/*         </ul>	*/
/* 		<form action="{{ path('vf_blog_tag') }}" method="post" >*/
/* 			Articles selon le tag (mot-clef) :<br>*/
/* 			<input name="tag" type="text">*/
/* 			<input type="submit" value="Chercher">*/
/* 		</form>*/
/* 		*/
/* 	{% if is_granted('ROLE_ADMIN') %}*/
/* 		<form action="{{ path('vf_blog_etat') }}" method="post" >*/
/* 			<p>*/
/* 				<label for="etat">Articles selon leur statut</label><br />*/
/* 				<select name="etat" id="idetat">*/
/* 					<option value="Soumis" selected>Soumis</option>*/
/* 					<option value="Publie">Publie</option>*/
/* 					<option value="Refuse">Refuse</option>*/
/* 				</select>*/
/* 			</p>*/
/* 			<input type="submit" value="Chercher">*/
/* 		</form>*/
/* 	{% endif %}*/
/* {% endblock %}*/
