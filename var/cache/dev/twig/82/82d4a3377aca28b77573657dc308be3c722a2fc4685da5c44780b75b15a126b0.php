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
        $__internal_fda55e12cca72cfa6bfd0326a0bce65a9cefd2a40a90833ac8b325a94ee5c97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda55e12cca72cfa6bfd0326a0bce65a9cefd2a40a90833ac8b325a94ee5c97a->enter($__internal_fda55e12cca72cfa6bfd0326a0bce65a9cefd2a40a90833ac8b325a94ee5c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c4857338ae567af3009a0b893d7ef27acb2569a2eb8110eaf0a926b83204284c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4857338ae567af3009a0b893d7ef27acb2569a2eb8110eaf0a926b83204284c->enter($__internal_c4857338ae567af3009a0b893d7ef27acb2569a2eb8110eaf0a926b83204284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda55e12cca72cfa6bfd0326a0bce65a9cefd2a40a90833ac8b325a94ee5c97a->leave($__internal_fda55e12cca72cfa6bfd0326a0bce65a9cefd2a40a90833ac8b325a94ee5c97a_prof);

        
        $__internal_c4857338ae567af3009a0b893d7ef27acb2569a2eb8110eaf0a926b83204284c->leave($__internal_c4857338ae567af3009a0b893d7ef27acb2569a2eb8110eaf0a926b83204284c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66cc0fe3d89648545634a5573dc0b44af262d908d3dd0d76276b8a21a8ff92b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66cc0fe3d89648545634a5573dc0b44af262d908d3dd0d76276b8a21a8ff92b8->enter($__internal_66cc0fe3d89648545634a5573dc0b44af262d908d3dd0d76276b8a21a8ff92b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df3a6f6e874b007e6e0a59429fe702de5bc16a8a19cd54e8ab5d0812547a72f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3a6f6e874b007e6e0a59429fe702de5bc16a8a19cd54e8ab5d0812547a72f0->enter($__internal_df3a6f6e874b007e6e0a59429fe702de5bc16a8a19cd54e8ab5d0812547a72f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df3a6f6e874b007e6e0a59429fe702de5bc16a8a19cd54e8ab5d0812547a72f0->leave($__internal_df3a6f6e874b007e6e0a59429fe702de5bc16a8a19cd54e8ab5d0812547a72f0_prof);

        
        $__internal_66cc0fe3d89648545634a5573dc0b44af262d908d3dd0d76276b8a21a8ff92b8->leave($__internal_66cc0fe3d89648545634a5573dc0b44af262d908d3dd0d76276b8a21a8ff92b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3e8ef03291c7a3c53968d64c6e7d011c1dfe8a80a35dff7e1931c9bc01cee0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e8ef03291c7a3c53968d64c6e7d011c1dfe8a80a35dff7e1931c9bc01cee0b->enter($__internal_b3e8ef03291c7a3c53968d64c6e7d011c1dfe8a80a35dff7e1931c9bc01cee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ecacf8f06888195f698dbb9bcec7a21e366578e2f60baa601c9468e34d148724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecacf8f06888195f698dbb9bcec7a21e366578e2f60baa601c9468e34d148724->enter($__internal_ecacf8f06888195f698dbb9bcec7a21e366578e2f60baa601c9468e34d148724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ecacf8f06888195f698dbb9bcec7a21e366578e2f60baa601c9468e34d148724->leave($__internal_ecacf8f06888195f698dbb9bcec7a21e366578e2f60baa601c9468e34d148724_prof);

        
        $__internal_b3e8ef03291c7a3c53968d64c6e7d011c1dfe8a80a35dff7e1931c9bc01cee0b->leave($__internal_b3e8ef03291c7a3c53968d64c6e7d011c1dfe8a80a35dff7e1931c9bc01cee0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d356a1b7a2fc9b62b651a8c4ff757820af8603442aaba99815c5893382063f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d356a1b7a2fc9b62b651a8c4ff757820af8603442aaba99815c5893382063f13->enter($__internal_d356a1b7a2fc9b62b651a8c4ff757820af8603442aaba99815c5893382063f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fff8cf997f7acda7a9d2a296132f4fb43851bd8f1bc64a531e9d94e3e7e0f76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff8cf997f7acda7a9d2a296132f4fb43851bd8f1bc64a531e9d94e3e7e0f76c->enter($__internal_fff8cf997f7acda7a9d2a296132f4fb43851bd8f1bc64a531e9d94e3e7e0f76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fff8cf997f7acda7a9d2a296132f4fb43851bd8f1bc64a531e9d94e3e7e0f76c->leave($__internal_fff8cf997f7acda7a9d2a296132f4fb43851bd8f1bc64a531e9d94e3e7e0f76c_prof);

        
        $__internal_d356a1b7a2fc9b62b651a8c4ff757820af8603442aaba99815c5893382063f13->leave($__internal_d356a1b7a2fc9b62b651a8c4ff757820af8603442aaba99815c5893382063f13_prof);

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
