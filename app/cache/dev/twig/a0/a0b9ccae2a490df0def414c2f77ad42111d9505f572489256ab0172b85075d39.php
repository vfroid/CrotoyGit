<?php

/* VFBookingBundle:Booking:month.html.twig */
class __TwigTemplate_bbc1674462e10f24f119847ada3bc6aa372f6ddc6f42bbe9e1b9ab96944deee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("VFBookingBundle::layoutBooking.html.twig", "VFBookingBundle:Booking:month.html.twig", 3);
        $this->blocks = array(
            'booking' => array($this, 'block_booking'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VFBookingBundle::layoutBooking.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a75c118ac5449e507c6cdea95459637b6ea8edc86cfa8a1b1d1423419bc22a5e = $this->env->getExtension("native_profiler");
        $__internal_a75c118ac5449e507c6cdea95459637b6ea8edc86cfa8a1b1d1423419bc22a5e->enter($__internal_a75c118ac5449e507c6cdea95459637b6ea8edc86cfa8a1b1d1423419bc22a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VFBookingBundle:Booking:month.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75c118ac5449e507c6cdea95459637b6ea8edc86cfa8a1b1d1423419bc22a5e->leave($__internal_a75c118ac5449e507c6cdea95459637b6ea8edc86cfa8a1b1d1423419bc22a5e_prof);

    }

    // line 6
    public function block_booking($context, array $blocks = array())
    {
        $__internal_81d68ed8f6c50d3008ec608fd38355ee91a539ebe895f8a3058d4e55089561af = $this->env->getExtension("native_profiler");
        $__internal_81d68ed8f6c50d3008ec608fd38355ee91a539ebe895f8a3058d4e55089561af->enter($__internal_81d68ed8f6c50d3008ec608fd38355ee91a539ebe895f8a3058d4e55089561af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "booking"));

        // line 7
        echo "
<h2> Calendrier des réservations </h2>

";
        // line 11
        echo "
\t";
        // line 12
        ob_start();
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t\t";
        $context["couleur"] = "";
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["months"]) ? $context["months"] : $this->getContext($context, "months"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "\t\t\t";
            if (($context["i"] == 1)) {
                // line 17
                echo "\t\t\t\t";
                $context["month"] = (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"));
                // line 18
                echo "\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t";
                $context["month"] = (((twig_date_format_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start"))) . " + ") . ($context["i"] - 1)) . "month");
                // line 20
                echo "\t\t\t";
            }
            // line 21
            echo "
\t\t\t";
            // line 22
            $context["days_current"] = twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "t");
            // line 23
            echo "\t\t\t";
            $context["first_day"] = ("1." . twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "F Y"));
            // line 24
            echo "\t\t\t";
            $context["last_day"] = (((isset($context["days_current"]) ? $context["days_current"] : $this->getContext($context, "days_current")) . ".") . twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "F Y"));
            // line 25
            echo "\t\t\t";
            $context["start_day_of_current"] = twig_date_format_filter($this->env, (isset($context["first_day"]) ? $context["first_day"] : $this->getContext($context, "first_day")), "N");
            // line 26
            echo "\t\t\t";
            $context["end_day_of_current"] = twig_date_format_filter($this->env, (isset($context["last_day"]) ? $context["last_day"] : $this->getContext($context, "last_day")), "N");
            // line 27
            echo "\t\t\t


\t\t\t\t\t\t\t 
\t\t\t<table class=\"table table-bordered table-striped table-condensed\">
\t\t\t\t<tr class=\"cf-booking-calendar-m\">
\t\t\t\t\t<th colspan=\"7\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "F Y"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Lun</th>
\t\t\t\t\t<th>Mar</th>
\t\t\t\t\t<th>Mer</th>
\t\t\t\t\t<th>Jeu</th>
\t\t\t\t\t<th>Ven</th>
\t\t\t\t\t<th>Sam</th>
\t\t\t\t\t<th>Dim</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (((isset($context["days_current"]) ? $context["days_current"] : $this->getContext($context, "days_current")) + (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) - 1)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["loop"], "index", array()) < (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current")))) {
                    // line 47
                    echo "\t\t\t\t\t\t<td class=\"cf-booking-calendar-empty\"></td>
\t\t\t\t\t";
                } else {
                    // line 49
                    echo "
\t\t\t\t\t\t";
                    // line 50
                    $context["full_date"] = (((($this->getAttribute($context["loop"], "index", array()) - (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) + 1) . ".") . twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), " F Y"));
                    // line 51
                    echo "\t\t\t\t\t\t";
                    $context["booked"] = 0;
                    // line 52
                    echo "\t\t\t\t\t\t";
                    $context["is_opener"] = 0;
                    // line 53
                    echo "\t\t\t\t\t\t";
                    $context["is_closer"] = 0;
                    // line 54
                    echo "\t\t\t\t\t\t";
                    $context["prenom"] = "";
                    // line 55
                    echo "\t\t\t\t\t\t";
                    $context["nom"] = "";
                    // line 56
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) ? $context["bookings"] : $this->getContext($context, "bookings")));
                    foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                        // line 57
                        echo "\t\t\t\t\t\t\t";
                        if (((twig_date_format_filter($this->env, (isset($context["full_date"]) ? $context["full_date"] : $this->getContext($context, "full_date")), "U") >= twig_date_format_filter($this->env, $this->getAttribute($context["booking"], "start", array()), "U")) && (twig_date_format_filter($this->env, (isset($context["full_date"]) ? $context["full_date"] : $this->getContext($context, "full_date")), "U") <= twig_date_format_filter($this->env, $this->getAttribute($context["booking"], "end", array()), "U")))) {
                            // line 58
                            echo "\t\t\t\t\t\t\t\t";
                            $context["booked"] = 1;
                            // line 59
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t";
                        if ((twig_date_format_filter($this->env, (isset($context["full_date"]) ? $context["full_date"] : $this->getContext($context, "full_date")), "d F Y") == twig_date_format_filter($this->env, $this->getAttribute($context["booking"], "start", array()), "d F Y"))) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t";
                            $context["is_opener"] = 1;
                            // line 62
                            echo "\t\t\t\t\t\t\t\t";
                            // line 63
                            echo "\t\t\t\t\t\t\t\t";
                            $context["prenom"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["booking"], "sejour", array()), "personne", array()), "prenom", array());
                            // line 64
                            echo "\t\t\t\t\t\t\t\t";
                            $context["nom"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["booking"], "sejour", array()), "personne", array()), "nom", array());
                            // line 65
                            echo "\t\t\t\t\t\t\t\t";
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (((((isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")) == "Vincent") && ((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) == "Froidevaux")) || (((isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")) == "Françoise") && ((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) == "Froidevaux")))) {
                                echo "  ";
                                $context["couleur"] = $this->getAttribute((isset($context["couleurs"]) ? $context["couleurs"] : $this->getContext($context, "couleurs")), "Vincent", array(), "array");
                                echo "  
\t\t\t\t\t\t\t\t\t";
                            } elseif (((                            // line 67
(isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")) == "Romain") && ((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) == "Froidevaux"))) {
                                echo "  ";
                                $context["couleur"] = $this->getAttribute((isset($context["couleurs"]) ? $context["couleurs"] : $this->getContext($context, "couleurs")), "Romain", array(), "array");
                                // line 68
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ((((isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")) == "Paul") && ((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) == "Froidevaux"))) {
                                echo "  ";
                                $context["couleur"] = $this->getAttribute((isset($context["couleurs"]) ? $context["couleurs"] : $this->getContext($context, "couleurs")), "Paul", array(), "array");
                                // line 69
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ((((isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")) == "Marine") && ((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")) == "Froidevaux"))) {
                                echo "  ";
                                $context["couleur"] = $this->getAttribute((isset($context["couleurs"]) ? $context["couleurs"] : $this->getContext($context, "couleurs")), "Marine", array(), "array");
                                // line 70
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo " ";
                                $context["couleur"] = "gray";
                                // line 71
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            // line 72
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 73
                        echo "\t\t\t\t\t\t\t";
                        if ((twig_date_format_filter($this->env, (isset($context["full_date"]) ? $context["full_date"] : $this->getContext($context, "full_date")), "d F Y") == twig_date_format_filter($this->env, $this->getAttribute($context["booking"], "end", array()), "d F Y"))) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t";
                            $context["is_closer"] = 1;
                            // line 75
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 82
                    if (((isset($context["booked"]) ? $context["booked"] : $this->getContext($context, "booked")) == 1)) {
                        echo " 
\t\t\t\t\t\t  
\t\t\t\t\t\t
\t\t\t\t\t\t    ";
                        // line 85
                        if (((isset($context["is_opener"]) ? $context["is_opener"] : $this->getContext($context, "is_opener")) == 1)) {
                            echo " 
\t\t\t\t\t\t\t\t<td style=\"background-color:";
                            // line 86
                            echo twig_escape_filter($this->env, (isset($context["couleur"]) ? $context["couleur"] : $this->getContext($context, "couleur")), "html", null, true);
                            echo "\";>";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) - (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) + 1), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
                            echo "</td> 
\t\t\t\t\t\t\t";
                        } else {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t<td style=\"background-color:";
                            echo twig_escape_filter($this->env, (isset($context["couleur"]) ? $context["couleur"] : $this->getContext($context, "couleur")), "html", null, true);
                            echo "\";>";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) - (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) + 1), "html", null, true);
                            echo "</td> 
\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t";
                    } else {
                        echo "<td><em>";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) - (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) + 1), "html", null, true);
                        echo "</em></td>
\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 93
                    if (((($this->getAttribute($context["loop"], "index", array()) % 7) == 0) && ($this->getAttribute($context["loop"], "index", array()) < (((isset($context["days_current"]) ? $context["days_current"] : $this->getContext($context, "days_current")) + (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) - 1)))) {
                        // line 94
                        echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 96
$context["loop"], "index", array()) == (((isset($context["days_current"]) ? $context["days_current"] : $this->getContext($context, "days_current")) + (isset($context["start_day_of_current"]) ? $context["start_day_of_current"] : $this->getContext($context, "start_day_of_current"))) - 1))) {
                        // line 97
                        echo "\t\t\t\t\t\t\t ";
                        if (((isset($context["end_day_of_current"]) ? $context["end_day_of_current"] : $this->getContext($context, "end_day_of_current")) != 7)) {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, (7 - (isset($context["end_day_of_current"]) ? $context["end_day_of_current"] : $this->getContext($context, "end_day_of_current")))));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 99
                                echo "\t\t\t\t\t\t\t\t\t <td class=\"cf-booking-calendar-empty\"></td>
\t\t\t\t\t\t\t\t ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 101
                            echo "\t\t\t\t\t\t\t ";
                        }
                        // line 102
                        echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t</table>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 109
        echo "\t
