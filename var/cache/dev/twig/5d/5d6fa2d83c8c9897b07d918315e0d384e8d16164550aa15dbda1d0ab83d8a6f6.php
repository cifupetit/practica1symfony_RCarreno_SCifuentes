<?php

/* AppBundle:Partit:listTemporadas.html.twig */
class __TwigTemplate_e15cfffbee21fac368fa9a2e5a29208e797156b072d36df28042538e5f6da8ee extends Twig_Template
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
        $__internal_b3dc256501049222057a7a853a4f49fd60ff8b2efb927fa76d065dc11303752e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dc256501049222057a7a853a4f49fd60ff8b2efb927fa76d065dc11303752e->enter($__internal_b3dc256501049222057a7a853a4f49fd60ff8b2efb927fa76d065dc11303752e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $__internal_22086fed89d451b2da7c631f64b10debbe3df4ebd25aadeb2960bfc77fcb7662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22086fed89d451b2da7c631f64b10debbe3df4ebd25aadeb2960bfc77fcb7662->enter($__internal_22086fed89d451b2da7c631f64b10debbe3df4ebd25aadeb2960bfc77fcb7662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listTemporadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3dc256501049222057a7a853a4f49fd60ff8b2efb927fa76d065dc11303752e->leave($__internal_b3dc256501049222057a7a853a4f49fd60ff8b2efb927fa76d065dc11303752e_prof);

        
        $__internal_22086fed89d451b2da7c631f64b10debbe3df4ebd25aadeb2960bfc77fcb7662->leave($__internal_22086fed89d451b2da7c631f64b10debbe3df4ebd25aadeb2960bfc77fcb7662_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_892534babf802b406d3814fbf648a58331005a47f1ec22269035c0f0f3ffea73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892534babf802b406d3814fbf648a58331005a47f1ec22269035c0f0f3ffea73->enter($__internal_892534babf802b406d3814fbf648a58331005a47f1ec22269035c0f0f3ffea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cfa9b58feabc7f125fe7b191d02928dbcbcb28869939b00c06432187767247b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa9b58feabc7f125fe7b191d02928dbcbcb28869939b00c06432187767247b7->enter($__internal_cfa9b58feabc7f125fe7b191d02928dbcbcb28869939b00c06432187767247b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cfa9b58feabc7f125fe7b191d02928dbcbcb28869939b00c06432187767247b7->leave($__internal_cfa9b58feabc7f125fe7b191d02928dbcbcb28869939b00c06432187767247b7_prof);

        
        $__internal_892534babf802b406d3814fbf648a58331005a47f1ec22269035c0f0f3ffea73->leave($__internal_892534babf802b406d3814fbf648a58331005a47f1ec22269035c0f0f3ffea73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45435c0180cbec6f351c8d79f538be463537ac8a29ed305a5154466b76b5b95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45435c0180cbec6f351c8d79f538be463537ac8a29ed305a5154466b76b5b95c->enter($__internal_45435c0180cbec6f351c8d79f538be463537ac8a29ed305a5154466b76b5b95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_869ce16f53585ba0871fa7411ba00c192d05c3202c31020a2ce783c2ced5bfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869ce16f53585ba0871fa7411ba00c192d05c3202c31020a2ce783c2ced5bfd6->enter($__internal_869ce16f53585ba0871fa7411ba00c192d05c3202c31020a2ce783c2ced5bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Temporadas";
        
        $__internal_869ce16f53585ba0871fa7411ba00c192d05c3202c31020a2ce783c2ced5bfd6->leave($__internal_869ce16f53585ba0871fa7411ba00c192d05c3202c31020a2ce783c2ced5bfd6_prof);

        
        $__internal_45435c0180cbec6f351c8d79f538be463537ac8a29ed305a5154466b76b5b95c->leave($__internal_45435c0180cbec6f351c8d79f538be463537ac8a29ed305a5154466b76b5b95c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_51606b1b0b358672bc2cb71dba7f73037468e1e1e53d7eb15532d870f741c3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51606b1b0b358672bc2cb71dba7f73037468e1e1e53d7eb15532d870f741c3c1->enter($__internal_51606b1b0b358672bc2cb71dba7f73037468e1e1e53d7eb15532d870f741c3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b3ccddcb82750d77aea6dd644685c5a921606799c2848a831572c53ff88a077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3ccddcb82750d77aea6dd644685c5a921606799c2848a831572c53ff88a077->enter($__internal_6b3ccddcb82750d77aea6dd644685c5a921606799c2848a831572c53ff88a077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partits"] ?? $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\" ><a style=\"text-decoration:none;color:white;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidos", array("competicio" => $this->getAttribute($context["partit"], "competicio", array()), "temporada" => $this->getAttribute($context["partit"], "temporada", array()))), "html", null, true);
            echo "\">Temporada ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo "</button></a><br>

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
        
        $__internal_6b3ccddcb82750d77aea6dd644685c5a921606799c2848a831572c53ff88a077->leave($__internal_6b3ccddcb82750d77aea6dd644685c5a921606799c2848a831572c53ff88a077_prof);

        
        $__internal_51606b1b0b358672bc2cb71dba7f73037468e1e1e53d7eb15532d870f741c3c1->leave($__internal_51606b1b0b358672bc2cb71dba7f73037468e1e1e53d7eb15532d870f741c3c1_prof);

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
\t\t\t<button style=\"margin-bottom: 2%; width: 50%;\" type=\"button\" class=\"btn btn-info\" ><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidos' ,{'competicio': partit.competicio, 'temporada': partit.temporada}) }}\">Temporada {{partit.temporada}}</button></a><br>

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
