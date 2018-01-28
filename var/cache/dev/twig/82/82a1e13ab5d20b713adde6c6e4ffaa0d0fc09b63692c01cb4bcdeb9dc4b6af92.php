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
        $__internal_47e26d069e56078cc59f92b83526d21c3fd70cf3dd650503c80a1a762f0395c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e26d069e56078cc59f92b83526d21c3fd70cf3dd650503c80a1a762f0395c0->enter($__internal_47e26d069e56078cc59f92b83526d21c3fd70cf3dd650503c80a1a762f0395c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_503b0cfbc018bb7efec0b4df05b6eb640afb3a13b133c689b24cf8cdfd45c45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503b0cfbc018bb7efec0b4df05b6eb640afb3a13b133c689b24cf8cdfd45c45d->enter($__internal_503b0cfbc018bb7efec0b4df05b6eb640afb3a13b133c689b24cf8cdfd45c45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e26d069e56078cc59f92b83526d21c3fd70cf3dd650503c80a1a762f0395c0->leave($__internal_47e26d069e56078cc59f92b83526d21c3fd70cf3dd650503c80a1a762f0395c0_prof);

        
        $__internal_503b0cfbc018bb7efec0b4df05b6eb640afb3a13b133c689b24cf8cdfd45c45d->leave($__internal_503b0cfbc018bb7efec0b4df05b6eb640afb3a13b133c689b24cf8cdfd45c45d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_faaf5968565074e3c2b2b900462766fc8d3e0103189c731258bcfd120882d9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faaf5968565074e3c2b2b900462766fc8d3e0103189c731258bcfd120882d9f1->enter($__internal_faaf5968565074e3c2b2b900462766fc8d3e0103189c731258bcfd120882d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d8abc526497274b49f850c3863e5e53d4f184e5e63cf6a348236a87f96af90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8abc526497274b49f850c3863e5e53d4f184e5e63cf6a348236a87f96af90c->enter($__internal_8d8abc526497274b49f850c3863e5e53d4f184e5e63cf6a348236a87f96af90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d8abc526497274b49f850c3863e5e53d4f184e5e63cf6a348236a87f96af90c->leave($__internal_8d8abc526497274b49f850c3863e5e53d4f184e5e63cf6a348236a87f96af90c_prof);

        
        $__internal_faaf5968565074e3c2b2b900462766fc8d3e0103189c731258bcfd120882d9f1->leave($__internal_faaf5968565074e3c2b2b900462766fc8d3e0103189c731258bcfd120882d9f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fa4cfe9ac26a92e6c1a3ddca728e4daf001067ae6b9a2511ad6b413f4e93fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa4cfe9ac26a92e6c1a3ddca728e4daf001067ae6b9a2511ad6b413f4e93fef->enter($__internal_5fa4cfe9ac26a92e6c1a3ddca728e4daf001067ae6b9a2511ad6b413f4e93fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_274d3bd95c7d77ddf4169600146ad3ef6555c48b702f4edb0c118f624943feec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274d3bd95c7d77ddf4169600146ad3ef6555c48b702f4edb0c118f624943feec->enter($__internal_274d3bd95c7d77ddf4169600146ad3ef6555c48b702f4edb0c118f624943feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_274d3bd95c7d77ddf4169600146ad3ef6555c48b702f4edb0c118f624943feec->leave($__internal_274d3bd95c7d77ddf4169600146ad3ef6555c48b702f4edb0c118f624943feec_prof);

        
        $__internal_5fa4cfe9ac26a92e6c1a3ddca728e4daf001067ae6b9a2511ad6b413f4e93fef->leave($__internal_5fa4cfe9ac26a92e6c1a3ddca728e4daf001067ae6b9a2511ad6b413f4e93fef_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_160516406d5b0b98e320182603230e72af6a381a82e30f824ab04b51286af010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160516406d5b0b98e320182603230e72af6a381a82e30f824ab04b51286af010->enter($__internal_160516406d5b0b98e320182603230e72af6a381a82e30f824ab04b51286af010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d166a53ef56e9336ad719d1ad4b24c54f025b1d70d6ff7fd4b2e19b3ef2a661f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d166a53ef56e9336ad719d1ad4b24c54f025b1d70d6ff7fd4b2e19b3ef2a661f->enter($__internal_d166a53ef56e9336ad719d1ad4b24c54f025b1d70d6ff7fd4b2e19b3ef2a661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d166a53ef56e9336ad719d1ad4b24c54f025b1d70d6ff7fd4b2e19b3ef2a661f->leave($__internal_d166a53ef56e9336ad719d1ad4b24c54f025b1d70d6ff7fd4b2e19b3ef2a661f_prof);

        
        $__internal_160516406d5b0b98e320182603230e72af6a381a82e30f824ab04b51286af010->leave($__internal_160516406d5b0b98e320182603230e72af6a381a82e30f824ab04b51286af010_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
