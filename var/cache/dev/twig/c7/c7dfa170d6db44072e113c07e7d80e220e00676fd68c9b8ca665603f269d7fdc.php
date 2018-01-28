<?php

/* AppBundle:Partit:add_partit.html.twig */
class __TwigTemplate_abbfa4b00d3b97eb8c60a894010c4077a951d3b4ad7b1daac71d8aa35534b32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:add_partit.html.twig", 1);
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
        $__internal_3bdccbe8db3be22c68db95902f6517bdc791418e523ed2969607ca10de359454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdccbe8db3be22c68db95902f6517bdc791418e523ed2969607ca10de359454->enter($__internal_3bdccbe8db3be22c68db95902f6517bdc791418e523ed2969607ca10de359454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:add_partit.html.twig"));

        $__internal_bd1ec51920e8d3de4e4a08a0b58299889f1429d96a1e5b879108770d60e40f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1ec51920e8d3de4e4a08a0b58299889f1429d96a1e5b879108770d60e40f7b->enter($__internal_bd1ec51920e8d3de4e4a08a0b58299889f1429d96a1e5b879108770d60e40f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:add_partit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bdccbe8db3be22c68db95902f6517bdc791418e523ed2969607ca10de359454->leave($__internal_3bdccbe8db3be22c68db95902f6517bdc791418e523ed2969607ca10de359454_prof);

        
        $__internal_bd1ec51920e8d3de4e4a08a0b58299889f1429d96a1e5b879108770d60e40f7b->leave($__internal_bd1ec51920e8d3de4e4a08a0b58299889f1429d96a1e5b879108770d60e40f7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9cb40c37311ed7265e3ec177cbc622c7a65508765626a8deb89c0ef9c54ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9cb40c37311ed7265e3ec177cbc622c7a65508765626a8deb89c0ef9c54ccd->enter($__internal_eb9cb40c37311ed7265e3ec177cbc622c7a65508765626a8deb89c0ef9c54ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3131e1c83a66793558653f81e3ba0bf48aa35bbc2c587c2c83d3f4c757592862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3131e1c83a66793558653f81e3ba0bf48aa35bbc2c587c2c83d3f4c757592862->enter($__internal_3131e1c83a66793558653f81e3ba0bf48aa35bbc2c587c2c83d3f4c757592862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Partit:addPartit";
        
        $__internal_3131e1c83a66793558653f81e3ba0bf48aa35bbc2c587c2c83d3f4c757592862->leave($__internal_3131e1c83a66793558653f81e3ba0bf48aa35bbc2c587c2c83d3f4c757592862_prof);

        
        $__internal_eb9cb40c37311ed7265e3ec177cbc622c7a65508765626a8deb89c0ef9c54ccd->leave($__internal_eb9cb40c37311ed7265e3ec177cbc622c7a65508765626a8deb89c0ef9c54ccd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab4f9b180aaeb06b78681814b4a6c5d0b935edd1d0189ed43f4ed87e5a2dc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab4f9b180aaeb06b78681814b4a6c5d0b935edd1d0189ed43f4ed87e5a2dc6f->enter($__internal_cab4f9b180aaeb06b78681814b4a6c5d0b935edd1d0189ed43f4ed87e5a2dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90f48ac40caf4e484b3f83696b9125e1181b5553d93d63247e2f656bacd663bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f48ac40caf4e484b3f83696b9125e1181b5553d93d63247e2f656bacd663bf->enter($__internal_90f48ac40caf4e484b3f83696b9125e1181b5553d93d63247e2f656bacd663bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div style=\"text-align:center;\">
<h1>Afegir Partit</h1>
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
<button style=\"margin: 1%;\"  class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white; margin: 100px;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_90f48ac40caf4e484b3f83696b9125e1181b5553d93d63247e2f656bacd663bf->leave($__internal_90f48ac40caf4e484b3f83696b9125e1181b5553d93d63247e2f656bacd663bf_prof);

        
        $__internal_cab4f9b180aaeb06b78681814b4a6c5d0b935edd1d0189ed43f4ed87e5a2dc6f->leave($__internal_cab4f9b180aaeb06b78681814b4a6c5d0b935edd1d0189ed43f4ed87e5a2dc6f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:add_partit.html.twig";
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

{% block title %}AppBundle:Partit:addPartit{% endblock %}

{% block body %}
<div style=\"text-align:center;\">
<h1>Afegir Partit</h1>
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
<button style=\"margin: 1%;\"  class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white; margin: 100px;\" href=\"{{ path('competiciones')}}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:add_partit.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\src\\AppBundle/Resources/views/Partit/add_partit.html.twig");
    }
}