\t <div>
\t\t<a class=\"btn btn-info\" href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("vf_reservation_recherche");
        // line 112
        echo "\">Retour</a> 
\t</div>

";
        
        $__internal_81d68ed8f6c50d3008ec608fd38355ee91a539ebe895f8a3058d4e55089561af->leave($__internal_81d68ed8f6c50d3008ec608fd38355ee91a539ebe895f8a3058d4e55089561af_prof);

    }

    public function getTemplateName()
    {
        return "VFBookingBundle:Booking:month.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 112,  342 => 111,  338 => 109,  335 => 108,  328 => 106,  314 => 105,  311 => 104,  307 => 102,  304 => 101,  297 => 99,  292 => 98,  289 => 97,  287 => 96,  283 => 94,  281 => 93,  278 => 92,  270 => 90,  262 => 88,  253 => 86,  249 => 85,  243 => 82,  238 => 79,  230 => 76,  227 => 75,  224 => 74,  221 => 73,  218 => 72,  215 => 71,  210 => 70,  205 => 69,  200 => 68,  196 => 67,  189 => 66,  187 => 65,  184 => 64,  181 => 63,  179 => 62,  176 => 61,  173 => 60,  170 => 59,  167 => 58,  164 => 57,  159 => 56,  156 => 55,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  142 => 50,  139 => 49,  135 => 47,  132 => 46,  115 => 45,  100 => 33,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  55 => 15,  52 => 14,  50 => 13,  48 => 12,  45 => 11,  40 => 7,  34 => 6,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "VFBookingBundle::layoutBooking.html.twig" %}*/
/* */
/* */
/* {% block booking%}*/
/* */
/* <h2> Calendrier des réservations </h2>*/
/* */
/* {# voir page 464 de PHP & MYSQL #}*/
/* */
/* 	{% spaceless %}*/
/* 		{# DEFINITION COULEUR #}*/
/* 			{% set couleur = '' %}*/
/* 		{% for i in 1..months %}*/
/* 			{% if i == 1 %}*/
/* 				{% set month = start %}*/
/* 			{% else %}*/
/* 				{% set month = (start | date) ~ " + "~(i-1)~"month" %}*/
/* 			{% endif %}*/
/* */
/* 			{% set days_current = month | date('t') %}*/
/* 			{% set first_day = "1." ~ (month | date('F Y')) %}*/
/* 			{% set last_day = days_current~"." ~ (month | date('F Y')) %}*/
/* 			{% set start_day_of_current = first_day | date("N") %}*/
/* 			{% set end_day_of_current = last_day | date("N") %}*/
/* 			*/
/* */
/* */
/* 							 */
/* 			<table class="table table-bordered table-striped table-condensed">*/
/* 				<tr class="cf-booking-calendar-m">*/
/* 					<th colspan="7">{{ month | date("F Y") }}</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th>Lun</th>*/
/* 					<th>Mar</th>*/
/* 					<th>Mer</th>*/
/* 					<th>Jeu</th>*/
/* 					<th>Ven</th>*/
/* 					<th>Sam</th>*/
/* 					<th>Dim</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 				{% for i in 1..days_current+start_day_of_current-1 %}*/
/* 					{% if loop.index < start_day_of_current %}*/
/* 						<td class="cf-booking-calendar-empty"></td>*/
/* 					{% else %}*/
/* */
/* 						{% set full_date = (loop.index - start_day_of_current + 1)~"."~month | date(" F Y") %}*/
/* 						{% set booked = 0 %}*/
/* 						{% set is_opener = 0 %}*/
/* 						{% set is_closer = 0 %}*/
/* 						{% set prenom = '' %}*/
/* 						{% set nom = '' %}*/
/* 						{% for booking in bookings %}*/
/* 							{% if full_date | date("U") >= booking.start | date("U") and full_date | date("U") <= booking.end | date("U") %}*/
/* 								{% set booked = 1 %}*/
/* 							{% endif %}*/
/* 							{% if full_date | date("d F Y") == booking.start | date("d F Y") %}*/
/* 								{% set is_opener = 1 %}*/
/* 								{# CAPTURE DU NOM ET PRENOM #}*/
/* 								{% set prenom =  booking.sejour.personne.prenom  %}*/
/* 								{% set nom =  booking.sejour.personne.nom  %}*/
/* 								{# AJUSTEMENT DES COULEURS #}*/
/* 									{% if ((prenom == 'Vincent') and (nom == 'Froidevaux')) or ((prenom == 'Françoise') and (nom == 'Froidevaux')) %}  {% set couleur = couleurs['Vincent'] %}  */
/* 									{% elseif ((prenom == 'Romain') and (nom == 'Froidevaux')) %}  {% set couleur = couleurs['Romain'] %}*/
/* 									{% elseif ((prenom == 'Paul') and (nom == 'Froidevaux')) %}  {% set couleur = couleurs['Paul'] %}*/
/* 									{% elseif ((prenom == 'Marine') and (nom == 'Froidevaux')) %}  {% set couleur = couleurs['Marine'] %}*/
/* 									{% else %} {% set couleur = 'gray' %}*/
/* 									{% endif %}*/
/* 							{% endif %}*/
/* 							{% if full_date | date("d F Y") == booking.end | date("d F Y") %}*/
/* 								{% set is_closer = 1 %}*/
/* 							{% endif %}*/
/* 							*/
/* 							*/
/* 						{% endfor %}*/
/* 						*/
/* 						*/
/* 						*/
/* 						{% if booked == 1 %} */
/* 						  */
/* 						*/
/* 						    {% if is_opener == 1 %} */
/* 								<td style="background-color:{{ couleur }}";>{{ loop.index-start_day_of_current+1 }} {{ prenom }}</td> */
/* 							{% else %}*/
/* 								<td style="background-color:{{ couleur }}";>{{ loop.index-start_day_of_current+1 }}</td> */
/* 							{% endif %}*/
/* 						{% else %}<td><em>{{ loop.index-start_day_of_current+1 }}</em></td>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if loop.index%7 == 0 and loop.index < days_current+start_day_of_current-1 %}*/
/* 							</tr>*/
/* 							<tr>*/
/* 						{% elseif loop.index == days_current+start_day_of_current - 1%}*/
/* 							 {% if end_day_of_current != 7 %}*/
/* 								 {% for j in 1..7-end_day_of_current %}*/
/* 									 <td class="cf-booking-calendar-empty"></td>*/
/* 								 {% endfor %}*/
/* 							 {% endif %}*/
/* 							</tr>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</table>*/
/* 		{% endfor %}*/
/* 	{% endspaceless %}*/
/* 	*/
/* 	 <div>*/
/* 		<a class="btn btn-info" href="{{ path('vf_reservation_recherche'*/
/* 		) }}">Retour</a> */
/* 	</div>*/
/* */
/* {% endblock%}*/
/* */
/* */
/* */
/* */
/* */
