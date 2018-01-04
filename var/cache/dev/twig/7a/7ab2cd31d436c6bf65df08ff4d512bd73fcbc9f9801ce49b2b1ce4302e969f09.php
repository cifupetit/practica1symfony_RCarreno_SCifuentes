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
        $__internal_5a4b0b9e7fbfe2273e0522c2f505d2e34e13c2d1c7c882bac602b79c0ba74a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4b0b9e7fbfe2273e0522c2f505d2e34e13c2d1c7c882bac602b79c0ba74a5d->enter($__internal_5a4b0b9e7fbfe2273e0522c2f505d2e34e13c2d1c7c882bac602b79c0ba74a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d742876b419f8dfba8435cd5b507f5affd247c9846dd99e281c83d108c0fc991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d742876b419f8dfba8435cd5b507f5affd247c9846dd99e281c83d108c0fc991->enter($__internal_d742876b419f8dfba8435cd5b507f5affd247c9846dd99e281c83d108c0fc991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4b0b9e7fbfe2273e0522c2f505d2e34e13c2d1c7c882bac602b79c0ba74a5d->leave($__internal_5a4b0b9e7fbfe2273e0522c2f505d2e34e13c2d1c7c882bac602b79c0ba74a5d_prof);

        
        $__internal_d742876b419f8dfba8435cd5b507f5affd247c9846dd99e281c83d108c0fc991->leave($__internal_d742876b419f8dfba8435cd5b507f5affd247c9846dd99e281c83d108c0fc991_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d182b21f565dab5fce41ef6c515f01ef9dd603250db7bffb9451e544a48cfae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d182b21f565dab5fce41ef6c515f01ef9dd603250db7bffb9451e544a48cfae8->enter($__internal_d182b21f565dab5fce41ef6c515f01ef9dd603250db7bffb9451e544a48cfae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_12727985f7f65dcab336402194a6962ddf3136cd07ee6bbd1895d2498496bbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12727985f7f65dcab336402194a6962ddf3136cd07ee6bbd1895d2498496bbdf->enter($__internal_12727985f7f65dcab336402194a6962ddf3136cd07ee6bbd1895d2498496bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_12727985f7f65dcab336402194a6962ddf3136cd07ee6bbd1895d2498496bbdf->leave($__internal_12727985f7f65dcab336402194a6962ddf3136cd07ee6bbd1895d2498496bbdf_prof);

        
        $__internal_d182b21f565dab5fce41ef6c515f01ef9dd603250db7bffb9451e544a48cfae8->leave($__internal_d182b21f565dab5fce41ef6c515f01ef9dd603250db7bffb9451e544a48cfae8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efddac47adebcd10b84fee1a429142dfcc9f82778df70b6b8a778370b7f83e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efddac47adebcd10b84fee1a429142dfcc9f82778df70b6b8a778370b7f83e20->enter($__internal_efddac47adebcd10b84fee1a429142dfcc9f82778df70b6b8a778370b7f83e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5aae81c1a3161c6d5b14aac475ee80743dbf32969c24ac361cf6f796235d5797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae81c1a3161c6d5b14aac475ee80743dbf32969c24ac361cf6f796235d5797->enter($__internal_5aae81c1a3161c6d5b14aac475ee80743dbf32969c24ac361cf6f796235d5797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5aae81c1a3161c6d5b14aac475ee80743dbf32969c24ac361cf6f796235d5797->leave($__internal_5aae81c1a3161c6d5b14aac475ee80743dbf32969c24ac361cf6f796235d5797_prof);

        
        $__internal_efddac47adebcd10b84fee1a429142dfcc9f82778df70b6b8a778370b7f83e20->leave($__internal_efddac47adebcd10b84fee1a429142dfcc9f82778df70b6b8a778370b7f83e20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81cedec5d61a142a626213a6f470324c3cd25d1147e2bedbfdbccb4ff816b30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cedec5d61a142a626213a6f470324c3cd25d1147e2bedbfdbccb4ff816b30d->enter($__internal_81cedec5d61a142a626213a6f470324c3cd25d1147e2bedbfdbccb4ff816b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4c086c42e79a577f201960a164d319462a0fbea792308174d50971732120930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c086c42e79a577f201960a164d319462a0fbea792308174d50971732120930->enter($__internal_b4c086c42e79a577f201960a164d319462a0fbea792308174d50971732120930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b4c086c42e79a577f201960a164d319462a0fbea792308174d50971732120930->leave($__internal_b4c086c42e79a577f201960a164d319462a0fbea792308174d50971732120930_prof);

        
        $__internal_81cedec5d61a142a626213a6f470324c3cd25d1147e2bedbfdbccb4ff816b30d->leave($__internal_81cedec5d61a142a626213a6f470324c3cd25d1147e2bedbfdbccb4ff816b30d_prof);

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
