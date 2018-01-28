<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_b5ff15c2b51a8d5c1e32e7c30e9f0f0a640dddf583924e654b440f99160084e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3212e4fd4c3c4ae05a5844e5c852b1ad4029fa2006b1d7b04818449121363c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3212e4fd4c3c4ae05a5844e5c852b1ad4029fa2006b1d7b04818449121363c9c->enter($__internal_3212e4fd4c3c4ae05a5844e5c852b1ad4029fa2006b1d7b04818449121363c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_3565504603337fd9c88ef211183d38491cd648f61d1adc018a051e1f8eb15100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3565504603337fd9c88ef211183d38491cd648f61d1adc018a051e1f8eb15100->enter($__internal_3565504603337fd9c88ef211183d38491cd648f61d1adc018a051e1f8eb15100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
        $__internal_acbcfacf8b6efdd0a18acfb23afdce23c36d10bf0cd1f6008778f4d1a668653b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbcfacf8b6efdd0a18acfb23afdce23c36d10bf0cd1f6008778f4d1a668653b->enter($__internal_acbcfacf8b6efdd0a18acfb23afdce23c36d10bf0cd1f6008778f4d1a668653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_22b6a30af8c91e844d47ff47c7a1863c91ccfaf2c6ec7eaed3ed71100d87b912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b6a30af8c91e844d47ff47c7a1863c91ccfaf2c6ec7eaed3ed71100d87b912->enter($__internal_22b6a30af8c91e844d47ff47c7a1863c91ccfaf2c6ec7eaed3ed71100d87b912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == ($context["index"] ?? $this->getContext($context, "index")))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if ((($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, ((($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")) - ($context["index"] ?? $this->getContext($context, "index"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))), false);
        echo "
            </td>
        </tr>
    </tbody>
</table>
";
        
<<<<<<< HEAD
        $__internal_3212e4fd4c3c4ae05a5844e5c852b1ad4029fa2006b1d7b04818449121363c9c->leave($__internal_3212e4fd4c3c4ae05a5844e5c852b1ad4029fa2006b1d7b04818449121363c9c_prof);

        
        $__internal_3565504603337fd9c88ef211183d38491cd648f61d1adc018a051e1f8eb15100->leave($__internal_3565504603337fd9c88ef211183d38491cd648f61d1adc018a051e1f8eb15100_prof);
=======
        $__internal_acbcfacf8b6efdd0a18acfb23afdce23c36d10bf0cd1f6008778f4d1a668653b->leave($__internal_acbcfacf8b6efdd0a18acfb23afdce23c36d10bf0cd1f6008778f4d1a668653b_prof);

        
        $__internal_22b6a30af8c91e844d47ff47c7a1863c91ccfaf2c6ec7eaed3ed71100d87b912->leave($__internal_22b6a30af8c91e844d47ff47c7a1863c91ccfaf2c6ec7eaed3ed71100d87b912_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 17,  56 => 11,  52 => 10,  47 => 9,  39 => 7,  37 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {{ include('@Twig/Exception/traces.txt.twig', { exception: exception }, with_context = false) }}
            </td>
        </tr>
    </tbody>
</table>
", "@Twig/Exception/traces_text.html.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces_text.html.twig");
    }
}
