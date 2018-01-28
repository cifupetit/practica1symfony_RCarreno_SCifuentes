<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
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
        $__internal_1d07cc011560127fc01096ac0a55948e97df526fda6af530bb6f59703061e09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d07cc011560127fc01096ac0a55948e97df526fda6af530bb6f59703061e09c->enter($__internal_1d07cc011560127fc01096ac0a55948e97df526fda6af530bb6f59703061e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2fd246e4790ffe96492b0a2f256900ec02dc62d81c0ae263750362074e468a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd246e4790ffe96492b0a2f256900ec02dc62d81c0ae263750362074e468a61->enter($__internal_2fd246e4790ffe96492b0a2f256900ec02dc62d81c0ae263750362074e468a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d07cc011560127fc01096ac0a55948e97df526fda6af530bb6f59703061e09c->leave($__internal_1d07cc011560127fc01096ac0a55948e97df526fda6af530bb6f59703061e09c_prof);

        
        $__internal_2fd246e4790ffe96492b0a2f256900ec02dc62d81c0ae263750362074e468a61->leave($__internal_2fd246e4790ffe96492b0a2f256900ec02dc62d81c0ae263750362074e468a61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44e40caeacdbe4e84c5cfd9a44731bac1253d40a2a33bb88381c6e9cac600f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e40caeacdbe4e84c5cfd9a44731bac1253d40a2a33bb88381c6e9cac600f81->enter($__internal_44e40caeacdbe4e84c5cfd9a44731bac1253d40a2a33bb88381c6e9cac600f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_315dfde03325e5caacfed8d376d7e10234fb11b0f5bd802d8c065672fb29b01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315dfde03325e5caacfed8d376d7e10234fb11b0f5bd802d8c065672fb29b01c->enter($__internal_315dfde03325e5caacfed8d376d7e10234fb11b0f5bd802d8c065672fb29b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_315dfde03325e5caacfed8d376d7e10234fb11b0f5bd802d8c065672fb29b01c->leave($__internal_315dfde03325e5caacfed8d376d7e10234fb11b0f5bd802d8c065672fb29b01c_prof);

        
        $__internal_44e40caeacdbe4e84c5cfd9a44731bac1253d40a2a33bb88381c6e9cac600f81->leave($__internal_44e40caeacdbe4e84c5cfd9a44731bac1253d40a2a33bb88381c6e9cac600f81_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fde483fa6da5b871f32494284d2361bce70aaf3bc1f1d551fd1c9f8e3349c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fde483fa6da5b871f32494284d2361bce70aaf3bc1f1d551fd1c9f8e3349c75->enter($__internal_3fde483fa6da5b871f32494284d2361bce70aaf3bc1f1d551fd1c9f8e3349c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fbd46e2a0405d949ff6cdc19da8468fd3b12cd0d55eb303cc8e06c408cea36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbd46e2a0405d949ff6cdc19da8468fd3b12cd0d55eb303cc8e06c408cea36b->enter($__internal_4fbd46e2a0405d949ff6cdc19da8468fd3b12cd0d55eb303cc8e06c408cea36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fbd46e2a0405d949ff6cdc19da8468fd3b12cd0d55eb303cc8e06c408cea36b->leave($__internal_4fbd46e2a0405d949ff6cdc19da8468fd3b12cd0d55eb303cc8e06c408cea36b_prof);

        
        $__internal_3fde483fa6da5b871f32494284d2361bce70aaf3bc1f1d551fd1c9f8e3349c75->leave($__internal_3fde483fa6da5b871f32494284d2361bce70aaf3bc1f1d551fd1c9f8e3349c75_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_62ba16d00ae5f70718bb3c22254f965cb05f39287d016864bdf9beac6c93d97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ba16d00ae5f70718bb3c22254f965cb05f39287d016864bdf9beac6c93d97d->enter($__internal_62ba16d00ae5f70718bb3c22254f965cb05f39287d016864bdf9beac6c93d97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55a45dad4fe0b6ead732d82c1566587e8deb293e7d09225664bc428f4582b5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a45dad4fe0b6ead732d82c1566587e8deb293e7d09225664bc428f4582b5bc->enter($__internal_55a45dad4fe0b6ead732d82c1566587e8deb293e7d09225664bc428f4582b5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_55a45dad4fe0b6ead732d82c1566587e8deb293e7d09225664bc428f4582b5bc->leave($__internal_55a45dad4fe0b6ead732d82c1566587e8deb293e7d09225664bc428f4582b5bc_prof);

        
        $__internal_62ba16d00ae5f70718bb3c22254f965cb05f39287d016864bdf9beac6c93d97d->leave($__internal_62ba16d00ae5f70718bb3c22254f965cb05f39287d016864bdf9beac6c93d97d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
