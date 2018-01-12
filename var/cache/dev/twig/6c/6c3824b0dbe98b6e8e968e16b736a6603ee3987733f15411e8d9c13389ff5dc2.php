<?php

/* AppBundle:Liga:listLigas.html.twig */
class __TwigTemplate_8a8ceb2871b8fb9f0275b2fdaebdccd6c4fefb9ed06c68d19ecd2d490c5903f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Liga:listLigas.html.twig", 1);
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
        $__internal_2226977129b207a3cdced0bd453b0992661f37d4cd71d189f194083a91805cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2226977129b207a3cdced0bd453b0992661f37d4cd71d189f194083a91805cc2->enter($__internal_2226977129b207a3cdced0bd453b0992661f37d4cd71d189f194083a91805cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Liga:listLigas.html.twig"));

        $__internal_1431c0dfae188107db6cab99f138609b8e30d5725c17717ea9312ae784099f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1431c0dfae188107db6cab99f138609b8e30d5725c17717ea9312ae784099f7b->enter($__internal_1431c0dfae188107db6cab99f138609b8e30d5725c17717ea9312ae784099f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Liga:listLigas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2226977129b207a3cdced0bd453b0992661f37d4cd71d189f194083a91805cc2->leave($__internal_2226977129b207a3cdced0bd453b0992661f37d4cd71d189f194083a91805cc2_prof);

        
        $__internal_1431c0dfae188107db6cab99f138609b8e30d5725c17717ea9312ae784099f7b->leave($__internal_1431c0dfae188107db6cab99f138609b8e30d5725c17717ea9312ae784099f7b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ccaea605ebf3002dbcafb5f2e89b1a6cf078466b505a5f4fc6b2d820679d03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccaea605ebf3002dbcafb5f2e89b1a6cf078466b505a5f4fc6b2d820679d03c->enter($__internal_8ccaea605ebf3002dbcafb5f2e89b1a6cf078466b505a5f4fc6b2d820679d03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04a4b95eb512eb9181867ef1f70df93b6f57d8f914af5e8d9c47033d5ed1aa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a4b95eb512eb9181867ef1f70df93b6f57d8f914af5e8d9c47033d5ed1aa3c->enter($__internal_04a4b95eb512eb9181867ef1f70df93b6f57d8f914af5e8d9c47033d5ed1aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_04a4b95eb512eb9181867ef1f70df93b6f57d8f914af5e8d9c47033d5ed1aa3c->leave($__internal_04a4b95eb512eb9181867ef1f70df93b6f57d8f914af5e8d9c47033d5ed1aa3c_prof);

        
        $__internal_8ccaea605ebf3002dbcafb5f2e89b1a6cf078466b505a5f4fc6b2d820679d03c->leave($__internal_8ccaea605ebf3002dbcafb5f2e89b1a6cf078466b505a5f4fc6b2d820679d03c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d4f11d115f294ccc81be037f484eb9fa32a6e9a047cf7790543ae17339afce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4f11d115f294ccc81be037f484eb9fa32a6e9a047cf7790543ae17339afce4->enter($__internal_4d4f11d115f294ccc81be037f484eb9fa32a6e9a047cf7790543ae17339afce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3210a0327797d20daefc56006f17b8db225f4668e7219333c7f67fd45cfbb371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3210a0327797d20daefc56006f17b8db225f4668e7219333c7f67fd45cfbb371->enter($__internal_3210a0327797d20daefc56006f17b8db225f4668e7219333c7f67fd45cfbb371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_3210a0327797d20daefc56006f17b8db225f4668e7219333c7f67fd45cfbb371->leave($__internal_3210a0327797d20daefc56006f17b8db225f4668e7219333c7f67fd45cfbb371_prof);

        
        $__internal_4d4f11d115f294ccc81be037f484eb9fa32a6e9a047cf7790543ae17339afce4->leave($__internal_4d4f11d115f294ccc81be037f484eb9fa32a6e9a047cf7790543ae17339afce4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_26ec7cb1c97ee653fd930940f888325ed81575aaa06fca26b8caf7962cb12359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ec7cb1c97ee653fd930940f888325ed81575aaa06fca26b8caf7962cb12359->enter($__internal_26ec7cb1c97ee653fd930940f888325ed81575aaa06fca26b8caf7962cb12359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf579465b3199db5964bc4ec6134e0c4871b3b7387b0782e16cdf2221dbc5c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf579465b3199db5964bc4ec6134e0c4871b3b7387b0782e16cdf2221dbc5c39->enter($__internal_cf579465b3199db5964bc4ec6134e0c4871b3b7387b0782e16cdf2221dbc5c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\"><a href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Champions</a></button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Liga</button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Copa del rey</button>
</div>
";
        
        $__internal_cf579465b3199db5964bc4ec6134e0c4871b3b7387b0782e16cdf2221dbc5c39->leave($__internal_cf579465b3199db5964bc4ec6134e0c4871b3b7387b0782e16cdf2221dbc5c39_prof);

        
        $__internal_26ec7cb1c97ee653fd930940f888325ed81575aaa06fca26b8caf7962cb12359->leave($__internal_26ec7cb1c97ee653fd930940f888325ed81575aaa06fca26b8caf7962cb12359_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Liga:listLigas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\"><a href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Champions</a></button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Liga</button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Copa del rey</button>
</div>
{% endblock %}
", "AppBundle:Liga:listLigas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Liga/listLigas.html.twig");
    }
}
