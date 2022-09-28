<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6047c55b31a279ae72432e4d4fec7cdaffe2a3a31599943aa5903775159bc255 extends Twig_Template
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
        $__internal_11d3c0530f986cee3ac1ca05831851067a30160745d4687e8cee230b28880b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d3c0530f986cee3ac1ca05831851067a30160745d4687e8cee230b28880b78->enter($__internal_11d3c0530f986cee3ac1ca05831851067a30160745d4687e8cee230b28880b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_bedd9a4f67e06552852f695c66d7f0c2b85cc9407b9f064e4e48c7d5bb5212e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedd9a4f67e06552852f695c66d7f0c2b85cc9407b9f064e4e48c7d5bb5212e2->enter($__internal_bedd9a4f67e06552852f695c66d7f0c2b85cc9407b9f064e4e48c7d5bb5212e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_11d3c0530f986cee3ac1ca05831851067a30160745d4687e8cee230b28880b78->leave($__internal_11d3c0530f986cee3ac1ca05831851067a30160745d4687e8cee230b28880b78_prof);

        
        $__internal_bedd9a4f67e06552852f695c66d7f0c2b85cc9407b9f064e4e48c7d5bb5212e2->leave($__internal_bedd9a4f67e06552852f695c66d7f0c2b85cc9407b9f064e4e48c7d5bb5212e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
