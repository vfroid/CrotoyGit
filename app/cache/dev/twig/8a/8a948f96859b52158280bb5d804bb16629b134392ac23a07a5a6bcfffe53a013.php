<?php

/* VFCoreBundle::layoutCore.html.twig */
class __TwigTemplate_f70d6317ec512d2314382f095db233805f4393ce1b5430e572d5e3c745a62555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "VFCoreBundle::layoutCore.html.twig", 3);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'core' => array($this, 'block_core'),
            'demarrage' => array($this, 'block_demarrage'),
            'flash' => array($this, 'block_flash'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'menu_user' => array($this, 'block_menu_user'),
            'menu_proprietaire' => array($this, 'block_menu_proprietaire'),
            'menu_reservation' => array($this, 'block_menu_reservation'),
            'menu_personne' => array($this, 'block_menu_personne'),
            'menu_blog' => array($this, 'block_menu_blog'),
            'menu_voyager' => array($this, 'block_menu_voyager'),
            'menu_habiter' => array($this, 'block_menu_habiter'),
            'principal' => array($this, 'block_principal'),
            'recherche' => array($this, 'block_recherche'),
            'reservation' => array($this, 'block_reservation'),
            'personne' => array($this, 'block_personne'),
            'proprietaire' => array($this, 'block_proprietaire'),
            'booking' => array($this, 'block_booking'),
            'voyager' => array($this, 'block_voyager'),
            'habiter' => array($this, 'block_habiter'),
            'crotoy' => array($this, 'block_crotoy'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_584c0dd67b5c68232b30c8276df03929ff96496bd748620c90c5bcc561a70b6f = $this->env->getExtension("native_profiler");
        $__internal_584c0dd67b5c68232b30c8276df03929ff96496bd748620c90c5bcc561a70b6f->enter($__internal_584c0dd67b5c68232b30c8276df03929ff96496bd748620c90c5bcc561a70b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFCoreBundle::layoutCore.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_584c0dd67b5c68232b30c8276df03929ff96496bd748620c90c5bcc561a70b6f->leave($__internal_584c0dd67b5c68232b30c8276df03929ff96496bd748620c90c5bcc561a70b6f_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_499f3beaea36854252e92b1691bb53a52b6df08847605636bb8e01207ebfbd7a = $this->env->getExtension("native_profiler");
        $__internal_499f3beaea36854252e92b1691bb53a52b6df08847605636bb8e01207ebfbd7a->enter($__internal_499f3beaea36854252e92b1691bb53a52b6df08847605636bb8e01207ebfbd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "  <header class = \"row\">
        <div id=\"header\" class=\"jumbotron\">
            <div class=\"row\">
\t\t\t  <section>
                <div class = \"col-lg-2\">
                <img src=\"http://localhost/Crotoy/web/images/roseau.JPG\" alt=\"roseau\" width=\"100\" height=\"80\">
\t            <div>
\t\t      </section>
\t\t\t  <section>
\t            <div class = \"col-lg-8 col-lg-offset-1\">
                    <h1>La maison du Crotoy</h1>
\t            </div>
\t\t\t  </section>
\t        </div>
            <div>
                ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 25
            echo "\t\t\t\t    <ul>
                        <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
\t\t\t\t\t    <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Mot de passe oublié ?</a></li>
\t\t\t\t\t</ul>
                ";
        }
        // line 30
        echo "            </div>
\t\t\t
\t    </div>
    </header>
  ";
        
        $__internal_499f3beaea36854252e92b1691bb53a52b6df08847605636bb8e01207ebfbd7a->leave($__internal_499f3beaea36854252e92b1691bb53a52b6df08847605636bb8e01207ebfbd7a_prof);

    }

    // line 39
    public function block_core($context, array $blocks = array())
    {
        $__internal_34d5dee1a3d48c101bdaa7c48d83b153abb7acd7d061fc3baaa9878804d1b8ec = $this->env->getExtension("native_profiler");
        $__internal_34d5dee1a3d48c101bdaa7c48d83b153abb7acd7d061fc3baaa9878804d1b8ec->enter($__internal_34d5dee1a3d48c101bdaa7c48d83b153abb7acd7d061fc3baaa9878804d1b8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "core"));

        // line 40
        echo "     <div class=\"navbar navbar-default\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_accueil");
        echo "\">Accueil</a></li>
\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("vf_blog_accueil");
        echo "\">Blog</a></li>
        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("vf_crotoy_photos");
        echo "\">Photos</a></li>
        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
        echo "\">Réservation</a></li>
\t\t<li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("vf_personne_recherche");
        echo "\">Personnes</a></li>
\t\t<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("vf_voyager_menu");
        echo "\">Voyager</a></li>
\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("vf_habiter_accueil");
        echo "\">Habiter</a></li>
\t\t<li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mon compte utilisateur</a></li>
\t\t ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_PROPRIETAIRE")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("vf_proprietaire_accueil");
            echo "\">Propriétaire</a></li>";
        }
        // line 51
        echo "\t\t 
      </ul>
\t </div>
    ";
        
        $__internal_34d5dee1a3d48c101bdaa7c48d83b153abb7acd7d061fc3baaa9878804d1b8ec->leave($__internal_34d5dee1a3d48c101bdaa7c48d83b153abb7acd7d061fc3baaa9878804d1b8ec_prof);

    }

    // line 56
    public function block_demarrage($context, array $blocks = array())
    {
        $__internal_5840dc0840c2c8d8e61d0e10e5d9d0e8c4ef570a710b78f292eb5929cab059e6 = $this->env->getExtension("native_profiler");
        $__internal_5840dc0840c2c8d8e61d0e10e5d9d0e8c4ef570a710b78f292eb5929cab059e6->enter($__internal_5840dc0840c2c8d8e61d0e10e5d9d0e8c4ef570a710b78f292eb5929cab059e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "demarrage"));

        // line 57
        echo "          <p><img src=\"http://localhost/Crotoy/web/images/baie_bleue.JPG\" alt=\"baie_bleue\" width=\"1100\" height=\"500\"></p>
