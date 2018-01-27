<?php

/* AppBundle:Equip:listPartidosDeEquipo.html.twig */
class __TwigTemplate_0859b87eefc265f04e0931fe0f9fc0e59a35833d23565a7433b08fd0603dd300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Equip:listPartidosDeEquipo.html.twig", 1);
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
        $__internal_2a80951f2a5529af4807799673c1875ccef91c3e83d49e927bc33fc03f0175c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a80951f2a5529af4807799673c1875ccef91c3e83d49e927bc33fc03f0175c6->enter($__internal_2a80951f2a5529af4807799673c1875ccef91c3e83d49e927bc33fc03f0175c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Equip:listPartidosDeEquipo.html.twig"));

        $__internal_6138eb682321ef4766510cde9dd3c5d8600406423194ddee8579944727976c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6138eb682321ef4766510cde9dd3c5d8600406423194ddee8579944727976c30->enter($__internal_6138eb682321ef4766510cde9dd3c5d8600406423194ddee8579944727976c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Equip:listPartidosDeEquipo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a80951f2a5529af4807799673c1875ccef91c3e83d49e927bc33fc03f0175c6->leave($__internal_2a80951f2a5529af4807799673c1875ccef91c3e83d49e927bc33fc03f0175c6_prof);

        
        $__internal_6138eb682321ef4766510cde9dd3c5d8600406423194ddee8579944727976c30->leave($__internal_6138eb682321ef4766510cde9dd3c5d8600406423194ddee8579944727976c30_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27cdc5762c890bc58b64cf52b11382f9535d5cf955ee2127c84a64b8cd5c7572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cdc5762c890bc58b64cf52b11382f9535d5cf955ee2127c84a64b8cd5c7572->enter($__internal_27cdc5762c890bc58b64cf52b11382f9535d5cf955ee2127c84a64b8cd5c7572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eccaa7e2fa8eec8d353f87704ab2f205cadcb9ce795b63c7b92a4a75d2489555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccaa7e2fa8eec8d353f87704ab2f205cadcb9ce795b63c7b92a4a75d2489555->enter($__internal_eccaa7e2fa8eec8d353f87704ab2f205cadcb9ce795b63c7b92a4a75d2489555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eccaa7e2fa8eec8d353f87704ab2f205cadcb9ce795b63c7b92a4a75d2489555->leave($__internal_eccaa7e2fa8eec8d353f87704ab2f205cadcb9ce795b63c7b92a4a75d2489555_prof);

        
        $__internal_27cdc5762c890bc58b64cf52b11382f9535d5cf955ee2127c84a64b8cd5c7572->leave($__internal_27cdc5762c890bc58b64cf52b11382f9535d5cf955ee2127c84a64b8cd5c7572_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_edf137e61f47184cdd47974199f176c38a1c89e1ab582b004def27dc823a675d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf137e61f47184cdd47974199f176c38a1c89e1ab582b004def27dc823a675d->enter($__internal_edf137e61f47184cdd47974199f176c38a1c89e1ab582b004def27dc823a675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f4f9788d4aa36669a2986ed9e3ba4ef8e196107804c32a0134fcdd60647780b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4f9788d4aa36669a2986ed9e3ba4ef8e196107804c32a0134fcdd60647780b->enter($__internal_9f4f9788d4aa36669a2986ed9e3ba4ef8e196107804c32a0134fcdd60647780b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partidos de equipo";
        
        $__internal_9f4f9788d4aa36669a2986ed9e3ba4ef8e196107804c32a0134fcdd60647780b->leave($__internal_9f4f9788d4aa36669a2986ed9e3ba4ef8e196107804c32a0134fcdd60647780b_prof);

        
        $__internal_edf137e61f47184cdd47974199f176c38a1c89e1ab582b004def27dc823a675d->leave($__internal_edf137e61f47184cdd47974199f176c38a1c89e1ab582b004def27dc823a675d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_741452cd5a2da6a40cf9fefe4e7e9b85eab6be818b6f5d45d1a7689dceb1c1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741452cd5a2da6a40cf9fefe4e7e9b85eab6be818b6f5d45d1a7689dceb1c1e9->enter($__internal_741452cd5a2da6a40cf9fefe4e7e9b85eab6be818b6f5d45d1a7689dceb1c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6c72121808aeb6738db94d62649dd437c4c9c43e2e9848f518866705d9bf277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c72121808aeb6738db94d62649dd437c4c9c43e2e9848f518866705d9bf277->enter($__internal_b6c72121808aeb6738db94d62649dd437c4c9c43e2e9848f518866705d9bf277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\" class=\"container\">
\t<h1 style=\"margin: 100px;\">Partidos jugados de ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomEquip"]) ? $context["nomEquip"] : $this->getContext($context, "nomEquip")), "nomEquip", array()), "html", null, true);
        echo "</h1>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t<h5>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo " - Temporada ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "temporada", array()), "html", null, true);
            echo "</h5>
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
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos jugados por el equipo ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomEquip"]) ? $context["nomEquip"] : $this->getContext($context, "nomEquip")), "nomEquip", array()), "html", null, true);
            echo "</div>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t\t<h2>Jugdores de ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomEquip"]) ? $context["nomEquip"] : $this->getContext($context, "nomEquip")), "nomEquip", array()), "html", null, true);
        echo ":</h2>
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadors"]) ? $context["jugadors"] : $this->getContext($context, "jugadors")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 26
            echo "\t\t\t<h5>- ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugador"], "cognom", array()), "html", null, true);
            echo "</h5>

