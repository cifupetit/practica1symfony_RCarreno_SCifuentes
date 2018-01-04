<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c5817904df26d236f3544e3bf93eed3bac465a9ffb02ed2a7e91e950555e5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5817904df26d236f3544e3bf93eed3bac465a9ffb02ed2a7e91e950555e5db->enter($__internal_3c5817904df26d236f3544e3bf93eed3bac465a9ffb02ed2a7e91e950555e5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7fb17e90b418dd8499ea73ede1f293f83e2bb0d8fe96e0058ce39233a88deb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb17e90b418dd8499ea73ede1f293f83e2bb0d8fe96e0058ce39233a88deb5f->enter($__internal_7fb17e90b418dd8499ea73ede1f293f83e2bb0d8fe96e0058ce39233a88deb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c5817904df26d236f3544e3bf93eed3bac465a9ffb02ed2a7e91e950555e5db->leave($__internal_3c5817904df26d236f3544e3bf93eed3bac465a9ffb02ed2a7e91e950555e5db_prof);

        
        $__internal_7fb17e90b418dd8499ea73ede1f293f83e2bb0d8fe96e0058ce39233a88deb5f->leave($__internal_7fb17e90b418dd8499ea73ede1f293f83e2bb0d8fe96e0058ce39233a88deb5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae7d80619e4df94f7d957462bde0d170095c96f725e7cdb69486ee8885268b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7d80619e4df94f7d957462bde0d170095c96f725e7cdb69486ee8885268b4c->enter($__internal_ae7d80619e4df94f7d957462bde0d170095c96f725e7cdb69486ee8885268b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb0bd7e3aa06630bfa68638b114c50378c294afd8532a4fcc182cd5fb880ac67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0bd7e3aa06630bfa68638b114c50378c294afd8532a4fcc182cd5fb880ac67->enter($__internal_eb0bd7e3aa06630bfa68638b114c50378c294afd8532a4fcc182cd5fb880ac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_eb0bd7e3aa06630bfa68638b114c50378c294afd8532a4fcc182cd5fb880ac67->leave($__internal_eb0bd7e3aa06630bfa68638b114c50378c294afd8532a4fcc182cd5fb880ac67_prof);

        
        $__internal_ae7d80619e4df94f7d957462bde0d170095c96f725e7cdb69486ee8885268b4c->leave($__internal_ae7d80619e4df94f7d957462bde0d170095c96f725e7cdb69486ee8885268b4c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_35787022758b01720ded92bd5ab8a866ae5449d8a443dd9b0a4e65a87b741bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35787022758b01720ded92bd5ab8a866ae5449d8a443dd9b0a4e65a87b741bb3->enter($__internal_35787022758b01720ded92bd5ab8a866ae5449d8a443dd9b0a4e65a87b741bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a78a1311c71f34f9070e064f780d71e22998bd9785a14326b80240e516020969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78a1311c71f34f9070e064f780d71e22998bd9785a14326b80240e516020969->enter($__internal_a78a1311c71f34f9070e064f780d71e22998bd9785a14326b80240e516020969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a78a1311c71f34f9070e064f780d71e22998bd9785a14326b80240e516020969->leave($__internal_a78a1311c71f34f9070e064f780d71e22998bd9785a14326b80240e516020969_prof);

        
        $__internal_35787022758b01720ded92bd5ab8a866ae5449d8a443dd9b0a4e65a87b741bb3->leave($__internal_35787022758b01720ded92bd5ab8a866ae5449d8a443dd9b0a4e65a87b741bb3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_126dcbfe57e0706acf562f7af3c524e66b4d8c9a0398954672c941cfd699680e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126dcbfe57e0706acf562f7af3c524e66b4d8c9a0398954672c941cfd699680e->enter($__internal_126dcbfe57e0706acf562f7af3c524e66b4d8c9a0398954672c941cfd699680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15b22881e0d16b742f4d8e7371c7f87edea845a677e33749ff9af166fe47006e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b22881e0d16b742f4d8e7371c7f87edea845a677e33749ff9af166fe47006e->enter($__internal_15b22881e0d16b742f4d8e7371c7f87edea845a677e33749ff9af166fe47006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_15b22881e0d16b742f4d8e7371c7f87edea845a677e33749ff9af166fe47006e->leave($__internal_15b22881e0d16b742f4d8e7371c7f87edea845a677e33749ff9af166fe47006e_prof);

        
        $__internal_126dcbfe57e0706acf562f7af3c524e66b4d8c9a0398954672c941cfd699680e->leave($__internal_126dcbfe57e0706acf562f7af3c524e66b4d8c9a0398954672c941cfd699680e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
