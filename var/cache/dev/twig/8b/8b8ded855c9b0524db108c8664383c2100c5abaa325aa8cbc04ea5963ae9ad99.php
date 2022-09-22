<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f729d2d68e7df8f235a86511b8dc6d5979c27d0bc7806f5a5764e6878f07abfe extends Twig_Template
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
        $__internal_cf375a08acd6742908af01f91aa5ff30bb5815259ff545167f8bcb8a93b10c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf375a08acd6742908af01f91aa5ff30bb5815259ff545167f8bcb8a93b10c5a->enter($__internal_cf375a08acd6742908af01f91aa5ff30bb5815259ff545167f8bcb8a93b10c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_76bf8429c81b70cf58609205fe9de9450f48deb97084781027af7594714f582a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bf8429c81b70cf58609205fe9de9450f48deb97084781027af7594714f582a->enter($__internal_76bf8429c81b70cf58609205fe9de9450f48deb97084781027af7594714f582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cf375a08acd6742908af01f91aa5ff30bb5815259ff545167f8bcb8a93b10c5a->leave($__internal_cf375a08acd6742908af01f91aa5ff30bb5815259ff545167f8bcb8a93b10c5a_prof);

        
        $__internal_76bf8429c81b70cf58609205fe9de9450f48deb97084781027af7594714f582a->leave($__internal_76bf8429c81b70cf58609205fe9de9450f48deb97084781027af7594714f582a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
