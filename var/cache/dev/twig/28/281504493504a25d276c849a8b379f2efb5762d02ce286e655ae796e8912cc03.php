<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c6f07dda65fa477e8ed4f2b1964ebbff1a87f24932d50fd744d41afad02cbcd9 extends Twig_Template
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
        $__internal_5a065567ac0ed88ef3470f5dc7fab12b7c76e39568c086a6e85d7c6d814276c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a065567ac0ed88ef3470f5dc7fab12b7c76e39568c086a6e85d7c6d814276c7->enter($__internal_5a065567ac0ed88ef3470f5dc7fab12b7c76e39568c086a6e85d7c6d814276c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_53d67ef9135cc7f9c986d28e2b23f6576f5644dd145aae9fd34a127a7ea07987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d67ef9135cc7f9c986d28e2b23f6576f5644dd145aae9fd34a127a7ea07987->enter($__internal_53d67ef9135cc7f9c986d28e2b23f6576f5644dd145aae9fd34a127a7ea07987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5a065567ac0ed88ef3470f5dc7fab12b7c76e39568c086a6e85d7c6d814276c7->leave($__internal_5a065567ac0ed88ef3470f5dc7fab12b7c76e39568c086a6e85d7c6d814276c7_prof);

        
        $__internal_53d67ef9135cc7f9c986d28e2b23f6576f5644dd145aae9fd34a127a7ea07987->leave($__internal_53d67ef9135cc7f9c986d28e2b23f6576f5644dd145aae9fd34a127a7ea07987_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
