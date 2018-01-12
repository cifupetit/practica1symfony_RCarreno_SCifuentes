<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9137483bbae54b123cdc55e0bbe55e82ec18e015f724dad4bb1a48faf550fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9137483bbae54b123cdc55e0bbe55e82ec18e015f724dad4bb1a48faf550fab->enter($__internal_b9137483bbae54b123cdc55e0bbe55e82ec18e015f724dad4bb1a48faf550fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_20f5538fb123b7648b1fe79638249a34cc562577a3fb6db3ee3e4c159de85fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f5538fb123b7648b1fe79638249a34cc562577a3fb6db3ee3e4c159de85fd9->enter($__internal_20f5538fb123b7648b1fe79638249a34cc562577a3fb6db3ee3e4c159de85fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b9137483bbae54b123cdc55e0bbe55e82ec18e015f724dad4bb1a48faf550fab->leave($__internal_b9137483bbae54b123cdc55e0bbe55e82ec18e015f724dad4bb1a48faf550fab_prof);

        
        $__internal_20f5538fb123b7648b1fe79638249a34cc562577a3fb6db3ee3e4c159de85fd9->leave($__internal_20f5538fb123b7648b1fe79638249a34cc562577a3fb6db3ee3e4c159de85fd9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_489129e3580785657ff3013359397bff55a5f8cee64b01deed50e0fbf0b78a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489129e3580785657ff3013359397bff55a5f8cee64b01deed50e0fbf0b78a0d->enter($__internal_489129e3580785657ff3013359397bff55a5f8cee64b01deed50e0fbf0b78a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a5d954c3f9a8f5afdb6ccfb55b0899b46cac8b019d82913d6a53cdd338b787b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5d954c3f9a8f5afdb6ccfb55b0899b46cac8b019d82913d6a53cdd338b787b->enter($__internal_9a5d954c3f9a8f5afdb6ccfb55b0899b46cac8b019d82913d6a53cdd338b787b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9a5d954c3f9a8f5afdb6ccfb55b0899b46cac8b019d82913d6a53cdd338b787b->leave($__internal_9a5d954c3f9a8f5afdb6ccfb55b0899b46cac8b019d82913d6a53cdd338b787b_prof);

        
        $__internal_489129e3580785657ff3013359397bff55a5f8cee64b01deed50e0fbf0b78a0d->leave($__internal_489129e3580785657ff3013359397bff55a5f8cee64b01deed50e0fbf0b78a0d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_170b035bcb89d1e20f0c6307a3876dd4edd455de36b1d11adc2d6f22ed418b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170b035bcb89d1e20f0c6307a3876dd4edd455de36b1d11adc2d6f22ed418b3b->enter($__internal_170b035bcb89d1e20f0c6307a3876dd4edd455de36b1d11adc2d6f22ed418b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8119b9a04d07474064007a54f88fb0acdb44c5a1783893b18bf82d8da625a3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8119b9a04d07474064007a54f88fb0acdb44c5a1783893b18bf82d8da625a3fe->enter($__internal_8119b9a04d07474064007a54f88fb0acdb44c5a1783893b18bf82d8da625a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8119b9a04d07474064007a54f88fb0acdb44c5a1783893b18bf82d8da625a3fe->leave($__internal_8119b9a04d07474064007a54f88fb0acdb44c5a1783893b18bf82d8da625a3fe_prof);

        
        $__internal_170b035bcb89d1e20f0c6307a3876dd4edd455de36b1d11adc2d6f22ed418b3b->leave($__internal_170b035bcb89d1e20f0c6307a3876dd4edd455de36b1d11adc2d6f22ed418b3b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_187345b957aa56172f05a35e3ba07c27fcb74c15167b3a03509350012acc05b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187345b957aa56172f05a35e3ba07c27fcb74c15167b3a03509350012acc05b3->enter($__internal_187345b957aa56172f05a35e3ba07c27fcb74c15167b3a03509350012acc05b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2eab430d88782ebbc956490a04c44d41e7966e856454069bc80dc61f6b4ba95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2eab430d88782ebbc956490a04c44d41e7966e856454069bc80dc61f6b4ba95->enter($__internal_e2eab430d88782ebbc956490a04c44d41e7966e856454069bc80dc61f6b4ba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2eab430d88782ebbc956490a04c44d41e7966e856454069bc80dc61f6b4ba95->leave($__internal_e2eab430d88782ebbc956490a04c44d41e7966e856454069bc80dc61f6b4ba95_prof);

        
        $__internal_187345b957aa56172f05a35e3ba07c27fcb74c15167b3a03509350012acc05b3->leave($__internal_187345b957aa56172f05a35e3ba07c27fcb74c15167b3a03509350012acc05b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
