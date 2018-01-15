<?php

/* AppBundle:Partit:listPartidos.html.twig */
class __TwigTemplate_9ef7237f5d4188a9d2daf7870ee4b16ab4fc2340e3b6fd5503474c25746c3cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listPartidos.html.twig", 1);
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
        $__internal_ab56c49a38f37c369600a1bddab6544513b3f54fee60db5332fca216c30afe86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab56c49a38f37c369600a1bddab6544513b3f54fee60db5332fca216c30afe86->enter($__internal_ab56c49a38f37c369600a1bddab6544513b3f54fee60db5332fca216c30afe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $__internal_4e62827e1095f2895d3d0840dc4da609721f40a161577d77e0f5a2aa102ca850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e62827e1095f2895d3d0840dc4da609721f40a161577d77e0f5a2aa102ca850->enter($__internal_4e62827e1095f2895d3d0840dc4da609721f40a161577d77e0f5a2aa102ca850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab56c49a38f37c369600a1bddab6544513b3f54fee60db5332fca216c30afe86->leave($__internal_ab56c49a38f37c369600a1bddab6544513b3f54fee60db5332fca216c30afe86_prof);

        
        $__internal_4e62827e1095f2895d3d0840dc4da609721f40a161577d77e0f5a2aa102ca850->leave($__internal_4e62827e1095f2895d3d0840dc4da609721f40a161577d77e0f5a2aa102ca850_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0989b1a104830edbd33eef1743f7ddf1285b7ca38fda9edd04fcfcfd2c50e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0989b1a104830edbd33eef1743f7ddf1285b7ca38fda9edd04fcfcfd2c50e77->enter($__internal_d0989b1a104830edbd33eef1743f7ddf1285b7ca38fda9edd04fcfcfd2c50e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_72303fc592045fa9f3cad49b1e77fd9cf5a205c571967fbe0990ce49e96b55ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72303fc592045fa9f3cad49b1e77fd9cf5a205c571967fbe0990ce49e96b55ed->enter($__internal_72303fc592045fa9f3cad49b1e77fd9cf5a205c571967fbe0990ce49e96b55ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_72303fc592045fa9f3cad49b1e77fd9cf5a205c571967fbe0990ce49e96b55ed->leave($__internal_72303fc592045fa9f3cad49b1e77fd9cf5a205c571967fbe0990ce49e96b55ed_prof);

        
        $__internal_d0989b1a104830edbd33eef1743f7ddf1285b7ca38fda9edd04fcfcfd2c50e77->leave($__internal_d0989b1a104830edbd33eef1743f7ddf1285b7ca38fda9edd04fcfcfd2c50e77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_673cf3f7ddc70102482eba340838d577b2da6d5b4a99c0208ecd63c6518b756b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673cf3f7ddc70102482eba340838d577b2da6d5b4a99c0208ecd63c6518b756b->enter($__internal_673cf3f7ddc70102482eba340838d577b2da6d5b4a99c0208ecd63c6518b756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddbb9726af7156aec71975c49f6eb7e99fbd21f170fa7dfc1e7800818832ed94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbb9726af7156aec71975c49f6eb7e99fbd21f170fa7dfc1e7800818832ed94->enter($__internal_ddbb9726af7156aec71975c49f6eb7e99fbd21f170fa7dfc1e7800818832ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos";
        
        $__internal_ddbb9726af7156aec71975c49f6eb7e99fbd21f170fa7dfc1e7800818832ed94->leave($__internal_ddbb9726af7156aec71975c49f6eb7e99fbd21f170fa7dfc1e7800818832ed94_prof);

        
        $__internal_673cf3f7ddc70102482eba340838d577b2da6d5b4a99c0208ecd63c6518b756b->leave($__internal_673cf3f7ddc70102482eba340838d577b2da6d5b4a99c0208ecd63c6518b756b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_414b891f8caa7d0fe2749fcb4665d8368169ecd4c302122d7081642818065cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414b891f8caa7d0fe2749fcb4665d8368169ecd4c302122d7081642818065cd2->enter($__internal_414b891f8caa7d0fe2749fcb4665d8368169ecd4c302122d7081642818065cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9405e720e171ce3b38ff60466ad340dc6f540d61b421e155364881bd510e2581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9405e720e171ce3b38ff60466ad340dc6f540d61b421e155364881bd510e2581->enter($__internal_9405e720e171ce3b38ff60466ad340dc6f540d61b421e155364881bd510e2581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos de ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "html", null, true);
        echo " de la temporada ";
        echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : $this->getContext($context, "temp")), "html", null, true);
        echo "</h1>


\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 13
            echo "\t\t\t<div>
\t\t\t\t<h4>Equipo local ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "iDequipLocal", array()), "html", null, true);
            echo " - Equipo visitante ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "iDequipVisitant", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golslocal", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golsvisitant", array()), "html", null, true);
            echo "</h5><br>
\t\t\t</div>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos en la temporada ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : $this->getContext($context, "temp")), "html", null, true);
            echo " de la ";
            echo twig_escape_filter($this->env, (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "html", null, true);
            echo "</div>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", array("competicio" => (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")))), "html", null, true);
        echo "\">Temporadas</a></button>
</div>
";
        
        $__internal_9405e720e171ce3b38ff60466ad340dc6f540d61b421e155364881bd510e2581->leave($__internal_9405e720e171ce3b38ff60466ad340dc6f540d61b421e155364881bd510e2581_prof);

        
        $__internal_414b891f8caa7d0fe2749fcb4665d8368169ecd4c302122d7081642818065cd2->leave($__internal_414b891f8caa7d0fe2749fcb4665d8368169ecd4c302122d7081642818065cd2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listPartidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 24,  136 => 23,  125 => 20,  122 => 19,  111 => 15,  105 => 14,  102 => 13,  97 => 12,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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

{% block title %}Partidos{% endblock %}

{% block body %}
<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos de {{comp}} de la temporada {{temp}}</h1>


\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h4>Equipo local {{partit.iDequipLocal}} - Equipo visitante {{partit.iDequipVisitant}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos en la temporada {{temp}} de la {{comp}}</div>
\t\t
\t\t{% endfor %}
\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,{'competicio' : comp} ) }}\">Temporadas</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidos.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidos.html.twig");
    }
}
