<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
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
        $__internal_3a5da973cbee7069318bffdf333d505775dd0ce09392ce7cbbc855c2fac106a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5da973cbee7069318bffdf333d505775dd0ce09392ce7cbbc855c2fac106a2->enter($__internal_3a5da973cbee7069318bffdf333d505775dd0ce09392ce7cbbc855c2fac106a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_960593b7eebd7bec3a0eadf03eab6fdfbab0bd4caab65b0173d1984fc0ac7f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960593b7eebd7bec3a0eadf03eab6fdfbab0bd4caab65b0173d1984fc0ac7f10->enter($__internal_960593b7eebd7bec3a0eadf03eab6fdfbab0bd4caab65b0173d1984fc0ac7f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3a5da973cbee7069318bffdf333d505775dd0ce09392ce7cbbc855c2fac106a2->leave($__internal_3a5da973cbee7069318bffdf333d505775dd0ce09392ce7cbbc855c2fac106a2_prof);

        
        $__internal_960593b7eebd7bec3a0eadf03eab6fdfbab0bd4caab65b0173d1984fc0ac7f10->leave($__internal_960593b7eebd7bec3a0eadf03eab6fdfbab0bd4caab65b0173d1984fc0ac7f10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f53044959d19c69dffac3bceec7c7dd2b29b9a9737fa4f692af16c36d2ca3e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53044959d19c69dffac3bceec7c7dd2b29b9a9737fa4f692af16c36d2ca3e65->enter($__internal_f53044959d19c69dffac3bceec7c7dd2b29b9a9737fa4f692af16c36d2ca3e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3d09d2a44e652497b83e063959fc4d32d3ef58742297839b0438dd74d90e5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d09d2a44e652497b83e063959fc4d32d3ef58742297839b0438dd74d90e5e4->enter($__internal_a3d09d2a44e652497b83e063959fc4d32d3ef58742297839b0438dd74d90e5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3d09d2a44e652497b83e063959fc4d32d3ef58742297839b0438dd74d90e5e4->leave($__internal_a3d09d2a44e652497b83e063959fc4d32d3ef58742297839b0438dd74d90e5e4_prof);

        
        $__internal_f53044959d19c69dffac3bceec7c7dd2b29b9a9737fa4f692af16c36d2ca3e65->leave($__internal_f53044959d19c69dffac3bceec7c7dd2b29b9a9737fa4f692af16c36d2ca3e65_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_158b22cdd626938d0260050f785574a4ac36e1827a61e9c68eb858a7c66d208e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158b22cdd626938d0260050f785574a4ac36e1827a61e9c68eb858a7c66d208e->enter($__internal_158b22cdd626938d0260050f785574a4ac36e1827a61e9c68eb858a7c66d208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_075902c5267bcb6cc67bad7acf2106de17a5dfd3964370520679494c3eeb66a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075902c5267bcb6cc67bad7acf2106de17a5dfd3964370520679494c3eeb66a0->enter($__internal_075902c5267bcb6cc67bad7acf2106de17a5dfd3964370520679494c3eeb66a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_075902c5267bcb6cc67bad7acf2106de17a5dfd3964370520679494c3eeb66a0->leave($__internal_075902c5267bcb6cc67bad7acf2106de17a5dfd3964370520679494c3eeb66a0_prof);

        
        $__internal_158b22cdd626938d0260050f785574a4ac36e1827a61e9c68eb858a7c66d208e->leave($__internal_158b22cdd626938d0260050f785574a4ac36e1827a61e9c68eb858a7c66d208e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_25dde1343397ccd90e4d2462b40c7d3410a449df10b9734cd7e5b48e528569aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dde1343397ccd90e4d2462b40c7d3410a449df10b9734cd7e5b48e528569aa->enter($__internal_25dde1343397ccd90e4d2462b40c7d3410a449df10b9734cd7e5b48e528569aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bc08640543b1e55c7e8c6e7b690a7ca817a1abf13306346d134b0589e7f8ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc08640543b1e55c7e8c6e7b690a7ca817a1abf13306346d134b0589e7f8ff1->enter($__internal_3bc08640543b1e55c7e8c6e7b690a7ca817a1abf13306346d134b0589e7f8ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bc08640543b1e55c7e8c6e7b690a7ca817a1abf13306346d134b0589e7f8ff1->leave($__internal_3bc08640543b1e55c7e8c6e7b690a7ca817a1abf13306346d134b0589e7f8ff1_prof);

        
        $__internal_25dde1343397ccd90e4d2462b40c7d3410a449df10b9734cd7e5b48e528569aa->leave($__internal_25dde1343397ccd90e4d2462b40c7d3410a449df10b9734cd7e5b48e528569aa_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3aa8cfa57d4b670bce2ea2d1920370c632c5e5d0db76d3c37e9acde398685f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa8cfa57d4b670bce2ea2d1920370c632c5e5d0db76d3c37e9acde398685f47->enter($__internal_3aa8cfa57d4b670bce2ea2d1920370c632c5e5d0db76d3c37e9acde398685f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5446a791cbd7bad8f15b5e06b7dff1e721096d43fd913a0b8619869d0073d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5446a791cbd7bad8f15b5e06b7dff1e721096d43fd913a0b8619869d0073d2d->enter($__internal_c5446a791cbd7bad8f15b5e06b7dff1e721096d43fd913a0b8619869d0073d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5446a791cbd7bad8f15b5e06b7dff1e721096d43fd913a0b8619869d0073d2d->leave($__internal_c5446a791cbd7bad8f15b5e06b7dff1e721096d43fd913a0b8619869d0073d2d_prof);

        
        $__internal_3aa8cfa57d4b670bce2ea2d1920370c632c5e5d0db76d3c37e9acde398685f47->leave($__internal_3aa8cfa57d4b670bce2ea2d1920370c632c5e5d0db76d3c37e9acde398685f47_prof);

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
