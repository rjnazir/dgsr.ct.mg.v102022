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
        $__internal_abd41bf875430a1e69558799b61d8f24191a280357a76684d246ac358b808edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd41bf875430a1e69558799b61d8f24191a280357a76684d246ac358b808edc->enter($__internal_abd41bf875430a1e69558799b61d8f24191a280357a76684d246ac358b808edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f4bed1ea1ad9ad4a14d4d9c3939b5faa2abbcb5942269e8ccad69af43dc54c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bed1ea1ad9ad4a14d4d9c3939b5faa2abbcb5942269e8ccad69af43dc54c57->enter($__internal_f4bed1ea1ad9ad4a14d4d9c3939b5faa2abbcb5942269e8ccad69af43dc54c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_abd41bf875430a1e69558799b61d8f24191a280357a76684d246ac358b808edc->leave($__internal_abd41bf875430a1e69558799b61d8f24191a280357a76684d246ac358b808edc_prof);

        
        $__internal_f4bed1ea1ad9ad4a14d4d9c3939b5faa2abbcb5942269e8ccad69af43dc54c57->leave($__internal_f4bed1ea1ad9ad4a14d4d9c3939b5faa2abbcb5942269e8ccad69af43dc54c57_prof);

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
