<?php

/* AppBundle:Partit:update_partit.html.twig */
class __TwigTemplate_47195785bd3ecece557a306281cf47e7bb666186c000416b32d0db9b24fd6f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:update_partit.html.twig", 1);
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
        $__internal_57cb43cc46d8d158158f54bca98df613917444c8be407ada5d11bbfd719dd8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cb43cc46d8d158158f54bca98df613917444c8be407ada5d11bbfd719dd8c4->enter($__internal_57cb43cc46d8d158158f54bca98df613917444c8be407ada5d11bbfd719dd8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:update_partit.html.twig"));

        $__internal_99ba945570d74a6999d799f1bb0f6fcdcccf6f49dc296bc88547f2cff7e5140d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ba945570d74a6999d799f1bb0f6fcdcccf6f49dc296bc88547f2cff7e5140d->enter($__internal_99ba945570d74a6999d799f1bb0f6fcdcccf6f49dc296bc88547f2cff7e5140d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:update_partit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57cb43cc46d8d158158f54bca98df613917444c8be407ada5d11bbfd719dd8c4->leave($__internal_57cb43cc46d8d158158f54bca98df613917444c8be407ada5d11bbfd719dd8c4_prof);

        
        $__internal_99ba945570d74a6999d799f1bb0f6fcdcccf6f49dc296bc88547f2cff7e5140d->leave($__internal_99ba945570d74a6999d799f1bb0f6fcdcccf6f49dc296bc88547f2cff7e5140d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eefed93a084749fb4b4df51d35b75a8457e7f0a05f3cc963cc53caae0e73bb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefed93a084749fb4b4df51d35b75a8457e7f0a05f3cc963cc53caae0e73bb44->enter($__internal_eefed93a084749fb4b4df51d35b75a8457e7f0a05f3cc963cc53caae0e73bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33a333cc4ec3f17e1437f914084231a462e6f290d44460af6249f7d2c204f3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a333cc4ec3f17e1437f914084231a462e6f290d44460af6249f7d2c204f3c5->enter($__internal_33a333cc4ec3f17e1437f914084231a462e6f290d44460af6249f7d2c204f3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Partit:updatePartit";
        
        $__internal_33a333cc4ec3f17e1437f914084231a462e6f290d44460af6249f7d2c204f3c5->leave($__internal_33a333cc4ec3f17e1437f914084231a462e6f290d44460af6249f7d2c204f3c5_prof);

        
        $__internal_eefed93a084749fb4b4df51d35b75a8457e7f0a05f3cc963cc53caae0e73bb44->leave($__internal_eefed93a084749fb4b4df51d35b75a8457e7f0a05f3cc963cc53caae0e73bb44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f36b56a77fa5c363e6ccda1991500fdf7788eb767378192b363c22e491dda95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f36b56a77fa5c363e6ccda1991500fdf7788eb767378192b363c22e491dda95->enter($__internal_6f36b56a77fa5c363e6ccda1991500fdf7788eb767378192b363c22e491dda95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab1f81bb46c288f3517a4f8a44315782c4676f2b3206d400f69b0ae31a0124dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1f81bb46c288f3517a4f8a44315782c4676f2b3206d400f69b0ae31a0124dd->enter($__internal_ab1f81bb46c288f3517a4f8a44315782c4676f2b3206d400f69b0ae31a0124dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div style=\"text-align:center;\">
<h1>Modificar Partit</h1>
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
        
        $__internal_ab1f81bb46c288f3517a4f8a44315782c4676f2b3206d400f69b0ae31a0124dd->leave($__internal_ab1f81bb46c288f3517a4f8a44315782c4676f2b3206d400f69b0ae31a0124dd_prof);

        
        $__internal_6f36b56a77fa5c363e6ccda1991500fdf7788eb767378192b363c22e491dda95->leave($__internal_6f36b56a77fa5c363e6ccda1991500fdf7788eb767378192b363c22e491dda95_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:update_partit.html.twig";
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

{% block title %}AppBundle:Partit:updatePartit{% endblock %}

{% block body %}
<div style=\"text-align:center;\">
<h1>Modificar Partit</h1>
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
<button style=\"margin: 1%;\"  class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white; margin: 100px;\" href=\"{{ path('competiciones')}}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:update_partit.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\src\\AppBundle/Resources/views/Partit/update_partit.html.twig");
    }
}
