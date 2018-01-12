<?php

/* AppBundle:Equip:llistar_tot_equip.html.twig */
class __TwigTemplate_c0992230121d378b06fe411846bf81c86de964fcaefa2e8a148977a3bc014b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Equip:llistar_tot_equip.html.twig", 1);
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
        $__internal_1fbc1b8e3b3a3c3399c686c73af4f34f7478e328c03fbd248305e9e259ad6f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbc1b8e3b3a3c3399c686c73af4f34f7478e328c03fbd248305e9e259ad6f97->enter($__internal_1fbc1b8e3b3a3c3399c686c73af4f34f7478e328c03fbd248305e9e259ad6f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Equip:llistar_tot_equip.html.twig"));

        $__internal_d1fdcc31a79c1be0b7028710c45aefc34bd48d8d4bd19cb595342f3ac5c748b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fdcc31a79c1be0b7028710c45aefc34bd48d8d4bd19cb595342f3ac5c748b6->enter($__internal_d1fdcc31a79c1be0b7028710c45aefc34bd48d8d4bd19cb595342f3ac5c748b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Equip:llistar_tot_equip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fbc1b8e3b3a3c3399c686c73af4f34f7478e328c03fbd248305e9e259ad6f97->leave($__internal_1fbc1b8e3b3a3c3399c686c73af4f34f7478e328c03fbd248305e9e259ad6f97_prof);

        
        $__internal_d1fdcc31a79c1be0b7028710c45aefc34bd48d8d4bd19cb595342f3ac5c748b6->leave($__internal_d1fdcc31a79c1be0b7028710c45aefc34bd48d8d4bd19cb595342f3ac5c748b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c86e60a6ad3128786b1d9372edcf95724ed260d249e5eeff8ce839eee58d54c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86e60a6ad3128786b1d9372edcf95724ed260d249e5eeff8ce839eee58d54c9->enter($__internal_c86e60a6ad3128786b1d9372edcf95724ed260d249e5eeff8ce839eee58d54c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b821ee8499ef12dd137e0cedaa762607c219b4a82ea97731d4dbbee20925372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b821ee8499ef12dd137e0cedaa762607c219b4a82ea97731d4dbbee20925372->enter($__internal_0b821ee8499ef12dd137e0cedaa762607c219b4a82ea97731d4dbbee20925372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Equip:llistarTotEquip";
        
        $__internal_0b821ee8499ef12dd137e0cedaa762607c219b4a82ea97731d4dbbee20925372->leave($__internal_0b821ee8499ef12dd137e0cedaa762607c219b4a82ea97731d4dbbee20925372_prof);

        
        $__internal_c86e60a6ad3128786b1d9372edcf95724ed260d249e5eeff8ce839eee58d54c9->leave($__internal_c86e60a6ad3128786b1d9372edcf95724ed260d249e5eeff8ce839eee58d54c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b08ea5d85c94dc40b91647e80794b4450f78cd9ea657e9ae5a6089b84be62e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08ea5d85c94dc40b91647e80794b4450f78cd9ea657e9ae5a6089b84be62e20->enter($__internal_b08ea5d85c94dc40b91647e80794b4450f78cd9ea657e9ae5a6089b84be62e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aae0f1563564cc648c9a157ef7416c2b573759b28d5fd1d8eba3239fd9ca1bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae0f1563564cc648c9a157ef7416c2b573759b28d5fd1d8eba3239fd9ca1bd7->enter($__internal_aae0f1563564cc648c9a157ef7416c2b573759b28d5fd1d8eba3239fd9ca1bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Buscar partits dun equip</h1>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<br>
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<br>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<br>
<br>
";
        
        $__internal_aae0f1563564cc648c9a157ef7416c2b573759b28d5fd1d8eba3239fd9ca1bd7->leave($__internal_aae0f1563564cc648c9a157ef7416c2b573759b28d5fd1d8eba3239fd9ca1bd7_prof);

        
        $__internal_b08ea5d85c94dc40b91647e80794b4450f78cd9ea657e9ae5a6089b84be62e20->leave($__internal_b08ea5d85c94dc40b91647e80794b4450f78cd9ea657e9ae5a6089b84be62e20_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Equip:llistar_tot_equip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Equip:llistarTotEquip{% endblock %}

{% block body %}
<h1>Buscar partits dun equip</h1>
{{    form_start(form)    }}
<br>
{{    form_widget(form)    }}
<br>
{{    form_end(form)    }}
<br>
<br>
{% endblock %}
", "AppBundle:Equip:llistar_tot_equip.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes\\src\\AppBundle/Resources/views/Equip/llistar_tot_equip.html.twig");
    }
}
