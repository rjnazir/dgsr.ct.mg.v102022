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
        $__internal_82150916a7b3da9f47ea165dc3058e460883ae810a2fcedb1cb209efdff1f092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82150916a7b3da9f47ea165dc3058e460883ae810a2fcedb1cb209efdff1f092->enter($__internal_82150916a7b3da9f47ea165dc3058e460883ae810a2fcedb1cb209efdff1f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c04aa4d7a392af70c0f8dfbed13739f7da398e8475df7348d7fb925fdc1d88f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04aa4d7a392af70c0f8dfbed13739f7da398e8475df7348d7fb925fdc1d88f6->enter($__internal_c04aa4d7a392af70c0f8dfbed13739f7da398e8475df7348d7fb925fdc1d88f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_82150916a7b3da9f47ea165dc3058e460883ae810a2fcedb1cb209efdff1f092->leave($__internal_82150916a7b3da9f47ea165dc3058e460883ae810a2fcedb1cb209efdff1f092_prof);

        
        $__internal_c04aa4d7a392af70c0f8dfbed13739f7da398e8475df7348d7fb925fdc1d88f6->leave($__internal_c04aa4d7a392af70c0f8dfbed13739f7da398e8475df7348d7fb925fdc1d88f6_prof);

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
