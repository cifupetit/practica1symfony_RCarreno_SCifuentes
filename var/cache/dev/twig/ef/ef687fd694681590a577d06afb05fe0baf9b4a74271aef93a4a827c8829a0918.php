<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fbe138ce96ea1437323335b935140b1b720e0644d30cac86c3894f46c39eefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbe138ce96ea1437323335b935140b1b720e0644d30cac86c3894f46c39eefd->enter($__internal_0fbe138ce96ea1437323335b935140b1b720e0644d30cac86c3894f46c39eefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_509260814b1f483c3dfe3951d0e1b0f28f508838e03c8d9b3ce892538dc529bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509260814b1f483c3dfe3951d0e1b0f28f508838e03c8d9b3ce892538dc529bc->enter($__internal_509260814b1f483c3dfe3951d0e1b0f28f508838e03c8d9b3ce892538dc529bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbe138ce96ea1437323335b935140b1b720e0644d30cac86c3894f46c39eefd->leave($__internal_0fbe138ce96ea1437323335b935140b1b720e0644d30cac86c3894f46c39eefd_prof);

        
        $__internal_509260814b1f483c3dfe3951d0e1b0f28f508838e03c8d9b3ce892538dc529bc->leave($__internal_509260814b1f483c3dfe3951d0e1b0f28f508838e03c8d9b3ce892538dc529bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b8dd6c57234e39a093591dea45904a11fdabf06f2c3a79d37fde3e1a35e19ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8dd6c57234e39a093591dea45904a11fdabf06f2c3a79d37fde3e1a35e19ca->enter($__internal_4b8dd6c57234e39a093591dea45904a11fdabf06f2c3a79d37fde3e1a35e19ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c2bf152beda09d153fd95f628f309fd610900d38366671739f8e51da287745d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2bf152beda09d153fd95f628f309fd610900d38366671739f8e51da287745d->enter($__internal_7c2bf152beda09d153fd95f628f309fd610900d38366671739f8e51da287745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c2bf152beda09d153fd95f628f309fd610900d38366671739f8e51da287745d->leave($__internal_7c2bf152beda09d153fd95f628f309fd610900d38366671739f8e51da287745d_prof);

        
        $__internal_4b8dd6c57234e39a093591dea45904a11fdabf06f2c3a79d37fde3e1a35e19ca->leave($__internal_4b8dd6c57234e39a093591dea45904a11fdabf06f2c3a79d37fde3e1a35e19ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_785b31779f7d38065e9b506f5902cad60a7b53e5ce70f6aad71c2af229c07e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785b31779f7d38065e9b506f5902cad60a7b53e5ce70f6aad71c2af229c07e8b->enter($__internal_785b31779f7d38065e9b506f5902cad60a7b53e5ce70f6aad71c2af229c07e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6461c3df9c462f1a555b706a3d4af61347a8e3cb776547ff53f02f98c4e8b80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6461c3df9c462f1a555b706a3d4af61347a8e3cb776547ff53f02f98c4e8b80f->enter($__internal_6461c3df9c462f1a555b706a3d4af61347a8e3cb776547ff53f02f98c4e8b80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6461c3df9c462f1a555b706a3d4af61347a8e3cb776547ff53f02f98c4e8b80f->leave($__internal_6461c3df9c462f1a555b706a3d4af61347a8e3cb776547ff53f02f98c4e8b80f_prof);

        
        $__internal_785b31779f7d38065e9b506f5902cad60a7b53e5ce70f6aad71c2af229c07e8b->leave($__internal_785b31779f7d38065e9b506f5902cad60a7b53e5ce70f6aad71c2af229c07e8b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d02189c9cdaa85516d04e60afa82f15f503e725ebb78fd4f3771c8a3f56e98f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02189c9cdaa85516d04e60afa82f15f503e725ebb78fd4f3771c8a3f56e98f1->enter($__internal_d02189c9cdaa85516d04e60afa82f15f503e725ebb78fd4f3771c8a3f56e98f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7b50a802bda014dc06b1523f5ad362d31fc469af003db9f4e886120e7c632f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b50a802bda014dc06b1523f5ad362d31fc469af003db9f4e886120e7c632f7->enter($__internal_e7b50a802bda014dc06b1523f5ad362d31fc469af003db9f4e886120e7c632f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7b50a802bda014dc06b1523f5ad362d31fc469af003db9f4e886120e7c632f7->leave($__internal_e7b50a802bda014dc06b1523f5ad362d31fc469af003db9f4e886120e7c632f7_prof);

        
        $__internal_d02189c9cdaa85516d04e60afa82f15f503e725ebb78fd4f3771c8a3f56e98f1->leave($__internal_d02189c9cdaa85516d04e60afa82f15f503e725ebb78fd4f3771c8a3f56e98f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
