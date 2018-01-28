<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_6eb7844f36a4edd7b4b608ed264ac0ad7801ea9d279965f0b92c3c0317c77339 extends Twig_Template
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
        $__internal_7153ee10e7b8b9aba643f8fe15904d6b44f46d72d7c35ba406474750e9d67090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7153ee10e7b8b9aba643f8fe15904d6b44f46d72d7c35ba406474750e9d67090->enter($__internal_7153ee10e7b8b9aba643f8fe15904d6b44f46d72d7c35ba406474750e9d67090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0019f98dbd46b39001fc619c5e4d43c7d0ca3a19e8c622cdad92cb38fe635f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0019f98dbd46b39001fc619c5e4d43c7d0ca3a19e8c622cdad92cb38fe635f7e->enter($__internal_0019f98dbd46b39001fc619c5e4d43c7d0ca3a19e8c622cdad92cb38fe635f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_9a755383e52fb0a2d769f6d1193d428fe772586b54f0ad855d33d75f900dde46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a755383e52fb0a2d769f6d1193d428fe772586b54f0ad855d33d75f900dde46->enter($__internal_9a755383e52fb0a2d769f6d1193d428fe772586b54f0ad855d33d75f900dde46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a70d42e22d1e4b05caaca96e10c529e19d38d87a24ce7666ecbd5fa1b6b543c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70d42e22d1e4b05caaca96e10c529e19d38d87a24ce7666ecbd5fa1b6b543c1->enter($__internal_a70d42e22d1e4b05caaca96e10c529e19d38d87a24ce7666ecbd5fa1b6b543c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            echo "<pre class=\"stacktrace\">
";
            // line 3
            echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array());
            echo ":
";
            // line 4
            if ( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()))) {
                // line 5
                echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
                echo "
";
            }
            // line 7
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 9
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</pre>
";
        }
        
<<<<<<< HEAD
        $__internal_7153ee10e7b8b9aba643f8fe15904d6b44f46d72d7c35ba406474750e9d67090->leave($__internal_7153ee10e7b8b9aba643f8fe15904d6b44f46d72d7c35ba406474750e9d67090_prof);

        
        $__internal_0019f98dbd46b39001fc619c5e4d43c7d0ca3a19e8c622cdad92cb38fe635f7e->leave($__internal_0019f98dbd46b39001fc619c5e4d43c7d0ca3a19e8c622cdad92cb38fe635f7e_prof);
=======
        $__internal_9a755383e52fb0a2d769f6d1193d428fe772586b54f0ad855d33d75f900dde46->leave($__internal_9a755383e52fb0a2d769f6d1193d428fe772586b54f0ad855d33d75f900dde46_prof);

        
        $__internal_a70d42e22d1e4b05caaca96e10c529e19d38d87a24ce7666ecbd5fa1b6b543c1->leave($__internal_a70d42e22d1e4b05caaca96e10c529e19d38d87a24ce7666ecbd5fa1b6b543c1_prof);
>>>>>>> e251197a95b330efeb669e4ab1e7bb031f95e1cb

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 9,  44 => 8,  41 => 7,  36 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
<pre class=\"stacktrace\">
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
</pre>
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\xampp\\htdocs\\practica1symfony_RCarreno_SCifuentes - copia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
