<?php

/* AppBundle:Partit:listTemporadas.html.twig */
class __TwigTemplate_3d05878e32e3cd65c1064d74fdc5ea540eadc151ea35645cd92e415a87703480 extends Twig_Template
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
        $__internal_4388b1cfa2329a2cc80f6b2447ca9ee81bb5a1855d0151904760a5ad79e8f798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4388b1cfa2329a2cc80f6b2447ca9ee81bb5a1855d0151904760a5ad79e8f798->enter($__internal_4388b1cfa2329a2cc80f6b2447ca9ee81bb5a1855d0151904760a5ad79e8f798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $__internal_cb0d9838518563dfbab5764ea243f16fa8eb8b319a564253a112203dbe0cc98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0d9838518563dfbab5764ea243f16fa8eb8b319a564253a112203dbe0cc98a->enter($__internal_cb0d9838518563dfbab5764ea243f16fa8eb8b319a564253a112203dbe0cc98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4388b1cfa2329a2cc80f6b2447ca9ee81bb5a1855d0151904760a5ad79e8f798->leave($__internal_4388b1cfa2329a2cc80f6b2447ca9ee81bb5a1855d0151904760a5ad79e8f798_prof);

        
        $__internal_cb0d9838518563dfbab5764ea243f16fa8eb8b319a564253a112203dbe0cc98a->leave($__internal_cb0d9838518563dfbab5764ea243f16fa8eb8b319a564253a112203dbe0cc98a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cff875e67eeb57e0b8a5a4378d19e0bf3e458078a91df1c43f86333a4043a496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff875e67eeb57e0b8a5a4378d19e0bf3e458078a91df1c43f86333a4043a496->enter($__internal_cff875e67eeb57e0b8a5a4378d19e0bf3e458078a91df1c43f86333a4043a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_491a76a57f64c8e867fa7707517166eb60d9626cd40fff6a578dfd5745fa3ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491a76a57f64c8e867fa7707517166eb60d9626cd40fff6a578dfd5745fa3ea2->enter($__internal_491a76a57f64c8e867fa7707517166eb60d9626cd40fff6a578dfd5745fa3ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_491a76a57f64c8e867fa7707517166eb60d9626cd40fff6a578dfd5745fa3ea2->leave($__internal_491a76a57f64c8e867fa7707517166eb60d9626cd40fff6a578dfd5745fa3ea2_prof);

        
        $__internal_cff875e67eeb57e0b8a5a4378d19e0bf3e458078a91df1c43f86333a4043a496->leave($__internal_cff875e67eeb57e0b8a5a4378d19e0bf3e458078a91df1c43f86333a4043a496_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35045e35a9e76b32a66d988eb89b7f0af7865a48833e970abc13890f3e836516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35045e35a9e76b32a66d988eb89b7f0af7865a48833e970abc13890f3e836516->enter($__internal_35045e35a9e76b32a66d988eb89b7f0af7865a48833e970abc13890f3e836516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9e18787d7d4be09b2490b602278368840470c2b1e73744903e31f3b8ea98ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e18787d7d4be09b2490b602278368840470c2b1e73744903e31f3b8ea98ddb->enter($__internal_d9e18787d7d4be09b2490b602278368840470c2b1e73744903e31f3b8ea98ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Temporadas";
        
        $__internal_d9e18787d7d4be09b2490b602278368840470c2b1e73744903e31f3b8ea98ddb->leave($__internal_d9e18787d7d4be09b2490b602278368840470c2b1e73744903e31f3b8ea98ddb_prof);

        
        $__internal_35045e35a9e76b32a66d988eb89b7f0af7865a48833e970abc13890f3e836516->leave($__internal_35045e35a9e76b32a66d988eb89b7f0af7865a48833e970abc13890f3e836516_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7e3b4a1cb93b7b65457292eba779181149ca3a383224908a33301940db5a1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e3b4a1cb93b7b65457292eba779181149ca3a383224908a33301940db5a1f6->enter($__internal_c7e3b4a1cb93b7b65457292eba779181149ca3a383224908a33301940db5a1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e3928569ae1d4a871d90b3451ff72c416244f4dffed669baf83ec5760bfdff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3928569ae1d4a871d90b3451ff72c416244f4dffed669baf83ec5760bfdff2->enter($__internal_8e3928569ae1d4a871d90b3451ff72c416244f4dffed669baf83ec5760bfdff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidos", array("competicio" => $this->getAttribute($context["partit"], "competicio", array()), "temporada" => $this->getAttribute($context["partit"], "temporada", array()))), "html", null, true);
            echo "\">Temporada ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo "</button><br>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
</div>
";
        
        $__internal_8e3928569ae1d4a871d90b3451ff72c416244f4dffed669baf83ec5760bfdff2->leave($__internal_8e3928569ae1d4a871d90b3451ff72c416244f4dffed669baf83ec5760bfdff2_prof);

        
        $__internal_c7e3b4a1cb93b7b65457292eba779181149ca3a383224908a33301940db5a1f6->leave($__internal_c7e3b4a1cb93b7b65457292eba779181149ca3a383224908a33301940db5a1f6_prof);

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
        return array (  119 => 20,  116 => 19,  107 => 15,  96 => 12,  91 => 11,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t\t\t<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\" href=\"{{ path('partidos' ,{'competicio': partit.competicio, 'temporada': partit.temporada}) }}\">Temporada {{partit.temporada}}</button><br>

\t\t{% else %}
\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado competiciones...</button>
\t\t
\t\t{% endfor %}
\t
<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('competiciones')}}\">Competiciones</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listTemporadas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listTemporadas.html.twig");
    }
}
