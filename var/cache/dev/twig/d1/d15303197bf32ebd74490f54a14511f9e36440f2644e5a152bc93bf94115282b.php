<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_7d6f13773f1f5f221bd90509ca3160bcbcf27483874689e00a7fca3b8b6fa342 extends Twig_Template
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
        $__internal_0127c9810882de1e18ca75e9c87e9cd15423e71e1b09e1feaaa177fe32aded40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0127c9810882de1e18ca75e9c87e9cd15423e71e1b09e1feaaa177fe32aded40->enter($__internal_0127c9810882de1e18ca75e9c87e9cd15423e71e1b09e1feaaa177fe32aded40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d8687c4c56422ec74073c7fc354f40294268d42f7e04946d2319c69c2c6417e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8687c4c56422ec74073c7fc354f40294268d42f7e04946d2319c69c2c6417e4->enter($__internal_d8687c4c56422ec74073c7fc354f40294268d42f7e04946d2319c69c2c6417e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_0127c9810882de1e18ca75e9c87e9cd15423e71e1b09e1feaaa177fe32aded40->leave($__internal_0127c9810882de1e18ca75e9c87e9cd15423e71e1b09e1feaaa177fe32aded40_prof);

        
        $__internal_d8687c4c56422ec74073c7fc354f40294268d42f7e04946d2319c69c2c6417e4->leave($__internal_d8687c4c56422ec74073c7fc354f40294268d42f7e04946d2319c69c2c6417e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
