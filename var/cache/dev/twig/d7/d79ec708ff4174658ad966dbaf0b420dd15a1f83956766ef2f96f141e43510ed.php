<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_08f4fc248d595150dcbfed0f86db9cb03c11a6b612364aa61fdd3f625e36eca7 extends Twig_Template
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
        $__internal_6c4118c081322e0c2777ba4718dc2c4648005eb41ed58f9ccf96f58d6d2a6464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4118c081322e0c2777ba4718dc2c4648005eb41ed58f9ccf96f58d6d2a6464->enter($__internal_6c4118c081322e0c2777ba4718dc2c4648005eb41ed58f9ccf96f58d6d2a6464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_951a4abefcef9f721d34b83a42a4b50020311626ba86cd0beccdf2d95160530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951a4abefcef9f721d34b83a42a4b50020311626ba86cd0beccdf2d95160530b->enter($__internal_951a4abefcef9f721d34b83a42a4b50020311626ba86cd0beccdf2d95160530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6c4118c081322e0c2777ba4718dc2c4648005eb41ed58f9ccf96f58d6d2a6464->leave($__internal_6c4118c081322e0c2777ba4718dc2c4648005eb41ed58f9ccf96f58d6d2a6464_prof);

        
        $__internal_951a4abefcef9f721d34b83a42a4b50020311626ba86cd0beccdf2d95160530b->leave($__internal_951a4abefcef9f721d34b83a42a4b50020311626ba86cd0beccdf2d95160530b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
