<?php

/* AppBundle:Liga:listLigas.html.twig */
class __TwigTemplate_5fd8f668c67078a61302d0f24a0cdfa8d494ef9b3ca8114377adb1349eed645e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Liga:listLigas.html.twig", 1);
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
        $__internal_8176dcc8c513c87f238c99801787e34f63629e7118d4087989237793894f13a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8176dcc8c513c87f238c99801787e34f63629e7118d4087989237793894f13a5->enter($__internal_8176dcc8c513c87f238c99801787e34f63629e7118d4087989237793894f13a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Liga:listLigas.html.twig"));

        $__internal_f54e5535965c1d0a92bfec4a7770519e518d8bc5cb976f43d73b929da3a45b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54e5535965c1d0a92bfec4a7770519e518d8bc5cb976f43d73b929da3a45b66->enter($__internal_f54e5535965c1d0a92bfec4a7770519e518d8bc5cb976f43d73b929da3a45b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Liga:listLigas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8176dcc8c513c87f238c99801787e34f63629e7118d4087989237793894f13a5->leave($__internal_8176dcc8c513c87f238c99801787e34f63629e7118d4087989237793894f13a5_prof);

        
        $__internal_f54e5535965c1d0a92bfec4a7770519e518d8bc5cb976f43d73b929da3a45b66->leave($__internal_f54e5535965c1d0a92bfec4a7770519e518d8bc5cb976f43d73b929da3a45b66_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dfc2ba05ebb663ef975d25167afc935f82b49ecd6f84424bd72eb0eee0b6a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfc2ba05ebb663ef975d25167afc935f82b49ecd6f84424bd72eb0eee0b6a5e->enter($__internal_0dfc2ba05ebb663ef975d25167afc935f82b49ecd6f84424bd72eb0eee0b6a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06b63663004ab1baea0acf9906d68852132b3b5bc8925ec8b2a83cb90b561671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b63663004ab1baea0acf9906d68852132b3b5bc8925ec8b2a83cb90b561671->enter($__internal_06b63663004ab1baea0acf9906d68852132b3b5bc8925ec8b2a83cb90b561671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_06b63663004ab1baea0acf9906d68852132b3b5bc8925ec8b2a83cb90b561671->leave($__internal_06b63663004ab1baea0acf9906d68852132b3b5bc8925ec8b2a83cb90b561671_prof);

        
        $__internal_0dfc2ba05ebb663ef975d25167afc935f82b49ecd6f84424bd72eb0eee0b6a5e->leave($__internal_0dfc2ba05ebb663ef975d25167afc935f82b49ecd6f84424bd72eb0eee0b6a5e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_718c01ead2897f247f1ccd3421551c0b0bc4b7482fcb6251bb71ea872e2a4f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718c01ead2897f247f1ccd3421551c0b0bc4b7482fcb6251bb71ea872e2a4f98->enter($__internal_718c01ead2897f247f1ccd3421551c0b0bc4b7482fcb6251bb71ea872e2a4f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bce8edff44c8bfadc9726b48d0f2afdb1fe2e8a02ed52b2338d89e197a8ccd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce8edff44c8bfadc9726b48d0f2afdb1fe2e8a02ed52b2338d89e197a8ccd93->enter($__internal_bce8edff44c8bfadc9726b48d0f2afdb1fe2e8a02ed52b2338d89e197a8ccd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_bce8edff44c8bfadc9726b48d0f2afdb1fe2e8a02ed52b2338d89e197a8ccd93->leave($__internal_bce8edff44c8bfadc9726b48d0f2afdb1fe2e8a02ed52b2338d89e197a8ccd93_prof);

        
        $__internal_718c01ead2897f247f1ccd3421551c0b0bc4b7482fcb6251bb71ea872e2a4f98->leave($__internal_718c01ead2897f247f1ccd3421551c0b0bc4b7482fcb6251bb71ea872e2a4f98_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_160242221f2ce7ab0aba95aebc343f3b1c086ad56f7f5f2342dd2067200f119c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160242221f2ce7ab0aba95aebc343f3b1c086ad56f7f5f2342dd2067200f119c->enter($__internal_160242221f2ce7ab0aba95aebc343f3b1c086ad56f7f5f2342dd2067200f119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bcea6bbbf8a1c118126598f1855eed9de422bf2da0cd56f24b37f420568ca1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcea6bbbf8a1c118126598f1855eed9de422bf2da0cd56f24b37f420568ca1d->enter($__internal_2bcea6bbbf8a1c118126598f1855eed9de422bf2da0cd56f24b37f420568ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div style=\"text-align:center;\">
\t<h1 style=\"margin: 100px;\">Competiciones disponibles</h1>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\"><a href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Champions</a></button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Liga</button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Copa del rey</button>
</div>
";
        
        $__internal_2bcea6bbbf8a1c118126598f1855eed9de422bf2da0cd56f24b37f420568ca1d->leave($__internal_2bcea6bbbf8a1c118126598f1855eed9de422bf2da0cd56f24b37f420568ca1d_prof);

        
        $__internal_160242221f2ce7ab0aba95aebc343f3b1c086ad56f7f5f2342dd2067200f119c->leave($__internal_160242221f2ce7ab0aba95aebc343f3b1c086ad56f7f5f2342dd2067200f119c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Liga:listLigas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 8,  77 => 7,  59 => 5,  42 => 2,  11 => 1,);
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
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\"><a href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Champions</a></button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Liga</button><br>
\t<button style=\"margin: 10px; width: 70%;\" type=\"button\" class=\"btn btn-info\" href=\"http://localhost/practica1symfony_RCarreno_SCifuentes/web/app_dev.php/listTemporadas\">Copa del rey</button>
</div>
{% endblock %}
", "AppBundle:Liga:listLigas.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Liga/listLigas.html.twig");
    }
}
