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
        $__internal_d99db95f99982cdd7a2641acf791acd0deb269eb4238c8477ab24e692b70c17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99db95f99982cdd7a2641acf791acd0deb269eb4238c8477ab24e692b70c17c->enter($__internal_d99db95f99982cdd7a2641acf791acd0deb269eb4238c8477ab24e692b70c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $__internal_86d2ef1add38bbe8e87fa010d5b7b8e57fb524d977a0ee9add25b768e4ee03cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d2ef1add38bbe8e87fa010d5b7b8e57fb524d977a0ee9add25b768e4ee03cc->enter($__internal_86d2ef1add38bbe8e87fa010d5b7b8e57fb524d977a0ee9add25b768e4ee03cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listPartidos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99db95f99982cdd7a2641acf791acd0deb269eb4238c8477ab24e692b70c17c->leave($__internal_d99db95f99982cdd7a2641acf791acd0deb269eb4238c8477ab24e692b70c17c_prof);

        
        $__internal_86d2ef1add38bbe8e87fa010d5b7b8e57fb524d977a0ee9add25b768e4ee03cc->leave($__internal_86d2ef1add38bbe8e87fa010d5b7b8e57fb524d977a0ee9add25b768e4ee03cc_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a57eff721e542071c930eb6444fbe7665010ebfea41eef82b5fed42eb2a529b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a57eff721e542071c930eb6444fbe7665010ebfea41eef82b5fed42eb2a529b->enter($__internal_2a57eff721e542071c930eb6444fbe7665010ebfea41eef82b5fed42eb2a529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f291e5da70487dd7b3ac5531ed23ecd733fc28be64f4419946d1fd9f0a3ce763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f291e5da70487dd7b3ac5531ed23ecd733fc28be64f4419946d1fd9f0a3ce763->enter($__internal_f291e5da70487dd7b3ac5531ed23ecd733fc28be64f4419946d1fd9f0a3ce763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f291e5da70487dd7b3ac5531ed23ecd733fc28be64f4419946d1fd9f0a3ce763->leave($__internal_f291e5da70487dd7b3ac5531ed23ecd733fc28be64f4419946d1fd9f0a3ce763_prof);

        
        $__internal_2a57eff721e542071c930eb6444fbe7665010ebfea41eef82b5fed42eb2a529b->leave($__internal_2a57eff721e542071c930eb6444fbe7665010ebfea41eef82b5fed42eb2a529b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a8dfd3b41f6d0c90c0e8bf0f0df424c087518bb297a682551203f9601c8a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a8dfd3b41f6d0c90c0e8bf0f0df424c087518bb297a682551203f9601c8a9b->enter($__internal_39a8dfd3b41f6d0c90c0e8bf0f0df424c087518bb297a682551203f9601c8a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e7ee6123358ad32426b0f348e1362b6badc6ec914a9515242e2259fc853e739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7ee6123358ad32426b0f348e1362b6badc6ec914a9515242e2259fc853e739->enter($__internal_8e7ee6123358ad32426b0f348e1362b6badc6ec914a9515242e2259fc853e739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos";
        
        $__internal_8e7ee6123358ad32426b0f348e1362b6badc6ec914a9515242e2259fc853e739->leave($__internal_8e7ee6123358ad32426b0f348e1362b6badc6ec914a9515242e2259fc853e739_prof);

        
        $__internal_39a8dfd3b41f6d0c90c0e8bf0f0df424c087518bb297a682551203f9601c8a9b->leave($__internal_39a8dfd3b41f6d0c90c0e8bf0f0df424c087518bb297a682551203f9601c8a9b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8645ff4827e0369a6b7b73cdfed851c5dfe0f9ade15dc9dfa2ef61621f6e4192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8645ff4827e0369a6b7b73cdfed851c5dfe0f9ade15dc9dfa2ef61621f6e4192->enter($__internal_8645ff4827e0369a6b7b73cdfed851c5dfe0f9ade15dc9dfa2ef61621f6e4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72ab2c7d7460d585ea316d2d54d0c1347ef3c4f3eaa85f4ccdd97648e8ccfa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ab2c7d7460d585ea316d2d54d0c1347ef3c4f3eaa85f4ccdd97648e8ccfa73->enter($__internal_72ab2c7d7460d585ea316d2d54d0c1347ef3c4f3eaa85f4ccdd97648e8ccfa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos de ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "html", null, true);
        echo " de la temporada ";
        echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : $this->getContext($context, "temp")), "html", null, true);
        echo "</h1>


\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 13
            echo "\t\t\t<div>
\t\t\t\t<h4>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partit"], "equipLocal", array()), "nomEquip", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partit"], "equipVisitant", array()), "nomEquip", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golslocal", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "golsvisitant", array()), "html", null, true);
            echo "</h5><br>
\t\t\t</div>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos en la temporada ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : $this->getContext($context, "temp")), "html", null, true);
            echo " de la ";
            echo twig_escape_filter($this->env, (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "html", null, true);
            echo "</div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temporadas", array("competicio" => (isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")))), "html", null, true);
        echo "\">Temporadas</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidosDeEquipoForm");
        echo "\">Buscar partidos de cierto equipo</a></button>
</div>
";
        
        $__internal_72ab2c7d7460d585ea316d2d54d0c1347ef3c4f3eaa85f4ccdd97648e8ccfa73->leave($__internal_72ab2c7d7460d585ea316d2d54d0c1347ef3c4f3eaa85f4ccdd97648e8ccfa73_prof);

        
        $__internal_8645ff4827e0369a6b7b73cdfed851c5dfe0f9ade15dc9dfa2ef61621f6e4192->leave($__internal_8645ff4827e0369a6b7b73cdfed851c5dfe0f9ade15dc9dfa2ef61621f6e4192_prof);

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
        return array (  143 => 25,  139 => 24,  136 => 23,  125 => 20,  122 => 19,  111 => 15,  105 => 14,  102 => 13,  97 => 12,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<h1 style=\"margin: 100px;\">Partidos de {{comp}} de la temporada {{temp}}</h1>


\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h4>{{partit.equipLocal.nomEquip}} - {{partit.equipVisitant.nomEquip}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos en la temporada {{temp}} de la {{comp}}</div>
\t\t
\t\t{% endfor %}
\t
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('temporadas' ,{'competicio' : comp} ) }}\">Temporadas</a></button>
\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidosDeEquipoForm') }}\">Buscar partidos de cierto equipo</a></button>
</div>
{% endblock %}
", "AppBundle:Partit:listPartidos.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listPartidos.html.twig");
    }
}