\t";
        
        $__internal_5840dc0840c2c8d8e61d0e10e5d9d0e8c4ef570a710b78f292eb5929cab059e6->leave($__internal_5840dc0840c2c8d8e61d0e10e5d9d0e8c4ef570a710b78f292eb5929cab059e6_prof);

    }

    // line 62
    public function block_flash($context, array $blocks = array())
    {
        $__internal_6d7b0da1be95aa9958c7830515ddcdfe08d9a21cb646c11d8cbddb1132005700 = $this->env->getExtension("native_profiler");
        $__internal_6d7b0da1be95aa9958c7830515ddcdfe08d9a21cb646c11d8cbddb1132005700->enter($__internal_6d7b0da1be95aa9958c7830515ddcdfe08d9a21cb646c11d8cbddb1132005700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        // line 63
        echo "    ";
        // line 64
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "           <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "           <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo " ";
        
        $__internal_6d7b0da1be95aa9958c7830515ddcdfe08d9a21cb646c11d8cbddb1132005700->leave($__internal_6d7b0da1be95aa9958c7830515ddcdfe08d9a21cb646c11d8cbddb1132005700_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_78d64f2f01bc3e8aa9ab1b00f3a8dafbc395d02291f7b8c27b33bfbe596d6f98 = $this->env->getExtension("native_profiler");
        $__internal_78d64f2f01bc3e8aa9ab1b00f3a8dafbc395d02291f7b8c27b33bfbe596d6f98->enter($__internal_78d64f2f01bc3e8aa9ab1b00f3a8dafbc395d02291f7b8c27b33bfbe596d6f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "\t<div class=\"row\">
\t<div class=\"col-sm-2\">
\t";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
\t\t";
            // line 77
            $this->displayBlock('menu', $context, $blocks);
            // line 89
            echo "\t";
        }
        // line 90
        echo "    </div>
\t
\t
\t
\t<div class=\"col-sm-9 col-sm-offset-1\">
\t";
        // line 95
        $this->displayBlock('principal', $context, $blocks);
        // line 114
        echo "      

";
        
        $__internal_78d64f2f01bc3e8aa9ab1b00f3a8dafbc395d02291f7b8c27b33bfbe596d6f98->leave($__internal_78d64f2f01bc3e8aa9ab1b00f3a8dafbc395d02291f7b8c27b33bfbe596d6f98_prof);

    }

    // line 77
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d2f7cefcbf8231e1cb278ca920f4a03624505fe9425a81f35660ab14dbf7048 = $this->env->getExtension("native_profiler");
        $__internal_0d2f7cefcbf8231e1cb278ca920f4a03624505fe9425a81f35660ab14dbf7048->enter($__internal_0d2f7cefcbf8231e1cb278ca920f4a03624505fe9425a81f35660ab14dbf7048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " 
\t\t\t<aside>
\t\t\t\t\t";
        // line 80
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_user', $context, $blocks);
        // line 81
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_proprietaire', $context, $blocks);
        // line 82
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_reservation', $context, $blocks);
        // line 83
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_personne', $context, $blocks);
        // line 84
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_blog', $context, $blocks);
        // line 85
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_voyager', $context, $blocks);
        // line 86
        echo "\t\t\t\t\t";
        $this->displayBlock('menu_habiter', $context, $blocks);
        // line 87
        echo "\t\t\t</aside>
\t\t";
        
        $__internal_0d2f7cefcbf8231e1cb278ca920f4a03624505fe9425a81f35660ab14dbf7048->leave($__internal_0d2f7cefcbf8231e1cb278ca920f4a03624505fe9425a81f35660ab14dbf7048_prof);

    }

    // line 80
    public function block_menu_user($context, array $blocks = array())
    {
        $__internal_7dab6d224f779a8039fe76ea7794e5beb2a54f33e29c464ef8dfcb9e916fbdda = $this->env->getExtension("native_profiler");
        $__internal_7dab6d224f779a8039fe76ea7794e5beb2a54f33e29c464ef8dfcb9e916fbdda->enter($__internal_7dab6d224f779a8039fe76ea7794e5beb2a54f33e29c464ef8dfcb9e916fbdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_user"));

        
        $__internal_7dab6d224f779a8039fe76ea7794e5beb2a54f33e29c464ef8dfcb9e916fbdda->leave($__internal_7dab6d224f779a8039fe76ea7794e5beb2a54f33e29c464ef8dfcb9e916fbdda_prof);

    }

    // line 81
    public function block_menu_proprietaire($context, array $blocks = array())
    {
        $__internal_863e62fed9096c7e9d10856f84e75b7b3980d2fb4b8f0f0db27b17540f762b2c = $this->env->getExtension("native_profiler");
        $__internal_863e62fed9096c7e9d10856f84e75b7b3980d2fb4b8f0f0db27b17540f762b2c->enter($__internal_863e62fed9096c7e9d10856f84e75b7b3980d2fb4b8f0f0db27b17540f762b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_proprietaire"));

        
        $__internal_863e62fed9096c7e9d10856f84e75b7b3980d2fb4b8f0f0db27b17540f762b2c->leave($__internal_863e62fed9096c7e9d10856f84e75b7b3980d2fb4b8f0f0db27b17540f762b2c_prof);

    }

    // line 82
    public function block_menu_reservation($context, array $blocks = array())
    {
        $__internal_f912df0aec57a35c87726ee868eb0f7ff7c8caff124dea6b85788f53031c4221 = $this->env->getExtension("native_profiler");
        $__internal_f912df0aec57a35c87726ee868eb0f7ff7c8caff124dea6b85788f53031c4221->enter($__internal_f912df0aec57a35c87726ee868eb0f7ff7c8caff124dea6b85788f53031c4221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reservation"));

        
        $__internal_f912df0aec57a35c87726ee868eb0f7ff7c8caff124dea6b85788f53031c4221->leave($__internal_f912df0aec57a35c87726ee868eb0f7ff7c8caff124dea6b85788f53031c4221_prof);

    }

    // line 83
    public function block_menu_personne($context, array $blocks = array())
    {
        $__internal_0138f42e5e6273e1774bcc2cc1facb7f5c24696e7296ebc5385c3419b15bb463 = $this->env->getExtension("native_profiler");
        $__internal_0138f42e5e6273e1774bcc2cc1facb7f5c24696e7296ebc5385c3419b15bb463->enter($__internal_0138f42e5e6273e1774bcc2cc1facb7f5c24696e7296ebc5385c3419b15bb463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_personne"));

        
        $__internal_0138f42e5e6273e1774bcc2cc1facb7f5c24696e7296ebc5385c3419b15bb463->leave($__internal_0138f42e5e6273e1774bcc2cc1facb7f5c24696e7296ebc5385c3419b15bb463_prof);

    }

    // line 84
    public function block_menu_blog($context, array $blocks = array())
    {
        $__internal_4e554a8eca479ad8f4cd0ff798b0d0d26e0d6ad1080dce1e6b494c75f5564598 = $this->env->getExtension("native_profiler");
        $__internal_4e554a8eca479ad8f4cd0ff798b0d0d26e0d6ad1080dce1e6b494c75f5564598->enter($__internal_4e554a8eca479ad8f4cd0ff798b0d0d26e0d6ad1080dce1e6b494c75f5564598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_blog"));

        
        $__internal_4e554a8eca479ad8f4cd0ff798b0d0d26e0d6ad1080dce1e6b494c75f5564598->leave($__internal_4e554a8eca479ad8f4cd0ff798b0d0d26e0d6ad1080dce1e6b494c75f5564598_prof);

    }

    // line 85
    public function block_menu_voyager($context, array $blocks = array())
    {
        $__internal_f642794b76873fdc30b51c501b6bffe685f82f9b9e3e86aa277dd8872fac3413 = $this->env->getExtension("native_profiler");
        $__internal_f642794b76873fdc30b51c501b6bffe685f82f9b9e3e86aa277dd8872fac3413->enter($__internal_f642794b76873fdc30b51c501b6bffe685f82f9b9e3e86aa277dd8872fac3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_voyager"));

        
        $__internal_f642794b76873fdc30b51c501b6bffe685f82f9b9e3e86aa277dd8872fac3413->leave($__internal_f642794b76873fdc30b51c501b6bffe685f82f9b9e3e86aa277dd8872fac3413_prof);

    }

    // line 86
    public function block_menu_habiter($context, array $blocks = array())
    {
        $__internal_d84331a06b8a84224bf71e1e4e6064676aca76ef66e53ea319ffe9647a3c2e0e = $this->env->getExtension("native_profiler");
        $__internal_d84331a06b8a84224bf71e1e4e6064676aca76ef66e53ea319ffe9647a3c2e0e->enter($__internal_d84331a06b8a84224bf71e1e4e6064676aca76ef66e53ea319ffe9647a3c2e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_habiter"));

        echo " ";
        
        $__internal_d84331a06b8a84224bf71e1e4e6064676aca76ef66e53ea319ffe9647a3c2e0e->leave($__internal_d84331a06b8a84224bf71e1e4e6064676aca76ef66e53ea319ffe9647a3c2e0e_prof);

    }

    // line 95
    public function block_principal($context, array $blocks = array())
    {
        $__internal_30c3ec9a33b8ab05aaf9c84bca1ba41f7c658f44195b798f157025f4066e171e = $this->env->getExtension("native_profiler");
        $__internal_30c3ec9a33b8ab05aaf9c84bca1ba41f7c658f44195b798f157025f4066e171e->enter($__internal_30c3ec9a33b8ab05aaf9c84bca1ba41f7c658f44195b798f157025f4066e171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "principal"));

        // line 96
        echo "\t\t
\t\t ";
        // line 97
        $this->displayBlock('recherche', $context, $blocks);
        // line 98
        echo "\t\t ";
        $this->displayBlock('reservation', $context, $blocks);
        // line 99
        echo "\t\t ";
        $this->displayBlock('personne', $context, $blocks);
        // line 100
        echo "\t\t ";
        $this->displayBlock('proprietaire', $context, $blocks);
        // line 101
        echo "\t\t ";
        $this->displayBlock('booking', $context, $blocks);
        // line 102
        echo "\t\t ";
        $this->displayBlock('voyager', $context, $blocks);
        // line 103
        echo "\t\t ";
        $this->displayBlock('habiter', $context, $blocks);
        // line 104
        echo "\t\t 
\t\t ";
        // line 105
        $this->displayBlock('crotoy', $context, $blocks);
        // line 113
        echo "\t</div>
\t";
        
        $__internal_30c3ec9a33b8ab05aaf9c84bca1ba41f7c658f44195b798f157025f4066e171e->leave($__internal_30c3ec9a33b8ab05aaf9c84bca1ba41f7c658f44195b798f157025f4066e171e_prof);

    }

    // line 97
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_f6b213ae1c6a8092eb6fd10d499af16d18e0047d9ad29e16c086fff3d50abe62 = $this->env->getExtension("native_profiler");
        $__internal_f6b213ae1c6a8092eb6fd10d499af16d18e0047d9ad29e16c086fff3d50abe62->enter($__internal_f6b213ae1c6a8092eb6fd10d499af16d18e0047d9ad29e16c086fff3d50abe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_f6b213ae1c6a8092eb6fd10d499af16d18e0047d9ad29e16c086fff3d50abe62->leave($__internal_f6b213ae1c6a8092eb6fd10d499af16d18e0047d9ad29e16c086fff3d50abe62_prof);

    }

    // line 98
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_e5d2d16e4113a942a1c276ad0954ebf59dd250782fbe063d4121d73db3fd162c = $this->env->getExtension("native_profiler");
        $__internal_e5d2d16e4113a942a1c276ad0954ebf59dd250782fbe063d4121d73db3fd162c->enter($__internal_e5d2d16e4113a942a1c276ad0954ebf59dd250782fbe063d4121d73db3fd162c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        
        $__internal_e5d2d16e4113a942a1c276ad0954ebf59dd250782fbe063d4121d73db3fd162c->leave($__internal_e5d2d16e4113a942a1c276ad0954ebf59dd250782fbe063d4121d73db3fd162c_prof);

    }

    // line 99
    public function block_personne($context, array $blocks = array())
    {
        $__internal_bf98cdad1f72fa67ad617a43f114c5b0691647fa33c4f1669b804995a6cfb156 = $this->env->getExtension("native_profiler");
        $__internal_bf98cdad1f72fa67ad617a43f114c5b0691647fa33c4f1669b804995a6cfb156->enter($__internal_bf98cdad1f72fa67ad617a43f114c5b0691647fa33c4f1669b804995a6cfb156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "personne"));

        
        $__internal_bf98cdad1f72fa67ad617a43f114c5b0691647fa33c4f1669b804995a6cfb156->leave($__internal_bf98cdad1f72fa67ad617a43f114c5b0691647fa33c4f1669b804995a6cfb156_prof);

    }

    // line 100
    public function block_proprietaire($context, array $blocks = array())
    {
        $__internal_1e6dd2c28d23db38c573edcbf1d85d013b1f4a26541cd1a507e0c10d327bb7e1 = $this->env->getExtension("native_profiler");
        $__internal_1e6dd2c28d23db38c573edcbf1d85d013b1f4a26541cd1a507e0c10d327bb7e1->enter($__internal_1e6dd2c28d23db38c573edcbf1d85d013b1f4a26541cd1a507e0c10d327bb7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proprietaire"));

        
        $__internal_1e6dd2c28d23db38c573edcbf1d85d013b1f4a26541cd1a507e0c10d327bb7e1->leave($__internal_1e6dd2c28d23db38c573edcbf1d85d013b1f4a26541cd1a507e0c10d327bb7e1_prof);

    }

    // line 101
    public function block_booking($context, array $blocks = array())
    {
        $__internal_a6a41c2c43892a866b6591bd441b2b0b54b5ba0328bdb3b4bbbcd7f9691f4604 = $this->env->getExtension("native_profiler");
        $__internal_a6a41c2c43892a866b6591bd441b2b0b54b5ba0328bdb3b4bbbcd7f9691f4604->enter($__internal_a6a41c2c43892a866b6591bd441b2b0b54b5ba0328bdb3b4bbbcd7f9691f4604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "booking"));

        
        $__internal_a6a41c2c43892a866b6591bd441b2b0b54b5ba0328bdb3b4bbbcd7f9691f4604->leave($__internal_a6a41c2c43892a866b6591bd441b2b0b54b5ba0328bdb3b4bbbcd7f9691f4604_prof);

    }

    // line 102
    public function block_voyager($context, array $blocks = array())
    {
        $__internal_359e464eaf86ddf381857c49fbccd5838c0cabe7708566ff5046337cf7f2bb1d = $this->env->getExtension("native_profiler");
        $__internal_359e464eaf86ddf381857c49fbccd5838c0cabe7708566ff5046337cf7f2bb1d->enter($__internal_359e464eaf86ddf381857c49fbccd5838c0cabe7708566ff5046337cf7f2bb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "voyager"));

        
        $__internal_359e464eaf86ddf381857c49fbccd5838c0cabe7708566ff5046337cf7f2bb1d->leave($__internal_359e464eaf86ddf381857c49fbccd5838c0cabe7708566ff5046337cf7f2bb1d_prof);

    }

    // line 103
    public function block_habiter($context, array $blocks = array())
    {
        $__internal_95f12f2712ad186654ae45e04c6194df380c761cfc15609d4a5ff33daedd7af4 = $this->env->getExtension("native_profiler");
        $__internal_95f12f2712ad186654ae45e04c6194df380c761cfc15609d4a5ff33daedd7af4->enter($__internal_95f12f2712ad186654ae45e04c6194df380c761cfc15609d4a5ff33daedd7af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "habiter"));

        
        $__internal_95f12f2712ad186654ae45e04c6194df380c761cfc15609d4a5ff33daedd7af4->leave($__internal_95f12f2712ad186654ae45e04c6194df380c761cfc15609d4a5ff33daedd7af4_prof);

    }

    // line 105
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_9d4bd5ee73e8a5fc585fade89df04dc4607ca428b046b50cce538134729ec028 = $this->env->getExtension("native_profiler");
        $__internal_9d4bd5ee73e8a5fc585fade89df04dc4607ca428b046b50cce538134729ec028->enter($__internal_9d4bd5ee73e8a5fc585fade89df04dc4607ca428b046b50cce538134729ec028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        // line 106
        echo "\t\t\t ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 107
            echo "\t\t\t\t <section class = \"col-lg-10\">
\t\t\t\t   <h2>Bienvenue dans la maison du Crotoy !</h2>
\t\t\t\t<p><img src=\"http://localhost/Crotoy/web/images/vue_aerienne.JPG\" alt=\"vue_aérienne_20.11\" width=\"600\" height=\"480\"></p>
\t\t\t\t </section>
\t\t   ";
        }
        // line 112
        echo "\t\t ";
        
        $__internal_9d4bd5ee73e8a5fc585fade89df04dc4607ca428b046b50cce538134729ec028->leave($__internal_9d4bd5ee73e8a5fc585fade89df04dc4607ca428b046b50cce538134729ec028_prof);

    }

    // line 118
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ebe1304485f65f55ce334f1db355ff4d0f27de5d95e6482a82f41250e8295144 = $this->env->getExtension("native_profiler");
        $__internal_ebe1304485f65f55ce334f1db355ff4d0f27de5d95e6482a82f41250e8295144->enter($__internal_ebe1304485f65f55ce334f1db355ff4d0f27de5d95e6482a82f41250e8295144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 119
        echo " <footer class = \"row\">
   <div class = \"col-lg-12\">
    ";
        // line 121
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
        <p>A bientôt! </p>  
    ";
        } else {
            // line 124
            echo "    ";
        }
        // line 125
        echo "   </div>
 </footer>

";
        
        $__internal_ebe1304485f65f55ce334f1db355ff4d0f27de5d95e6482a82f41250e8295144->leave($__internal_ebe1304485f65f55ce334f1db355ff4d0f27de5d95e6482a82f41250e8295144_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d20977f75148ee2c519dd31fb5bb99e73eb9d80c32a91cdf7f3a9b967c6dde7 = $this->env->getExtension("native_profiler");
        $__internal_2d20977f75148ee2c519dd31fb5bb99e73eb9d80c32a91cdf7f3a9b967c6dde7->enter($__internal_2d20977f75148ee2c519dd31fb5bb99e73eb9d80c32a91cdf7f3a9b967c6dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_2d20977f75148ee2c519dd31fb5bb99e73eb9d80c32a91cdf7f3a9b967c6dde7->leave($__internal_2d20977f75148ee2c519dd31fb5bb99e73eb9d80c32a91cdf7f3a9b967c6dde7_prof);

    }

    public function getTemplateName()
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 131,  555 => 130,  545 => 125,  542 => 124,  536 => 121,  532 => 119,  526 => 118,  519 => 112,  512 => 107,  509 => 106,  503 => 105,  492 => 103,  481 => 102,  470 => 101,  459 => 100,  448 => 99,  437 => 98,  426 => 97,  418 => 113,  416 => 105,  413 => 104,  410 => 103,  407 => 102,  404 => 101,  401 => 100,  398 => 99,  395 => 98,  393 => 97,  390 => 96,  384 => 95,  372 => 86,  361 => 85,  350 => 84,  339 => 83,  328 => 82,  317 => 81,  306 => 80,  298 => 87,  295 => 86,  292 => 85,  289 => 84,  286 => 83,  283 => 82,  280 => 81,  277 => 80,  268 => 77,  259 => 114,  257 => 95,  250 => 90,  247 => 89,  245 => 77,  241 => 76,  237 => 74,  231 => 73,  224 => 70,  215 => 68,  210 => 67,  201 => 65,  196 => 64,  194 => 63,  188 => 62,  180 => 57,  174 => 56,  164 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  130 => 43,  126 => 42,  122 => 40,  116 => 39,  105 => 30,  99 => 27,  95 => 26,  92 => 25,  87 => 23,  82 => 22,  80 => 21,  63 => 6,  57 => 5,  11 => 3,);
    }
}
/* {# src/VF/CoreBundle/Resources/views/layoutCore.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/*   {% block header %}*/
/*   <header class = "row">*/
/*         <div id="header" class="jumbotron">*/
/*             <div class="row">*/
/* 			  <section>*/
/*                 <div class = "col-lg-2">*/
/*                 <img src="http://localhost/Crotoy/web/images/roseau.JPG" alt="roseau" width="100" height="80">*/
/* 	            <div>*/
/* 		      </section>*/
/* 			  <section>*/
/* 	            <div class = "col-lg-8 col-lg-offset-1">*/
/*                     <h1>La maison du Crotoy</h1>*/
/* 	            </div>*/
/* 			  </section>*/
/* 	        </div>*/
/*             <div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     Connecté en tant que {{ app.user.username }}*/
/*                     <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*                 {% else %}*/
/* 				    <ul>*/
/*                         <li><a href="{{ path('fos_user_security_login') }}">Connexion</a></li>*/
/* 					    <li><a href="{{ path('fos_user_resetting_request') }}">Mot de passe oublié ?</a></li>*/
/* 					</ul>*/
/*                 {% endif %}*/
/*             </div>*/
/* 			*/
/* 	    </div>*/
/*     </header>*/
/*   {% endblock %}*/
/* */
/* */
/*  */
/* */
/*     {% block core %}*/
/*      <div class="navbar navbar-default">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="{{ path('vf_crotoy_accueil') }}">Accueil</a></li>*/
/* 		<li><a href="{{ path('vf_blog_accueil') }}">Blog</a></li>*/
/*         <li><a href="{{ path('vf_crotoy_photos') }}">Photos</a></li>*/
/*         <li><a href="{{ path('vf_reservation_recherche') }}">Réservation</a></li>*/
/* 		<li><a href="{{ path('vf_personne_recherche') }}">Personnes</a></li>*/
/* 		<li><a href="{{ path('vf_voyager_menu') }}">Voyager</a></li>*/
/* 		<li><a href="{{ path('vf_habiter_accueil') }}">Habiter</a></li>*/
/* 		<li><a href="{{ path('fos_user_profile_show') }}">Mon compte utilisateur</a></li>*/
/* 		 {% if is_granted("ROLE_PROPRIETAIRE") %}<li><a href="{{ path('vf_proprietaire_accueil') }}">Propriétaire</a></li>{% endif %}*/
/* 		 */
/*       </ul>*/
/* 	 </div>*/
/*     {% endblock %}*/
/*     */
/* 	   {% block demarrage %}*/
/*           <p><img src="http://localhost/Crotoy/web/images/baie_bleue.JPG" alt="baie_bleue" width="1100" height="500"></p>*/
/* 	{% endblock %}*/
/* */
/* */
/* */
/*  {% block flash %}*/
/*     {# On affiche tous les messages flash dont le nom est « info » #}*/
/*         {% for message in app.session.flashbag.get('info') %}*/
/*            <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*         {% endfor %}*/
/* 		{% for message in app.session.flashbag.get('notice') %}*/
/*            <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*         {% endfor %}*/
/*  {% endblock %}*/
/* */
/*  */
/*  {% block body %}*/
/* 	<div class="row">*/
/* 	<div class="col-sm-2">*/
/* 	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}  */
/* 		{% block menu %} */
/* 			<aside>*/
/* 					{# {{ render(controller("VFCrotoyBundle:Crotoy:menu")) }}   #}*/
/* 					{% block menu_user %}{% endblock %}*/
/* 					{% block menu_proprietaire %}{% endblock %}*/
/* 					{% block menu_reservation %}{% endblock %}*/
/* 					{% block menu_personne %}{% endblock %}*/
/* 					{% block menu_blog %}{% endblock %}*/
/* 					{% block menu_voyager %}{% endblock %}*/
/* 					{% block menu_habiter %} {% endblock %}*/
/* 			</aside>*/
/* 		{% endblock %}*/
/* 	{% endif %}*/
/*     </div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	<div class="col-sm-9 col-sm-offset-1">*/
/* 	{% block principal %}*/
/* 		*/
/* 		 {% block recherche %}{% endblock %}*/
/* 		 {% block reservation %}{% endblock %}*/
/* 		 {% block personne %}{% endblock %}*/
/* 		 {% block proprietaire %}{% endblock %}*/
/* 		 {% block booking %}{% endblock %}*/
/* 		 {% block voyager %}{% endblock %}*/
/* 		 {% block habiter %}{% endblock %}*/
/* 		 */
/* 		 {% block crotoy %}*/
/* 			 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 				 <section class = "col-lg-10">*/
/* 				   <h2>Bienvenue dans la maison du Crotoy !</h2>*/
/* 				<p><img src="http://localhost/Crotoy/web/images/vue_aerienne.JPG" alt="vue_aérienne_20.11" width="600" height="480"></p>*/
/* 				 </section>*/
/* 		   {% endif %}*/
/* 		 {% endblock %}*/
/* 	</div>*/
/* 	{% endblock %}      */
/* */
/* {% endblock %} */
/* */
/* {% block footer %}*/
/*  <footer class = "row">*/
/*    <div class = "col-lg-12">*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %} */
/*         <p>A bientôt! </p>  */
/*     {% else %}*/
/*     {% endif %}*/
/*    </div>*/
/*  </footer>*/
/* */
/* {% endblock %} */
/* */
/* {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* */
