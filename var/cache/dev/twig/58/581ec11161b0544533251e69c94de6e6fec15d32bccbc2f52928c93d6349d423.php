<?php

/* AppBundle:Partit:listPartidos.html.twig */
class __TwigTemplate_ea42856034000daa042aad2a82ad93187b50746d61d53f5e28729c9a7f8a629f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listPartidos.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fe2f5d03fd779eb822b2eabb4ae83dd25c2128eb02da4b773017c7b38c9f0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe2f5d03fd779eb822b2eabb4ae83dd25c2128eb02da4b773017c7b38c9f0ea->enter($__internal_0fe2f5d03fd779eb822b2eabb4ae83dd25c2128eb02da4b773017c7b38c9f0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $__internal_f258ebb1da91e3354138343ca818136308d3365a93480cfe213db225c2fa92aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f258ebb1da91e3354138343ca818136308d3365a93480cfe213db225c2fa92aa->enter($__internal_f258ebb1da91e3354138343ca818136308d3365a93480cfe213db225c2fa92aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe2f5d03fd779eb822b2eabb4ae83dd25c2128eb02da4b773017c7b38c9f0ea->leave($__internal_0fe2f5d03fd779eb822b2eabb4ae83dd25c2128eb02da4b773017c7b38c9f0ea_prof);

        
        $__internal_f258ebb1da91e3354138343ca818136308d3365a93480cfe213db225c2fa92aa->leave($__internal_f258ebb1da91e3354138343ca818136308d3365a93480cfe213db225c2fa92aa_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25f8801eda76d333f06691d922cccce99fb82fc2d3e2ef5de042e3526340457c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f8801eda76d333f06691d922cccce99fb82fc2d3e2ef5de042e3526340457c->enter($__internal_25f8801eda76d333f06691d922cccce99fb82fc2d3e2ef5de042e3526340457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11549af07a3c5208e48e12a75a1714628f003b265f6de7555230dab0c1eca930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11549af07a3c5208e48e12a75a1714628f003b265f6de7555230dab0c1eca930->enter($__internal_11549af07a3c5208e48e12a75a1714628f003b265f6de7555230dab0c1eca930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11549af07a3c5208e48e12a75a1714628f003b265f6de7555230dab0c1eca930->leave($__internal_11549af07a3c5208e48e12a75a1714628f003b265f6de7555230dab0c1eca930_prof);

        
        $__internal_25f8801eda76d333f06691d922cccce99fb82fc2d3e2ef5de042e3526340457c->leave($__internal_25f8801eda76d333f06691d922cccce99fb82fc2d3e2ef5de042e3526340457c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_107df94ba37d8f6b5c71c9d8600b2de216d0f543ef71f27bbfe72f80ce0237b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107df94ba37d8f6b5c71c9d8600b2de216d0f543ef71f27bbfe72f80ce0237b5->enter($__internal_107df94ba37d8f6b5c71c9d8600b2de216d0f543ef71f27bbfe72f80ce0237b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab9191e269a76275490d869c450bcedb651971c8918134fff04d8dce1449f99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9191e269a76275490d869c450bcedb651971c8918134fff04d8dce1449f99b->enter($__internal_ab9191e269a76275490d869c450bcedb651971c8918134fff04d8dce1449f99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos";
        
        $__internal_ab9191e269a76275490d869c450bcedb651971c8918134fff04d8dce1449f99b->leave($__internal_ab9191e269a76275490d869c450bcedb651971c8918134fff04d8dce1449f99b_prof);

        
        $__internal_107df94ba37d8f6b5c71c9d8600b2de216d0f543ef71f27bbfe72f80ce0237b5->leave($__internal_107df94ba37d8f6b5c71c9d8600b2de216d0f543ef71f27bbfe72f80ce0237b5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f057a92698b0a4218f15657d63402c654be937b703475fd80664661582768389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f057a92698b0a4218f15657d63402c654be937b703475fd80664661582768389->enter($__internal_f057a92698b0a4218f15657d63402c654be937b703475fd80664661582768389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b25feeb978591a4850596829522a43890528c407f528480c71db38719596e7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25feeb978591a4850596829522a43890528c407f528480c71db38719596e7d4->enter($__internal_b25feeb978591a4850596829522a43890528c407f528480c71db38719596e7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos de ";
        // line 9
        echo twig_escape_filter($this->env, ($context["comp"] ?? $this->getContext($context, "comp")), "html", null, true);
        echo " de la temporada ";
        echo twig_escape_filter($this->env, ($context["temp"] ?? $this->getContext($context, "temp")), "html", null, true);
        echo "</h1>


\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partits"] ?? $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 13
            echo "\t\t\t<div>
\t\t\t\t<h4>Equipo local ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "iDequipLocal", array()), "html", null, true);
            echo " - Equipo visitante ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "iDequipVisitant", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golslocal", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golsvisitant", array()), "html", null, true);
            echo "</h5><br>
\t\t\t</div>
\t\t\t";
            // line 17
            $context["partitt"] = $context["partit"];
            // line 18
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado partidos...</button>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", array("competicio" => ($context["comp"] ?? $this->getContext($context, "comp")))), "html", null, true);
        echo "\">Temporadas</a></button>
</div>
";
        
        $__internal_b25feeb978591a4850596829522a43890528c407f528480c71db38719596e7d4->leave($__internal_b25feeb978591a4850596829522a43890528c407f528480c71db38719596e7d4_prof);

        
        $__internal_f057a92698b0a4218f15657d63402c654be937b703475fd80664661582768389->leave($__internal_f057a92698b0a4218f15657d63402c654be937b703475fd80664661582768389_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listPartidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 24,  134 => 23,  125 => 19,  120 => 18,  118 => 17,  111 => 15,  105 => 14,  102 => 13,  97 => 12,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block stylesheets %}
{% endblock %}

{% block title %}Partidos{% endblock %}

{% block body %}
<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos de {{comp}} de la temporada {{temp}}</h1>


\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h4>Equipo local {{partit.iDequipLocal}} - Equipo visitante {{partit.iDequipVisitant}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>
\t\t\t{% set partitt = partit %}
\t\t{% else %}
\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado partidos...</button>
\t\t
\t\t{% endfor %}
\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,{'competicio' : comp} ) }}\">Temporadas</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidos.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidos.html.twig");
    }
}
