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
<<<<<<< HEAD
        $__internal_efc6a03f3c5ccc3e1fc2321e948cd56f5affac1a0908e8341e4eaa88efd8d3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc6a03f3c5ccc3e1fc2321e948cd56f5affac1a0908e8341e4eaa88efd8d3d6->enter($__internal_efc6a03f3c5ccc3e1fc2321e948cd56f5affac1a0908e8341e4eaa88efd8d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c79199180ff144e3d32e7d286c7d797631b16700f366b07eb3ebdeca37d3c805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79199180ff144e3d32e7d286c7d797631b16700f366b07eb3ebdeca37d3c805->enter($__internal_c79199180ff144e3d32e7d286c7d797631b16700f366b07eb3ebdeca37d3c805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));
=======
        $__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189->enter($__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40->enter($__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

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
        
<<<<<<< HEAD
        $__internal_efc6a03f3c5ccc3e1fc2321e948cd56f5affac1a0908e8341e4eaa88efd8d3d6->leave($__internal_efc6a03f3c5ccc3e1fc2321e948cd56f5affac1a0908e8341e4eaa88efd8d3d6_prof);

        
        $__internal_c79199180ff144e3d32e7d286c7d797631b16700f366b07eb3ebdeca37d3c805->leave($__internal_c79199180ff144e3d32e7d286c7d797631b16700f366b07eb3ebdeca37d3c805_prof);
=======
        $__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189->leave($__internal_49808fc38229d2d792b0ecf4dae22a9d5b2bfa924c6a2e90b12feeeee4a9f189_prof);

        
        $__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40->leave($__internal_0ae14ec43e69fe0a22236518b3c2d083d3c0225fe95448f088303dd657b20f40_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_35c6ec3d28cb54f73cbc39e6dcc7892dc6b666ef4392b1b5fd3c6dc8cc7c1ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c6ec3d28cb54f73cbc39e6dcc7892dc6b666ef4392b1b5fd3c6dc8cc7c1ca6->enter($__internal_35c6ec3d28cb54f73cbc39e6dcc7892dc6b666ef4392b1b5fd3c6dc8cc7c1ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1cfb66cc5fe78cd0ba510d8eb7036500664ed276fa58ad5cdf27f5de8f9221e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cfb66cc5fe78cd0ba510d8eb7036500664ed276fa58ad5cdf27f5de8f9221e->enter($__internal_d1cfb66cc5fe78cd0ba510d8eb7036500664ed276fa58ad5cdf27f5de8f9221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1cfb66cc5fe78cd0ba510d8eb7036500664ed276fa58ad5cdf27f5de8f9221e->leave($__internal_d1cfb66cc5fe78cd0ba510d8eb7036500664ed276fa58ad5cdf27f5de8f9221e_prof);

        
        $__internal_35c6ec3d28cb54f73cbc39e6dcc7892dc6b666ef4392b1b5fd3c6dc8cc7c1ca6->leave($__internal_35c6ec3d28cb54f73cbc39e6dcc7892dc6b666ef4392b1b5fd3c6dc8cc7c1ca6_prof);
=======
        $__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9->enter($__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320->enter($__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320->leave($__internal_cd7fd5e5cce46989b1194cc321da923bd2b46e932035a1c8e44a38033a86d320_prof);

        
        $__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9->leave($__internal_0c8809fd5a34307c295d932aff98476b3050665ffcf37c85e21e1ff79e1e24c9_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c8ca2c41811a6848b2bed1c6717873862020149330088cdc4b81b363d9910ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ca2c41811a6848b2bed1c6717873862020149330088cdc4b81b363d9910ced->enter($__internal_c8ca2c41811a6848b2bed1c6717873862020149330088cdc4b81b363d9910ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23f9a826595d045430e3af7ee4ed5ab0cd9b44c7cbdabe43d926ae0c25d0f137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f9a826595d045430e3af7ee4ed5ab0cd9b44c7cbdabe43d926ae0c25d0f137->enter($__internal_23f9a826595d045430e3af7ee4ed5ab0cd9b44c7cbdabe43d926ae0c25d0f137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_23f9a826595d045430e3af7ee4ed5ab0cd9b44c7cbdabe43d926ae0c25d0f137->leave($__internal_23f9a826595d045430e3af7ee4ed5ab0cd9b44c7cbdabe43d926ae0c25d0f137_prof);

        
        $__internal_c8ca2c41811a6848b2bed1c6717873862020149330088cdc4b81b363d9910ced->leave($__internal_c8ca2c41811a6848b2bed1c6717873862020149330088cdc4b81b363d9910ced_prof);
=======
        $__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1->enter($__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31->enter($__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31->leave($__internal_81c0ec006a6f2b73a3771b3a26200e047fcf4a96e3979cb238a085e454ff5a31_prof);

        
        $__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1->leave($__internal_fa0d05ead4c2ae681efc6b070d5b270f74598ec1cc3a1687862e82a1ee012bf1_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_32544fd061abb0b2cfb55cf18e318755c4d9ee2e5416432ed966372cc4fb47f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32544fd061abb0b2cfb55cf18e318755c4d9ee2e5416432ed966372cc4fb47f4->enter($__internal_32544fd061abb0b2cfb55cf18e318755c4d9ee2e5416432ed966372cc4fb47f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c307fd35e521559ef6e61c592709794ab2cc275c14c691375f05f32b4988ff1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c307fd35e521559ef6e61c592709794ab2cc275c14c691375f05f32b4988ff1f->enter($__internal_c307fd35e521559ef6e61c592709794ab2cc275c14c691375f05f32b4988ff1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c307fd35e521559ef6e61c592709794ab2cc275c14c691375f05f32b4988ff1f->leave($__internal_c307fd35e521559ef6e61c592709794ab2cc275c14c691375f05f32b4988ff1f_prof);

        
        $__internal_32544fd061abb0b2cfb55cf18e318755c4d9ee2e5416432ed966372cc4fb47f4->leave($__internal_32544fd061abb0b2cfb55cf18e318755c4d9ee2e5416432ed966372cc4fb47f4_prof);
=======
        $__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674->enter($__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995->enter($__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995->leave($__internal_614a55e8a1e76c8328523d3d9d5049a6fad80fe7df22a6d839c4486e77d7e995_prof);

        
        $__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674->leave($__internal_96ae354f0fcf55490a12d1ffcb1452dbfc583298479f9e4db9649a4af0a83674_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_a143b1b9b9b5540ecafe11e002c2a5d283ae070762e1690555cd9a9cc3429fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a143b1b9b9b5540ecafe11e002c2a5d283ae070762e1690555cd9a9cc3429fd3->enter($__internal_a143b1b9b9b5540ecafe11e002c2a5d283ae070762e1690555cd9a9cc3429fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b129f139625471d753b6bab68fbbc8947c8e1e41592bedaf569010bb8d15dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b129f139625471d753b6bab68fbbc8947c8e1e41592bedaf569010bb8d15dc2->enter($__internal_9b129f139625471d753b6bab68fbbc8947c8e1e41592bedaf569010bb8d15dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b129f139625471d753b6bab68fbbc8947c8e1e41592bedaf569010bb8d15dc2->leave($__internal_9b129f139625471d753b6bab68fbbc8947c8e1e41592bedaf569010bb8d15dc2_prof);

        
        $__internal_a143b1b9b9b5540ecafe11e002c2a5d283ae070762e1690555cd9a9cc3429fd3->leave($__internal_a143b1b9b9b5540ecafe11e002c2a5d283ae070762e1690555cd9a9cc3429fd3_prof);
=======
        $__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371->enter($__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec->enter($__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec->leave($__internal_61ab07d8776eb1b3e53dd68b527c450b14189bc48737ca33c590f9a5de3fc4ec_prof);

        
        $__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371->leave($__internal_df55e40ac2094a7ebd50de67eaf7c22a33c5f5cf24201f3ef38f5d2d13615371_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

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
", "::base.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\app/Resources\\views/base.html.twig");
    }
}
