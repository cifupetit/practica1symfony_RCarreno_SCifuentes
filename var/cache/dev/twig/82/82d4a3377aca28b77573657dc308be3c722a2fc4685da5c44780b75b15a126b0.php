<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb4949872b544cd0f7b0b52f1bb3ab64ce61d44a1ed1f77b3d318b535c2c8e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4949872b544cd0f7b0b52f1bb3ab64ce61d44a1ed1f77b3d318b535c2c8e9b->enter($__internal_cb4949872b544cd0f7b0b52f1bb3ab64ce61d44a1ed1f77b3d318b535c2c8e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bb73b6ee34156905fe20017312108203685c8389784ff5487906da180d00cbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb73b6ee34156905fe20017312108203685c8389784ff5487906da180d00cbe6->enter($__internal_bb73b6ee34156905fe20017312108203685c8389784ff5487906da180d00cbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4949872b544cd0f7b0b52f1bb3ab64ce61d44a1ed1f77b3d318b535c2c8e9b->leave($__internal_cb4949872b544cd0f7b0b52f1bb3ab64ce61d44a1ed1f77b3d318b535c2c8e9b_prof);

        
        $__internal_bb73b6ee34156905fe20017312108203685c8389784ff5487906da180d00cbe6->leave($__internal_bb73b6ee34156905fe20017312108203685c8389784ff5487906da180d00cbe6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84adc0c0c65dff33def6a079cff8ee1b0dd41e3ddfa51fc93850f9bd92965573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84adc0c0c65dff33def6a079cff8ee1b0dd41e3ddfa51fc93850f9bd92965573->enter($__internal_84adc0c0c65dff33def6a079cff8ee1b0dd41e3ddfa51fc93850f9bd92965573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ac6ce3ee98e4931cd21fa94364935c88bf1e6ccc9c5fd6712b9c50f2a4a569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac6ce3ee98e4931cd21fa94364935c88bf1e6ccc9c5fd6712b9c50f2a4a569b->enter($__internal_5ac6ce3ee98e4931cd21fa94364935c88bf1e6ccc9c5fd6712b9c50f2a4a569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ac6ce3ee98e4931cd21fa94364935c88bf1e6ccc9c5fd6712b9c50f2a4a569b->leave($__internal_5ac6ce3ee98e4931cd21fa94364935c88bf1e6ccc9c5fd6712b9c50f2a4a569b_prof);

        
        $__internal_84adc0c0c65dff33def6a079cff8ee1b0dd41e3ddfa51fc93850f9bd92965573->leave($__internal_84adc0c0c65dff33def6a079cff8ee1b0dd41e3ddfa51fc93850f9bd92965573_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36625e49ef5caac54a6fe8ed4f379d40047c778134f1d6db7cc5d2e632f699a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36625e49ef5caac54a6fe8ed4f379d40047c778134f1d6db7cc5d2e632f699a8->enter($__internal_36625e49ef5caac54a6fe8ed4f379d40047c778134f1d6db7cc5d2e632f699a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1d2e0abe87907ffe0864a877fe5e2eb9d7b7379d8b4fbaa5b1c1f2803ff90d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d2e0abe87907ffe0864a877fe5e2eb9d7b7379d8b4fbaa5b1c1f2803ff90d4->enter($__internal_b1d2e0abe87907ffe0864a877fe5e2eb9d7b7379d8b4fbaa5b1c1f2803ff90d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1d2e0abe87907ffe0864a877fe5e2eb9d7b7379d8b4fbaa5b1c1f2803ff90d4->leave($__internal_b1d2e0abe87907ffe0864a877fe5e2eb9d7b7379d8b4fbaa5b1c1f2803ff90d4_prof);

        
        $__internal_36625e49ef5caac54a6fe8ed4f379d40047c778134f1d6db7cc5d2e632f699a8->leave($__internal_36625e49ef5caac54a6fe8ed4f379d40047c778134f1d6db7cc5d2e632f699a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc5b1b5c3bf1b01a34b2c006579603b7e5246161bcd0bffd0fb2a4ff580e91cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5b1b5c3bf1b01a34b2c006579603b7e5246161bcd0bffd0fb2a4ff580e91cf->enter($__internal_cc5b1b5c3bf1b01a34b2c006579603b7e5246161bcd0bffd0fb2a4ff580e91cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1719916f13f6eb2a5fc33bced896e0127c390948e4630a649b491ec900d78370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1719916f13f6eb2a5fc33bced896e0127c390948e4630a649b491ec900d78370->enter($__internal_1719916f13f6eb2a5fc33bced896e0127c390948e4630a649b491ec900d78370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1719916f13f6eb2a5fc33bced896e0127c390948e4630a649b491ec900d78370->leave($__internal_1719916f13f6eb2a5fc33bced896e0127c390948e4630a649b491ec900d78370_prof);

        
        $__internal_cc5b1b5c3bf1b01a34b2c006579603b7e5246161bcd0bffd0fb2a4ff580e91cf->leave($__internal_cc5b1b5c3bf1b01a34b2c006579603b7e5246161bcd0bffd0fb2a4ff580e91cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
