<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_ecbf7eb4b45d604ab4a4d282c88a9084fb505f9164bc2a4af705586f7b23eada extends Twig_Template
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
        $__internal_7d6b1a8ad5c4039ee246ea936a98087bf448dcad1ef88c40f35261eb8f68289e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6b1a8ad5c4039ee246ea936a98087bf448dcad1ef88c40f35261eb8f68289e->enter($__internal_7d6b1a8ad5c4039ee246ea936a98087bf448dcad1ef88c40f35261eb8f68289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_176160f79d273d4b4cb8f6978e0400f65bd520576f84aa2ad00f307f013a9772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176160f79d273d4b4cb8f6978e0400f65bd520576f84aa2ad00f307f013a9772->enter($__internal_176160f79d273d4b4cb8f6978e0400f65bd520576f84aa2ad00f307f013a9772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7d6b1a8ad5c4039ee246ea936a98087bf448dcad1ef88c40f35261eb8f68289e->leave($__internal_7d6b1a8ad5c4039ee246ea936a98087bf448dcad1ef88c40f35261eb8f68289e_prof);

        
        $__internal_176160f79d273d4b4cb8f6978e0400f65bd520576f84aa2ad00f307f013a9772->leave($__internal_176160f79d273d4b4cb8f6978e0400f65bd520576f84aa2ad00f307f013a9772_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
