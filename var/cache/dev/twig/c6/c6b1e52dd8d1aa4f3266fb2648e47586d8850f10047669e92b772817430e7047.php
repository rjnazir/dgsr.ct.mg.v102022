<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ef82fe9a73e75fd7012b296d2d7d235596f8190e9d0367466303f2d4640a511d extends Twig_Template
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
        $__internal_322118d808e6f74a01303a30f14e2da99f63fb1fb701bd9f193772cec18c6080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322118d808e6f74a01303a30f14e2da99f63fb1fb701bd9f193772cec18c6080->enter($__internal_322118d808e6f74a01303a30f14e2da99f63fb1fb701bd9f193772cec18c6080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_32f3e3567b5b9b3225787ebe17a87ca175b5daaae7180f04d62298899a9e0669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f3e3567b5b9b3225787ebe17a87ca175b5daaae7180f04d62298899a9e0669->enter($__internal_32f3e3567b5b9b3225787ebe17a87ca175b5daaae7180f04d62298899a9e0669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_322118d808e6f74a01303a30f14e2da99f63fb1fb701bd9f193772cec18c6080->leave($__internal_322118d808e6f74a01303a30f14e2da99f63fb1fb701bd9f193772cec18c6080_prof);

        
        $__internal_32f3e3567b5b9b3225787ebe17a87ca175b5daaae7180f04d62298899a9e0669->leave($__internal_32f3e3567b5b9b3225787ebe17a87ca175b5daaae7180f04d62298899a9e0669_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
