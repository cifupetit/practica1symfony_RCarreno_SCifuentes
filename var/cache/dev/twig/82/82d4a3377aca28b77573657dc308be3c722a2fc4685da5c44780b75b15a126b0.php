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
        $__internal_94469316a9bf7ada5edbc9d1a4b659098a51a0a339199bbe415c706f21dbed7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94469316a9bf7ada5edbc9d1a4b659098a51a0a339199bbe415c706f21dbed7e->enter($__internal_94469316a9bf7ada5edbc9d1a4b659098a51a0a339199bbe415c706f21dbed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b70fdcdbddb2abee8b23b3183ca5f6b4633bfc01e9b01fa4d3c6679475140cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70fdcdbddb2abee8b23b3183ca5f6b4633bfc01e9b01fa4d3c6679475140cda->enter($__internal_b70fdcdbddb2abee8b23b3183ca5f6b4633bfc01e9b01fa4d3c6679475140cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94469316a9bf7ada5edbc9d1a4b659098a51a0a339199bbe415c706f21dbed7e->leave($__internal_94469316a9bf7ada5edbc9d1a4b659098a51a0a339199bbe415c706f21dbed7e_prof);

        
        $__internal_b70fdcdbddb2abee8b23b3183ca5f6b4633bfc01e9b01fa4d3c6679475140cda->leave($__internal_b70fdcdbddb2abee8b23b3183ca5f6b4633bfc01e9b01fa4d3c6679475140cda_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e41971a94d6d112fa1bd0a40fc4b938640971d824fe54a9714d742f1700437f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e41971a94d6d112fa1bd0a40fc4b938640971d824fe54a9714d742f1700437f->enter($__internal_5e41971a94d6d112fa1bd0a40fc4b938640971d824fe54a9714d742f1700437f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_042ffef565ab939d9625458a246344f43af1ad7366373e136adad237502906d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042ffef565ab939d9625458a246344f43af1ad7366373e136adad237502906d4->enter($__internal_042ffef565ab939d9625458a246344f43af1ad7366373e136adad237502906d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_042ffef565ab939d9625458a246344f43af1ad7366373e136adad237502906d4->leave($__internal_042ffef565ab939d9625458a246344f43af1ad7366373e136adad237502906d4_prof);

        
        $__internal_5e41971a94d6d112fa1bd0a40fc4b938640971d824fe54a9714d742f1700437f->leave($__internal_5e41971a94d6d112fa1bd0a40fc4b938640971d824fe54a9714d742f1700437f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f906c4725bddf44ecfc1cda338181ca748dfbea9e9dd8164d7071209a0c88afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f906c4725bddf44ecfc1cda338181ca748dfbea9e9dd8164d7071209a0c88afc->enter($__internal_f906c4725bddf44ecfc1cda338181ca748dfbea9e9dd8164d7071209a0c88afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7cf0522b08c5a62373c9073f9dc95e4f5765dda0945b747804b5e97943b31b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cf0522b08c5a62373c9073f9dc95e4f5765dda0945b747804b5e97943b31b3->enter($__internal_c7cf0522b08c5a62373c9073f9dc95e4f5765dda0945b747804b5e97943b31b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7cf0522b08c5a62373c9073f9dc95e4f5765dda0945b747804b5e97943b31b3->leave($__internal_c7cf0522b08c5a62373c9073f9dc95e4f5765dda0945b747804b5e97943b31b3_prof);

        
        $__internal_f906c4725bddf44ecfc1cda338181ca748dfbea9e9dd8164d7071209a0c88afc->leave($__internal_f906c4725bddf44ecfc1cda338181ca748dfbea9e9dd8164d7071209a0c88afc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd4bcf8b525200a2a9a8c4ae2973569d53d6918c98295756b629d50121e52684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4bcf8b525200a2a9a8c4ae2973569d53d6918c98295756b629d50121e52684->enter($__internal_fd4bcf8b525200a2a9a8c4ae2973569d53d6918c98295756b629d50121e52684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_71f0ee6f8474da9d6b278305f15bd36eef964aa26ff8151b5029addbcea9a8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f0ee6f8474da9d6b278305f15bd36eef964aa26ff8151b5029addbcea9a8ea->enter($__internal_71f0ee6f8474da9d6b278305f15bd36eef964aa26ff8151b5029addbcea9a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71f0ee6f8474da9d6b278305f15bd36eef964aa26ff8151b5029addbcea9a8ea->leave($__internal_71f0ee6f8474da9d6b278305f15bd36eef964aa26ff8151b5029addbcea9a8ea_prof);

        
        $__internal_fd4bcf8b525200a2a9a8c4ae2973569d53d6918c98295756b629d50121e52684->leave($__internal_fd4bcf8b525200a2a9a8c4ae2973569d53d6918c98295756b629d50121e52684_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
