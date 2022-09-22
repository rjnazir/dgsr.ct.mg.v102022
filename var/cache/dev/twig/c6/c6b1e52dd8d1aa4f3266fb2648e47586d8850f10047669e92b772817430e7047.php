<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ef82fe9a73e75fd7012b296d2d7d235596f8190e9d0367466303f2d4640a511d extends Twig_Template
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
        $__internal_7391526379b097553c56087038b851a1ace9fa0a06757221f16f312c2a73ecbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7391526379b097553c56087038b851a1ace9fa0a06757221f16f312c2a73ecbc->enter($__internal_7391526379b097553c56087038b851a1ace9fa0a06757221f16f312c2a73ecbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_cd854ffef14091cf6d1cde68346184656ce114eb8ed672cbef2d28ad9c7dd671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd854ffef14091cf6d1cde68346184656ce114eb8ed672cbef2d28ad9c7dd671->enter($__internal_cd854ffef14091cf6d1cde68346184656ce114eb8ed672cbef2d28ad9c7dd671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7391526379b097553c56087038b851a1ace9fa0a06757221f16f312c2a73ecbc->leave($__internal_7391526379b097553c56087038b851a1ace9fa0a06757221f16f312c2a73ecbc_prof);

        
        $__internal_cd854ffef14091cf6d1cde68346184656ce114eb8ed672cbef2d28ad9c7dd671->leave($__internal_cd854ffef14091cf6d1cde68346184656ce114eb8ed672cbef2d28ad9c7dd671_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
