<?php

/* AppBundle:Partit:listLigas.html.twig */
class __TwigTemplate_097e29b5920f7c7751047421f151864868dc7a17bf02ef6b1150d4060c73df6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listLigas.html.twig", 1);
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
        $__internal_eaacdcb9f4e54e38fb24270701384b18f4e39477dc9301093b283be699aae831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaacdcb9f4e54e38fb24270701384b18f4e39477dc9301093b283be699aae831->enter($__internal_eaacdcb9f4e54e38fb24270701384b18f4e39477dc9301093b283be699aae831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listLigas.html.twig"));

        $__internal_0f0c20b64404465c22bdaf190e35ff807f6bdddb4f13faec424d088009cd2788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0c20b64404465c22bdaf190e35ff807f6bdddb4f13faec424d088009cd2788->enter($__internal_0f0c20b64404465c22bdaf190e35ff807f6bdddb4f13faec424d088009cd2788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listLigas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaacdcb9f4e54e38fb24270701384b18f4e39477dc9301093b283be699aae831->leave($__internal_eaacdcb9f4e54e38fb24270701384b18f4e39477dc9301093b283be699aae831_prof);

        
        $__internal_0f0c20b64404465c22bdaf190e35ff807f6bdddb4f13faec424d088009cd2788->leave($__internal_0f0c20b64404465c22bdaf190e35ff807f6bdddb4f13faec424d088009cd2788_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77a0654e39e369c420846e4589b9c7d057e3041cd4301702de6e150215ab6498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a0654e39e369c420846e4589b9c7d057e3041cd4301702de6e150215ab6498->enter($__internal_77a0654e39e369c420846e4589b9c7d057e3041cd4301702de6e150215ab6498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_48b05b7fd847d8e2875ce3ad3997b7656302b8eadc6252e2f65da1ddc1ac5d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b05b7fd847d8e2875ce3ad3997b7656302b8eadc6252e2f65da1ddc1ac5d1d->enter($__internal_48b05b7fd847d8e2875ce3ad3997b7656302b8eadc6252e2f65da1ddc1ac5d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48b05b7fd847d8e2875ce3ad3997b7656302b8eadc6252e2f65da1ddc1ac5d1d->leave($__internal_48b05b7fd847d8e2875ce3ad3997b7656302b8eadc6252e2f65da1ddc1ac5d1d_prof);

        
        $__internal_77a0654e39e369c420846e4589b9c7d057e3041cd4301702de6e150215ab6498->leave($__internal_77a0654e39e369c420846e4589b9c7d057e3041cd4301702de6e150215ab6498_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_629d5e15bf12c2969cb7b3ba7e6c53e5a79d1524e21e4e369aa804a9ebe34e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629d5e15bf12c2969cb7b3ba7e6c53e5a79d1524e21e4e369aa804a9ebe34e15->enter($__internal_629d5e15bf12c2969cb7b3ba7e6c53e5a79d1524e21e4e369aa804a9ebe34e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ca49957359c394b12869592b6ecdc19d353a2868cd9036fe5b10af61e4ca466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca49957359c394b12869592b6ecdc19d353a2868cd9036fe5b10af61e4ca466->enter($__internal_8ca49957359c394b12869592b6ecdc19d353a2868cd9036fe5b10af61e4ca466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_8ca49957359c394b12869592b6ecdc19d353a2868cd9036fe5b10af61e4ca466->leave($__internal_8ca49957359c394b12869592b6ecdc19d353a2868cd9036fe5b10af61e4ca466_prof);

        
        $__internal_629d5e15bf12c2969cb7b3ba7e6c53e5a79d1524e21e4e369aa804a9ebe34e15->leave($__internal_629d5e15bf12c2969cb7b3ba7e6c53e5a79d1524e21e4e369aa804a9ebe34e15_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d0b50ddb891c050c042b582e586028fb3c75cac012de5098175feb58a0d5218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0b50ddb891c050c042b582e586028fb3c75cac012de5098175feb58a0d5218->enter($__internal_4d0b50ddb891c050c042b582e586028fb3c75cac012de5098175feb58a0d5218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_249e0254bac19adbb386618843a48185ff6acc08685d9dc42b786bf3201dd136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249e0254bac19adbb386618843a48185ff6acc08685d9dc42b786bf3201dd136->enter($__internal_249e0254bac19adbb386618843a48185ff6acc08685d9dc42b786bf3201dd136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partits"] ?? $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 11
            echo "\t\t\t<button style=\"margin-bottom: 1%; width: 50%;\" type=\"button\" class=\"btn btn-info\"><a style=\"text-decoration:none;color:white;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", array("competicio" => $this->getAttribute($context["partit"], "competicio", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo "</a></button><br>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t\t\t<button class=\"btn btn-danger\">No se han encontrado competiciones...</button>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
        
        $__internal_249e0254bac19adbb386618843a48185ff6acc08685d9dc42b786bf3201dd136->leave($__internal_249e0254bac19adbb386618843a48185ff6acc08685d9dc42b786bf3201dd136_prof);

        
        $__internal_4d0b50ddb891c050c042b582e586028fb3c75cac012de5098175feb58a0d5218->leave($__internal_4d0b50ddb891c050c042b582e586028fb3c75cac012de5098175feb58a0d5218_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listLigas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 15,  105 => 13,  95 => 11,  90 => 10,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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

{% block title %}Competiciones{% endblock %}

{% block body %}
<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>
\t\t{% for partit in partits %}
\t\t\t<button style=\"margin-bottom: 1%; width: 50%;\" type=\"button\" class=\"btn btn-info\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,{'competicio': partit.competicio}) }}\">{{partit.competicio}}</a></button><br>
\t\t{% else %}
\t\t\t<button class=\"btn btn-danger\">No se han encontrado competiciones...</button>
\t\t{% endfor %}
</div>
{% endblock %}
", "AppBundle:Partit:listLigas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listLigas.html.twig");
    }
}
