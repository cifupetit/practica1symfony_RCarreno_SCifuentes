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
        $__internal_6121e957a8241c2b980c644205f394c5777d826df2808b0e22df2930393d4c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6121e957a8241c2b980c644205f394c5777d826df2808b0e22df2930393d4c56->enter($__internal_6121e957a8241c2b980c644205f394c5777d826df2808b0e22df2930393d4c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listLigas.html.twig"));

        $__internal_76bd26a3dbe7038512afc535df9c7d7998df57ba12dbec3c40a49276d12e7ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bd26a3dbe7038512afc535df9c7d7998df57ba12dbec3c40a49276d12e7ef0->enter($__internal_76bd26a3dbe7038512afc535df9c7d7998df57ba12dbec3c40a49276d12e7ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listLigas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6121e957a8241c2b980c644205f394c5777d826df2808b0e22df2930393d4c56->leave($__internal_6121e957a8241c2b980c644205f394c5777d826df2808b0e22df2930393d4c56_prof);

        
        $__internal_76bd26a3dbe7038512afc535df9c7d7998df57ba12dbec3c40a49276d12e7ef0->leave($__internal_76bd26a3dbe7038512afc535df9c7d7998df57ba12dbec3c40a49276d12e7ef0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7ae632bbfe04914080d52cea8d60963771e562a31a97e7a10450872d385f345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ae632bbfe04914080d52cea8d60963771e562a31a97e7a10450872d385f345->enter($__internal_f7ae632bbfe04914080d52cea8d60963771e562a31a97e7a10450872d385f345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aaf734736bc45a0bca8e5677eb025509f80b89e1376c0e86a282881ff5c8779c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf734736bc45a0bca8e5677eb025509f80b89e1376c0e86a282881ff5c8779c->enter($__internal_aaf734736bc45a0bca8e5677eb025509f80b89e1376c0e86a282881ff5c8779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aaf734736bc45a0bca8e5677eb025509f80b89e1376c0e86a282881ff5c8779c->leave($__internal_aaf734736bc45a0bca8e5677eb025509f80b89e1376c0e86a282881ff5c8779c_prof);

        
        $__internal_f7ae632bbfe04914080d52cea8d60963771e562a31a97e7a10450872d385f345->leave($__internal_f7ae632bbfe04914080d52cea8d60963771e562a31a97e7a10450872d385f345_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1305e40331d8631f790e4318d75180fb245f34281f0dc3d0ebaff5a82805b96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1305e40331d8631f790e4318d75180fb245f34281f0dc3d0ebaff5a82805b96c->enter($__internal_1305e40331d8631f790e4318d75180fb245f34281f0dc3d0ebaff5a82805b96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c1288d4d608fab04ab338cbd6f323c278e5e64787e03a1cecf03dd493dd1ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1288d4d608fab04ab338cbd6f323c278e5e64787e03a1cecf03dd493dd1ae2->enter($__internal_1c1288d4d608fab04ab338cbd6f323c278e5e64787e03a1cecf03dd493dd1ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_1c1288d4d608fab04ab338cbd6f323c278e5e64787e03a1cecf03dd493dd1ae2->leave($__internal_1c1288d4d608fab04ab338cbd6f323c278e5e64787e03a1cecf03dd493dd1ae2_prof);

        
        $__internal_1305e40331d8631f790e4318d75180fb245f34281f0dc3d0ebaff5a82805b96c->leave($__internal_1305e40331d8631f790e4318d75180fb245f34281f0dc3d0ebaff5a82805b96c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_65178f52f5d9895bf46d8848a481108b99d9d70286798a0ee2f21b60ab15790e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65178f52f5d9895bf46d8848a481108b99d9d70286798a0ee2f21b60ab15790e->enter($__internal_65178f52f5d9895bf46d8848a481108b99d9d70286798a0ee2f21b60ab15790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d9c6b7290ece25876f15427158f6f0a883b8af4fa680ca9c0451a422a27e57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9c6b7290ece25876f15427158f6f0a883b8af4fa680ca9c0451a422a27e57e->enter($__internal_0d9c6b7290ece25876f15427158f6f0a883b8af4fa680ca9c0451a422a27e57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competi", array("competicio" => $this->getAttribute($context["partit"], "competicio", array()))), "html", null, true);
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
        
        $__internal_0d9c6b7290ece25876f15427158f6f0a883b8af4fa680ca9c0451a422a27e57e->leave($__internal_0d9c6b7290ece25876f15427158f6f0a883b8af4fa680ca9c0451a422a27e57e_prof);

        
        $__internal_65178f52f5d9895bf46d8848a481108b99d9d70286798a0ee2f21b60ab15790e->leave($__internal_65178f52f5d9895bf46d8848a481108b99d9d70286798a0ee2f21b60ab15790e_prof);

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
\t\t\t<button style=\"margin-bottom: 1%; width: 50%;\" type=\"button\" class=\"btn btn-info\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('competi' ,{'competicio': partit.competicio}) }}\">{{partit.competicio}}</a></button><br>
\t\t{% else %}
\t\t\t<button class=\"btn btn-danger\">No se han encontrado competiciones...</button>
\t\t{% endfor %}
</div>
{% endblock %}
", "AppBundle:Partit:listLigas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listLigas.html.twig");
    }
}
