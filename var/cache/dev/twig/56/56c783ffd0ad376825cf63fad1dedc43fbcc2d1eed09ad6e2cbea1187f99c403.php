<?php

/* AppBundle:Partit:listPartidosDeEquipo.html.twig */
class __TwigTemplate_00d9b3699cf36741ba0af6dbd5674dfe7c7a566448f2b8b9c698eb6e7064cb9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listPartidosDeEquipo.html.twig", 1);
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
        $__internal_915e5ceaf7a9bb594387eaa3727994090ad448bc71b3749c80b11a9befa37f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915e5ceaf7a9bb594387eaa3727994090ad448bc71b3749c80b11a9befa37f56->enter($__internal_915e5ceaf7a9bb594387eaa3727994090ad448bc71b3749c80b11a9befa37f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidosDeEquipo.html.twig"));

        $__internal_b90e8b924ce086c504f2d0cc8531b831b073f58d70c4908ef730f9e3b2479e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e8b924ce086c504f2d0cc8531b831b073f58d70c4908ef730f9e3b2479e94->enter($__internal_b90e8b924ce086c504f2d0cc8531b831b073f58d70c4908ef730f9e3b2479e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidosDeEquipo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915e5ceaf7a9bb594387eaa3727994090ad448bc71b3749c80b11a9befa37f56->leave($__internal_915e5ceaf7a9bb594387eaa3727994090ad448bc71b3749c80b11a9befa37f56_prof);

        
        $__internal_b90e8b924ce086c504f2d0cc8531b831b073f58d70c4908ef730f9e3b2479e94->leave($__internal_b90e8b924ce086c504f2d0cc8531b831b073f58d70c4908ef730f9e3b2479e94_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b63d6188bbfae0e2b290515338dbcef1d1be8605fc67076f842a700956d3a10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63d6188bbfae0e2b290515338dbcef1d1be8605fc67076f842a700956d3a10b->enter($__internal_b63d6188bbfae0e2b290515338dbcef1d1be8605fc67076f842a700956d3a10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1564b206780ed618c599005f0df3dd1f0f492bc9dfdbf2cece60c37e7411ecc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1564b206780ed618c599005f0df3dd1f0f492bc9dfdbf2cece60c37e7411ecc0->enter($__internal_1564b206780ed618c599005f0df3dd1f0f492bc9dfdbf2cece60c37e7411ecc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1564b206780ed618c599005f0df3dd1f0f492bc9dfdbf2cece60c37e7411ecc0->leave($__internal_1564b206780ed618c599005f0df3dd1f0f492bc9dfdbf2cece60c37e7411ecc0_prof);

        
        $__internal_b63d6188bbfae0e2b290515338dbcef1d1be8605fc67076f842a700956d3a10b->leave($__internal_b63d6188bbfae0e2b290515338dbcef1d1be8605fc67076f842a700956d3a10b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cad10f4356a2504087d2391d10ec4e74368c220b3c0449b8b0de74196237530b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad10f4356a2504087d2391d10ec4e74368c220b3c0449b8b0de74196237530b->enter($__internal_cad10f4356a2504087d2391d10ec4e74368c220b3c0449b8b0de74196237530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8db28900c185fc91105d6dda99e312fbc09207f4b58210c314a2c89dabf9f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8db28900c185fc91105d6dda99e312fbc09207f4b58210c314a2c89dabf9f75->enter($__internal_b8db28900c185fc91105d6dda99e312fbc09207f4b58210c314a2c89dabf9f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos de equipo";
        
        $__internal_b8db28900c185fc91105d6dda99e312fbc09207f4b58210c314a2c89dabf9f75->leave($__internal_b8db28900c185fc91105d6dda99e312fbc09207f4b58210c314a2c89dabf9f75_prof);

        
        $__internal_cad10f4356a2504087d2391d10ec4e74368c220b3c0449b8b0de74196237530b->leave($__internal_cad10f4356a2504087d2391d10ec4e74368c220b3c0449b8b0de74196237530b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c723fb6c02e2ed91a8da221631aeb3e27dd80c87807ff1a40f638fe2c00fb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c723fb6c02e2ed91a8da221631aeb3e27dd80c87807ff1a40f638fe2c00fb03->enter($__internal_6c723fb6c02e2ed91a8da221631aeb3e27dd80c87807ff1a40f638fe2c00fb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3087dd67fbaf7725ffa40c3441869206048bf0e06022ce963cb1bef00298abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3087dd67fbaf7725ffa40c3441869206048bf0e06022ce963cb1bef00298abd->enter($__internal_e3087dd67fbaf7725ffa40c3441869206048bf0e06022ce963cb1bef00298abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos jugados de ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomEquip"]) ? $context["nomEquip"] : $this->getContext($context, "nomEquip")), "nomEquip", array()), "html", null, true);
        echo "</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t<h5>Temporada ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo "</h5>
\t\t\t\t<h4>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partit"], "equipLocal", array()), "nomEquip", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partit"], "equipVisitant", array()), "nomEquip", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golslocal", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golsvisitant", array()), "html", null, true);
            echo "</h5><br>
\t\t\t</div>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos jugados por el equipo ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomEquip"]) ? $context["nomEquip"] : $this->getContext($context, "nomEquip")), "nomEquip", array()), "html", null, true);
            echo "</div>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidosDeEquipoForm");
        echo "\">Buscar partidos de equipo</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_e3087dd67fbaf7725ffa40c3441869206048bf0e06022ce963cb1bef00298abd->leave($__internal_e3087dd67fbaf7725ffa40c3441869206048bf0e06022ce963cb1bef00298abd_prof);

        
        $__internal_6c723fb6c02e2ed91a8da221631aeb3e27dd80c87807ff1a40f638fe2c00fb03->leave($__internal_6c723fb6c02e2ed91a8da221631aeb3e27dd80c87807ff1a40f638fe2c00fb03_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listPartidosDeEquipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 25,  140 => 24,  137 => 23,  128 => 20,  125 => 19,  114 => 15,  108 => 14,  102 => 13,  99 => 12,  94 => 11,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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

{% block title %}Partidos de equipo{% endblock %}

{% block body %}
<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos jugados de {{nomEquip.nomEquip}}</h1>

\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h5>Temporada {{partit.temporada}} - {{partit.competicio}}</h5>
\t\t\t\t<h4>{{partit.equipLocal.nomEquip}} - {{partit.equipVisitant.nomEquip}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos jugados por el equipo {{nomEquip.nomEquip}}</div>
\t\t
\t\t{% endfor %}

\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidosDeEquipoForm') }}\">Buscar partidos de equipo</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('competiciones') }}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidosDeEquipo.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidosDeEquipo.html.twig");
    }
}
