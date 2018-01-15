<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_45069e412a426bc1ca89b72e453a407efe2dca30496e923ff8f24dea7be1b850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45069e412a426bc1ca89b72e453a407efe2dca30496e923ff8f24dea7be1b850->enter($__internal_45069e412a426bc1ca89b72e453a407efe2dca30496e923ff8f24dea7be1b850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2573df1eb52c501859df1e85186d4599ec0edfa597fe7627d92efa3744e4caaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2573df1eb52c501859df1e85186d4599ec0edfa597fe7627d92efa3744e4caaa->enter($__internal_2573df1eb52c501859df1e85186d4599ec0edfa597fe7627d92efa3744e4caaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45069e412a426bc1ca89b72e453a407efe2dca30496e923ff8f24dea7be1b850->leave($__internal_45069e412a426bc1ca89b72e453a407efe2dca30496e923ff8f24dea7be1b850_prof);

        
        $__internal_2573df1eb52c501859df1e85186d4599ec0edfa597fe7627d92efa3744e4caaa->leave($__internal_2573df1eb52c501859df1e85186d4599ec0edfa597fe7627d92efa3744e4caaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a0889ffe679328c975115e644e6c17696f308e1f3476cac9b28eb5b0ec8cff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0889ffe679328c975115e644e6c17696f308e1f3476cac9b28eb5b0ec8cff5->enter($__internal_3a0889ffe679328c975115e644e6c17696f308e1f3476cac9b28eb5b0ec8cff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c0d78a1ddc87562eaf6d8cfbf32e56f6eaa52830cce3e2d0979f4a9124e49b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0d78a1ddc87562eaf6d8cfbf32e56f6eaa52830cce3e2d0979f4a9124e49b0->enter($__internal_1c0d78a1ddc87562eaf6d8cfbf32e56f6eaa52830cce3e2d0979f4a9124e49b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1c0d78a1ddc87562eaf6d8cfbf32e56f6eaa52830cce3e2d0979f4a9124e49b0->leave($__internal_1c0d78a1ddc87562eaf6d8cfbf32e56f6eaa52830cce3e2d0979f4a9124e49b0_prof);

        
        $__internal_3a0889ffe679328c975115e644e6c17696f308e1f3476cac9b28eb5b0ec8cff5->leave($__internal_3a0889ffe679328c975115e644e6c17696f308e1f3476cac9b28eb5b0ec8cff5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_113fd27b7a4f1ec33e6a68c5ab32f18eb8d49ccedbe988648b0a8e7b4a4bd77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113fd27b7a4f1ec33e6a68c5ab32f18eb8d49ccedbe988648b0a8e7b4a4bd77e->enter($__internal_113fd27b7a4f1ec33e6a68c5ab32f18eb8d49ccedbe988648b0a8e7b4a4bd77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0488db65463fde77c1e0a06968d480910bed9bca6de2938183a5c7b8a8752927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0488db65463fde77c1e0a06968d480910bed9bca6de2938183a5c7b8a8752927->enter($__internal_0488db65463fde77c1e0a06968d480910bed9bca6de2938183a5c7b8a8752927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0488db65463fde77c1e0a06968d480910bed9bca6de2938183a5c7b8a8752927->leave($__internal_0488db65463fde77c1e0a06968d480910bed9bca6de2938183a5c7b8a8752927_prof);

        
        $__internal_113fd27b7a4f1ec33e6a68c5ab32f18eb8d49ccedbe988648b0a8e7b4a4bd77e->leave($__internal_113fd27b7a4f1ec33e6a68c5ab32f18eb8d49ccedbe988648b0a8e7b4a4bd77e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd572eb41b91d0b679913ce712414a3ac479ab9412ab2f48e0af8d360bc2fa81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd572eb41b91d0b679913ce712414a3ac479ab9412ab2f48e0af8d360bc2fa81->enter($__internal_dd572eb41b91d0b679913ce712414a3ac479ab9412ab2f48e0af8d360bc2fa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_defc2e3dd15cea0f19f61569e92028cdcce399580f56fe954cbc9ff619acb0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defc2e3dd15cea0f19f61569e92028cdcce399580f56fe954cbc9ff619acb0e4->enter($__internal_defc2e3dd15cea0f19f61569e92028cdcce399580f56fe954cbc9ff619acb0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_defc2e3dd15cea0f19f61569e92028cdcce399580f56fe954cbc9ff619acb0e4->leave($__internal_defc2e3dd15cea0f19f61569e92028cdcce399580f56fe954cbc9ff619acb0e4_prof);

        
        $__internal_dd572eb41b91d0b679913ce712414a3ac479ab9412ab2f48e0af8d360bc2fa81->leave($__internal_dd572eb41b91d0b679913ce712414a3ac479ab9412ab2f48e0af8d360bc2fa81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
