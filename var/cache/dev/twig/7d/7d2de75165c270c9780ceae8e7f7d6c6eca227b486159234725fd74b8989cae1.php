<?php

/* AppBundle:Partit:listCompeticiones.html.twig */
class __TwigTemplate_34138b2d9aeff994f4efaf90891a19db199694df56b04e4bde4118550f737dda extends Twig_Template
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
        $__internal_667e5e4a9de0a1ed49961902e54a50060fe22523a361ded26af4d86524ef2eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667e5e4a9de0a1ed49961902e54a50060fe22523a361ded26af4d86524ef2eff->enter($__internal_667e5e4a9de0a1ed49961902e54a50060fe22523a361ded26af4d86524ef2eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listCompeticiones.html.twig"));

        $__internal_e952cccd7c761a3f37c4cb1591b5fdd3fbf1da29b6fcf4aba298cd497eddb0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e952cccd7c761a3f37c4cb1591b5fdd3fbf1da29b6fcf4aba298cd497eddb0b6->enter($__internal_e952cccd7c761a3f37c4cb1591b5fdd3fbf1da29b6fcf4aba298cd497eddb0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listCompeticiones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_667e5e4a9de0a1ed49961902e54a50060fe22523a361ded26af4d86524ef2eff->leave($__internal_667e5e4a9de0a1ed49961902e54a50060fe22523a361ded26af4d86524ef2eff_prof);

        
        $__internal_e952cccd7c761a3f37c4cb1591b5fdd3fbf1da29b6fcf4aba298cd497eddb0b6->leave($__internal_e952cccd7c761a3f37c4cb1591b5fdd3fbf1da29b6fcf4aba298cd497eddb0b6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b41479aa05d0fcf5f587339895c71108117099a06ab1a0788c56a710b6a0412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b41479aa05d0fcf5f587339895c71108117099a06ab1a0788c56a710b6a0412->enter($__internal_3b41479aa05d0fcf5f587339895c71108117099a06ab1a0788c56a710b6a0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d90c2bbe5addd99c4b5506a2078d8cbd189f60308112961d2fe4445b6f5d155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d90c2bbe5addd99c4b5506a2078d8cbd189f60308112961d2fe4445b6f5d155->enter($__internal_1d90c2bbe5addd99c4b5506a2078d8cbd189f60308112961d2fe4445b6f5d155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d90c2bbe5addd99c4b5506a2078d8cbd189f60308112961d2fe4445b6f5d155->leave($__internal_1d90c2bbe5addd99c4b5506a2078d8cbd189f60308112961d2fe4445b6f5d155_prof);

        
        $__internal_3b41479aa05d0fcf5f587339895c71108117099a06ab1a0788c56a710b6a0412->leave($__internal_3b41479aa05d0fcf5f587339895c71108117099a06ab1a0788c56a710b6a0412_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4684e71de0ab248d7054894d39c294d212dee5077ae8c0526ae6a4e61003daf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4684e71de0ab248d7054894d39c294d212dee5077ae8c0526ae6a4e61003daf1->enter($__internal_4684e71de0ab248d7054894d39c294d212dee5077ae8c0526ae6a4e61003daf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8538adf81aa8c75bde84ae51a818597665860ae34583718333bcd62c1bdd4118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8538adf81aa8c75bde84ae51a818597665860ae34583718333bcd62c1bdd4118->enter($__internal_8538adf81aa8c75bde84ae51a818597665860ae34583718333bcd62c1bdd4118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_8538adf81aa8c75bde84ae51a818597665860ae34583718333bcd62c1bdd4118->leave($__internal_8538adf81aa8c75bde84ae51a818597665860ae34583718333bcd62c1bdd4118_prof);

        
        $__internal_4684e71de0ab248d7054894d39c294d212dee5077ae8c0526ae6a4e61003daf1->leave($__internal_4684e71de0ab248d7054894d39c294d212dee5077ae8c0526ae6a4e61003daf1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8d74083705d2325940489ca599b8dcac9e816cc6cced9ae1e457bc75977f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8d74083705d2325940489ca599b8dcac9e816cc6cced9ae1e457bc75977f7f->enter($__internal_0d8d74083705d2325940489ca599b8dcac9e816cc6cced9ae1e457bc75977f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d03934be27e52443aa334b92becf842cf5713c5ee7cea986a85d40b1e25a8a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03934be27e52443aa334b92becf842cf5713c5ee7cea986a85d40b1e25a8a33->enter($__internal_d03934be27e52443aa334b92becf842cf5713c5ee7cea986a85d40b1e25a8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
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
        echo "</div>
";
        
        $__internal_d03934be27e52443aa334b92becf842cf5713c5ee7cea986a85d40b1e25a8a33->leave($__internal_d03934be27e52443aa334b92becf842cf5713c5ee7cea986a85d40b1e25a8a33_prof);

        
        $__internal_0d8d74083705d2325940489ca599b8dcac9e816cc6cced9ae1e457bc75977f7f->leave($__internal_0d8d74083705d2325940489ca599b8dcac9e816cc6cced9ae1e457bc75977f7f_prof);

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
</div>
{% endblock %}
", "AppBundle:Partit:listCompeticiones.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listCompeticiones.html.twig");
    }
}
