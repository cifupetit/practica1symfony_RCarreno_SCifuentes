<?php

/* AppBundle:Partit:delete_partit.html.twig */
class __TwigTemplate_bfe418fefefe607840cd2d654c6e212344dc1fd28332381df510f91044a0e62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:delete_partit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_13e77aa4f8fe8fc0c52b981c8a02044951436bac19de80588463dbb6a7429acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e77aa4f8fe8fc0c52b981c8a02044951436bac19de80588463dbb6a7429acd->enter($__internal_13e77aa4f8fe8fc0c52b981c8a02044951436bac19de80588463dbb6a7429acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:delete_partit.html.twig"));

        $__internal_7bbb787d339f93f14586ae12586f1828851ee011a2b159a3f3c2861977562e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbb787d339f93f14586ae12586f1828851ee011a2b159a3f3c2861977562e4b->enter($__internal_7bbb787d339f93f14586ae12586f1828851ee011a2b159a3f3c2861977562e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:delete_partit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e77aa4f8fe8fc0c52b981c8a02044951436bac19de80588463dbb6a7429acd->leave($__internal_13e77aa4f8fe8fc0c52b981c8a02044951436bac19de80588463dbb6a7429acd_prof);

        
        $__internal_7bbb787d339f93f14586ae12586f1828851ee011a2b159a3f3c2861977562e4b->leave($__internal_7bbb787d339f93f14586ae12586f1828851ee011a2b159a3f3c2861977562e4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_344e5e3eb670e580feabcc545fb1a0c55c3e57e44e055b2faee2949a59c8460f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344e5e3eb670e580feabcc545fb1a0c55c3e57e44e055b2faee2949a59c8460f->enter($__internal_344e5e3eb670e580feabcc545fb1a0c55c3e57e44e055b2faee2949a59c8460f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f3c8dffbcd465fece19fe0ab4cea20b83a09bee00f85c6529c01f5005110718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3c8dffbcd465fece19fe0ab4cea20b83a09bee00f85c6529c01f5005110718->enter($__internal_0f3c8dffbcd465fece19fe0ab4cea20b83a09bee00f85c6529c01f5005110718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Partit:deletePartit";
        
        $__internal_0f3c8dffbcd465fece19fe0ab4cea20b83a09bee00f85c6529c01f5005110718->leave($__internal_0f3c8dffbcd465fece19fe0ab4cea20b83a09bee00f85c6529c01f5005110718_prof);

        
        $__internal_344e5e3eb670e580feabcc545fb1a0c55c3e57e44e055b2faee2949a59c8460f->leave($__internal_344e5e3eb670e580feabcc545fb1a0c55c3e57e44e055b2faee2949a59c8460f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f0f57a9c07af7c65924e4324d54250f4f60501a88680077e603b5b74504693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f0f57a9c07af7c65924e4324d54250f4f60501a88680077e603b5b74504693->enter($__internal_54f0f57a9c07af7c65924e4324d54250f4f60501a88680077e603b5b74504693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fff6a9d0707969c679c4dbf0adea2cb7fcc020b40d223bf0e2c684c73834dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fff6a9d0707969c679c4dbf0adea2cb7fcc020b40d223bf0e2c684c73834dbc->enter($__internal_5fff6a9d0707969c679c4dbf0adea2cb7fcc020b40d223bf0e2c684c73834dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div style=\"text-align:center;\">
<h1>Eliminar partit</h1>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<button style=\"margin: 1%;\" class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white; margin: 100px;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_5fff6a9d0707969c679c4dbf0adea2cb7fcc020b40d223bf0e2c684c73834dbc->leave($__internal_5fff6a9d0707969c679c4dbf0adea2cb7fcc020b40d223bf0e2c684c73834dbc_prof);

        
        $__internal_54f0f57a9c07af7c65924e4324d54250f4f60501a88680077e603b5b74504693->leave($__internal_54f0f57a9c07af7c65924e4324d54250f4f60501a88680077e603b5b74504693_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:delete_partit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Partit:deletePartit{% endblock %}

{% block body %}
<div style=\"text-align:center;\">
<h1>Eliminar partit</h1>
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
<button style=\"margin: 1%;\" class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white; margin: 100px;\" href=\"{{ path('competiciones')}}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:delete_partit.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\src\\AppBundle/Resources/views/Partit/delete_partit.html.twig");
    }
}
