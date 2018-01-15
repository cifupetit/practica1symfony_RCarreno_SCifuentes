<?php

/* AppBundle:Partit:listTemporadas.html.twig */
class __TwigTemplate_3d05878e32e3cd65c1064d74fdc5ea540eadc151ea35645cd92e415a87703480 extends Twig_Template
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
        $__internal_dfed4b7a71adb06cfed60e9375438f141db86eb02ba93fc222936d4af6f6fdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfed4b7a71adb06cfed60e9375438f141db86eb02ba93fc222936d4af6f6fdc4->enter($__internal_dfed4b7a71adb06cfed60e9375438f141db86eb02ba93fc222936d4af6f6fdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $__internal_68f75511d03c1c69466f66952c6dfe5060fbd1376d9c028ee183d92482ef860b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f75511d03c1c69466f66952c6dfe5060fbd1376d9c028ee183d92482ef860b->enter($__internal_68f75511d03c1c69466f66952c6dfe5060fbd1376d9c028ee183d92482ef860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfed4b7a71adb06cfed60e9375438f141db86eb02ba93fc222936d4af6f6fdc4->leave($__internal_dfed4b7a71adb06cfed60e9375438f141db86eb02ba93fc222936d4af6f6fdc4_prof);

        
        $__internal_68f75511d03c1c69466f66952c6dfe5060fbd1376d9c028ee183d92482ef860b->leave($__internal_68f75511d03c1c69466f66952c6dfe5060fbd1376d9c028ee183d92482ef860b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29d3836337257c86f029e0d709b35dfe3584b52f410a65df1029a117370864be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d3836337257c86f029e0d709b35dfe3584b52f410a65df1029a117370864be->enter($__internal_29d3836337257c86f029e0d709b35dfe3584b52f410a65df1029a117370864be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8b08c49fb78116b9a4af33930b53c77cf641e9261220d915e4a00a62adfce1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b08c49fb78116b9a4af33930b53c77cf641e9261220d915e4a00a62adfce1b0->enter($__internal_8b08c49fb78116b9a4af33930b53c77cf641e9261220d915e4a00a62adfce1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b08c49fb78116b9a4af33930b53c77cf641e9261220d915e4a00a62adfce1b0->leave($__internal_8b08c49fb78116b9a4af33930b53c77cf641e9261220d915e4a00a62adfce1b0_prof);

        
        $__internal_29d3836337257c86f029e0d709b35dfe3584b52f410a65df1029a117370864be->leave($__internal_29d3836337257c86f029e0d709b35dfe3584b52f410a65df1029a117370864be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4bd6910f30f8defed9200effae3c6ccef0608d9161508365534e5ed0a38eda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bd6910f30f8defed9200effae3c6ccef0608d9161508365534e5ed0a38eda0->enter($__internal_d4bd6910f30f8defed9200effae3c6ccef0608d9161508365534e5ed0a38eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afbb066ed5c10ddf7df369ed12a7d46d7357794873b5b029bd4e275680741c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbb066ed5c10ddf7df369ed12a7d46d7357794873b5b029bd4e275680741c81->enter($__internal_afbb066ed5c10ddf7df369ed12a7d46d7357794873b5b029bd4e275680741c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Temporadas";
        
        $__internal_afbb066ed5c10ddf7df369ed12a7d46d7357794873b5b029bd4e275680741c81->leave($__internal_afbb066ed5c10ddf7df369ed12a7d46d7357794873b5b029bd4e275680741c81_prof);

        
        $__internal_d4bd6910f30f8defed9200effae3c6ccef0608d9161508365534e5ed0a38eda0->leave($__internal_d4bd6910f30f8defed9200effae3c6ccef0608d9161508365534e5ed0a38eda0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b80223566eecc0fd271643a07c4cd22f0a4c61cec814676a701e315f29b79de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b80223566eecc0fd271643a07c4cd22f0a4c61cec814676a701e315f29b79de->enter($__internal_2b80223566eecc0fd271643a07c4cd22f0a4c61cec814676a701e315f29b79de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1be9170ddb96d34d432638c62622dddd148e8026888fe8c710d701ea5bb07f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1be9170ddb96d34d432638c62622dddd148e8026888fe8c710d701ea5bb07f3->enter($__internal_c1be9170ddb96d34d432638c62622dddd148e8026888fe8c710d701ea5bb07f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles de ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "html", null, true);
        echo "</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
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
            echo twig_escape_filter($this->env, (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "html", null, true);
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
        
        $__internal_c1be9170ddb96d34d432638c62622dddd148e8026888fe8c710d701ea5bb07f3->leave($__internal_c1be9170ddb96d34d432638c62622dddd148e8026888fe8c710d701ea5bb07f3_prof);

        
        $__internal_2b80223566eecc0fd271643a07c4cd22f0a4c61cec814676a701e315f29b79de->leave($__internal_2b80223566eecc0fd271643a07c4cd22f0a4c61cec814676a701e315f29b79de_prof);

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
", "AppBundle:Partit:listTemporadas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listTemporadas.html.twig");
    }
}
