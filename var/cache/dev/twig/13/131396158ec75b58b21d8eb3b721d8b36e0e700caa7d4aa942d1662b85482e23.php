<?php

/* AppBundle:Partit:listPartidosDeEquipoForm.html.twig */
class __TwigTemplate_53a74cb8881e0510406c264ece899c1c3c3e10423e21c3b538e3f52c426b7fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listPartidosDeEquipoForm.html.twig", 1);
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
        $__internal_ade2813f263398050b8cac4f4e591df2981c147f9752dc1b730561a26b0cbee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade2813f263398050b8cac4f4e591df2981c147f9752dc1b730561a26b0cbee9->enter($__internal_ade2813f263398050b8cac4f4e591df2981c147f9752dc1b730561a26b0cbee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidosDeEquipoForm.html.twig"));

        $__internal_d3802eea516e06e997c523a04b73661227e301d17fb9f230d2200c67b60c3dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3802eea516e06e997c523a04b73661227e301d17fb9f230d2200c67b60c3dd4->enter($__internal_d3802eea516e06e997c523a04b73661227e301d17fb9f230d2200c67b60c3dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidosDeEquipoForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade2813f263398050b8cac4f4e591df2981c147f9752dc1b730561a26b0cbee9->leave($__internal_ade2813f263398050b8cac4f4e591df2981c147f9752dc1b730561a26b0cbee9_prof);

        
        $__internal_d3802eea516e06e997c523a04b73661227e301d17fb9f230d2200c67b60c3dd4->leave($__internal_d3802eea516e06e997c523a04b73661227e301d17fb9f230d2200c67b60c3dd4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a6630c8ea0132b753dd9c35a2c869c95865a9a757ac3784b19cdc95c3f9ff8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6630c8ea0132b753dd9c35a2c869c95865a9a757ac3784b19cdc95c3f9ff8f->enter($__internal_6a6630c8ea0132b753dd9c35a2c869c95865a9a757ac3784b19cdc95c3f9ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8deb5e38601221c2c5c8094433dd6c9927f0c682b701e354fdeccce8222a151e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8deb5e38601221c2c5c8094433dd6c9927f0c682b701e354fdeccce8222a151e->enter($__internal_8deb5e38601221c2c5c8094433dd6c9927f0c682b701e354fdeccce8222a151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8deb5e38601221c2c5c8094433dd6c9927f0c682b701e354fdeccce8222a151e->leave($__internal_8deb5e38601221c2c5c8094433dd6c9927f0c682b701e354fdeccce8222a151e_prof);

        
        $__internal_6a6630c8ea0132b753dd9c35a2c869c95865a9a757ac3784b19cdc95c3f9ff8f->leave($__internal_6a6630c8ea0132b753dd9c35a2c869c95865a9a757ac3784b19cdc95c3f9ff8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6995cacc5a2bd950bb0ed32f2c30d3cf8ae1d01844ec51d8c5ab8550f46cb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6995cacc5a2bd950bb0ed32f2c30d3cf8ae1d01844ec51d8c5ab8550f46cb22->enter($__internal_d6995cacc5a2bd950bb0ed32f2c30d3cf8ae1d01844ec51d8c5ab8550f46cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6569749d1affc08911fe472f237a05d095f203c4f72ad4edd0be1c136870c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6569749d1affc08911fe472f237a05d095f203c4f72ad4edd0be1c136870c59->enter($__internal_c6569749d1affc08911fe472f237a05d095f203c4f72ad4edd0be1c136870c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos de equipo";
        
        $__internal_c6569749d1affc08911fe472f237a05d095f203c4f72ad4edd0be1c136870c59->leave($__internal_c6569749d1affc08911fe472f237a05d095f203c4f72ad4edd0be1c136870c59_prof);

        
        $__internal_d6995cacc5a2bd950bb0ed32f2c30d3cf8ae1d01844ec51d8c5ab8550f46cb22->leave($__internal_d6995cacc5a2bd950bb0ed32f2c30d3cf8ae1d01844ec51d8c5ab8550f46cb22_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e969ce9935da4eab9419a843ae15dd0426fc5ac692ab9328d259b1df9f3dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e969ce9935da4eab9419a843ae15dd0426fc5ac692ab9328d259b1df9f3dbc->enter($__internal_95e969ce9935da4eab9419a843ae15dd0426fc5ac692ab9328d259b1df9f3dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4edb5f7e78c59de88b984349b2c5d2f67e8d287aef2453536dd95d41e32f3b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edb5f7e78c59de88b984349b2c5d2f67e8d287aef2453536dd95d41e32f3b49->enter($__internal_4edb5f7e78c59de88b984349b2c5d2f67e8d287aef2453536dd95d41e32f3b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Buscar partidos jugados de cierto equipo</h1>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_4edb5f7e78c59de88b984349b2c5d2f67e8d287aef2453536dd95d41e32f3b49->leave($__internal_4edb5f7e78c59de88b984349b2c5d2f67e8d287aef2453536dd95d41e32f3b49_prof);

        
        $__internal_95e969ce9935da4eab9419a843ae15dd0426fc5ac692ab9328d259b1df9f3dbc->leave($__internal_95e969ce9935da4eab9419a843ae15dd0426fc5ac692ab9328d259b1df9f3dbc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listPartidosDeEquipoForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  95 => 12,  91 => 11,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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

{% block title %}Partidos de equipo{% endblock %}

{% block body %}
<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Buscar partidos jugados de cierto equipo</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "AppBundle:Partit:listPartidosDeEquipoForm.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidosDeEquipoForm.html.twig");
    }
}
