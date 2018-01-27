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
        $__internal_619526726dcf01152c329d5e1db719b14c9e802cccc14580a779ee68828ce528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619526726dcf01152c329d5e1db719b14c9e802cccc14580a779ee68828ce528->enter($__internal_619526726dcf01152c329d5e1db719b14c9e802cccc14580a779ee68828ce528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listCompeticiones.html.twig"));

        $__internal_bfa9a033001fdb0496f11c0fa75ae6a789c15d6a1a4fa26dc45f45700cd64c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa9a033001fdb0496f11c0fa75ae6a789c15d6a1a4fa26dc45f45700cd64c89->enter($__internal_bfa9a033001fdb0496f11c0fa75ae6a789c15d6a1a4fa26dc45f45700cd64c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listCompeticiones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_619526726dcf01152c329d5e1db719b14c9e802cccc14580a779ee68828ce528->leave($__internal_619526726dcf01152c329d5e1db719b14c9e802cccc14580a779ee68828ce528_prof);

        
        $__internal_bfa9a033001fdb0496f11c0fa75ae6a789c15d6a1a4fa26dc45f45700cd64c89->leave($__internal_bfa9a033001fdb0496f11c0fa75ae6a789c15d6a1a4fa26dc45f45700cd64c89_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4087454c95148201177bd2f0f4594cced4fa65a67712ad6653562717a90f0d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4087454c95148201177bd2f0f4594cced4fa65a67712ad6653562717a90f0d9b->enter($__internal_4087454c95148201177bd2f0f4594cced4fa65a67712ad6653562717a90f0d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae52cde23d7eb2b3963dd6e8bf7a20eaf705dbadff8afb07f66ecb1f7f87d02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae52cde23d7eb2b3963dd6e8bf7a20eaf705dbadff8afb07f66ecb1f7f87d02c->enter($__internal_ae52cde23d7eb2b3963dd6e8bf7a20eaf705dbadff8afb07f66ecb1f7f87d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ae52cde23d7eb2b3963dd6e8bf7a20eaf705dbadff8afb07f66ecb1f7f87d02c->leave($__internal_ae52cde23d7eb2b3963dd6e8bf7a20eaf705dbadff8afb07f66ecb1f7f87d02c_prof);

        
        $__internal_4087454c95148201177bd2f0f4594cced4fa65a67712ad6653562717a90f0d9b->leave($__internal_4087454c95148201177bd2f0f4594cced4fa65a67712ad6653562717a90f0d9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7aec838f68ec9328dfa5da27c2b4ecfeb8d87fad981a95845920a8556e99292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7aec838f68ec9328dfa5da27c2b4ecfeb8d87fad981a95845920a8556e99292->enter($__internal_a7aec838f68ec9328dfa5da27c2b4ecfeb8d87fad981a95845920a8556e99292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06ffd20a6a65b7637c7840bf7f9f1b24abbaea1bb0d867fd44b395527c2d09c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ffd20a6a65b7637c7840bf7f9f1b24abbaea1bb0d867fd44b395527c2d09c8->enter($__internal_06ffd20a6a65b7637c7840bf7f9f1b24abbaea1bb0d867fd44b395527c2d09c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_06ffd20a6a65b7637c7840bf7f9f1b24abbaea1bb0d867fd44b395527c2d09c8->leave($__internal_06ffd20a6a65b7637c7840bf7f9f1b24abbaea1bb0d867fd44b395527c2d09c8_prof);

        
        $__internal_a7aec838f68ec9328dfa5da27c2b4ecfeb8d87fad981a95845920a8556e99292->leave($__internal_a7aec838f68ec9328dfa5da27c2b4ecfeb8d87fad981a95845920a8556e99292_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a4d62e95291a4dd9b66a5b39ea2d4a6a6400b2d4b006edf0c9034e3bb175338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4d62e95291a4dd9b66a5b39ea2d4a6a6400b2d4b006edf0c9034e3bb175338->enter($__internal_7a4d62e95291a4dd9b66a5b39ea2d4a6a6400b2d4b006edf0c9034e3bb175338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d147295c329a8a95c7151b083b17a573de6f7525ec5486f805c6e2b93bc6e82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d147295c329a8a95c7151b083b17a573de6f7525ec5486f805c6e2b93bc6e82f->enter($__internal_d147295c329a8a95c7151b083b17a573de6f7525ec5486f805c6e2b93bc6e82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\t\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addPartit");
        echo "\">Afegir un nou partit</a></button>
</div>
";
        
        $__internal_d147295c329a8a95c7151b083b17a573de6f7525ec5486f805c6e2b93bc6e82f->leave($__internal_d147295c329a8a95c7151b083b17a573de6f7525ec5486f805c6e2b93bc6e82f_prof);

        
        $__internal_7a4d62e95291a4dd9b66a5b39ea2d4a6a6400b2d4b006edf0c9034e3bb175338->leave($__internal_7a4d62e95291a4dd9b66a5b39ea2d4a6a6400b2d4b006edf0c9034e3bb175338_prof);

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
        return array (  116 => 19,  107 => 15,  96 => 12,  91 => 11,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('addPartit') }}\">Afegir un nou partit</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listCompeticiones.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listCompeticiones.html.twig");
    }
}
