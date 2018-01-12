<?php

/* ::base.html.twig */
class __TwigTemplate_d8adfa9850bfec8e291ce4ea3ebe73a551d37a2fd71e81b00584a94726427558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d48726a39a9494e7842a3d5676da126f44e44600c8fd6544bf3e54a30875007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d48726a39a9494e7842a3d5676da126f44e44600c8fd6544bf3e54a30875007->enter($__internal_4d48726a39a9494e7842a3d5676da126f44e44600c8fd6544bf3e54a30875007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8b2affe1e6954377bf36693c00d97f38fe66d4aeb58119a02a4746c42e19f868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2affe1e6954377bf36693c00d97f38fe66d4aeb58119a02a4746c42e19f868->enter($__internal_8b2affe1e6954377bf36693c00d97f38fe66d4aeb58119a02a4746c42e19f868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled    and minified    CSS -->
        <link   rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- Latest compiled    JavaScript  -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_4d48726a39a9494e7842a3d5676da126f44e44600c8fd6544bf3e54a30875007->leave($__internal_4d48726a39a9494e7842a3d5676da126f44e44600c8fd6544bf3e54a30875007_prof);

        
        $__internal_8b2affe1e6954377bf36693c00d97f38fe66d4aeb58119a02a4746c42e19f868->leave($__internal_8b2affe1e6954377bf36693c00d97f38fe66d4aeb58119a02a4746c42e19f868_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21a8ecd1d61c9b2c4298615cab84d219d733ee3f55085052afe703d8bdabf6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a8ecd1d61c9b2c4298615cab84d219d733ee3f55085052afe703d8bdabf6bf->enter($__internal_21a8ecd1d61c9b2c4298615cab84d219d733ee3f55085052afe703d8bdabf6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f04f5a3b0d5416971097c28fad62834b19e0a599a8f74f82734c2921b55e2ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04f5a3b0d5416971097c28fad62834b19e0a599a8f74f82734c2921b55e2ba7->enter($__internal_f04f5a3b0d5416971097c28fad62834b19e0a599a8f74f82734c2921b55e2ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f04f5a3b0d5416971097c28fad62834b19e0a599a8f74f82734c2921b55e2ba7->leave($__internal_f04f5a3b0d5416971097c28fad62834b19e0a599a8f74f82734c2921b55e2ba7_prof);

        
        $__internal_21a8ecd1d61c9b2c4298615cab84d219d733ee3f55085052afe703d8bdabf6bf->leave($__internal_21a8ecd1d61c9b2c4298615cab84d219d733ee3f55085052afe703d8bdabf6bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_652375778e1a30bc46f5c4995d9768d771fd151266ad4635eca6c8823dd3ad00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652375778e1a30bc46f5c4995d9768d771fd151266ad4635eca6c8823dd3ad00->enter($__internal_652375778e1a30bc46f5c4995d9768d771fd151266ad4635eca6c8823dd3ad00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_26d73c0bced8b545fb2355d020ff52400f216ca2325b7a69f01a8e1c44233e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d73c0bced8b545fb2355d020ff52400f216ca2325b7a69f01a8e1c44233e52->enter($__internal_26d73c0bced8b545fb2355d020ff52400f216ca2325b7a69f01a8e1c44233e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26d73c0bced8b545fb2355d020ff52400f216ca2325b7a69f01a8e1c44233e52->leave($__internal_26d73c0bced8b545fb2355d020ff52400f216ca2325b7a69f01a8e1c44233e52_prof);

        
        $__internal_652375778e1a30bc46f5c4995d9768d771fd151266ad4635eca6c8823dd3ad00->leave($__internal_652375778e1a30bc46f5c4995d9768d771fd151266ad4635eca6c8823dd3ad00_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_7621a2dd82354ee25c40787022f1704257a64320812c1d0416793e67541bc39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7621a2dd82354ee25c40787022f1704257a64320812c1d0416793e67541bc39f->enter($__internal_7621a2dd82354ee25c40787022f1704257a64320812c1d0416793e67541bc39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_204f575e46ff79116233e22a38451c8a4ab64549a574c27aef968da50e569cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204f575e46ff79116233e22a38451c8a4ab64549a574c27aef968da50e569cfe->enter($__internal_204f575e46ff79116233e22a38451c8a4ab64549a574c27aef968da50e569cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_204f575e46ff79116233e22a38451c8a4ab64549a574c27aef968da50e569cfe->leave($__internal_204f575e46ff79116233e22a38451c8a4ab64549a574c27aef968da50e569cfe_prof);

        
        $__internal_7621a2dd82354ee25c40787022f1704257a64320812c1d0416793e67541bc39f->leave($__internal_7621a2dd82354ee25c40787022f1704257a64320812c1d0416793e67541bc39f_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f9cbef26a850a4e4c3a3f964fd9d83ca73c7255c5d1603ee74faa65ba4c93f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9cbef26a850a4e4c3a3f964fd9d83ca73c7255c5d1603ee74faa65ba4c93f4->enter($__internal_0f9cbef26a850a4e4c3a3f964fd9d83ca73c7255c5d1603ee74faa65ba4c93f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_581388e114c38831324889477b961349197c7dd40a749ae83d235b600acf3967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581388e114c38831324889477b961349197c7dd40a749ae83d235b600acf3967->enter($__internal_581388e114c38831324889477b961349197c7dd40a749ae83d235b600acf3967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_581388e114c38831324889477b961349197c7dd40a749ae83d235b600acf3967->leave($__internal_581388e114c38831324889477b961349197c7dd40a749ae83d235b600acf3967_prof);

        
        $__internal_0f9cbef26a850a4e4c3a3f964fd9d83ca73c7255c5d1603ee74faa65ba4c93f4->leave($__internal_0f9cbef26a850a4e4c3a3f964fd9d83ca73c7255c5d1603ee74faa65ba4c93f4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 17,  106 => 16,  89 => 6,  71 => 5,  59 => 18,  56 => 17,  54 => 16,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Latest compiled    and minified    CSS -->
        <link   rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- Latest compiled    JavaScript  -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\app/Resources\\views/base.html.twig");
    }
}