\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado jugadores del equipo ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nomEquip"]) ? $context["nomEquip"] : $this->getContext($context, "nomEquip")), "nomEquip", array()), "html", null, true);
            echo "</div>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t<div style=\"margin:50px\">\t
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partidosDeEquipoForm");
        echo "\">Buscar partidos de equipo</a></button>
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competiciones");
        echo "\">Competiciones</a></button>
\t</div>
</div>
";
        
        $__internal_b6c72121808aeb6738db94d62649dd437c4c9c43e2e9848f518866705d9bf277->leave($__internal_b6c72121808aeb6738db94d62649dd437c4c9c43e2e9848f518866705d9bf277_prof);

        
        $__internal_741452cd5a2da6a40cf9fefe4e7e9b85eab6be818b6f5d45d1a7689dceb1c1e9->leave($__internal_741452cd5a2da6a40cf9fefe4e7e9b85eab6be818b6f5d45d1a7689dceb1c1e9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Equip:listPartidosDeEquipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 36,  176 => 35,  172 => 33,  163 => 30,  160 => 29,  149 => 26,  144 => 25,  140 => 24,  137 => 23,  128 => 20,  125 => 19,  114 => 15,  108 => 14,  102 => 13,  99 => 12,  94 => 11,  89 => 9,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<h1 style=\"margin: 100px;\">Partidos jugados de {{nomEquip.nomEquip}}</h1>

\t\t{% for partit in partits %}
\t\t\t<div>
\t\t\t\t<h5>{{partit.competicio}} - Temporada {{partit.temporada}}</h5>
\t\t\t\t<h4>{{partit.equipLocal.nomEquip}} - {{partit.equipVisitant.nomEquip}}</h4>
\t\t\t\t<h5>{{partit.golslocal}} - {{partit.golsvisitant}}</h5><br>
\t\t\t</div>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado partidos jugados por el equipo {{nomEquip.nomEquip}}</div>
\t\t
\t\t{% endfor %}

\t\t<h2>Jugdores de {{nomEquip.nomEquip}}:</h2>
\t\t{% for jugador in jugadors %}
\t\t\t<h5>- {{jugador.nom}} {{jugador.cognom}}</h5>

\t\t{% else %}
\t\t
\t\t\t<div class=\"alert alert-danger\" role=\"alert\">No se han encontrado jugadores del equipo {{nomEquip.nomEquip}}</div>
\t\t
\t\t{% endfor %}

\t<div style=\"margin:50px\">\t
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('partidosDeEquipoForm') }}\">Buscar partidos de equipo</a></button>
\t\t<button class=\"btn btn-info\"\"><a style=\"text-decoration:none;color:white;\" href=\"{{ path('competiciones') }}\">Competiciones</a></button>
\t</div>
</div>
{% endblock %}
", "AppBundle:Equip:listPartidosDeEquipo.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Equip/listPartidosDeEquipo.html.twig");
    }
}
