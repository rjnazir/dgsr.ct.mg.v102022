<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4a7ce54b719c68480e9bcc082c823b8155005308059fdfef8bb78273f1dcc882 extends Twig_Template
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
        $__internal_98469b09fd1ff2930a4cf3cc2de84eeeca29cdd20b2afe4dccd092e522cf5090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98469b09fd1ff2930a4cf3cc2de84eeeca29cdd20b2afe4dccd092e522cf5090->enter($__internal_98469b09fd1ff2930a4cf3cc2de84eeeca29cdd20b2afe4dccd092e522cf5090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_24f166412bad403fb0ba9e198d85efa58f236296079acd5b2bf4a6b81d2a5d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f166412bad403fb0ba9e198d85efa58f236296079acd5b2bf4a6b81d2a5d78->enter($__internal_24f166412bad403fb0ba9e198d85efa58f236296079acd5b2bf4a6b81d2a5d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_98469b09fd1ff2930a4cf3cc2de84eeeca29cdd20b2afe4dccd092e522cf5090->leave($__internal_98469b09fd1ff2930a4cf3cc2de84eeeca29cdd20b2afe4dccd092e522cf5090_prof);

        
        $__internal_24f166412bad403fb0ba9e198d85efa58f236296079acd5b2bf4a6b81d2a5d78->leave($__internal_24f166412bad403fb0ba9e198d85efa58f236296079acd5b2bf4a6b81d2a5d78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
