<?php

/* AppBundle:Partit:add_partit.html.twig */
class __TwigTemplate_abbfa4b00d3b97eb8c60a894010c4077a951d3b4ad7b1daac71d8aa35534b32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Partit:add_partit.html.twig", 1);
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
        $__internal_78fe8e9dd8ca17dc7cdeb069b2cb548955512490e5eac3a757d016d0c4359e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78fe8e9dd8ca17dc7cdeb069b2cb548955512490e5eac3a757d016d0c4359e6f->enter($__internal_78fe8e9dd8ca17dc7cdeb069b2cb548955512490e5eac3a757d016d0c4359e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:add_partit.html.twig"));

        $__internal_19607ece515ccccf9b84c61db936ee8c5de126c3428e4ab13d07ce304c2085e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19607ece515ccccf9b84c61db936ee8c5de126c3428e4ab13d07ce304c2085e4->enter($__internal_19607ece515ccccf9b84c61db936ee8c5de126c3428e4ab13d07ce304c2085e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partit:add_partit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fe8e9dd8ca17dc7cdeb069b2cb548955512490e5eac3a757d016d0c4359e6f->leave($__internal_78fe8e9dd8ca17dc7cdeb069b2cb548955512490e5eac3a757d016d0c4359e6f_prof);

        
        $__internal_19607ece515ccccf9b84c61db936ee8c5de126c3428e4ab13d07ce304c2085e4->leave($__internal_19607ece515ccccf9b84c61db936ee8c5de126c3428e4ab13d07ce304c2085e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_180d22a0f2d721f40f8da10c2d978b9bd08c4047d2cc40b39eae06a31c3a7547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180d22a0f2d721f40f8da10c2d978b9bd08c4047d2cc40b39eae06a31c3a7547->enter($__internal_180d22a0f2d721f40f8da10c2d978b9bd08c4047d2cc40b39eae06a31c3a7547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7beab054d524e2f6b1c7c51b33e7393b85e7c533f5b0611e936ecc95620c529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7beab054d524e2f6b1c7c51b33e7393b85e7c533f5b0611e936ecc95620c529->enter($__internal_b7beab054d524e2f6b1c7c51b33e7393b85e7c533f5b0611e936ecc95620c529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Partit:addPartit";
        
        $__internal_b7beab054d524e2f6b1c7c51b33e7393b85e7c533f5b0611e936ecc95620c529->leave($__internal_b7beab054d524e2f6b1c7c51b33e7393b85e7c533f5b0611e936ecc95620c529_prof);

        
        $__internal_180d22a0f2d721f40f8da10c2d978b9bd08c4047d2cc40b39eae06a31c3a7547->leave($__internal_180d22a0f2d721f40f8da10c2d978b9bd08c4047d2cc40b39eae06a31c3a7547_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a45aa8b8e9aa8a3e96a9509d91e02bcb062f551130ac059526346aa960d15522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45aa8b8e9aa8a3e96a9509d91e02bcb062f551130ac059526346aa960d15522->enter($__internal_a45aa8b8e9aa8a3e96a9509d91e02bcb062f551130ac059526346aa960d15522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76db4aa7d66c3bce451d89ba180f7ef2be5fa5fc591f8cd80c9818c2614d802d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76db4aa7d66c3bce451d89ba180f7ef2be5fa5fc591f8cd80c9818c2614d802d->enter($__internal_76db4aa7d66c3bce451d89ba180f7ef2be5fa5fc591f8cd80c9818c2614d802d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Afegeix paartit</h1>

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_76db4aa7d66c3bce451d89ba180f7ef2be5fa5fc591f8cd80c9818c2614d802d->leave($__internal_76db4aa7d66c3bce451d89ba180f7ef2be5fa5fc591f8cd80c9818c2614d802d_prof);

        
        $__internal_a45aa8b8e9aa8a3e96a9509d91e02bcb062f551130ac059526346aa960d15522->leave($__internal_a45aa8b8e9aa8a3e96a9509d91e02bcb062f551130ac059526346aa960d15522_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partit:add_partit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Partit:addPartit{% endblock %}

{% block body %}
<h1>Afegeix paartit</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
{% endblock %}
", "AppBundle:Partit:add_partit.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Partit/add_partit.html.twig");
    }
}
