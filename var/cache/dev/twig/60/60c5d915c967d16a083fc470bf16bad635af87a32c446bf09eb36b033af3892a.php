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
        $__internal_094f26ee1726953e96f1af87377aa0d90fe504721c6b16c9ce669a28238adfe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094f26ee1726953e96f1af87377aa0d90fe504721c6b16c9ce669a28238adfe2->enter($__internal_094f26ee1726953e96f1af87377aa0d90fe504721c6b16c9ce669a28238adfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2c6c75018495e7a940e87cab0d0540a708ac9619588df16b6bddc8d0e2f66fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6c75018495e7a940e87cab0d0540a708ac9619588df16b6bddc8d0e2f66fdd->enter($__internal_2c6c75018495e7a940e87cab0d0540a708ac9619588df16b6bddc8d0e2f66fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_094f26ee1726953e96f1af87377aa0d90fe504721c6b16c9ce669a28238adfe2->leave($__internal_094f26ee1726953e96f1af87377aa0d90fe504721c6b16c9ce669a28238adfe2_prof);

        
        $__internal_2c6c75018495e7a940e87cab0d0540a708ac9619588df16b6bddc8d0e2f66fdd->leave($__internal_2c6c75018495e7a940e87cab0d0540a708ac9619588df16b6bddc8d0e2f66fdd_prof);

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
