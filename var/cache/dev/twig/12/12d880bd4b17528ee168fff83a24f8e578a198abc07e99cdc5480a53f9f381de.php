<?php

/* AppBundle:Partit:listCompeticiones.html.twig */
class __TwigTemplate_85daf00ca8bb72ac09b8ac8d0115791b2270ae3e55233df4787beb55a063b53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listCompeticiones.html.twig", 1);
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
        $__internal_b6da5a05bb7d00c45a0e1ef8e8c99d1ad866ed0e9591b08ed2aa217e0ec3a442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6da5a05bb7d00c45a0e1ef8e8c99d1ad866ed0e9591b08ed2aa217e0ec3a442->enter($__internal_b6da5a05bb7d00c45a0e1ef8e8c99d1ad866ed0e9591b08ed2aa217e0ec3a442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listCompeticiones.html.twig"));

        $__internal_15bfec6215a163d6bb5ef28e6ed04f9f25e717b75fa63f484b49cb988cfb20e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bfec6215a163d6bb5ef28e6ed04f9f25e717b75fa63f484b49cb988cfb20e0->enter($__internal_15bfec6215a163d6bb5ef28e6ed04f9f25e717b75fa63f484b49cb988cfb20e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listCompeticiones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6da5a05bb7d00c45a0e1ef8e8c99d1ad866ed0e9591b08ed2aa217e0ec3a442->leave($__internal_b6da5a05bb7d00c45a0e1ef8e8c99d1ad866ed0e9591b08ed2aa217e0ec3a442_prof);

        
        $__internal_15bfec6215a163d6bb5ef28e6ed04f9f25e717b75fa63f484b49cb988cfb20e0->leave($__internal_15bfec6215a163d6bb5ef28e6ed04f9f25e717b75fa63f484b49cb988cfb20e0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ec9c465107ea4f6134005da6684df4e74f4544713ad59e315ace7dcf553b990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec9c465107ea4f6134005da6684df4e74f4544713ad59e315ace7dcf553b990->enter($__internal_9ec9c465107ea4f6134005da6684df4e74f4544713ad59e315ace7dcf553b990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aba34cf643babded489768b331c4fc42a67894a890cda0e4093c3351e8af41b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba34cf643babded489768b331c4fc42a67894a890cda0e4093c3351e8af41b1->enter($__internal_aba34cf643babded489768b331c4fc42a67894a890cda0e4093c3351e8af41b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aba34cf643babded489768b331c4fc42a67894a890cda0e4093c3351e8af41b1->leave($__internal_aba34cf643babded489768b331c4fc42a67894a890cda0e4093c3351e8af41b1_prof);

        
        $__internal_9ec9c465107ea4f6134005da6684df4e74f4544713ad59e315ace7dcf553b990->leave($__internal_9ec9c465107ea4f6134005da6684df4e74f4544713ad59e315ace7dcf553b990_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c91ec7f9ec72570cd6e2e3a9057dc3a9822b11aacd6749f23d679a6c5aaf5de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91ec7f9ec72570cd6e2e3a9057dc3a9822b11aacd6749f23d679a6c5aaf5de3->enter($__internal_c91ec7f9ec72570cd6e2e3a9057dc3a9822b11aacd6749f23d679a6c5aaf5de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d3f09bf4934d1c2c6f3c04abd4fab6b5ffe3c0178f5fb3127e8cd2e7a0822ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3f09bf4934d1c2c6f3c04abd4fab6b5ffe3c0178f5fb3127e8cd2e7a0822ee->enter($__internal_1d3f09bf4934d1c2c6f3c04abd4fab6b5ffe3c0178f5fb3127e8cd2e7a0822ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_1d3f09bf4934d1c2c6f3c04abd4fab6b5ffe3c0178f5fb3127e8cd2e7a0822ee->leave($__internal_1d3f09bf4934d1c2c6f3c04abd4fab6b5ffe3c0178f5fb3127e8cd2e7a0822ee_prof);

        
        $__internal_c91ec7f9ec72570cd6e2e3a9057dc3a9822b11aacd6749f23d679a6c5aaf5de3->leave($__internal_c91ec7f9ec72570cd6e2e3a9057dc3a9822b11aacd6749f23d679a6c5aaf5de3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_992fdedfdf1134ff63769d7afabb90549234c8733f4b9df34b2dba93d74cc4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992fdedfdf1134ff63769d7afabb90549234c8733f4b9df34b2dba93d74cc4f4->enter($__internal_992fdedfdf1134ff63769d7afabb90549234c8733f4b9df34b2dba93d74cc4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0543087b05984c7dc9977945a3d86269297bbefb6fd1ce652d1a44c1414b5ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0543087b05984c7dc9977945a3d86269297bbefb6fd1ce652d1a44c1414b5ad9->enter($__internal_0543087b05984c7dc9977945a3d86269297bbefb6fd1ce652d1a44c1414b5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partits"] ?? $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<button style=\"margin-bottom: 1%; width: 50%;\" type=\"button\" class=\"btn btn-info\"><a style=\"text-decoration:none;color:white;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", array("competicio" => $this->getAttribute($context["partit"], "competicio", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo "</a></button><br>
\t\t\t
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos...</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addPartit");
        echo "\">Afegir un nou partit</a></button>
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatePartit");
        echo "\">Modificar un nou partit</a></button>
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletePartit");
        echo "\">Eliminar un nou partit</a></button>
</div>
";
        
        $__internal_0543087b05984c7dc9977945a3d86269297bbefb6fd1ce652d1a44c1414b5ad9->leave($__internal_0543087b05984c7dc9977945a3d86269297bbefb6fd1ce652d1a44c1414b5ad9_prof);

        
        $__internal_992fdedfdf1134ff63769d7afabb90549234c8733f4b9df34b2dba93d74cc4f4->leave($__internal_992fdedfdf1134ff63769d7afabb90549234c8733f4b9df34b2dba93d74cc4f4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listCompeticiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 21,  121 => 20,  116 => 19,  107 => 15,  96 => 12,  91 => 11,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t\t\t
\t\t{% else %}

\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos...</div>

\t\t{% endfor %}
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('addPartit') }}\">Afegir un nou partit</a></button>
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('updatePartit') }}\">Modificar un nou partit</a></button>
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('deletePartit') }}\">Eliminar un nou partit</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listCompeticiones.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\src\\AppBundle/Resources/views/Partit/listCompeticiones.html.twig");
    }
}
