<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_796462df7f74f0cbd096c1b188e7f9c40c37888c0d6a91d03bfa1b9bc175714c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c14d2800f64c0faef73f2dff8ed34ad84efbe8f58acb9d7a1e8750e1a11575e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14d2800f64c0faef73f2dff8ed34ad84efbe8f58acb9d7a1e8750e1a11575e0->enter($__internal_c14d2800f64c0faef73f2dff8ed34ad84efbe8f58acb9d7a1e8750e1a11575e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_02aa00c3df5024f816606516bff410aa921f1d9a0b0573b0bf7cbe262fd2bad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aa00c3df5024f816606516bff410aa921f1d9a0b0573b0bf7cbe262fd2bad6->enter($__internal_02aa00c3df5024f816606516bff410aa921f1d9a0b0573b0bf7cbe262fd2bad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_a93a24cf69d8026fa395bf6211697a9675efdda8ddf57f33684038839be73c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93a24cf69d8026fa395bf6211697a9675efdda8ddf57f33684038839be73c55->enter($__internal_a93a24cf69d8026fa395bf6211697a9675efdda8ddf57f33684038839be73c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_b14c30996ef88baae538cb7e313995205239d2fc15277e246e55c97cccc46e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14c30996ef88baae538cb7e313995205239d2fc15277e246e55c97cccc46e23->enter($__internal_b14c30996ef88baae538cb7e313995205239d2fc15277e246e55c97cccc46e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter(($context["additional_classes"] ?? $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter(($context["block_attrs"] ?? $this->getContext($context, "block_attrs")), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || ($context["link"] ?? $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD
        $__internal_c14d2800f64c0faef73f2dff8ed34ad84efbe8f58acb9d7a1e8750e1a11575e0->leave($__internal_c14d2800f64c0faef73f2dff8ed34ad84efbe8f58acb9d7a1e8750e1a11575e0_prof);

        
        $__internal_02aa00c3df5024f816606516bff410aa921f1d9a0b0573b0bf7cbe262fd2bad6->leave($__internal_02aa00c3df5024f816606516bff410aa921f1d9a0b0573b0bf7cbe262fd2bad6_prof);
=======
        $__internal_a93a24cf69d8026fa395bf6211697a9675efdda8ddf57f33684038839be73c55->leave($__internal_a93a24cf69d8026fa395bf6211697a9675efdda8ddf57f33684038839be73c55_prof);

        
        $__internal_b14c30996ef88baae538cb7e313995205239d2fc15277e246e55c97cccc46e23->leave($__internal_b14c30996ef88baae538cb7e313995205239d2fc15277e246e55c97cccc46e23_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
