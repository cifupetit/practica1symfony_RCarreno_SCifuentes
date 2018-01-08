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
        $__internal_428430babf819bcfb52d349fa3c8198f2b9f37815d3eb43057625a5f11d3b83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428430babf819bcfb52d349fa3c8198f2b9f37815d3eb43057625a5f11d3b83f->enter($__internal_428430babf819bcfb52d349fa3c8198f2b9f37815d3eb43057625a5f11d3b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_80da5d860d3f62069531d4c3186357c2f14573c5250cffd365ef21b5539307a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80da5d860d3f62069531d4c3186357c2f14573c5250cffd365ef21b5539307a2->enter($__internal_80da5d860d3f62069531d4c3186357c2f14573c5250cffd365ef21b5539307a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428430babf819bcfb52d349fa3c8198f2b9f37815d3eb43057625a5f11d3b83f->leave($__internal_428430babf819bcfb52d349fa3c8198f2b9f37815d3eb43057625a5f11d3b83f_prof);

        
        $__internal_80da5d860d3f62069531d4c3186357c2f14573c5250cffd365ef21b5539307a2->leave($__internal_80da5d860d3f62069531d4c3186357c2f14573c5250cffd365ef21b5539307a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b30e06908cdb773a1483be3e34739d415d55fd3b73ea8c591c2de8ffec314eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b30e06908cdb773a1483be3e34739d415d55fd3b73ea8c591c2de8ffec314eb->enter($__internal_4b30e06908cdb773a1483be3e34739d415d55fd3b73ea8c591c2de8ffec314eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4f058f0cb50db38ab960a64ab0585aa5015f4c6cfefe02f7f8ccf3301e17653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f058f0cb50db38ab960a64ab0585aa5015f4c6cfefe02f7f8ccf3301e17653->enter($__internal_f4f058f0cb50db38ab960a64ab0585aa5015f4c6cfefe02f7f8ccf3301e17653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f4f058f0cb50db38ab960a64ab0585aa5015f4c6cfefe02f7f8ccf3301e17653->leave($__internal_f4f058f0cb50db38ab960a64ab0585aa5015f4c6cfefe02f7f8ccf3301e17653_prof);

        
        $__internal_4b30e06908cdb773a1483be3e34739d415d55fd3b73ea8c591c2de8ffec314eb->leave($__internal_4b30e06908cdb773a1483be3e34739d415d55fd3b73ea8c591c2de8ffec314eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58d158ec5e06342198bb668a0753e8a785444a0f04103bec3281c74d4193f3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d158ec5e06342198bb668a0753e8a785444a0f04103bec3281c74d4193f3b1->enter($__internal_58d158ec5e06342198bb668a0753e8a785444a0f04103bec3281c74d4193f3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e7e415343cb16375666820d34a55bd8a8923485424680438c56c2de66bb5856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7e415343cb16375666820d34a55bd8a8923485424680438c56c2de66bb5856->enter($__internal_9e7e415343cb16375666820d34a55bd8a8923485424680438c56c2de66bb5856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e7e415343cb16375666820d34a55bd8a8923485424680438c56c2de66bb5856->leave($__internal_9e7e415343cb16375666820d34a55bd8a8923485424680438c56c2de66bb5856_prof);

        
        $__internal_58d158ec5e06342198bb668a0753e8a785444a0f04103bec3281c74d4193f3b1->leave($__internal_58d158ec5e06342198bb668a0753e8a785444a0f04103bec3281c74d4193f3b1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dfafb1dab99df20dca87f2d2fe3472174b625a81efd9e3cb3be717a7980e214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfafb1dab99df20dca87f2d2fe3472174b625a81efd9e3cb3be717a7980e214->enter($__internal_3dfafb1dab99df20dca87f2d2fe3472174b625a81efd9e3cb3be717a7980e214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75e6a23a6b94d49d494ec3efe067716a965218a404512c5ca33ab647e8a897b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e6a23a6b94d49d494ec3efe067716a965218a404512c5ca33ab647e8a897b6->enter($__internal_75e6a23a6b94d49d494ec3efe067716a965218a404512c5ca33ab647e8a897b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_75e6a23a6b94d49d494ec3efe067716a965218a404512c5ca33ab647e8a897b6->leave($__internal_75e6a23a6b94d49d494ec3efe067716a965218a404512c5ca33ab647e8a897b6_prof);

        
        $__internal_3dfafb1dab99df20dca87f2d2fe3472174b625a81efd9e3cb3be717a7980e214->leave($__internal_3dfafb1dab99df20dca87f2d2fe3472174b625a81efd9e3cb3be717a7980e214_prof);

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
