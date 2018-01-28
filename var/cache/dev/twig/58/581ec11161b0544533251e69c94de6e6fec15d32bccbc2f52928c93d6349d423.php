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
        $__internal_5a335a47c13cc4f98733a0054bcff2d5ab32b4c42232c568384033d3ed9383df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a335a47c13cc4f98733a0054bcff2d5ab32b4c42232c568384033d3ed9383df->enter($__internal_5a335a47c13cc4f98733a0054bcff2d5ab32b4c42232c568384033d3ed9383df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $__internal_fb5d14beea4e0da5aa0f293ac6a511ac978d15a1e342cc7a9a13fe3eef02f4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5d14beea4e0da5aa0f293ac6a511ac978d15a1e342cc7a9a13fe3eef02f4fe->enter($__internal_fb5d14beea4e0da5aa0f293ac6a511ac978d15a1e342cc7a9a13fe3eef02f4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a335a47c13cc4f98733a0054bcff2d5ab32b4c42232c568384033d3ed9383df->leave($__internal_5a335a47c13cc4f98733a0054bcff2d5ab32b4c42232c568384033d3ed9383df_prof);

        
        $__internal_fb5d14beea4e0da5aa0f293ac6a511ac978d15a1e342cc7a9a13fe3eef02f4fe->leave($__internal_fb5d14beea4e0da5aa0f293ac6a511ac978d15a1e342cc7a9a13fe3eef02f4fe_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_424ac01abad69ef4e44eca936d067743c102238dd62b9ef84ee845f35ef4de3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424ac01abad69ef4e44eca936d067743c102238dd62b9ef84ee845f35ef4de3f->enter($__internal_424ac01abad69ef4e44eca936d067743c102238dd62b9ef84ee845f35ef4de3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_937df3cc43b6808daeb9ad1c7bfcd9f0ba520f26fc4f6faa0587ae6ad23f0fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937df3cc43b6808daeb9ad1c7bfcd9f0ba520f26fc4f6faa0587ae6ad23f0fd0->enter($__internal_937df3cc43b6808daeb9ad1c7bfcd9f0ba520f26fc4f6faa0587ae6ad23f0fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_937df3cc43b6808daeb9ad1c7bfcd9f0ba520f26fc4f6faa0587ae6ad23f0fd0->leave($__internal_937df3cc43b6808daeb9ad1c7bfcd9f0ba520f26fc4f6faa0587ae6ad23f0fd0_prof);

        
        $__internal_424ac01abad69ef4e44eca936d067743c102238dd62b9ef84ee845f35ef4de3f->leave($__internal_424ac01abad69ef4e44eca936d067743c102238dd62b9ef84ee845f35ef4de3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_198067808a305eb08cd0f151f362a4e7121306acd9624c9731e11afba8582d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198067808a305eb08cd0f151f362a4e7121306acd9624c9731e11afba8582d2e->enter($__internal_198067808a305eb08cd0f151f362a4e7121306acd9624c9731e11afba8582d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01439cdfd7b04c16ae1d3d4729116fb20f0b91c73eca2c94e2a2ae1de162e44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01439cdfd7b04c16ae1d3d4729116fb20f0b91c73eca2c94e2a2ae1de162e44e->enter($__internal_01439cdfd7b04c16ae1d3d4729116fb20f0b91c73eca2c94e2a2ae1de162e44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos";
        
        $__internal_01439cdfd7b04c16ae1d3d4729116fb20f0b91c73eca2c94e2a2ae1de162e44e->leave($__internal_01439cdfd7b04c16ae1d3d4729116fb20f0b91c73eca2c94e2a2ae1de162e44e_prof);

        
        $__internal_198067808a305eb08cd0f151f362a4e7121306acd9624c9731e11afba8582d2e->leave($__internal_198067808a305eb08cd0f151f362a4e7121306acd9624c9731e11afba8582d2e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4467a2df826fc5f2960d7b50cb3b1823cb406cdae4924d2f90f086988f6457df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4467a2df826fc5f2960d7b50cb3b1823cb406cdae4924d2f90f086988f6457df->enter($__internal_4467a2df826fc5f2960d7b50cb3b1823cb406cdae4924d2f90f086988f6457df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3ed9e1f63a6aa55170670926e3712080e75654eab14d3c8c9f301a427695851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ed9e1f63a6aa55170670926e3712080e75654eab14d3c8c9f301a427695851->enter($__internal_a3ed9e1f63a6aa55170670926e3712080e75654eab14d3c8c9f301a427695851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos en la temporada ";
            // line 20
            echo twig_escape_filter($this->env, ($context["temp"] ?? $this->getContext($context, "temp")), "html", null, true);
            echo " de la ";
            echo twig_escape_filter($this->env, ($context["comp"] ?? $this->getContext($context, "comp")), "html", null, true);
            echo "</div>
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
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidosDeEquipoForm");
        echo "\">Buscar partidos de cierto equipo</a></button>

</div>
";
        
        $__internal_a3ed9e1f63a6aa55170670926e3712080e75654eab14d3c8c9f301a427695851->leave($__internal_a3ed9e1f63a6aa55170670926e3712080e75654eab14d3c8c9f301a427695851_prof);

        
        $__internal_4467a2df826fc5f2960d7b50cb3b1823cb406cdae4924d2f90f086988f6457df->leave($__internal_4467a2df826fc5f2960d7b50cb3b1823cb406cdae4924d2f90f086988f6457df_prof);

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
        return array (  143 => 25,  139 => 24,  136 => 23,  125 => 20,  122 => 19,  111 => 15,  105 => 14,  102 => 13,  97 => 12,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t\t\t\t<h4>{{partit.equipLocal.nomEquip}} - {{partit.equipVisitant.nomEquip}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos en la temporada {{temp}} de la {{comp}}</div>
\t\t
\t\t{% endfor %}
\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,{'competicio' : comp} ) }}\">Temporadas</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidosDeEquipoForm') }}\">Buscar partidos de cierto equipo</a></button>

</div>
{% endblock %}
", "AppBundle:Partit:listPartidos.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidos.html.twig");
    }
}
