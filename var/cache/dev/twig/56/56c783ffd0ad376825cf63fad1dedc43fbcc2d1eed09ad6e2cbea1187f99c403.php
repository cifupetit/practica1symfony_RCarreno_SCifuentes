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
        $__internal_fe216238a434629897749d5b00939846ab005bb8dd01e992a3078858395e4e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe216238a434629897749d5b00939846ab005bb8dd01e992a3078858395e4e85->enter($__internal_fe216238a434629897749d5b00939846ab005bb8dd01e992a3078858395e4e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidosDeEquipo.html.twig"));

        $__internal_e22b28f28f16c5c7e0070683e54ad3d9048cca1bc540ef058d5c48713ba27d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22b28f28f16c5c7e0070683e54ad3d9048cca1bc540ef058d5c48713ba27d8a->enter($__internal_e22b28f28f16c5c7e0070683e54ad3d9048cca1bc540ef058d5c48713ba27d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidosDeEquipo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe216238a434629897749d5b00939846ab005bb8dd01e992a3078858395e4e85->leave($__internal_fe216238a434629897749d5b00939846ab005bb8dd01e992a3078858395e4e85_prof);

        
        $__internal_e22b28f28f16c5c7e0070683e54ad3d9048cca1bc540ef058d5c48713ba27d8a->leave($__internal_e22b28f28f16c5c7e0070683e54ad3d9048cca1bc540ef058d5c48713ba27d8a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_579919506e6e5d07585df4baf561040f07be58aad1c3fbcd0c8e508dc369aff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579919506e6e5d07585df4baf561040f07be58aad1c3fbcd0c8e508dc369aff8->enter($__internal_579919506e6e5d07585df4baf561040f07be58aad1c3fbcd0c8e508dc369aff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8e054fe7f4da0662b90fd35721991f1bf0789c538cbd71dc378543838452780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e054fe7f4da0662b90fd35721991f1bf0789c538cbd71dc378543838452780->enter($__internal_b8e054fe7f4da0662b90fd35721991f1bf0789c538cbd71dc378543838452780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8e054fe7f4da0662b90fd35721991f1bf0789c538cbd71dc378543838452780->leave($__internal_b8e054fe7f4da0662b90fd35721991f1bf0789c538cbd71dc378543838452780_prof);

        
        $__internal_579919506e6e5d07585df4baf561040f07be58aad1c3fbcd0c8e508dc369aff8->leave($__internal_579919506e6e5d07585df4baf561040f07be58aad1c3fbcd0c8e508dc369aff8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca280896a086b9f650f5122434dd2c6b1d5f1af52beec9173eac57c60992c7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca280896a086b9f650f5122434dd2c6b1d5f1af52beec9173eac57c60992c7fe->enter($__internal_ca280896a086b9f650f5122434dd2c6b1d5f1af52beec9173eac57c60992c7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d06a8398df3eeb9083231ba482a4f54762a00f39989a9e14b7669b00060fd4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06a8398df3eeb9083231ba482a4f54762a00f39989a9e14b7669b00060fd4ed->enter($__internal_d06a8398df3eeb9083231ba482a4f54762a00f39989a9e14b7669b00060fd4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos de equipo";
        
        $__internal_d06a8398df3eeb9083231ba482a4f54762a00f39989a9e14b7669b00060fd4ed->leave($__internal_d06a8398df3eeb9083231ba482a4f54762a00f39989a9e14b7669b00060fd4ed_prof);

        
        $__internal_ca280896a086b9f650f5122434dd2c6b1d5f1af52beec9173eac57c60992c7fe->leave($__internal_ca280896a086b9f650f5122434dd2c6b1d5f1af52beec9173eac57c60992c7fe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a29b7123525e53d26352f3d359b2d016003ebb986301de9faff691128d500ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a29b7123525e53d26352f3d359b2d016003ebb986301de9faff691128d500ad->enter($__internal_8a29b7123525e53d26352f3d359b2d016003ebb986301de9faff691128d500ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30762a4da7619022d1a1c6cb82860ecfb7121545a79ecf33f2aa3e7dcb23e32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30762a4da7619022d1a1c6cb82860ecfb7121545a79ecf33f2aa3e7dcb23e32d->enter($__internal_30762a4da7619022d1a1c6cb82860ecfb7121545a79ecf33f2aa3e7dcb23e32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos jugados de ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(array(0 => 0), "nomEquip", array()), "html", null, true);
        echo "</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t<h4>Equipo local ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "iDequipLocal", array()), "html", null, true);
            echo " contra Equipo visitante ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "iDequipVisitant", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>Temporada ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo "</h5><br>
\t\t\t</div>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos jugados por el equipo ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(array(0 => 0), "nomEquip", array()), "html", null, true);
            echo "</div>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidosDeEquipoForm");
        echo "\">Buscar partidos de equipo</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_30762a4da7619022d1a1c6cb82860ecfb7121545a79ecf33f2aa3e7dcb23e32d->leave($__internal_30762a4da7619022d1a1c6cb82860ecfb7121545a79ecf33f2aa3e7dcb23e32d_prof);

        
        $__internal_8a29b7123525e53d26352f3d359b2d016003ebb986301de9faff691128d500ad->leave($__internal_8a29b7123525e53d26352f3d359b2d016003ebb986301de9faff691128d500ad_prof);

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
        return array (  138 => 24,  134 => 23,  131 => 22,  122 => 19,  119 => 18,  108 => 14,  102 => 13,  99 => 12,  94 => 11,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<h1 style=\"margin: 100px;\">Partidos jugados de {{[0].nomEquip}}</h1>

\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h4>Equipo local {{partit.iDequipLocal}} contra Equipo visitante {{partit.iDequipVisitant}}</h4>
\t\t\t\t<h5>Temporada {{partit.temporada}} - {{partit.competicio}}</h5><br>
\t\t\t</div>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos jugados por el equipo {{[0].nomEquip}}</div>
\t\t
\t\t{% endfor %}

\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidosDeEquipoForm') }}\">Buscar partidos de equipo</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('competiciones') }}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidosDeEquipo.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidosDeEquipo.html.twig");
    }
}
