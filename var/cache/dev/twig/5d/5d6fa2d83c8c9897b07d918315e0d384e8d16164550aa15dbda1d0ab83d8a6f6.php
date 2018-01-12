<?php

/* AppBundle:Partit:listTemporadas.html.twig */
class __TwigTemplate_e15cfffbee21fac368fa9a2e5a29208e797156b072d36df28042538e5f6da8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listTemporadas.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_771f82419a879790d44ef16e417e0e837f8b3ecc171b095caec56bd673442cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771f82419a879790d44ef16e417e0e837f8b3ecc171b095caec56bd673442cb0->enter($__internal_771f82419a879790d44ef16e417e0e837f8b3ecc171b095caec56bd673442cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $__internal_5c333a7c5fffbf0c9eef7786fa4cbd5e07925ba568a4551b60961a44618ffe4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c333a7c5fffbf0c9eef7786fa4cbd5e07925ba568a4551b60961a44618ffe4f->enter($__internal_5c333a7c5fffbf0c9eef7786fa4cbd5e07925ba568a4551b60961a44618ffe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_771f82419a879790d44ef16e417e0e837f8b3ecc171b095caec56bd673442cb0->leave($__internal_771f82419a879790d44ef16e417e0e837f8b3ecc171b095caec56bd673442cb0_prof);

        
        $__internal_5c333a7c5fffbf0c9eef7786fa4cbd5e07925ba568a4551b60961a44618ffe4f->leave($__internal_5c333a7c5fffbf0c9eef7786fa4cbd5e07925ba568a4551b60961a44618ffe4f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e010537a3fd1a345dcd74da594f306237af4bb2844e5126d6efac05b89026703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e010537a3fd1a345dcd74da594f306237af4bb2844e5126d6efac05b89026703->enter($__internal_e010537a3fd1a345dcd74da594f306237af4bb2844e5126d6efac05b89026703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7e887e85c0462041dbbfec1fb778596ef0310940d67c12a6b166b49d18f81c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e887e85c0462041dbbfec1fb778596ef0310940d67c12a6b166b49d18f81c5->enter($__internal_d7e887e85c0462041dbbfec1fb778596ef0310940d67c12a6b166b49d18f81c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7e887e85c0462041dbbfec1fb778596ef0310940d67c12a6b166b49d18f81c5->leave($__internal_d7e887e85c0462041dbbfec1fb778596ef0310940d67c12a6b166b49d18f81c5_prof);

        
        $__internal_e010537a3fd1a345dcd74da594f306237af4bb2844e5126d6efac05b89026703->leave($__internal_e010537a3fd1a345dcd74da594f306237af4bb2844e5126d6efac05b89026703_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d790cb4cd52c19a679731327329a334d728deabde831e93476b48c9e677a9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d790cb4cd52c19a679731327329a334d728deabde831e93476b48c9e677a9a1->enter($__internal_3d790cb4cd52c19a679731327329a334d728deabde831e93476b48c9e677a9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9d8ac3732198693648c486433047bf1df697d1cbede9cec9eb5d90da6d5cf74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d8ac3732198693648c486433047bf1df697d1cbede9cec9eb5d90da6d5cf74->enter($__internal_a9d8ac3732198693648c486433047bf1df697d1cbede9cec9eb5d90da6d5cf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Temporadas";
        
        $__internal_a9d8ac3732198693648c486433047bf1df697d1cbede9cec9eb5d90da6d5cf74->leave($__internal_a9d8ac3732198693648c486433047bf1df697d1cbede9cec9eb5d90da6d5cf74_prof);

        
        $__internal_3d790cb4cd52c19a679731327329a334d728deabde831e93476b48c9e677a9a1->leave($__internal_3d790cb4cd52c19a679731327329a334d728deabde831e93476b48c9e677a9a1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_19cb0f50484a9eb360bee5716cb5be7bc290f63e510279eab39b6e2c7e4b5b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19cb0f50484a9eb360bee5716cb5be7bc290f63e510279eab39b6e2c7e4b5b62->enter($__internal_19cb0f50484a9eb360bee5716cb5be7bc290f63e510279eab39b6e2c7e4b5b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01bd7f1319bdb4d93633fe5c587156326f23c570d73369aba3c6052ddb95e6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bd7f1319bdb4d93633fe5c587156326f23c570d73369aba3c6052ddb95e6c3->enter($__internal_01bd7f1319bdb4d93633fe5c587156326f23c570d73369aba3c6052ddb95e6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partits"] ?? $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\">Temporada ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo "</button><br></td>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado competiciones...</button>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t
<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liga");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_01bd7f1319bdb4d93633fe5c587156326f23c570d73369aba3c6052ddb95e6c3->leave($__internal_01bd7f1319bdb4d93633fe5c587156326f23c570d73369aba3c6052ddb95e6c3_prof);

        
        $__internal_19cb0f50484a9eb360bee5716cb5be7bc290f63e510279eab39b6e2c7e4b5b62->leave($__internal_19cb0f50484a9eb360bee5716cb5be7bc290f63e510279eab39b6e2c7e4b5b62_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listTemporadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 20,  114 => 19,  105 => 15,  96 => 12,  91 => 11,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block stylesheets %}
{% endblock %}

{% block title %}Temporadas{% endblock %}

{% block body %}
<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles</h1>

\t\t{% for partit in partits %}
<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\">Temporada {{partit.temporada}}</button><br></td>

\t\t{% else %}
\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado competiciones...</button>
\t\t
\t\t{% endfor %}
\t
<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('liga')}}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listTemporadas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listTemporadas.html.twig");
    }
}
