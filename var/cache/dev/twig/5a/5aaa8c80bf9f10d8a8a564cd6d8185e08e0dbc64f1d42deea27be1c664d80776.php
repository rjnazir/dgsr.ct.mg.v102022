<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_dc36bedbfb5d63b2dd9bf85aadd206e1137129b8329fa7da575250d4892ba06c extends Twig_Template
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
        $__internal_c5687c5c17e5ea1c729387293d5e8828671d3b5a3d3c79963a2a5d363ed843f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5687c5c17e5ea1c729387293d5e8828671d3b5a3d3c79963a2a5d363ed843f8->enter($__internal_c5687c5c17e5ea1c729387293d5e8828671d3b5a3d3c79963a2a5d363ed843f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_24db72f1986a0b07c99454603af4fdf44699d7a7a55f03de080b088d0c673835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24db72f1986a0b07c99454603af4fdf44699d7a7a55f03de080b088d0c673835->enter($__internal_24db72f1986a0b07c99454603af4fdf44699d7a7a55f03de080b088d0c673835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c5687c5c17e5ea1c729387293d5e8828671d3b5a3d3c79963a2a5d363ed843f8->leave($__internal_c5687c5c17e5ea1c729387293d5e8828671d3b5a3d3c79963a2a5d363ed843f8_prof);

        
        $__internal_24db72f1986a0b07c99454603af4fdf44699d7a7a55f03de080b088d0c673835->leave($__internal_24db72f1986a0b07c99454603af4fdf44699d7a7a55f03de080b088d0c673835_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
