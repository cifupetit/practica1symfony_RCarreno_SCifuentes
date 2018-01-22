<?php

/* AppBundle:Equip:llistar_tot_equip.html.twig */
class __TwigTemplate_3b75b78c01a7c31289da805462ace01548c7ea26692c5e0fde81a859094df468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Equip:llistar_tot_equip.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5fb07cced84f5a4df906bf162f09090564e54efd9fb9ac52b0de22b29666e339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb07cced84f5a4df906bf162f09090564e54efd9fb9ac52b0de22b29666e339->enter($__internal_5fb07cced84f5a4df906bf162f09090564e54efd9fb9ac52b0de22b29666e339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Equip:llistar_tot_equip.html.twig"));

        $__internal_497c866d0f5067b13e574ea3577cf1ec1f96ec001e77062dd3f840fb16a6b429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497c866d0f5067b13e574ea3577cf1ec1f96ec001e77062dd3f840fb16a6b429->enter($__internal_497c866d0f5067b13e574ea3577cf1ec1f96ec001e77062dd3f840fb16a6b429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Equip:llistar_tot_equip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb07cced84f5a4df906bf162f09090564e54efd9fb9ac52b0de22b29666e339->leave($__internal_5fb07cced84f5a4df906bf162f09090564e54efd9fb9ac52b0de22b29666e339_prof);

        
        $__internal_497c866d0f5067b13e574ea3577cf1ec1f96ec001e77062dd3f840fb16a6b429->leave($__internal_497c866d0f5067b13e574ea3577cf1ec1f96ec001e77062dd3f840fb16a6b429_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39c6954afcbb85d6fb93a17e18e3485b1d28da820cbd83da2997669c6ac7eabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c6954afcbb85d6fb93a17e18e3485b1d28da820cbd83da2997669c6ac7eabb->enter($__internal_39c6954afcbb85d6fb93a17e18e3485b1d28da820cbd83da2997669c6ac7eabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8e4d7d596ba3a45bda9d40112b2524f1f3e9e524c720cd0ef43c0ca1d8564af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e4d7d596ba3a45bda9d40112b2524f1f3e9e524c720cd0ef43c0ca1d8564af->enter($__internal_f8e4d7d596ba3a45bda9d40112b2524f1f3e9e524c720cd0ef43c0ca1d8564af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Equip:llistarTotEquip";
        
        $__internal_f8e4d7d596ba3a45bda9d40112b2524f1f3e9e524c720cd0ef43c0ca1d8564af->leave($__internal_f8e4d7d596ba3a45bda9d40112b2524f1f3e9e524c720cd0ef43c0ca1d8564af_prof);

        
        $__internal_39c6954afcbb85d6fb93a17e18e3485b1d28da820cbd83da2997669c6ac7eabb->leave($__internal_39c6954afcbb85d6fb93a17e18e3485b1d28da820cbd83da2997669c6ac7eabb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdbe29dfdcd465fb0f101b8fdfd4c01cc77385a8e3ecb9a2e953414dc854afbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbe29dfdcd465fb0f101b8fdfd4c01cc77385a8e3ecb9a2e953414dc854afbd->enter($__internal_fdbe29dfdcd465fb0f101b8fdfd4c01cc77385a8e3ecb9a2e953414dc854afbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81b1e3d7e816c3e3662f179c8ff74da8c80c872beb1e929b31ec10dd4bf663ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b1e3d7e816c3e3662f179c8ff74da8c80c872beb1e929b31ec10dd4bf663ae->enter($__internal_81b1e3d7e816c3e3662f179c8ff74da8c80c872beb1e929b31ec10dd4bf663ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Buscar partits dun equip</h1>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<br>
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<br>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<br>
<br>
";
        
        $__internal_81b1e3d7e816c3e3662f179c8ff74da8c80c872beb1e929b31ec10dd4bf663ae->leave($__internal_81b1e3d7e816c3e3662f179c8ff74da8c80c872beb1e929b31ec10dd4bf663ae_prof);

        
        $__internal_fdbe29dfdcd465fb0f101b8fdfd4c01cc77385a8e3ecb9a2e953414dc854afbd->leave($__internal_fdbe29dfdcd465fb0f101b8fdfd4c01cc77385a8e3ecb9a2e953414dc854afbd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Equip:llistar_tot_equip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Equip:llistarTotEquip{% endblock %}

{% block body %}
<h1>Buscar partits dun equip</h1>
{{    form_start(form)    }}
<br>
{{    form_widget(form)    }}
<br>
{{    form_end(form)    }}
<br>
<br>
{% endblock %}
", "AppBundle:Equip:llistar_tot_equip.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Equip/llistar_tot_equip.html.twig");
    }
}
