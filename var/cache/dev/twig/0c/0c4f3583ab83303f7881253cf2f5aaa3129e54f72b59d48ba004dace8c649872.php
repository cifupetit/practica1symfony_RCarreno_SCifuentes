<?php

/* AppBundle:Liga:listTemporadas.html.twig */
class __TwigTemplate_397e21c4f3d261db78891524015c7f68833135a2b7f817ca0c15d9650f58a9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Liga:listTemporadas.html.twig", 1);
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
        $__internal_271f12a02c8c56d2b456a106b2541b879c2926c93c640ecfaef22b91d5159060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271f12a02c8c56d2b456a106b2541b879c2926c93c640ecfaef22b91d5159060->enter($__internal_271f12a02c8c56d2b456a106b2541b879c2926c93c640ecfaef22b91d5159060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Liga:listTemporadas.html.twig"));

        $__internal_b5fa4d62e6d01ea88a075f357557e785c94476b42b8c2646bc656a159cad338b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fa4d62e6d01ea88a075f357557e785c94476b42b8c2646bc656a159cad338b->enter($__internal_b5fa4d62e6d01ea88a075f357557e785c94476b42b8c2646bc656a159cad338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Liga:listTemporadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_271f12a02c8c56d2b456a106b2541b879c2926c93c640ecfaef22b91d5159060->leave($__internal_271f12a02c8c56d2b456a106b2541b879c2926c93c640ecfaef22b91d5159060_prof);

        
        $__internal_b5fa4d62e6d01ea88a075f357557e785c94476b42b8c2646bc656a159cad338b->leave($__internal_b5fa4d62e6d01ea88a075f357557e785c94476b42b8c2646bc656a159cad338b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c7a1dd82ad9abf20cbdef1fab758c1251b1db672b926ff7ece0e20035509060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7a1dd82ad9abf20cbdef1fab758c1251b1db672b926ff7ece0e20035509060->enter($__internal_6c7a1dd82ad9abf20cbdef1fab758c1251b1db672b926ff7ece0e20035509060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55dfb2cf14da397ac1810dda1a7d4ff1576e3fadfadee190be1300994f93e323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55dfb2cf14da397ac1810dda1a7d4ff1576e3fadfadee190be1300994f93e323->enter($__internal_55dfb2cf14da397ac1810dda1a7d4ff1576e3fadfadee190be1300994f93e323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55dfb2cf14da397ac1810dda1a7d4ff1576e3fadfadee190be1300994f93e323->leave($__internal_55dfb2cf14da397ac1810dda1a7d4ff1576e3fadfadee190be1300994f93e323_prof);

        
        $__internal_6c7a1dd82ad9abf20cbdef1fab758c1251b1db672b926ff7ece0e20035509060->leave($__internal_6c7a1dd82ad9abf20cbdef1fab758c1251b1db672b926ff7ece0e20035509060_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7e74e25478adc3bac16cbab3acad796f08a2ac1cfbedd8ec3706fbb81d74a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e74e25478adc3bac16cbab3acad796f08a2ac1cfbedd8ec3706fbb81d74a48->enter($__internal_b7e74e25478adc3bac16cbab3acad796f08a2ac1cfbedd8ec3706fbb81d74a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ceb7a303be1eb98182890aab81dd8ab3538ce641103d01c30194735a87545e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb7a303be1eb98182890aab81dd8ab3538ce641103d01c30194735a87545e95->enter($__internal_ceb7a303be1eb98182890aab81dd8ab3538ce641103d01c30194735a87545e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Temporadas";
        
        $__internal_ceb7a303be1eb98182890aab81dd8ab3538ce641103d01c30194735a87545e95->leave($__internal_ceb7a303be1eb98182890aab81dd8ab3538ce641103d01c30194735a87545e95_prof);

        
        $__internal_b7e74e25478adc3bac16cbab3acad796f08a2ac1cfbedd8ec3706fbb81d74a48->leave($__internal_b7e74e25478adc3bac16cbab3acad796f08a2ac1cfbedd8ec3706fbb81d74a48_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db7738d4598965db37f1114e3a7ec2056312dce7a1a92ad19cdb7b38293cb6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7738d4598965db37f1114e3a7ec2056312dce7a1a92ad19cdb7b38293cb6c9->enter($__internal_db7738d4598965db37f1114e3a7ec2056312dce7a1a92ad19cdb7b38293cb6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17bdfd734fa6e9bffce384c5db2ffb360d4a885399679669e141720c49cd1056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bdfd734fa6e9bffce384c5db2ffb360d4a885399679669e141720c49cd1056->enter($__internal_17bdfd734fa6e9bffce384c5db2ffb360d4a885399679669e141720c49cd1056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Temporadas disponibles</h1>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 15));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t<button style=\"margin: 15px; width: 70%;\" type=\"button\" class=\"btn btn-info\">Temporada ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</button><br>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t\t<h4>No se han encontrado tareas...</h4>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
        
        $__internal_17bdfd734fa6e9bffce384c5db2ffb360d4a885399679669e141720c49cd1056->leave($__internal_17bdfd734fa6e9bffce384c5db2ffb360d4a885399679669e141720c49cd1056_prof);

        
        $__internal_db7738d4598965db37f1114e3a7ec2056312dce7a1a92ad19cdb7b38293cb6c9->leave($__internal_db7738d4598965db37f1114e3a7ec2056312dce7a1a92ad19cdb7b38293cb6c9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Liga:listTemporadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 15,  103 => 13,  95 => 11,  90 => 10,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t{% for i in range(0, 15) %}
\t\t<button style=\"margin: 15px; width: 70%;\" type=\"button\" class=\"btn btn-info\">Temporada {{i}}</button><br>
\t{% else %}
\t\t<h4>No se han encontrado tareas...</h4>
\t{% endfor %}
</div>
{% endblock %}
", "AppBundle:Liga:listTemporadas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Liga/listTemporadas.html.twig");
    }
}
