<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6783f3e2b04583e99851be795cbdc6b008163f542c58db249adb20de8f8192cc extends Twig_Template
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
        $__internal_1c208700336b3bb7caec0fcc0ed89a4c06954bc3f45b58364e9a8f6cbc5af461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c208700336b3bb7caec0fcc0ed89a4c06954bc3f45b58364e9a8f6cbc5af461->enter($__internal_1c208700336b3bb7caec0fcc0ed89a4c06954bc3f45b58364e9a8f6cbc5af461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_09007c3c033c23575ae74e5e5404290f2255e9fa623dc89e39660590ac69fa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09007c3c033c23575ae74e5e5404290f2255e9fa623dc89e39660590ac69fa25->enter($__internal_09007c3c033c23575ae74e5e5404290f2255e9fa623dc89e39660590ac69fa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1c208700336b3bb7caec0fcc0ed89a4c06954bc3f45b58364e9a8f6cbc5af461->leave($__internal_1c208700336b3bb7caec0fcc0ed89a4c06954bc3f45b58364e9a8f6cbc5af461_prof);

        
        $__internal_09007c3c033c23575ae74e5e5404290f2255e9fa623dc89e39660590ac69fa25->leave($__internal_09007c3c033c23575ae74e5e5404290f2255e9fa623dc89e39660590ac69fa25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
