<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6321f93feef2007d6d179703bf9db1307c45f4f4b931856918d6750d1f82368 extends Twig_Template
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
        $__internal_6f2f5353cb4fec90c1bbc51d80e6c3dc4134b3d4d4e68349bb755a1b9d659b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2f5353cb4fec90c1bbc51d80e6c3dc4134b3d4d4e68349bb755a1b9d659b15->enter($__internal_6f2f5353cb4fec90c1bbc51d80e6c3dc4134b3d4d4e68349bb755a1b9d659b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_0d7d3e97ce3840964dbe19ac66a5a63e98e43f029421670549517ba2c0cb7eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7d3e97ce3840964dbe19ac66a5a63e98e43f029421670549517ba2c0cb7eb0->enter($__internal_0d7d3e97ce3840964dbe19ac66a5a63e98e43f029421670549517ba2c0cb7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6f2f5353cb4fec90c1bbc51d80e6c3dc4134b3d4d4e68349bb755a1b9d659b15->leave($__internal_6f2f5353cb4fec90c1bbc51d80e6c3dc4134b3d4d4e68349bb755a1b9d659b15_prof);

        
        $__internal_0d7d3e97ce3840964dbe19ac66a5a63e98e43f029421670549517ba2c0cb7eb0->leave($__internal_0d7d3e97ce3840964dbe19ac66a5a63e98e43f029421670549517ba2c0cb7eb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
