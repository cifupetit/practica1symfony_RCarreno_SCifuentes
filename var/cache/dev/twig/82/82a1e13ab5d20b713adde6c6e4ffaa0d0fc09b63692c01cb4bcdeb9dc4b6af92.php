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
        $__internal_64536c72bdc3d8a2e4fe7a51d6ffd7c8a4c73cd9c50c92163683452333ffaf0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64536c72bdc3d8a2e4fe7a51d6ffd7c8a4c73cd9c50c92163683452333ffaf0b->enter($__internal_64536c72bdc3d8a2e4fe7a51d6ffd7c8a4c73cd9c50c92163683452333ffaf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9440c2d148ef83029901b11dde287f687e0a05fa99793e74b858b65234586250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9440c2d148ef83029901b11dde287f687e0a05fa99793e74b858b65234586250->enter($__internal_9440c2d148ef83029901b11dde287f687e0a05fa99793e74b858b65234586250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64536c72bdc3d8a2e4fe7a51d6ffd7c8a4c73cd9c50c92163683452333ffaf0b->leave($__internal_64536c72bdc3d8a2e4fe7a51d6ffd7c8a4c73cd9c50c92163683452333ffaf0b_prof);

        
        $__internal_9440c2d148ef83029901b11dde287f687e0a05fa99793e74b858b65234586250->leave($__internal_9440c2d148ef83029901b11dde287f687e0a05fa99793e74b858b65234586250_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d94dd939adc86ecb786ef2ca6dafd262cb61749cc574e44c004e978fea3292ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94dd939adc86ecb786ef2ca6dafd262cb61749cc574e44c004e978fea3292ac->enter($__internal_d94dd939adc86ecb786ef2ca6dafd262cb61749cc574e44c004e978fea3292ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_129b3e8bc7c5f657bf47521ae571b46139f904e80cf61249c3763a53765fa2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129b3e8bc7c5f657bf47521ae571b46139f904e80cf61249c3763a53765fa2a5->enter($__internal_129b3e8bc7c5f657bf47521ae571b46139f904e80cf61249c3763a53765fa2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_129b3e8bc7c5f657bf47521ae571b46139f904e80cf61249c3763a53765fa2a5->leave($__internal_129b3e8bc7c5f657bf47521ae571b46139f904e80cf61249c3763a53765fa2a5_prof);

        
        $__internal_d94dd939adc86ecb786ef2ca6dafd262cb61749cc574e44c004e978fea3292ac->leave($__internal_d94dd939adc86ecb786ef2ca6dafd262cb61749cc574e44c004e978fea3292ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ebb3079ec893d77e08578244492a53cae700978960feaf369398f9949403e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebb3079ec893d77e08578244492a53cae700978960feaf369398f9949403e49->enter($__internal_8ebb3079ec893d77e08578244492a53cae700978960feaf369398f9949403e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31709d02da33584782c1b22e5fc0aeb7842f7f4097bf8d3cd7f7555cd029506c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31709d02da33584782c1b22e5fc0aeb7842f7f4097bf8d3cd7f7555cd029506c->enter($__internal_31709d02da33584782c1b22e5fc0aeb7842f7f4097bf8d3cd7f7555cd029506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_31709d02da33584782c1b22e5fc0aeb7842f7f4097bf8d3cd7f7555cd029506c->leave($__internal_31709d02da33584782c1b22e5fc0aeb7842f7f4097bf8d3cd7f7555cd029506c_prof);

        
        $__internal_8ebb3079ec893d77e08578244492a53cae700978960feaf369398f9949403e49->leave($__internal_8ebb3079ec893d77e08578244492a53cae700978960feaf369398f9949403e49_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3109b5a7652cbe6f5a25e3cf9e2200a1284cbe02b5f7036e77657893a9bd1c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3109b5a7652cbe6f5a25e3cf9e2200a1284cbe02b5f7036e77657893a9bd1c7e->enter($__internal_3109b5a7652cbe6f5a25e3cf9e2200a1284cbe02b5f7036e77657893a9bd1c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cecf09838bc605bb7469da82dda6bffa7f33a87a05e94561d5b48113c2c2c2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecf09838bc605bb7469da82dda6bffa7f33a87a05e94561d5b48113c2c2c2c0->enter($__internal_cecf09838bc605bb7469da82dda6bffa7f33a87a05e94561d5b48113c2c2c2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cecf09838bc605bb7469da82dda6bffa7f33a87a05e94561d5b48113c2c2c2c0->leave($__internal_cecf09838bc605bb7469da82dda6bffa7f33a87a05e94561d5b48113c2c2c2c0_prof);

        
        $__internal_3109b5a7652cbe6f5a25e3cf9e2200a1284cbe02b5f7036e77657893a9bd1c7e->leave($__internal_3109b5a7652cbe6f5a25e3cf9e2200a1284cbe02b5f7036e77657893a9bd1c7e_prof);

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
