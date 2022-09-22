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
        $__internal_49e6ee5ae2d9ccd104ab98fa1ac2c7152f99a01ca3f22f6265616949e0c6a538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e6ee5ae2d9ccd104ab98fa1ac2c7152f99a01ca3f22f6265616949e0c6a538->enter($__internal_49e6ee5ae2d9ccd104ab98fa1ac2c7152f99a01ca3f22f6265616949e0c6a538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1bf51828171d64e8bf938224a6a826425b4908559b56da67970d9d9cebe5b8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf51828171d64e8bf938224a6a826425b4908559b56da67970d9d9cebe5b8c1->enter($__internal_1bf51828171d64e8bf938224a6a826425b4908559b56da67970d9d9cebe5b8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_49e6ee5ae2d9ccd104ab98fa1ac2c7152f99a01ca3f22f6265616949e0c6a538->leave($__internal_49e6ee5ae2d9ccd104ab98fa1ac2c7152f99a01ca3f22f6265616949e0c6a538_prof);

        
        $__internal_1bf51828171d64e8bf938224a6a826425b4908559b56da67970d9d9cebe5b8c1->leave($__internal_1bf51828171d64e8bf938224a6a826425b4908559b56da67970d9d9cebe5b8c1_prof);

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
