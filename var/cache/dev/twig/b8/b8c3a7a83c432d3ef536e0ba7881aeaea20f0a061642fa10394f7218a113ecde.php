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
        $__internal_ba849918dd9618c333574a1a10a4870db036fdca8508ec124b1cb63672fd8913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba849918dd9618c333574a1a10a4870db036fdca8508ec124b1cb63672fd8913->enter($__internal_ba849918dd9618c333574a1a10a4870db036fdca8508ec124b1cb63672fd8913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $__internal_376b978939dd31c387ef0d34744b87ef76fc5513bfe1a26aa77bd9c463e7bdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376b978939dd31c387ef0d34744b87ef76fc5513bfe1a26aa77bd9c463e7bdd7->enter($__internal_376b978939dd31c387ef0d34744b87ef76fc5513bfe1a26aa77bd9c463e7bdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba849918dd9618c333574a1a10a4870db036fdca8508ec124b1cb63672fd8913->leave($__internal_ba849918dd9618c333574a1a10a4870db036fdca8508ec124b1cb63672fd8913_prof);

        
        $__internal_376b978939dd31c387ef0d34744b87ef76fc5513bfe1a26aa77bd9c463e7bdd7->leave($__internal_376b978939dd31c387ef0d34744b87ef76fc5513bfe1a26aa77bd9c463e7bdd7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a64b84a3d2a7a81b683ae5aa4916566479e5b3358b156dc25412e59976c55ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64b84a3d2a7a81b683ae5aa4916566479e5b3358b156dc25412e59976c55ed6->enter($__internal_a64b84a3d2a7a81b683ae5aa4916566479e5b3358b156dc25412e59976c55ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6bcb6918f27f7972704f2299016ec1f4a7dc51f4bcca2bdcdaad414ddf090117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcb6918f27f7972704f2299016ec1f4a7dc51f4bcca2bdcdaad414ddf090117->enter($__internal_6bcb6918f27f7972704f2299016ec1f4a7dc51f4bcca2bdcdaad414ddf090117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6bcb6918f27f7972704f2299016ec1f4a7dc51f4bcca2bdcdaad414ddf090117->leave($__internal_6bcb6918f27f7972704f2299016ec1f4a7dc51f4bcca2bdcdaad414ddf090117_prof);

        
        $__internal_a64b84a3d2a7a81b683ae5aa4916566479e5b3358b156dc25412e59976c55ed6->leave($__internal_a64b84a3d2a7a81b683ae5aa4916566479e5b3358b156dc25412e59976c55ed6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a5ed631a708b9f3a65bd101389b65af7da150033c4e418c5ecdd7bd58de09a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5ed631a708b9f3a65bd101389b65af7da150033c4e418c5ecdd7bd58de09a5->enter($__internal_4a5ed631a708b9f3a65bd101389b65af7da150033c4e418c5ecdd7bd58de09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52eee5116044e6a1b0f021f6bc72955dc0978aa70c07745e4f30c3b68616a10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52eee5116044e6a1b0f021f6bc72955dc0978aa70c07745e4f30c3b68616a10e->enter($__internal_52eee5116044e6a1b0f021f6bc72955dc0978aa70c07745e4f30c3b68616a10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos";
        
        $__internal_52eee5116044e6a1b0f021f6bc72955dc0978aa70c07745e4f30c3b68616a10e->leave($__internal_52eee5116044e6a1b0f021f6bc72955dc0978aa70c07745e4f30c3b68616a10e_prof);

        
        $__internal_4a5ed631a708b9f3a65bd101389b65af7da150033c4e418c5ecdd7bd58de09a5->leave($__internal_4a5ed631a708b9f3a65bd101389b65af7da150033c4e418c5ecdd7bd58de09a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbca92247b5a06e85b2eb7c9943b02fc6afd1dc60604825b1648f4e77b4d0864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbca92247b5a06e85b2eb7c9943b02fc6afd1dc60604825b1648f4e77b4d0864->enter($__internal_bbca92247b5a06e85b2eb7c9943b02fc6afd1dc60604825b1648f4e77b4d0864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcf68b9d6f27251938e4f5f2a847a619dd9357da4f76d780d4bd8d9d9fdec797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf68b9d6f27251938e4f5f2a847a619dd9357da4f76d780d4bd8d9d9fdec797->enter($__internal_bcf68b9d6f27251938e4f5f2a847a619dd9357da4f76d780d4bd8d9d9fdec797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos</h1>
\t";
        // line 10
        $context["partitt"] = (isset($context["partit"]) ? $context["partit"] : $this->getContext($context, "partit"));
        // line 11
        echo "
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
\t\t\t";
            // line 17
            $context["partitt"] = $context["partit"];
            // line 18
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado partidos...</button>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", $this->getAttribute((isset($context["partitt"]) ? $context["partitt"] : $this->getContext($context, "partitt")), "competicio", array())), "html", null, true);
        echo "\">Temporadas</a></button>
</div>
";
        
        $__internal_bcf68b9d6f27251938e4f5f2a847a619dd9357da4f76d780d4bd8d9d9fdec797->leave($__internal_bcf68b9d6f27251938e4f5f2a847a619dd9357da4f76d780d4bd8d9d9fdec797_prof);

        
        $__internal_bbca92247b5a06e85b2eb7c9943b02fc6afd1dc60604825b1648f4e77b4d0864->leave($__internal_bbca92247b5a06e85b2eb7c9943b02fc6afd1dc60604825b1648f4e77b4d0864_prof);

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
        return array (  135 => 24,  132 => 23,  123 => 19,  118 => 18,  116 => 17,  109 => 15,  103 => 14,  100 => 13,  95 => 12,  92 => 11,  90 => 10,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<h1 style=\"margin: 100px;\">Partidos</h1>
\t{% set partitt = partit %}

\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h4>Equipo local {{partit.iDequipLocal}} - Equipo visitante {{partit.iDequipVisitant}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>
\t\t\t{% set partitt = partit %}
\t\t{% else %}
\t\t
\t\t\t<button class=\"btn btn-danger\">No se han encontrado partidos...</button>
\t\t
\t\t{% endfor %}
\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,partitt.competicio) }}\">Temporadas</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidos.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidos.html.twig");
    }
}
