<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_9e9e4cc682fc9804c02519a26cb95e57dfb5f8e792499f861e3804bd7cf2bd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9e4cc682fc9804c02519a26cb95e57dfb5f8e792499f861e3804bd7cf2bd5d->enter($__internal_9e9e4cc682fc9804c02519a26cb95e57dfb5f8e792499f861e3804bd7cf2bd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0934c2ef0d44e3b44021088d35e17b7b03b962a6a1237559a7a9465aea8cfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0934c2ef0d44e3b44021088d35e17b7b03b962a6a1237559a7a9465aea8cfab->enter($__internal_b0934c2ef0d44e3b44021088d35e17b7b03b962a6a1237559a7a9465aea8cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9e4cc682fc9804c02519a26cb95e57dfb5f8e792499f861e3804bd7cf2bd5d->leave($__internal_9e9e4cc682fc9804c02519a26cb95e57dfb5f8e792499f861e3804bd7cf2bd5d_prof);

        
        $__internal_b0934c2ef0d44e3b44021088d35e17b7b03b962a6a1237559a7a9465aea8cfab->leave($__internal_b0934c2ef0d44e3b44021088d35e17b7b03b962a6a1237559a7a9465aea8cfab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2954ff918c09428d7fecd6529d4969e0cb3fcefa9f680f6dd0fe651633271ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2954ff918c09428d7fecd6529d4969e0cb3fcefa9f680f6dd0fe651633271ff3->enter($__internal_2954ff918c09428d7fecd6529d4969e0cb3fcefa9f680f6dd0fe651633271ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf11ec06525dacda547393ba0786a670ef41d80e4999f1de7c653d174d099668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf11ec06525dacda547393ba0786a670ef41d80e4999f1de7c653d174d099668->enter($__internal_bf11ec06525dacda547393ba0786a670ef41d80e4999f1de7c653d174d099668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf11ec06525dacda547393ba0786a670ef41d80e4999f1de7c653d174d099668->leave($__internal_bf11ec06525dacda547393ba0786a670ef41d80e4999f1de7c653d174d099668_prof);

        
        $__internal_2954ff918c09428d7fecd6529d4969e0cb3fcefa9f680f6dd0fe651633271ff3->leave($__internal_2954ff918c09428d7fecd6529d4969e0cb3fcefa9f680f6dd0fe651633271ff3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a04f689b78014cb6fbad3b2fd64b4db3791287923422d57b24ef966c3c25a9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04f689b78014cb6fbad3b2fd64b4db3791287923422d57b24ef966c3c25a9d7->enter($__internal_a04f689b78014cb6fbad3b2fd64b4db3791287923422d57b24ef966c3c25a9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee9b0a6dffac7b37749b75ad0d750dd37b0145957508594a1b35887c8e56f109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9b0a6dffac7b37749b75ad0d750dd37b0145957508594a1b35887c8e56f109->enter($__internal_ee9b0a6dffac7b37749b75ad0d750dd37b0145957508594a1b35887c8e56f109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee9b0a6dffac7b37749b75ad0d750dd37b0145957508594a1b35887c8e56f109->leave($__internal_ee9b0a6dffac7b37749b75ad0d750dd37b0145957508594a1b35887c8e56f109_prof);

        
        $__internal_a04f689b78014cb6fbad3b2fd64b4db3791287923422d57b24ef966c3c25a9d7->leave($__internal_a04f689b78014cb6fbad3b2fd64b4db3791287923422d57b24ef966c3c25a9d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93798e079b95a883bbb79880011f453be6e7a096f615967d19f99f967dd1e9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93798e079b95a883bbb79880011f453be6e7a096f615967d19f99f967dd1e9ad->enter($__internal_93798e079b95a883bbb79880011f453be6e7a096f615967d19f99f967dd1e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee2005ecf649ed0d8a13d92b9d161899c2c98422b028cd19f273c46bfcbad22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2005ecf649ed0d8a13d92b9d161899c2c98422b028cd19f273c46bfcbad22c->enter($__internal_ee2005ecf649ed0d8a13d92b9d161899c2c98422b028cd19f273c46bfcbad22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee2005ecf649ed0d8a13d92b9d161899c2c98422b028cd19f273c46bfcbad22c->leave($__internal_ee2005ecf649ed0d8a13d92b9d161899c2c98422b028cd19f273c46bfcbad22c_prof);

        
        $__internal_93798e079b95a883bbb79880011f453be6e7a096f615967d19f99f967dd1e9ad->leave($__internal_93798e079b95a883bbb79880011f453be6e7a096f615967d19f99f967dd1e9ad_prof);

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
