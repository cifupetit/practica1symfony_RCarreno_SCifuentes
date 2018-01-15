<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
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
        $__internal_52715a93f19f07ea8b6e27c000e851765baf121c175812ab561a4fbedc5db95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52715a93f19f07ea8b6e27c000e851765baf121c175812ab561a4fbedc5db95b->enter($__internal_52715a93f19f07ea8b6e27c000e851765baf121c175812ab561a4fbedc5db95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_84082ca6b32733d4115c068326ac630dbd0354ae84385c21348ecf24db8b2cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84082ca6b32733d4115c068326ac630dbd0354ae84385c21348ecf24db8b2cf9->enter($__internal_84082ca6b32733d4115c068326ac630dbd0354ae84385c21348ecf24db8b2cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_52715a93f19f07ea8b6e27c000e851765baf121c175812ab561a4fbedc5db95b->leave($__internal_52715a93f19f07ea8b6e27c000e851765baf121c175812ab561a4fbedc5db95b_prof);

        
        $__internal_84082ca6b32733d4115c068326ac630dbd0354ae84385c21348ecf24db8b2cf9->leave($__internal_84082ca6b32733d4115c068326ac630dbd0354ae84385c21348ecf24db8b2cf9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc1f61f36ec6ad805302c0edefe68386c15277bd802f0211816c42b60ad59c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc1f61f36ec6ad805302c0edefe68386c15277bd802f0211816c42b60ad59c0->enter($__internal_ebc1f61f36ec6ad805302c0edefe68386c15277bd802f0211816c42b60ad59c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb666fb1172315df54ae4ac6a2d1d836d412a7e9035bdc2fb3feb5cd602e3680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb666fb1172315df54ae4ac6a2d1d836d412a7e9035bdc2fb3feb5cd602e3680->enter($__internal_bb666fb1172315df54ae4ac6a2d1d836d412a7e9035bdc2fb3feb5cd602e3680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bb666fb1172315df54ae4ac6a2d1d836d412a7e9035bdc2fb3feb5cd602e3680->leave($__internal_bb666fb1172315df54ae4ac6a2d1d836d412a7e9035bdc2fb3feb5cd602e3680_prof);

        
        $__internal_ebc1f61f36ec6ad805302c0edefe68386c15277bd802f0211816c42b60ad59c0->leave($__internal_ebc1f61f36ec6ad805302c0edefe68386c15277bd802f0211816c42b60ad59c0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a2c4e2070fb61bf1bb5c008db3ae7026a5643c74798bfea361a72ba2a1c70dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2c4e2070fb61bf1bb5c008db3ae7026a5643c74798bfea361a72ba2a1c70dc->enter($__internal_5a2c4e2070fb61bf1bb5c008db3ae7026a5643c74798bfea361a72ba2a1c70dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_463b8b6d520ddaef1d078d7eec1088567422616b152b2b517886b3c39eda6a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463b8b6d520ddaef1d078d7eec1088567422616b152b2b517886b3c39eda6a87->enter($__internal_463b8b6d520ddaef1d078d7eec1088567422616b152b2b517886b3c39eda6a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_463b8b6d520ddaef1d078d7eec1088567422616b152b2b517886b3c39eda6a87->leave($__internal_463b8b6d520ddaef1d078d7eec1088567422616b152b2b517886b3c39eda6a87_prof);

        
        $__internal_5a2c4e2070fb61bf1bb5c008db3ae7026a5643c74798bfea361a72ba2a1c70dc->leave($__internal_5a2c4e2070fb61bf1bb5c008db3ae7026a5643c74798bfea361a72ba2a1c70dc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f504963c828b67ad6867b04282b0068c9d5604ad86dcdbc3597a6bf3b9d4e8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f504963c828b67ad6867b04282b0068c9d5604ad86dcdbc3597a6bf3b9d4e8a3->enter($__internal_f504963c828b67ad6867b04282b0068c9d5604ad86dcdbc3597a6bf3b9d4e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f929043fac2514832c1c508b7eb0e105989d8ca4278fabc867ea47db00186583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f929043fac2514832c1c508b7eb0e105989d8ca4278fabc867ea47db00186583->enter($__internal_f929043fac2514832c1c508b7eb0e105989d8ca4278fabc867ea47db00186583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f929043fac2514832c1c508b7eb0e105989d8ca4278fabc867ea47db00186583->leave($__internal_f929043fac2514832c1c508b7eb0e105989d8ca4278fabc867ea47db00186583_prof);

        
        $__internal_f504963c828b67ad6867b04282b0068c9d5604ad86dcdbc3597a6bf3b9d4e8a3->leave($__internal_f504963c828b67ad6867b04282b0068c9d5604ad86dcdbc3597a6bf3b9d4e8a3_prof);

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
