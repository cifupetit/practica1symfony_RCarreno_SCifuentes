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
        $__internal_ed89cd0b57c0882010b471008b637653448f3b673d03f493ca2aaa9880784043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed89cd0b57c0882010b471008b637653448f3b673d03f493ca2aaa9880784043->enter($__internal_ed89cd0b57c0882010b471008b637653448f3b673d03f493ca2aaa9880784043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_17401313a9807764ecc6f4585cfe9720b685d31524b4858cefce10b179a97c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17401313a9807764ecc6f4585cfe9720b685d31524b4858cefce10b179a97c1c->enter($__internal_17401313a9807764ecc6f4585cfe9720b685d31524b4858cefce10b179a97c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed89cd0b57c0882010b471008b637653448f3b673d03f493ca2aaa9880784043->leave($__internal_ed89cd0b57c0882010b471008b637653448f3b673d03f493ca2aaa9880784043_prof);

        
        $__internal_17401313a9807764ecc6f4585cfe9720b685d31524b4858cefce10b179a97c1c->leave($__internal_17401313a9807764ecc6f4585cfe9720b685d31524b4858cefce10b179a97c1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f63939b08068828624ae4b144a0d9a3ce56089df52e8dc47049fe11476eecdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63939b08068828624ae4b144a0d9a3ce56089df52e8dc47049fe11476eecdd1->enter($__internal_f63939b08068828624ae4b144a0d9a3ce56089df52e8dc47049fe11476eecdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f2bf13c85af2dcc8f504328ec44b9ddfb5b8b8006476db3eb93d209024a86dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bf13c85af2dcc8f504328ec44b9ddfb5b8b8006476db3eb93d209024a86dcb->enter($__internal_f2bf13c85af2dcc8f504328ec44b9ddfb5b8b8006476db3eb93d209024a86dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f2bf13c85af2dcc8f504328ec44b9ddfb5b8b8006476db3eb93d209024a86dcb->leave($__internal_f2bf13c85af2dcc8f504328ec44b9ddfb5b8b8006476db3eb93d209024a86dcb_prof);

        
        $__internal_f63939b08068828624ae4b144a0d9a3ce56089df52e8dc47049fe11476eecdd1->leave($__internal_f63939b08068828624ae4b144a0d9a3ce56089df52e8dc47049fe11476eecdd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0606ba1bba09024e7a2e905044372dc70e3e686c1644d907648ba6e0c02dbf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0606ba1bba09024e7a2e905044372dc70e3e686c1644d907648ba6e0c02dbf59->enter($__internal_0606ba1bba09024e7a2e905044372dc70e3e686c1644d907648ba6e0c02dbf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_70dd973b1638f71f18f57ad1449a8b13445807a1c56f1c18d744a0aef3e60970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dd973b1638f71f18f57ad1449a8b13445807a1c56f1c18d744a0aef3e60970->enter($__internal_70dd973b1638f71f18f57ad1449a8b13445807a1c56f1c18d744a0aef3e60970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_70dd973b1638f71f18f57ad1449a8b13445807a1c56f1c18d744a0aef3e60970->leave($__internal_70dd973b1638f71f18f57ad1449a8b13445807a1c56f1c18d744a0aef3e60970_prof);

        
        $__internal_0606ba1bba09024e7a2e905044372dc70e3e686c1644d907648ba6e0c02dbf59->leave($__internal_0606ba1bba09024e7a2e905044372dc70e3e686c1644d907648ba6e0c02dbf59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4398d2d5557c10472a789f3c68ab920404be14d0be84caaedd5d3d29282a3b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4398d2d5557c10472a789f3c68ab920404be14d0be84caaedd5d3d29282a3b92->enter($__internal_4398d2d5557c10472a789f3c68ab920404be14d0be84caaedd5d3d29282a3b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2bc67d3dc7620073e39271f537351a4203ab15a804c537a76b45831a97a1cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bc67d3dc7620073e39271f537351a4203ab15a804c537a76b45831a97a1cc2->enter($__internal_f2bc67d3dc7620073e39271f537351a4203ab15a804c537a76b45831a97a1cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2bc67d3dc7620073e39271f537351a4203ab15a804c537a76b45831a97a1cc2->leave($__internal_f2bc67d3dc7620073e39271f537351a4203ab15a804c537a76b45831a97a1cc2_prof);

        
        $__internal_4398d2d5557c10472a789f3c68ab920404be14d0be84caaedd5d3d29282a3b92->leave($__internal_4398d2d5557c10472a789f3c68ab920404be14d0be84caaedd5d3d29282a3b92_prof);

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
