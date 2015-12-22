<?php

/* VFBookingBundle::layoutBooking.html.twig */
class __TwigTemplate_ec8a920d48963881d14af7a9ae32b3e6ee259b70c6c51894218b084a0ceb9a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFCoreBundle::layoutCore.html.twig", "VFBookingBundle::layoutBooking.html.twig", 3);
        $this->blocks = array(
            'crotoy' => array($this, 'block_crotoy'),
            'menu_reservation' => array($this, 'block_menu_reservation'),
            'booking' => array($this, 'block_booking'),
            'calendrier' => array($this, 'block_calendrier'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFCoreBundle::layoutCore.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_090a3c1b550c40b17ce0131547a629c63ab40c189ad442cb305657f8fa5e1e5d = $this->env->getExtension("native_profiler");
        $__internal_090a3c1b550c40b17ce0131547a629c63ab40c189ad442cb305657f8fa5e1e5d->enter($__internal_090a3c1b550c40b17ce0131547a629c63ab40c189ad442cb305657f8fa5e1e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFBookingBundle::layoutBooking.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090a3c1b550c40b17ce0131547a629c63ab40c189ad442cb305657f8fa5e1e5d->leave($__internal_090a3c1b550c40b17ce0131547a629c63ab40c189ad442cb305657f8fa5e1e5d_prof);

    }

    // line 6
    public function block_crotoy($context, array $blocks = array())
    {
        $__internal_40eba55c6428a6c228b9f311f69327770ce0bdede88cf74b6cf263e4ed05525c = $this->env->getExtension("native_profiler");
        $__internal_40eba55c6428a6c228b9f311f69327770ce0bdede88cf74b6cf263e4ed05525c->enter($__internal_40eba55c6428a6c228b9f311f69327770ce0bdede88cf74b6cf263e4ed05525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crotoy"));

        echo " ";
        
        $__internal_40eba55c6428a6c228b9f311f69327770ce0bdede88cf74b6cf263e4ed05525c->leave($__internal_40eba55c6428a6c228b9f311f69327770ce0bdede88cf74b6cf263e4ed05525c_prof);

    }

    // line 9
    public function block_menu_reservation($context, array $blocks = array())
    {
        $__internal_f6f4871e3187b0c221a01d197ecd70f88ee7884ad840f165f710bc865e3c450e = $this->env->getExtension("native_profiler");
        $__internal_f6f4871e3187b0c221a01d197ecd70f88ee7884ad840f165f710bc865e3c450e->enter($__internal_f6f4871e3187b0c221a01d197ecd70f88ee7884ad840f165f710bc865e3c450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reservation"));

        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VFCrotoyBundle:Reservation:menu"));
        echo " ";
        
        $__internal_f6f4871e3187b0c221a01d197ecd70f88ee7884ad840f165f710bc865e3c450e->leave($__internal_f6f4871e3187b0c221a01d197ecd70f88ee7884ad840f165f710bc865e3c450e_prof);

    }

    // line 14
    public function block_booking($context, array $blocks = array())
    {
        $__internal_e7cb426ec8d8bca04f1e54999e14baa0c8855455cc8a772a12d17ec2b2c421a1 = $this->env->getExtension("native_profiler");
        $__internal_e7cb426ec8d8bca04f1e54999e14baa0c8855455cc8a772a12d17ec2b2c421a1->enter($__internal_e7cb426ec8d8bca04f1e54999e14baa0c8855455cc8a772a12d17ec2b2c421a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "booking"));

        echo "  
     ";
        // line 15
        $this->displayBlock('calendrier', $context, $blocks);
        // line 16
        echo "  
  ";
        
        $__internal_e7cb426ec8d8bca04f1e54999e14baa0c8855455cc8a772a12d17ec2b2c421a1->leave($__internal_e7cb426ec8d8bca04f1e54999e14baa0c8855455cc8a772a12d17ec2b2c421a1_prof);

    }

    // line 15
    public function block_calendrier($context, array $blocks = array())
    {
        $__internal_7070bbd16eba5b8cf5545331460dbbcd8b3af51f704e5a329ca63e125cdefa61 = $this->env->getExtension("native_profiler");
        $__internal_7070bbd16eba5b8cf5545331460dbbcd8b3af51f704e5a329ca63e125cdefa61->enter($__internal_7070bbd16eba5b8cf5545331460dbbcd8b3af51f704e5a329ca63e125cdefa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendrier"));

        
        $__internal_7070bbd16eba5b8cf5545331460dbbcd8b3af51f704e5a329ca63e125cdefa61->leave($__internal_7070bbd16eba5b8cf5545331460dbbcd8b3af51f704e5a329ca63e125cdefa61_prof);

    }

    public function getTemplateName()
    {
        return "VFBookingBundle::layoutBooking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  73 => 16,  71 => 15,  63 => 14,  49 => 9,  37 => 6,  11 => 3,);
    }
}
/* {# src/VF/CrotoyBundle/Resources/views/layoutBooking.html.twig #}*/
/* */
/* {% extends "VFCoreBundle::layoutCore.html.twig" %}*/
/*       */
/* */
/*  {% block crotoy %} {% endblock %} */
/* */
/* */
/*  {% block menu_reservation %}  {{ render(controller("VFCrotoyBundle:Reservation:menu")) }} {% endblock %} */
/* */
/* */
/*  */
/*  */
/*   {% block booking %}  */
/*      {% block  calendrier %}{% endblock%}*/
/*   */
/*   {% endblock%}*/
/* */
