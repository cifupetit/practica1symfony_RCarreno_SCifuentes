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
<<<<<<< HEAD
        $__internal_342ed6bbf6394df1e1bd7cc10258a0f3ed59e6a4ef6e94715d3667506ad97a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342ed6bbf6394df1e1bd7cc10258a0f3ed59e6a4ef6e94715d3667506ad97a4f->enter($__internal_342ed6bbf6394df1e1bd7cc10258a0f3ed59e6a4ef6e94715d3667506ad97a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_220efc3baf1049287b0847a946aad4cb2363e16ba5a44e8f9cd930fc2c281418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220efc3baf1049287b0847a946aad4cb2363e16ba5a44e8f9cd930fc2c281418->enter($__internal_220efc3baf1049287b0847a946aad4cb2363e16ba5a44e8f9cd930fc2c281418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
=======
        $__internal_2ce9c21641b738f8c6f7dedbd32c4c7127937b7bdeca1e0bc79a5ed9f1b96023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce9c21641b738f8c6f7dedbd32c4c7127937b7bdeca1e0bc79a5ed9f1b96023->enter($__internal_2ce9c21641b738f8c6f7dedbd32c4c7127937b7bdeca1e0bc79a5ed9f1b96023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6633611406546c72c91539888d2cb90919472eba65cb3ec1613a2bb2ab44a972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6633611406546c72c91539888d2cb90919472eba65cb3ec1613a2bb2ab44a972->enter($__internal_6633611406546c72c91539888d2cb90919472eba65cb3ec1613a2bb2ab44a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

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
        
<<<<<<< HEAD
        $__internal_342ed6bbf6394df1e1bd7cc10258a0f3ed59e6a4ef6e94715d3667506ad97a4f->leave($__internal_342ed6bbf6394df1e1bd7cc10258a0f3ed59e6a4ef6e94715d3667506ad97a4f_prof);

        
        $__internal_220efc3baf1049287b0847a946aad4cb2363e16ba5a44e8f9cd930fc2c281418->leave($__internal_220efc3baf1049287b0847a946aad4cb2363e16ba5a44e8f9cd930fc2c281418_prof);
=======
        $__internal_2ce9c21641b738f8c6f7dedbd32c4c7127937b7bdeca1e0bc79a5ed9f1b96023->leave($__internal_2ce9c21641b738f8c6f7dedbd32c4c7127937b7bdeca1e0bc79a5ed9f1b96023_prof);

        
        $__internal_6633611406546c72c91539888d2cb90919472eba65cb3ec1613a2bb2ab44a972->leave($__internal_6633611406546c72c91539888d2cb90919472eba65cb3ec1613a2bb2ab44a972_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_8566e2c9c5e425c1125cd0e5bb7d9dc7d3049a3a4248d239c11ebffef4d715e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8566e2c9c5e425c1125cd0e5bb7d9dc7d3049a3a4248d239c11ebffef4d715e5->enter($__internal_8566e2c9c5e425c1125cd0e5bb7d9dc7d3049a3a4248d239c11ebffef4d715e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deb2aaa8c7009b927c992ea4e6c244494f1fa1c0a970e3932dcc7df30c83e9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb2aaa8c7009b927c992ea4e6c244494f1fa1c0a970e3932dcc7df30c83e9f2->enter($__internal_deb2aaa8c7009b927c992ea4e6c244494f1fa1c0a970e3932dcc7df30c83e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_deb2aaa8c7009b927c992ea4e6c244494f1fa1c0a970e3932dcc7df30c83e9f2->leave($__internal_deb2aaa8c7009b927c992ea4e6c244494f1fa1c0a970e3932dcc7df30c83e9f2_prof);

        
        $__internal_8566e2c9c5e425c1125cd0e5bb7d9dc7d3049a3a4248d239c11ebffef4d715e5->leave($__internal_8566e2c9c5e425c1125cd0e5bb7d9dc7d3049a3a4248d239c11ebffef4d715e5_prof);
=======
        $__internal_fd36f7afd0bd15335417300d4d979df1372fa28ec5a48b708f94ec4974f3ebf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd36f7afd0bd15335417300d4d979df1372fa28ec5a48b708f94ec4974f3ebf3->enter($__internal_fd36f7afd0bd15335417300d4d979df1372fa28ec5a48b708f94ec4974f3ebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_248bae4001204588f698d9ea809b72e9d12cb919fc953a2d70ba0aace88c3fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248bae4001204588f698d9ea809b72e9d12cb919fc953a2d70ba0aace88c3fb0->enter($__internal_248bae4001204588f698d9ea809b72e9d12cb919fc953a2d70ba0aace88c3fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_248bae4001204588f698d9ea809b72e9d12cb919fc953a2d70ba0aace88c3fb0->leave($__internal_248bae4001204588f698d9ea809b72e9d12cb919fc953a2d70ba0aace88c3fb0_prof);

        
        $__internal_fd36f7afd0bd15335417300d4d979df1372fa28ec5a48b708f94ec4974f3ebf3->leave($__internal_fd36f7afd0bd15335417300d4d979df1372fa28ec5a48b708f94ec4974f3ebf3_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ab6a71a890511b0618da761a9961d89a99a6b0f5631023f1544379d2cdc671f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6a71a890511b0618da761a9961d89a99a6b0f5631023f1544379d2cdc671f4->enter($__internal_ab6a71a890511b0618da761a9961d89a99a6b0f5631023f1544379d2cdc671f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a783b65a042d3b56b51071df35abc8ee6d29673d3d634fe7be966979ba4cb4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a783b65a042d3b56b51071df35abc8ee6d29673d3d634fe7be966979ba4cb4ae->enter($__internal_a783b65a042d3b56b51071df35abc8ee6d29673d3d634fe7be966979ba4cb4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a783b65a042d3b56b51071df35abc8ee6d29673d3d634fe7be966979ba4cb4ae->leave($__internal_a783b65a042d3b56b51071df35abc8ee6d29673d3d634fe7be966979ba4cb4ae_prof);

        
        $__internal_ab6a71a890511b0618da761a9961d89a99a6b0f5631023f1544379d2cdc671f4->leave($__internal_ab6a71a890511b0618da761a9961d89a99a6b0f5631023f1544379d2cdc671f4_prof);
=======
        $__internal_cb839e0e0b11850e2709473c7db2421261fdfc654477febf0d20a62653b2def6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb839e0e0b11850e2709473c7db2421261fdfc654477febf0d20a62653b2def6->enter($__internal_cb839e0e0b11850e2709473c7db2421261fdfc654477febf0d20a62653b2def6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aad7bbe9c3e87c0745ea901d389368389a69ecd064d6072a6b7e5fd502989deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad7bbe9c3e87c0745ea901d389368389a69ecd064d6072a6b7e5fd502989deb->enter($__internal_aad7bbe9c3e87c0745ea901d389368389a69ecd064d6072a6b7e5fd502989deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_aad7bbe9c3e87c0745ea901d389368389a69ecd064d6072a6b7e5fd502989deb->leave($__internal_aad7bbe9c3e87c0745ea901d389368389a69ecd064d6072a6b7e5fd502989deb_prof);

        
        $__internal_cb839e0e0b11850e2709473c7db2421261fdfc654477febf0d20a62653b2def6->leave($__internal_cb839e0e0b11850e2709473c7db2421261fdfc654477febf0d20a62653b2def6_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_03be05611b576d872714a39c1eb8cf0b24c41b9f25f177c001f1ed082019a589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03be05611b576d872714a39c1eb8cf0b24c41b9f25f177c001f1ed082019a589->enter($__internal_03be05611b576d872714a39c1eb8cf0b24c41b9f25f177c001f1ed082019a589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d3c96f895c278469a0da9a958ddbdf834b547a2b3c0d14a51169427e7a72cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3c96f895c278469a0da9a958ddbdf834b547a2b3c0d14a51169427e7a72cba->enter($__internal_0d3c96f895c278469a0da9a958ddbdf834b547a2b3c0d14a51169427e7a72cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d3c96f895c278469a0da9a958ddbdf834b547a2b3c0d14a51169427e7a72cba->leave($__internal_0d3c96f895c278469a0da9a958ddbdf834b547a2b3c0d14a51169427e7a72cba_prof);

        
        $__internal_03be05611b576d872714a39c1eb8cf0b24c41b9f25f177c001f1ed082019a589->leave($__internal_03be05611b576d872714a39c1eb8cf0b24c41b9f25f177c001f1ed082019a589_prof);
=======
        $__internal_9452fee9ffcb9cc940aade857a338c8d21cbfcee892038f04ffd1e4e920e6e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9452fee9ffcb9cc940aade857a338c8d21cbfcee892038f04ffd1e4e920e6e6c->enter($__internal_9452fee9ffcb9cc940aade857a338c8d21cbfcee892038f04ffd1e4e920e6e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19a1f1a84b451c8c55f95c974063a654112c64071845ef57430067608e4f24f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a1f1a84b451c8c55f95c974063a654112c64071845ef57430067608e4f24f1->enter($__internal_19a1f1a84b451c8c55f95c974063a654112c64071845ef57430067608e4f24f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19a1f1a84b451c8c55f95c974063a654112c64071845ef57430067608e4f24f1->leave($__internal_19a1f1a84b451c8c55f95c974063a654112c64071845ef57430067608e4f24f1_prof);

        
        $__internal_9452fee9ffcb9cc940aade857a338c8d21cbfcee892038f04ffd1e4e920e6e6c->leave($__internal_9452fee9ffcb9cc940aade857a338c8d21cbfcee892038f04ffd1e4e920e6e6c_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

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
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
