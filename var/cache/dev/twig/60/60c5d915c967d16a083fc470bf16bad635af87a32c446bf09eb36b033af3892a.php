<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6862bd6fb259edecd4798d7859bcfdd24c49d17b516acc9ddcd483d915622ff9 extends Twig_Template
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
        $__internal_da976e2fd34f5258ceb97d73ae5c816a261a05087312f1b33433713493d18f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da976e2fd34f5258ceb97d73ae5c816a261a05087312f1b33433713493d18f94->enter($__internal_da976e2fd34f5258ceb97d73ae5c816a261a05087312f1b33433713493d18f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_621d51e6302ba7fc824414feb5720159c12aa2ae73e17820f9bb44dd86f3d138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621d51e6302ba7fc824414feb5720159c12aa2ae73e17820f9bb44dd86f3d138->enter($__internal_621d51e6302ba7fc824414feb5720159c12aa2ae73e17820f9bb44dd86f3d138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_da976e2fd34f5258ceb97d73ae5c816a261a05087312f1b33433713493d18f94->leave($__internal_da976e2fd34f5258ceb97d73ae5c816a261a05087312f1b33433713493d18f94_prof);

        
        $__internal_621d51e6302ba7fc824414feb5720159c12aa2ae73e17820f9bb44dd86f3d138->leave($__internal_621d51e6302ba7fc824414feb5720159c12aa2ae73e17820f9bb44dd86f3d138_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
