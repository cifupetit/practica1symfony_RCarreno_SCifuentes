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
        $__internal_f2929edaf4e72e7b3725faa5eaae03af492e2db98389e507b6f26ab58b16c55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2929edaf4e72e7b3725faa5eaae03af492e2db98389e507b6f26ab58b16c55e->enter($__internal_f2929edaf4e72e7b3725faa5eaae03af492e2db98389e507b6f26ab58b16c55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c79c9dd3aa974c17a6774abed37482f6dbabc10662ea6e291943927f94ba4123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79c9dd3aa974c17a6774abed37482f6dbabc10662ea6e291943927f94ba4123->enter($__internal_c79c9dd3aa974c17a6774abed37482f6dbabc10662ea6e291943927f94ba4123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f2929edaf4e72e7b3725faa5eaae03af492e2db98389e507b6f26ab58b16c55e->leave($__internal_f2929edaf4e72e7b3725faa5eaae03af492e2db98389e507b6f26ab58b16c55e_prof);

        
        $__internal_c79c9dd3aa974c17a6774abed37482f6dbabc10662ea6e291943927f94ba4123->leave($__internal_c79c9dd3aa974c17a6774abed37482f6dbabc10662ea6e291943927f94ba4123_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_734526c0cf1bfd975e8a544d07320434d99cc129a9b4938d853a3c75a2cafca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734526c0cf1bfd975e8a544d07320434d99cc129a9b4938d853a3c75a2cafca7->enter($__internal_734526c0cf1bfd975e8a544d07320434d99cc129a9b4938d853a3c75a2cafca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70b5db52ffc76e6845c4844af9d1f646a320d688fd6beaa3d4e0cb2161d5c649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b5db52ffc76e6845c4844af9d1f646a320d688fd6beaa3d4e0cb2161d5c649->enter($__internal_70b5db52ffc76e6845c4844af9d1f646a320d688fd6beaa3d4e0cb2161d5c649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_70b5db52ffc76e6845c4844af9d1f646a320d688fd6beaa3d4e0cb2161d5c649->leave($__internal_70b5db52ffc76e6845c4844af9d1f646a320d688fd6beaa3d4e0cb2161d5c649_prof);

        
        $__internal_734526c0cf1bfd975e8a544d07320434d99cc129a9b4938d853a3c75a2cafca7->leave($__internal_734526c0cf1bfd975e8a544d07320434d99cc129a9b4938d853a3c75a2cafca7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41bb16ba34250b77db8f60fdf29d0003c6b3b020f2fda6b8799f51f36cbe572d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bb16ba34250b77db8f60fdf29d0003c6b3b020f2fda6b8799f51f36cbe572d->enter($__internal_41bb16ba34250b77db8f60fdf29d0003c6b3b020f2fda6b8799f51f36cbe572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5868051184895bb8d84e13084c71a5c746e008fa844b6526e51d247d2bfe11f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5868051184895bb8d84e13084c71a5c746e008fa844b6526e51d247d2bfe11f6->enter($__internal_5868051184895bb8d84e13084c71a5c746e008fa844b6526e51d247d2bfe11f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5868051184895bb8d84e13084c71a5c746e008fa844b6526e51d247d2bfe11f6->leave($__internal_5868051184895bb8d84e13084c71a5c746e008fa844b6526e51d247d2bfe11f6_prof);

        
        $__internal_41bb16ba34250b77db8f60fdf29d0003c6b3b020f2fda6b8799f51f36cbe572d->leave($__internal_41bb16ba34250b77db8f60fdf29d0003c6b3b020f2fda6b8799f51f36cbe572d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13f00746deefa688f369c6dff936c53e4de4f44c375ec5010426e02e4b85705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13f00746deefa688f369c6dff936c53e4de4f44c375ec5010426e02e4b85705->enter($__internal_f13f00746deefa688f369c6dff936c53e4de4f44c375ec5010426e02e4b85705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b34f326ee4493647634ab41730b4ff71c730fb18756a9d8c0ca8a7eba0af9848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34f326ee4493647634ab41730b4ff71c730fb18756a9d8c0ca8a7eba0af9848->enter($__internal_b34f326ee4493647634ab41730b4ff71c730fb18756a9d8c0ca8a7eba0af9848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b34f326ee4493647634ab41730b4ff71c730fb18756a9d8c0ca8a7eba0af9848->leave($__internal_b34f326ee4493647634ab41730b4ff71c730fb18756a9d8c0ca8a7eba0af9848_prof);

        
        $__internal_f13f00746deefa688f369c6dff936c53e4de4f44c375ec5010426e02e4b85705->leave($__internal_f13f00746deefa688f369c6dff936c53e4de4f44c375ec5010426e02e4b85705_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c09c23a826dd2b7894974160d1afd04400c8e683a27bff353ab2bce78f2bd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c09c23a826dd2b7894974160d1afd04400c8e683a27bff353ab2bce78f2bd8c->enter($__internal_4c09c23a826dd2b7894974160d1afd04400c8e683a27bff353ab2bce78f2bd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a78fbfe43fde668038ab891ec1502e7316721d4d6f55a66cbcdb8bf181695e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78fbfe43fde668038ab891ec1502e7316721d4d6f55a66cbcdb8bf181695e86->enter($__internal_a78fbfe43fde668038ab891ec1502e7316721d4d6f55a66cbcdb8bf181695e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a78fbfe43fde668038ab891ec1502e7316721d4d6f55a66cbcdb8bf181695e86->leave($__internal_a78fbfe43fde668038ab891ec1502e7316721d4d6f55a66cbcdb8bf181695e86_prof);

        
        $__internal_4c09c23a826dd2b7894974160d1afd04400c8e683a27bff353ab2bce78f2bd8c->leave($__internal_4c09c23a826dd2b7894974160d1afd04400c8e683a27bff353ab2bce78f2bd8c_prof);

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
