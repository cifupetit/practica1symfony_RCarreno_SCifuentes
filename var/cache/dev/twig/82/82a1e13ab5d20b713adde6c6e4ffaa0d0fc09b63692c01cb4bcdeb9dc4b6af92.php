<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
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
        $__internal_be645ae20f535036003e34b233256fbcc96487cb7654a6c5694266c6de7d537b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be645ae20f535036003e34b233256fbcc96487cb7654a6c5694266c6de7d537b->enter($__internal_be645ae20f535036003e34b233256fbcc96487cb7654a6c5694266c6de7d537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_45493602249137dc8e2c1da26b5a4b5bed1bbe65b30f994c64857510ebb40e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45493602249137dc8e2c1da26b5a4b5bed1bbe65b30f994c64857510ebb40e58->enter($__internal_45493602249137dc8e2c1da26b5a4b5bed1bbe65b30f994c64857510ebb40e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be645ae20f535036003e34b233256fbcc96487cb7654a6c5694266c6de7d537b->leave($__internal_be645ae20f535036003e34b233256fbcc96487cb7654a6c5694266c6de7d537b_prof);

        
        $__internal_45493602249137dc8e2c1da26b5a4b5bed1bbe65b30f994c64857510ebb40e58->leave($__internal_45493602249137dc8e2c1da26b5a4b5bed1bbe65b30f994c64857510ebb40e58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e2ebd14161904c7c180e778de0fba93c23f011896c3c207614123c01d050f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2ebd14161904c7c180e778de0fba93c23f011896c3c207614123c01d050f5d->enter($__internal_3e2ebd14161904c7c180e778de0fba93c23f011896c3c207614123c01d050f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b989834384c2d6ba163ed5873226e4148173e9f00a85ce6b03d2ad822999890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b989834384c2d6ba163ed5873226e4148173e9f00a85ce6b03d2ad822999890->enter($__internal_9b989834384c2d6ba163ed5873226e4148173e9f00a85ce6b03d2ad822999890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9b989834384c2d6ba163ed5873226e4148173e9f00a85ce6b03d2ad822999890->leave($__internal_9b989834384c2d6ba163ed5873226e4148173e9f00a85ce6b03d2ad822999890_prof);

        
        $__internal_3e2ebd14161904c7c180e778de0fba93c23f011896c3c207614123c01d050f5d->leave($__internal_3e2ebd14161904c7c180e778de0fba93c23f011896c3c207614123c01d050f5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_027de86e6797498ef8301784d2fbab71e222a9fd77da14379c141304ed33d7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027de86e6797498ef8301784d2fbab71e222a9fd77da14379c141304ed33d7cc->enter($__internal_027de86e6797498ef8301784d2fbab71e222a9fd77da14379c141304ed33d7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71b4712fc39b2326b49720d451e22be475f05bed5b67f72aeae59709e9707230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b4712fc39b2326b49720d451e22be475f05bed5b67f72aeae59709e9707230->enter($__internal_71b4712fc39b2326b49720d451e22be475f05bed5b67f72aeae59709e9707230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_71b4712fc39b2326b49720d451e22be475f05bed5b67f72aeae59709e9707230->leave($__internal_71b4712fc39b2326b49720d451e22be475f05bed5b67f72aeae59709e9707230_prof);

        
        $__internal_027de86e6797498ef8301784d2fbab71e222a9fd77da14379c141304ed33d7cc->leave($__internal_027de86e6797498ef8301784d2fbab71e222a9fd77da14379c141304ed33d7cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df66a47bbf4cd9ec0e66e2635d7dbb951e0b06fc6aaaca20b9ee552fcba0679e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df66a47bbf4cd9ec0e66e2635d7dbb951e0b06fc6aaaca20b9ee552fcba0679e->enter($__internal_df66a47bbf4cd9ec0e66e2635d7dbb951e0b06fc6aaaca20b9ee552fcba0679e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cca3ab8209fc63f63ac3bcd63020ef6b8b3aea545da739b733cc62332ed2ffea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca3ab8209fc63f63ac3bcd63020ef6b8b3aea545da739b733cc62332ed2ffea->enter($__internal_cca3ab8209fc63f63ac3bcd63020ef6b8b3aea545da739b733cc62332ed2ffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cca3ab8209fc63f63ac3bcd63020ef6b8b3aea545da739b733cc62332ed2ffea->leave($__internal_cca3ab8209fc63f63ac3bcd63020ef6b8b3aea545da739b733cc62332ed2ffea_prof);

        
        $__internal_df66a47bbf4cd9ec0e66e2635d7dbb951e0b06fc6aaaca20b9ee552fcba0679e->leave($__internal_df66a47bbf4cd9ec0e66e2635d7dbb951e0b06fc6aaaca20b9ee552fcba0679e_prof);

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
