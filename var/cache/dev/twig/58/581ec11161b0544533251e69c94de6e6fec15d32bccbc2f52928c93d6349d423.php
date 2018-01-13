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
        $__internal_aaa669b8255e15aff005e86b9e5bc097d415fc86971acbd64d2541f79456d275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa669b8255e15aff005e86b9e5bc097d415fc86971acbd64d2541f79456d275->enter($__internal_aaa669b8255e15aff005e86b9e5bc097d415fc86971acbd64d2541f79456d275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $__internal_1187d60be0e929c78e222692ce8db76fc3ee4ee23be9193f92ac8378345bfac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1187d60be0e929c78e222692ce8db76fc3ee4ee23be9193f92ac8378345bfac0->enter($__internal_1187d60be0e929c78e222692ce8db76fc3ee4ee23be9193f92ac8378345bfac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa669b8255e15aff005e86b9e5bc097d415fc86971acbd64d2541f79456d275->leave($__internal_aaa669b8255e15aff005e86b9e5bc097d415fc86971acbd64d2541f79456d275_prof);

        
        $__internal_1187d60be0e929c78e222692ce8db76fc3ee4ee23be9193f92ac8378345bfac0->leave($__internal_1187d60be0e929c78e222692ce8db76fc3ee4ee23be9193f92ac8378345bfac0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3a992265c257cbe7e053d9dd3f6293db36a737b4801ef1563b5d5e13c980ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a992265c257cbe7e053d9dd3f6293db36a737b4801ef1563b5d5e13c980ed8->enter($__internal_c3a992265c257cbe7e053d9dd3f6293db36a737b4801ef1563b5d5e13c980ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22763e2b2cd6ef349b37f6f8dbac05ee0c8c464a7250f02b52fad92c15fcae5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22763e2b2cd6ef349b37f6f8dbac05ee0c8c464a7250f02b52fad92c15fcae5a->enter($__internal_22763e2b2cd6ef349b37f6f8dbac05ee0c8c464a7250f02b52fad92c15fcae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_22763e2b2cd6ef349b37f6f8dbac05ee0c8c464a7250f02b52fad92c15fcae5a->leave($__internal_22763e2b2cd6ef349b37f6f8dbac05ee0c8c464a7250f02b52fad92c15fcae5a_prof);

        
        $__internal_c3a992265c257cbe7e053d9dd3f6293db36a737b4801ef1563b5d5e13c980ed8->leave($__internal_c3a992265c257cbe7e053d9dd3f6293db36a737b4801ef1563b5d5e13c980ed8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ae6d84d5714b035ccd4f814956fa48e05c3b6f77253235ac2f084356b55f456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae6d84d5714b035ccd4f814956fa48e05c3b6f77253235ac2f084356b55f456->enter($__internal_4ae6d84d5714b035ccd4f814956fa48e05c3b6f77253235ac2f084356b55f456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98b57a0608ad83a36b86bbef495fff0425f117aa6a614a109eb0ad24cbf83492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b57a0608ad83a36b86bbef495fff0425f117aa6a614a109eb0ad24cbf83492->enter($__internal_98b57a0608ad83a36b86bbef495fff0425f117aa6a614a109eb0ad24cbf83492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos";
        
        $__internal_98b57a0608ad83a36b86bbef495fff0425f117aa6a614a109eb0ad24cbf83492->leave($__internal_98b57a0608ad83a36b86bbef495fff0425f117aa6a614a109eb0ad24cbf83492_prof);

        
        $__internal_4ae6d84d5714b035ccd4f814956fa48e05c3b6f77253235ac2f084356b55f456->leave($__internal_4ae6d84d5714b035ccd4f814956fa48e05c3b6f77253235ac2f084356b55f456_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3f5845bda885eef4c7c596f9ec13adf432d1fed244379bfc73d2b5953c6ce8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f5845bda885eef4c7c596f9ec13adf432d1fed244379bfc73d2b5953c6ce8d->enter($__internal_d3f5845bda885eef4c7c596f9ec13adf432d1fed244379bfc73d2b5953c6ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2d629a6f1eb639ab955e89001655abb0f3664ed9088519ea28e935130c8c44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d629a6f1eb639ab955e89001655abb0f3664ed9088519ea28e935130c8c44b->enter($__internal_b2d629a6f1eb639ab955e89001655abb0f3664ed9088519ea28e935130c8c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos</h1>
\t";
        // line 10
        $context["partitt"] = ($context["partit"] ?? $this->getContext($context, "partit"));
        // line 11
        echo "
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", $this->getAttribute(($context["partitt"] ?? $this->getContext($context, "partitt")), "competicio", array())), "html", null, true);
        echo "\">Temporadas</a></button>
</div>
";
        
        $__internal_b2d629a6f1eb639ab955e89001655abb0f3664ed9088519ea28e935130c8c44b->leave($__internal_b2d629a6f1eb639ab955e89001655abb0f3664ed9088519ea28e935130c8c44b_prof);

        
        $__internal_d3f5845bda885eef4c7c596f9ec13adf432d1fed244379bfc73d2b5953c6ce8d->leave($__internal_d3f5845bda885eef4c7c596f9ec13adf432d1fed244379bfc73d2b5953c6ce8d_prof);

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
        return array (  135 => 24,  132 => 23,  123 => 19,  118 => 18,  116 => 17,  109 => 15,  103 => 14,  100 => 13,  95 => 12,  92 => 11,  90 => 10,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<h1 style=\"margin: 100px;\">Partidos</h1>
\t{% set partitt = partit %}

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
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,partitt.competicio) }}\">Temporadas</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidos.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidos.html.twig");
    }
}
