<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f8b51c529e42eb7cd6887d30e8d7a2ccc1935fc831e3daa546fd15d71bc75e38 extends Twig_Template
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
        $__internal_4c2973635f16fff3f920cc742a624aa664183b19e2990f430b9c85cfb61cc749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2973635f16fff3f920cc742a624aa664183b19e2990f430b9c85cfb61cc749->enter($__internal_4c2973635f16fff3f920cc742a624aa664183b19e2990f430b9c85cfb61cc749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3b4ef83509b5af2107d086e33c9988a2066286eb15036f8ff8c5518d73dae3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4ef83509b5af2107d086e33c9988a2066286eb15036f8ff8c5518d73dae3fd->enter($__internal_3b4ef83509b5af2107d086e33c9988a2066286eb15036f8ff8c5518d73dae3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4c2973635f16fff3f920cc742a624aa664183b19e2990f430b9c85cfb61cc749->leave($__internal_4c2973635f16fff3f920cc742a624aa664183b19e2990f430b9c85cfb61cc749_prof);

        
        $__internal_3b4ef83509b5af2107d086e33c9988a2066286eb15036f8ff8c5518d73dae3fd->leave($__internal_3b4ef83509b5af2107d086e33c9988a2066286eb15036f8ff8c5518d73dae3fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
