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
        $__internal_a79c2741f0117895eb0c8df3bdc7eccdd1d53f778e56f8c2d5bd6cc564c6a1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79c2741f0117895eb0c8df3bdc7eccdd1d53f778e56f8c2d5bd6cc564c6a1d5->enter($__internal_a79c2741f0117895eb0c8df3bdc7eccdd1d53f778e56f8c2d5bd6cc564c6a1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_461db564c5b2e8c74b81766c71de9597b8f8780f9992fc4e121d8346b522cb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461db564c5b2e8c74b81766c71de9597b8f8780f9992fc4e121d8346b522cb05->enter($__internal_461db564c5b2e8c74b81766c71de9597b8f8780f9992fc4e121d8346b522cb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_a79c2741f0117895eb0c8df3bdc7eccdd1d53f778e56f8c2d5bd6cc564c6a1d5->leave($__internal_a79c2741f0117895eb0c8df3bdc7eccdd1d53f778e56f8c2d5bd6cc564c6a1d5_prof);

        
        $__internal_461db564c5b2e8c74b81766c71de9597b8f8780f9992fc4e121d8346b522cb05->leave($__internal_461db564c5b2e8c74b81766c71de9597b8f8780f9992fc4e121d8346b522cb05_prof);

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
