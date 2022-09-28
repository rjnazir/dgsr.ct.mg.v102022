<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0fd10d170bc46b6a255d6efcc54ff1d771c6fbfbcd2365e58d77284806a422f8 extends Twig_Template
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
        $__internal_4a91e81ddc98559de2aa428b9bd8a62ed4b2e981f7d7d84265f11099ad12e4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a91e81ddc98559de2aa428b9bd8a62ed4b2e981f7d7d84265f11099ad12e4ed->enter($__internal_4a91e81ddc98559de2aa428b9bd8a62ed4b2e981f7d7d84265f11099ad12e4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_fb835be9adcb31c1d2fb4ffae346c93293916d95cc61b18719a7af3fbb659503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb835be9adcb31c1d2fb4ffae346c93293916d95cc61b18719a7af3fbb659503->enter($__internal_fb835be9adcb31c1d2fb4ffae346c93293916d95cc61b18719a7af3fbb659503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4a91e81ddc98559de2aa428b9bd8a62ed4b2e981f7d7d84265f11099ad12e4ed->leave($__internal_4a91e81ddc98559de2aa428b9bd8a62ed4b2e981f7d7d84265f11099ad12e4ed_prof);

        
        $__internal_fb835be9adcb31c1d2fb4ffae346c93293916d95cc61b18719a7af3fbb659503->leave($__internal_fb835be9adcb31c1d2fb4ffae346c93293916d95cc61b18719a7af3fbb659503_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
