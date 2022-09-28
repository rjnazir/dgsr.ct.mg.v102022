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
        $__internal_93d1b32ec84dcde315a41f573fb01961aec90b863e5def882156d0a77f36e66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d1b32ec84dcde315a41f573fb01961aec90b863e5def882156d0a77f36e66a->enter($__internal_93d1b32ec84dcde315a41f573fb01961aec90b863e5def882156d0a77f36e66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4d82f4f8767f65f842f9d755554624547cba07c5934262bc4e7c79b495659dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d82f4f8767f65f842f9d755554624547cba07c5934262bc4e7c79b495659dbe->enter($__internal_4d82f4f8767f65f842f9d755554624547cba07c5934262bc4e7c79b495659dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_93d1b32ec84dcde315a41f573fb01961aec90b863e5def882156d0a77f36e66a->leave($__internal_93d1b32ec84dcde315a41f573fb01961aec90b863e5def882156d0a77f36e66a_prof);

        
        $__internal_4d82f4f8767f65f842f9d755554624547cba07c5934262bc4e7c79b495659dbe->leave($__internal_4d82f4f8767f65f842f9d755554624547cba07c5934262bc4e7c79b495659dbe_prof);

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
