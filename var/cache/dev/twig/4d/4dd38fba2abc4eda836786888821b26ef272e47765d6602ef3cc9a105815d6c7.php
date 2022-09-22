<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8d5e484cdadbf5e20b664a1241fe7610ff2ba074b25ea844e7946d91872da416 extends Twig_Template
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
        $__internal_7a321abc61156867a4a8a32e1d15cdca9d3c380805036656986619e81cf6117f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a321abc61156867a4a8a32e1d15cdca9d3c380805036656986619e81cf6117f->enter($__internal_7a321abc61156867a4a8a32e1d15cdca9d3c380805036656986619e81cf6117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_51eb2ccc400012c9377729971db012b77bdd5b6d22fccf1980b0a5b0c7a79d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51eb2ccc400012c9377729971db012b77bdd5b6d22fccf1980b0a5b0c7a79d50->enter($__internal_51eb2ccc400012c9377729971db012b77bdd5b6d22fccf1980b0a5b0c7a79d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7a321abc61156867a4a8a32e1d15cdca9d3c380805036656986619e81cf6117f->leave($__internal_7a321abc61156867a4a8a32e1d15cdca9d3c380805036656986619e81cf6117f_prof);

        
        $__internal_51eb2ccc400012c9377729971db012b77bdd5b6d22fccf1980b0a5b0c7a79d50->leave($__internal_51eb2ccc400012c9377729971db012b77bdd5b6d22fccf1980b0a5b0c7a79d50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
