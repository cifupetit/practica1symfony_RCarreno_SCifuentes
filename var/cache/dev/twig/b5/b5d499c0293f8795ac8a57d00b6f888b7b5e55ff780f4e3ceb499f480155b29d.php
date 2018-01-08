<?php

/* ::base.html.twig */
class __TwigTemplate_d8adfa9850bfec8e291ce4ea3ebe73a551d37a2fd71e81b00584a94726427558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67a02717c8dfac084c1e173ce6d365f057373af46dc4de4a22b23c65c2486bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a02717c8dfac084c1e173ce6d365f057373af46dc4de4a22b23c65c2486bcd->enter($__internal_67a02717c8dfac084c1e173ce6d365f057373af46dc4de4a22b23c65c2486bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_df003bcd5c04bca8c44200cc31c92a4390366ae238e29b062307bbe86ebbfbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df003bcd5c04bca8c44200cc31c92a4390366ae238e29b062307bbe86ebbfbef->enter($__internal_df003bcd5c04bca8c44200cc31c92a4390366ae238e29b062307bbe86ebbfbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled    and minified    CSS -->
        <link   rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- Latest compiled    JavaScript  -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_67a02717c8dfac084c1e173ce6d365f057373af46dc4de4a22b23c65c2486bcd->leave($__internal_67a02717c8dfac084c1e173ce6d365f057373af46dc4de4a22b23c65c2486bcd_prof);

        
        $__internal_df003bcd5c04bca8c44200cc31c92a4390366ae238e29b062307bbe86ebbfbef->leave($__internal_df003bcd5c04bca8c44200cc31c92a4390366ae238e29b062307bbe86ebbfbef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8e7d9a49673b98f54cc3ff3e41994032da7fe0f0bfa4799177b97a1647390ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e7d9a49673b98f54cc3ff3e41994032da7fe0f0bfa4799177b97a1647390ad->enter($__internal_f8e7d9a49673b98f54cc3ff3e41994032da7fe0f0bfa4799177b97a1647390ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a698882516dbdd4b91ab9890c0e0f60c6c9ac76e25218ddf76a8a001218ebb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a698882516dbdd4b91ab9890c0e0f60c6c9ac76e25218ddf76a8a001218ebb72->enter($__internal_a698882516dbdd4b91ab9890c0e0f60c6c9ac76e25218ddf76a8a001218ebb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a698882516dbdd4b91ab9890c0e0f60c6c9ac76e25218ddf76a8a001218ebb72->leave($__internal_a698882516dbdd4b91ab9890c0e0f60c6c9ac76e25218ddf76a8a001218ebb72_prof);

        
        $__internal_f8e7d9a49673b98f54cc3ff3e41994032da7fe0f0bfa4799177b97a1647390ad->leave($__internal_f8e7d9a49673b98f54cc3ff3e41994032da7fe0f0bfa4799177b97a1647390ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4041d832b69468917168168975abfbf4dd653da47ddaae6fa6ce6b1240e193f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4041d832b69468917168168975abfbf4dd653da47ddaae6fa6ce6b1240e193f->enter($__internal_c4041d832b69468917168168975abfbf4dd653da47ddaae6fa6ce6b1240e193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9ccce80a8451b1456d24b7139fee670454185137e3e543ea7afb6dbf16fec151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccce80a8451b1456d24b7139fee670454185137e3e543ea7afb6dbf16fec151->enter($__internal_9ccce80a8451b1456d24b7139fee670454185137e3e543ea7afb6dbf16fec151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9ccce80a8451b1456d24b7139fee670454185137e3e543ea7afb6dbf16fec151->leave($__internal_9ccce80a8451b1456d24b7139fee670454185137e3e543ea7afb6dbf16fec151_prof);

        
        $__internal_c4041d832b69468917168168975abfbf4dd653da47ddaae6fa6ce6b1240e193f->leave($__internal_c4041d832b69468917168168975abfbf4dd653da47ddaae6fa6ce6b1240e193f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_8040a839021a9618714809deb52fc48f23a792b08b91c03b5b725bd3e8febc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8040a839021a9618714809deb52fc48f23a792b08b91c03b5b725bd3e8febc6e->enter($__internal_8040a839021a9618714809deb52fc48f23a792b08b91c03b5b725bd3e8febc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26b11e45392a3ae28dfed909f3c225774160b2cc55b9cfc13cfac5885367bf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b11e45392a3ae28dfed909f3c225774160b2cc55b9cfc13cfac5885367bf2f->enter($__internal_26b11e45392a3ae28dfed909f3c225774160b2cc55b9cfc13cfac5885367bf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26b11e45392a3ae28dfed909f3c225774160b2cc55b9cfc13cfac5885367bf2f->leave($__internal_26b11e45392a3ae28dfed909f3c225774160b2cc55b9cfc13cfac5885367bf2f_prof);

        
        $__internal_8040a839021a9618714809deb52fc48f23a792b08b91c03b5b725bd3e8febc6e->leave($__internal_8040a839021a9618714809deb52fc48f23a792b08b91c03b5b725bd3e8febc6e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41b6a2546c508e089407dda743e239aab4b0e55dc9658eb8e1110d5fdc2a91e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b6a2546c508e089407dda743e239aab4b0e55dc9658eb8e1110d5fdc2a91e2->enter($__internal_41b6a2546c508e089407dda743e239aab4b0e55dc9658eb8e1110d5fdc2a91e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f35206da58ad9aeb882c9b0c6ea564f9f1c03e99071cd894b48f1b69da9a01f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35206da58ad9aeb882c9b0c6ea564f9f1c03e99071cd894b48f1b69da9a01f5->enter($__internal_f35206da58ad9aeb882c9b0c6ea564f9f1c03e99071cd894b48f1b69da9a01f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f35206da58ad9aeb882c9b0c6ea564f9f1c03e99071cd894b48f1b69da9a01f5->leave($__internal_f35206da58ad9aeb882c9b0c6ea564f9f1c03e99071cd894b48f1b69da9a01f5_prof);

        
        $__internal_41b6a2546c508e089407dda743e239aab4b0e55dc9658eb8e1110d5fdc2a91e2->leave($__internal_41b6a2546c508e089407dda743e239aab4b0e55dc9658eb8e1110d5fdc2a91e2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 17,  106 => 16,  89 => 6,  71 => 5,  59 => 18,  56 => 17,  54 => 16,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Latest compiled    and minified    CSS -->
        <link   rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- Latest compiled    JavaScript  -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\app/Resources\\views/base.html.twig");
    }
}
