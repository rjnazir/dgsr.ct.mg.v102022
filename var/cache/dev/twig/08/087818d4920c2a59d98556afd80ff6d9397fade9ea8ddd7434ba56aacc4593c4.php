<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6321f93feef2007d6d179703bf9db1307c45f4f4b931856918d6750d1f82368 extends Twig_Template
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
        $__internal_7f140a77b95186ebe45a94b9e148b43dec575963bc46bcd30ac9bb8f6c1e79fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f140a77b95186ebe45a94b9e148b43dec575963bc46bcd30ac9bb8f6c1e79fe->enter($__internal_7f140a77b95186ebe45a94b9e148b43dec575963bc46bcd30ac9bb8f6c1e79fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d3e936eabed589801ff26869fbd5e61beec1e19c7d691815751d4330baa5c399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e936eabed589801ff26869fbd5e61beec1e19c7d691815751d4330baa5c399->enter($__internal_d3e936eabed589801ff26869fbd5e61beec1e19c7d691815751d4330baa5c399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7f140a77b95186ebe45a94b9e148b43dec575963bc46bcd30ac9bb8f6c1e79fe->leave($__internal_7f140a77b95186ebe45a94b9e148b43dec575963bc46bcd30ac9bb8f6c1e79fe_prof);

        
        $__internal_d3e936eabed589801ff26869fbd5e61beec1e19c7d691815751d4330baa5c399->leave($__internal_d3e936eabed589801ff26869fbd5e61beec1e19c7d691815751d4330baa5c399_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
