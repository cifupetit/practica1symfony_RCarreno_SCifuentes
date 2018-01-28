<?php

/* AppBundle:Partit:listTemporadas.html.twig */
class __TwigTemplate_e15cfffbee21fac368fa9a2e5a29208e797156b072d36df28042538e5f6da8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listTemporadas.html.twig", 1);
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
        $__internal_44f913aa77ff3cf85bb30db2d83e2d28321a2c526525f482c0fc9acd2dab07c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f913aa77ff3cf85bb30db2d83e2d28321a2c526525f482c0fc9acd2dab07c7->enter($__internal_44f913aa77ff3cf85bb30db2d83e2d28321a2c526525f482c0fc9acd2dab07c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $__internal_8acf4c8484cc969616fb3c40c8f0896a7044cebe5a0f7de58cb80bf7a2cd56d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acf4c8484cc969616fb3c40c8f0896a7044cebe5a0f7de58cb80bf7a2cd56d1->enter($__internal_8acf4c8484cc969616fb3c40c8f0896a7044cebe5a0f7de58cb80bf7a2cd56d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f913aa77ff3cf85bb30db2d83e2d28321a2c526525f482c0fc9acd2dab07c7->leave($__internal_44f913aa77ff3cf85bb30db2d83e2d28321a2c526525f482c0fc9acd2dab07c7_prof);

        
        $__internal_8acf4c8484cc969616fb3c40c8f0896a7044cebe5a0f7de58cb80bf7a2cd56d1->leave($__internal_8acf4c8484cc969616fb3c40c8f0896a7044cebe5a0f7de58cb80bf7a2cd56d1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a606a0560e8b6a9699b61a0492d6cdab1e80ef971df27fb7afc4cfba2aa53ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a606a0560e8b6a9699b61a0492d6cdab1e80ef971df27fb7afc4cfba2aa53ee->enter($__internal_3a606a0560e8b6a9699b61a0492d6cdab1e80ef971df27fb7afc4cfba2aa53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a9dec7e10be283a663d18217d7e3aefced645da2590d5c02d4281f6f1a0790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9dec7e10be283a663d18217d7e3aefced645da2590d5c02d4281f6f1a0790e->enter($__internal_9a9dec7e10be283a663d18217d7e3aefced645da2590d5c02d4281f6f1a0790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a9dec7e10be283a663d18217d7e3aefced645da2590d5c02d4281f6f1a0790e->leave($__internal_9a9dec7e10be283a663d18217d7e3aefced645da2590d5c02d4281f6f1a0790e_prof);

        
        $__internal_3a606a0560e8b6a9699b61a0492d6cdab1e80ef971df27fb7afc4cfba2aa53ee->leave($__internal_3a606a0560e8b6a9699b61a0492d6cdab1e80ef971df27fb7afc4cfba2aa53ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3068795f72e49217c9eb7b2880c06f227e690519118c2263fc88fcd557d4ec01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3068795f72e49217c9eb7b2880c06f227e690519118c2263fc88fcd557d4ec01->enter($__internal_3068795f72e49217c9eb7b2880c06f227e690519118c2263fc88fcd557d4ec01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a1baaeb86d60438aa8f794fe3e94b07a8432af066b4fd959c2901d1ff41e045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1baaeb86d60438aa8f794fe3e94b07a8432af066b4fd959c2901d1ff41e045->enter($__internal_1a1baaeb86d60438aa8f794fe3e94b07a8432af066b4fd959c2901d1ff41e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Temporadas";
        
        $__internal_1a1baaeb86d60438aa8f794fe3e94b07a8432af066b4fd959c2901d1ff41e045->leave($__internal_1a1baaeb86d60438aa8f794fe3e94b07a8432af066b4fd959c2901d1ff41e045_prof);

        
        $__internal_3068795f72e49217c9eb7b2880c06f227e690519118c2263fc88fcd557d4ec01->leave($__internal_3068795f72e49217c9eb7b2880c06f227e690519118c2263fc88fcd557d4ec01_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_97c379a4080198eeebec5f2e234df16e768a598d8c2ce6f2311b32591e6b28f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c379a4080198eeebec5f2e234df16e768a598d8c2ce6f2311b32591e6b28f6->enter($__internal_97c379a4080198eeebec5f2e234df16e768a598d8c2ce6f2311b32591e6b28f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_559738b49622b801b44185103c067a22c13a3acc85a50d180aa0d1ca9fdf1c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559738b49622b801b44185103c067a22c13a3acc85a50d180aa0d1ca9fdf1c4f->enter($__internal_559738b49622b801b44185103c067a22c13a3acc85a50d180aa0d1ca9fdf1c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles de ";
        // line 9
        echo twig_escape_filter($this->env, ($context["comp"] ?? $this->getContext($context, "comp")), "html", null, true);
        echo "</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partits"] ?? $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\" ><a style=\"text-decoration:none;color:white;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidos", array("competicio" => $this->getAttribute($context["partit"], "competicio", array()), "temporada" => $this->getAttribute($context["partit"], "temporada", array()))), "html", null, true);
            echo "\">Temporada ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo "</button></a><br>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado temporadas disponibles en ";
            // line 16
            echo twig_escape_filter($this->env, ($context["comp"] ?? $this->getContext($context, "comp")), "html", null, true);
            echo "</div>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t
<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_559738b49622b801b44185103c067a22c13a3acc85a50d180aa0d1ca9fdf1c4f->leave($__internal_559738b49622b801b44185103c067a22c13a3acc85a50d180aa0d1ca9fdf1c4f_prof);

        
        $__internal_97c379a4080198eeebec5f2e234df16e768a598d8c2ce6f2311b32591e6b28f6->leave($__internal_97c379a4080198eeebec5f2e234df16e768a598d8c2ce6f2311b32591e6b28f6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listTemporadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 20,  122 => 19,  113 => 16,  110 => 15,  99 => 12,  94 => 11,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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

{% block title %}Temporadas{% endblock %}

{% block body %}
<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles de {{comp}}</h1>

\t\t{% for partit in partits %}
\t\t\t<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\" ><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidos' ,{'competicio': partit.competicio, 'temporada': partit.temporada}) }}\">Temporada {{partit.temporada}}</button></a><br>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado temporadas disponibles en {{comp}}</div>
\t\t
\t\t{% endfor %}
\t
<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('competiciones')}}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listTemporadas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\src\\AppBundle/Resources/views/Partit/listTemporadas.html.twig");
    }
}
