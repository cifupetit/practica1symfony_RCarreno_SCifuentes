<?php

/* AppBundle:Partit:listLigas.html.twig */
class __TwigTemplate_31abd6d09f5a81e7a09dbbe0f68bb4562bbaa3d86ede363c386f7a0bb4c8d825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:listLigas.html.twig", 1);
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
        $__internal_fc60464f3665b6034913c43c52e7e357409580f6bde47718b61507c26c3ccb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc60464f3665b6034913c43c52e7e357409580f6bde47718b61507c26c3ccb4f->enter($__internal_fc60464f3665b6034913c43c52e7e357409580f6bde47718b61507c26c3ccb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listLigas.html.twig"));

        $__internal_904913710d1a9e8d7295a851c87dfc4ff15221b3d25476c278da0a8781a57f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904913710d1a9e8d7295a851c87dfc4ff15221b3d25476c278da0a8781a57f11->enter($__internal_904913710d1a9e8d7295a851c87dfc4ff15221b3d25476c278da0a8781a57f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:listLigas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc60464f3665b6034913c43c52e7e357409580f6bde47718b61507c26c3ccb4f->leave($__internal_fc60464f3665b6034913c43c52e7e357409580f6bde47718b61507c26c3ccb4f_prof);

        
        $__internal_904913710d1a9e8d7295a851c87dfc4ff15221b3d25476c278da0a8781a57f11->leave($__internal_904913710d1a9e8d7295a851c87dfc4ff15221b3d25476c278da0a8781a57f11_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc45942822b93c66c797a27732076ee06d7e73f610fbf7681c445073defb5f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc45942822b93c66c797a27732076ee06d7e73f610fbf7681c445073defb5f9b->enter($__internal_dc45942822b93c66c797a27732076ee06d7e73f610fbf7681c445073defb5f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1022257cb2c1a6ede95d092a153d78cbbec37507edb16bdaba1dfbf94e86654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1022257cb2c1a6ede95d092a153d78cbbec37507edb16bdaba1dfbf94e86654b->enter($__internal_1022257cb2c1a6ede95d092a153d78cbbec37507edb16bdaba1dfbf94e86654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1022257cb2c1a6ede95d092a153d78cbbec37507edb16bdaba1dfbf94e86654b->leave($__internal_1022257cb2c1a6ede95d092a153d78cbbec37507edb16bdaba1dfbf94e86654b_prof);

        
        $__internal_dc45942822b93c66c797a27732076ee06d7e73f610fbf7681c445073defb5f9b->leave($__internal_dc45942822b93c66c797a27732076ee06d7e73f610fbf7681c445073defb5f9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d923ec7ec2123a77728f0fef5c631adca21afb40fa81dd5185e38c0082f90c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d923ec7ec2123a77728f0fef5c631adca21afb40fa81dd5185e38c0082f90c8->enter($__internal_7d923ec7ec2123a77728f0fef5c631adca21afb40fa81dd5185e38c0082f90c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab438a41f28d15f5cb98015b2518a68a0af4a4fbe70f85d8b9da2173d892b450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab438a41f28d15f5cb98015b2518a68a0af4a4fbe70f85d8b9da2173d892b450->enter($__internal_ab438a41f28d15f5cb98015b2518a68a0af4a4fbe70f85d8b9da2173d892b450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_ab438a41f28d15f5cb98015b2518a68a0af4a4fbe70f85d8b9da2173d892b450->leave($__internal_ab438a41f28d15f5cb98015b2518a68a0af4a4fbe70f85d8b9da2173d892b450_prof);

        
        $__internal_7d923ec7ec2123a77728f0fef5c631adca21afb40fa81dd5185e38c0082f90c8->leave($__internal_7d923ec7ec2123a77728f0fef5c631adca21afb40fa81dd5185e38c0082f90c8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1f7aa4283402bcc004eb27ca5588a91e909de1c5057e5dafff8e8b6cb49e1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f7aa4283402bcc004eb27ca5588a91e909de1c5057e5dafff8e8b6cb49e1b1->enter($__internal_d1f7aa4283402bcc004eb27ca5588a91e909de1c5057e5dafff8e8b6cb49e1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5f4560acf068432ffc5af0d48e627636517b76708f7a3dd72cf558b9d30b266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f4560acf068432ffc5af0d48e627636517b76708f7a3dd72cf558b9d30b266->enter($__internal_a5f4560acf068432ffc5af0d48e627636517b76708f7a3dd72cf558b9d30b266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>

\t<table>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partits"]) ? $context["partits"] : $this->getContext($context, "partits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["partit"]) {
            // line 13
            echo "\t\t<tr>
\t\t\t<td><button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\"><a href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas(";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partit"], "competicio", array()), "html", null, true);
            echo "</a></button><br></td>
\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "\t\t<tr>
\t\t\t<td>No se han encontrado competiciones...</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</table>

</div>
";
        
        $__internal_a5f4560acf068432ffc5af0d48e627636517b76708f7a3dd72cf558b9d30b266->leave($__internal_a5f4560acf068432ffc5af0d48e627636517b76708f7a3dd72cf558b9d30b266_prof);

        
        $__internal_d1f7aa4283402bcc004eb27ca5588a91e909de1c5057e5dafff8e8b6cb49e1b1->leave($__internal_d1f7aa4283402bcc004eb27ca5588a91e909de1c5057e5dafff8e8b6cb49e1b1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:listLigas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  110 => 17,  100 => 14,  97 => 13,  92 => 12,  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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

\t<table>
\t\t{% for partit in partits %}
\t\t<tr>
\t\t\t<td><button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\"><a href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas({{partit.competicio}})\">{{partit.competicio}}</a></button><br></td>
\t\t</tr>
\t\t{% else %}
\t\t<tr>
\t\t\t<td>No se han encontrado competiciones...</td>
\t\t</tr>
\t\t{% endfor %}
\t</table>

</div>
{% endblock %}
", "AppBundle:Partit:listLigas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/listLigas.html.twig");
    }
}
