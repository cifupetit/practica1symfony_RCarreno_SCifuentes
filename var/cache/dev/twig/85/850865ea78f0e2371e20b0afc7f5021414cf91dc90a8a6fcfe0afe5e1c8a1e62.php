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
        $__internal_164d59bd49e5eb5bcbcf89b158e1e5eee874d694fd34dcef18bd882b634c5ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164d59bd49e5eb5bcbcf89b158e1e5eee874d694fd34dcef18bd882b634c5ad9->enter($__internal_164d59bd49e5eb5bcbcf89b158e1e5eee874d694fd34dcef18bd882b634c5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ee5e21752e59aef27de4c6642150cb7a642867a6040368af7216242feffdfa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5e21752e59aef27de4c6642150cb7a642867a6040368af7216242feffdfa5b->enter($__internal_ee5e21752e59aef27de4c6642150cb7a642867a6040368af7216242feffdfa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_164d59bd49e5eb5bcbcf89b158e1e5eee874d694fd34dcef18bd882b634c5ad9->leave($__internal_164d59bd49e5eb5bcbcf89b158e1e5eee874d694fd34dcef18bd882b634c5ad9_prof);

        
        $__internal_ee5e21752e59aef27de4c6642150cb7a642867a6040368af7216242feffdfa5b->leave($__internal_ee5e21752e59aef27de4c6642150cb7a642867a6040368af7216242feffdfa5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a0ccf7c533101dcf3bbb782d5a09d7ac8ea100d89cddbeef82b540b149c6eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0ccf7c533101dcf3bbb782d5a09d7ac8ea100d89cddbeef82b540b149c6eb1->enter($__internal_5a0ccf7c533101dcf3bbb782d5a09d7ac8ea100d89cddbeef82b540b149c6eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f50eb8154848fce30a96b5aced0b290c8cf5f76e348960bd908b5dcfe962ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f50eb8154848fce30a96b5aced0b290c8cf5f76e348960bd908b5dcfe962ebf->enter($__internal_5f50eb8154848fce30a96b5aced0b290c8cf5f76e348960bd908b5dcfe962ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5f50eb8154848fce30a96b5aced0b290c8cf5f76e348960bd908b5dcfe962ebf->leave($__internal_5f50eb8154848fce30a96b5aced0b290c8cf5f76e348960bd908b5dcfe962ebf_prof);

        
        $__internal_5a0ccf7c533101dcf3bbb782d5a09d7ac8ea100d89cddbeef82b540b149c6eb1->leave($__internal_5a0ccf7c533101dcf3bbb782d5a09d7ac8ea100d89cddbeef82b540b149c6eb1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cc3ffe9a4e73d21b4ae0718ef1aed1aa31c5674c446cb688489778ebd8adbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc3ffe9a4e73d21b4ae0718ef1aed1aa31c5674c446cb688489778ebd8adbfa->enter($__internal_9cc3ffe9a4e73d21b4ae0718ef1aed1aa31c5674c446cb688489778ebd8adbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a1cb6f341938d3ee1683321670285b188de934e36c7237c38b3baef72349e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1cb6f341938d3ee1683321670285b188de934e36c7237c38b3baef72349e06->enter($__internal_0a1cb6f341938d3ee1683321670285b188de934e36c7237c38b3baef72349e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a1cb6f341938d3ee1683321670285b188de934e36c7237c38b3baef72349e06->leave($__internal_0a1cb6f341938d3ee1683321670285b188de934e36c7237c38b3baef72349e06_prof);

        
        $__internal_9cc3ffe9a4e73d21b4ae0718ef1aed1aa31c5674c446cb688489778ebd8adbfa->leave($__internal_9cc3ffe9a4e73d21b4ae0718ef1aed1aa31c5674c446cb688489778ebd8adbfa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_be17b884bc9ab5c7533a0ba50c9264f92cd3941f6564cc39e71d9e6ab40b4ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be17b884bc9ab5c7533a0ba50c9264f92cd3941f6564cc39e71d9e6ab40b4ccb->enter($__internal_be17b884bc9ab5c7533a0ba50c9264f92cd3941f6564cc39e71d9e6ab40b4ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_915f55dd643f10b570f5012f2d0f68f0061afd0b09d0706c4f6236396fd55cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915f55dd643f10b570f5012f2d0f68f0061afd0b09d0706c4f6236396fd55cc1->enter($__internal_915f55dd643f10b570f5012f2d0f68f0061afd0b09d0706c4f6236396fd55cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_915f55dd643f10b570f5012f2d0f68f0061afd0b09d0706c4f6236396fd55cc1->leave($__internal_915f55dd643f10b570f5012f2d0f68f0061afd0b09d0706c4f6236396fd55cc1_prof);

        
        $__internal_be17b884bc9ab5c7533a0ba50c9264f92cd3941f6564cc39e71d9e6ab40b4ccb->leave($__internal_be17b884bc9ab5c7533a0ba50c9264f92cd3941f6564cc39e71d9e6ab40b4ccb_prof);

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
