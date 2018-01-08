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
        $__internal_21355f237ef779149e8b808c7844fecff1ff2eb24c14dcd1a1c37a82464b8a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21355f237ef779149e8b808c7844fecff1ff2eb24c14dcd1a1c37a82464b8a11->enter($__internal_21355f237ef779149e8b808c7844fecff1ff2eb24c14dcd1a1c37a82464b8a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_972acffd6a6d0a3cfb7f800ffdf95b78f502f3de9772bf405519a43e774926e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972acffd6a6d0a3cfb7f800ffdf95b78f502f3de9772bf405519a43e774926e1->enter($__internal_972acffd6a6d0a3cfb7f800ffdf95b78f502f3de9772bf405519a43e774926e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_21355f237ef779149e8b808c7844fecff1ff2eb24c14dcd1a1c37a82464b8a11->leave($__internal_21355f237ef779149e8b808c7844fecff1ff2eb24c14dcd1a1c37a82464b8a11_prof);

        
        $__internal_972acffd6a6d0a3cfb7f800ffdf95b78f502f3de9772bf405519a43e774926e1->leave($__internal_972acffd6a6d0a3cfb7f800ffdf95b78f502f3de9772bf405519a43e774926e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c774590a3fdd9027c8ff3d9ecf7026e3447aee2de46eed4d3f8d15e7abb5960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c774590a3fdd9027c8ff3d9ecf7026e3447aee2de46eed4d3f8d15e7abb5960->enter($__internal_2c774590a3fdd9027c8ff3d9ecf7026e3447aee2de46eed4d3f8d15e7abb5960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47bcc53f60e24f2e4bcab578d09cf2b02d8f4e43f0fd0a1e5732ddb2aee647b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bcc53f60e24f2e4bcab578d09cf2b02d8f4e43f0fd0a1e5732ddb2aee647b9->enter($__internal_47bcc53f60e24f2e4bcab578d09cf2b02d8f4e43f0fd0a1e5732ddb2aee647b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_47bcc53f60e24f2e4bcab578d09cf2b02d8f4e43f0fd0a1e5732ddb2aee647b9->leave($__internal_47bcc53f60e24f2e4bcab578d09cf2b02d8f4e43f0fd0a1e5732ddb2aee647b9_prof);

        
        $__internal_2c774590a3fdd9027c8ff3d9ecf7026e3447aee2de46eed4d3f8d15e7abb5960->leave($__internal_2c774590a3fdd9027c8ff3d9ecf7026e3447aee2de46eed4d3f8d15e7abb5960_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_162710c76d3758ba0f08fc49a678a67926a083976d0433793ee55257dda76921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162710c76d3758ba0f08fc49a678a67926a083976d0433793ee55257dda76921->enter($__internal_162710c76d3758ba0f08fc49a678a67926a083976d0433793ee55257dda76921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d434e0e9fd045ff1af498a369153b05f8eb49adfe6ecae759514d2073920cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d434e0e9fd045ff1af498a369153b05f8eb49adfe6ecae759514d2073920cfb->enter($__internal_1d434e0e9fd045ff1af498a369153b05f8eb49adfe6ecae759514d2073920cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1d434e0e9fd045ff1af498a369153b05f8eb49adfe6ecae759514d2073920cfb->leave($__internal_1d434e0e9fd045ff1af498a369153b05f8eb49adfe6ecae759514d2073920cfb_prof);

        
        $__internal_162710c76d3758ba0f08fc49a678a67926a083976d0433793ee55257dda76921->leave($__internal_162710c76d3758ba0f08fc49a678a67926a083976d0433793ee55257dda76921_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b75f718589d908802a4e6f4b5942c29d239935f9f573b34e755aa0856aaa2dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75f718589d908802a4e6f4b5942c29d239935f9f573b34e755aa0856aaa2dea->enter($__internal_b75f718589d908802a4e6f4b5942c29d239935f9f573b34e755aa0856aaa2dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2285e89d81c231edec260413fd1dd3f3df0bd55099f0e8b9aae738ac7f150d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2285e89d81c231edec260413fd1dd3f3df0bd55099f0e8b9aae738ac7f150d85->enter($__internal_2285e89d81c231edec260413fd1dd3f3df0bd55099f0e8b9aae738ac7f150d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2285e89d81c231edec260413fd1dd3f3df0bd55099f0e8b9aae738ac7f150d85->leave($__internal_2285e89d81c231edec260413fd1dd3f3df0bd55099f0e8b9aae738ac7f150d85_prof);

        
        $__internal_b75f718589d908802a4e6f4b5942c29d239935f9f573b34e755aa0856aaa2dea->leave($__internal_b75f718589d908802a4e6f4b5942c29d239935f9f573b34e755aa0856aaa2dea_prof);

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
