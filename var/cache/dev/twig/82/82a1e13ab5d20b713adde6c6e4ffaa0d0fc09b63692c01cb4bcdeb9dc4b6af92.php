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
        $__internal_83ea27ed24cac682138e93fdf1679c2a3c33c72f82c5493f28f3e82fed4c1553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ea27ed24cac682138e93fdf1679c2a3c33c72f82c5493f28f3e82fed4c1553->enter($__internal_83ea27ed24cac682138e93fdf1679c2a3c33c72f82c5493f28f3e82fed4c1553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0c6800d451fcb56cb4566846ed6216df1b8611ed9690b0774b4bc7780c49d6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6800d451fcb56cb4566846ed6216df1b8611ed9690b0774b4bc7780c49d6ba->enter($__internal_0c6800d451fcb56cb4566846ed6216df1b8611ed9690b0774b4bc7780c49d6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83ea27ed24cac682138e93fdf1679c2a3c33c72f82c5493f28f3e82fed4c1553->leave($__internal_83ea27ed24cac682138e93fdf1679c2a3c33c72f82c5493f28f3e82fed4c1553_prof);

        
        $__internal_0c6800d451fcb56cb4566846ed6216df1b8611ed9690b0774b4bc7780c49d6ba->leave($__internal_0c6800d451fcb56cb4566846ed6216df1b8611ed9690b0774b4bc7780c49d6ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_988b0c650d9711d2280dc37f10aed802e56ecd55b5452e36bed52d147296ec54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988b0c650d9711d2280dc37f10aed802e56ecd55b5452e36bed52d147296ec54->enter($__internal_988b0c650d9711d2280dc37f10aed802e56ecd55b5452e36bed52d147296ec54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7942458afb0e32890dc059d36ba15171785830cc364faac345e11698c8bf58bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7942458afb0e32890dc059d36ba15171785830cc364faac345e11698c8bf58bc->enter($__internal_7942458afb0e32890dc059d36ba15171785830cc364faac345e11698c8bf58bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7942458afb0e32890dc059d36ba15171785830cc364faac345e11698c8bf58bc->leave($__internal_7942458afb0e32890dc059d36ba15171785830cc364faac345e11698c8bf58bc_prof);

        
        $__internal_988b0c650d9711d2280dc37f10aed802e56ecd55b5452e36bed52d147296ec54->leave($__internal_988b0c650d9711d2280dc37f10aed802e56ecd55b5452e36bed52d147296ec54_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aec67833a46ada8189d1f83966eb4cab64c6cd7ed4b9d0c96e681008adb1cc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec67833a46ada8189d1f83966eb4cab64c6cd7ed4b9d0c96e681008adb1cc0f->enter($__internal_aec67833a46ada8189d1f83966eb4cab64c6cd7ed4b9d0c96e681008adb1cc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c63c5faa779130468cca24d5e369995d9044df5bc9a98042d629449487fa147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c63c5faa779130468cca24d5e369995d9044df5bc9a98042d629449487fa147->enter($__internal_2c63c5faa779130468cca24d5e369995d9044df5bc9a98042d629449487fa147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2c63c5faa779130468cca24d5e369995d9044df5bc9a98042d629449487fa147->leave($__internal_2c63c5faa779130468cca24d5e369995d9044df5bc9a98042d629449487fa147_prof);

        
        $__internal_aec67833a46ada8189d1f83966eb4cab64c6cd7ed4b9d0c96e681008adb1cc0f->leave($__internal_aec67833a46ada8189d1f83966eb4cab64c6cd7ed4b9d0c96e681008adb1cc0f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f27ccfeb8613be051559dfb216feb493f03c4acb4274aa7ac426ab95163fca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f27ccfeb8613be051559dfb216feb493f03c4acb4274aa7ac426ab95163fca5->enter($__internal_9f27ccfeb8613be051559dfb216feb493f03c4acb4274aa7ac426ab95163fca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_335b230aff223a66de4e9200893e1155071ba92415511514828cc4059f77137c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335b230aff223a66de4e9200893e1155071ba92415511514828cc4059f77137c->enter($__internal_335b230aff223a66de4e9200893e1155071ba92415511514828cc4059f77137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_335b230aff223a66de4e9200893e1155071ba92415511514828cc4059f77137c->leave($__internal_335b230aff223a66de4e9200893e1155071ba92415511514828cc4059f77137c_prof);

        
        $__internal_9f27ccfeb8613be051559dfb216feb493f03c4acb4274aa7ac426ab95163fca5->leave($__internal_9f27ccfeb8613be051559dfb216feb493f03c4acb4274aa7ac426ab95163fca5_prof);

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
