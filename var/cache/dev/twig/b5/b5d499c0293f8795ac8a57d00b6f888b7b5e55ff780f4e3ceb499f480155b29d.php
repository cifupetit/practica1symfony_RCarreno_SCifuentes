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
        $__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189->enter($__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40->enter($__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189->leave($__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189_prof);

        
        $__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40->leave($__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9->enter($__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320->enter($__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320->leave($__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320_prof);

        
        $__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9->leave($__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1->enter($__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31->enter($__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31->leave($__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31_prof);

        
        $__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1->leave($__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674->enter($__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995->enter($__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995->leave($__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995_prof);

        
        $__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674->leave($__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371->enter($__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec->enter($__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec->leave($__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec_prof);

        
        $__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371->leave($__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371_prof);

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
