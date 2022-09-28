<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e9351d96b7724f37edd909ac16735e6cdaf73f97624b8d4601a7f4cc5b8721a8 extends Twig_Template
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
        $__internal_3b84034bfff2153c55160b95fc7ab9f0db2c0679a525005c026a47e18da331a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b84034bfff2153c55160b95fc7ab9f0db2c0679a525005c026a47e18da331a8->enter($__internal_3b84034bfff2153c55160b95fc7ab9f0db2c0679a525005c026a47e18da331a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_7947e0ea3f7d69ca7cd647cca2aef74326b4290fa6922dee1ffcd34d4399b128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7947e0ea3f7d69ca7cd647cca2aef74326b4290fa6922dee1ffcd34d4399b128->enter($__internal_7947e0ea3f7d69ca7cd647cca2aef74326b4290fa6922dee1ffcd34d4399b128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3b84034bfff2153c55160b95fc7ab9f0db2c0679a525005c026a47e18da331a8->leave($__internal_3b84034bfff2153c55160b95fc7ab9f0db2c0679a525005c026a47e18da331a8_prof);

        
        $__internal_7947e0ea3f7d69ca7cd647cca2aef74326b4290fa6922dee1ffcd34d4399b128->leave($__internal_7947e0ea3f7d69ca7cd647cca2aef74326b4290fa6922dee1ffcd34d4399b128_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
