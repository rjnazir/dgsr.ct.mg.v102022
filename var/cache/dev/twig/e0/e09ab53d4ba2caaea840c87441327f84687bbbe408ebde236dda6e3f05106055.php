<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_94188a499e504cf88d5f255f68d5059bacbfd6d2752ba1b42475e756e7cc78c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e1bd5a95c2156dcd65f1eeaab5b5924e663828b5d968bf47d3be31db713a015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1bd5a95c2156dcd65f1eeaab5b5924e663828b5d968bf47d3be31db713a015->enter($__internal_0e1bd5a95c2156dcd65f1eeaab5b5924e663828b5d968bf47d3be31db713a015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_79a022764569c482502f8e3feb554a6d0d7be8cbca966cf174ad862451db86cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a022764569c482502f8e3feb554a6d0d7be8cbca966cf174ad862451db86cd->enter($__internal_79a022764569c482502f8e3feb554a6d0d7be8cbca966cf174ad862451db86cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e1bd5a95c2156dcd65f1eeaab5b5924e663828b5d968bf47d3be31db713a015->leave($__internal_0e1bd5a95c2156dcd65f1eeaab5b5924e663828b5d968bf47d3be31db713a015_prof);

        
        $__internal_79a022764569c482502f8e3feb554a6d0d7be8cbca966cf174ad862451db86cd->leave($__internal_79a022764569c482502f8e3feb554a6d0d7be8cbca966cf174ad862451db86cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24e8c2d1efc3c0207d0052c22e0acf0c87e7a6bdfed64b1a7a616ce2099a11a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e8c2d1efc3c0207d0052c22e0acf0c87e7a6bdfed64b1a7a616ce2099a11a3->enter($__internal_24e8c2d1efc3c0207d0052c22e0acf0c87e7a6bdfed64b1a7a616ce2099a11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a764bfd53f05c8bfe1a0a654a634834132ea7c45fce6b8be0798edc59a075213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a764bfd53f05c8bfe1a0a654a634834132ea7c45fce6b8be0798edc59a075213->enter($__internal_a764bfd53f05c8bfe1a0a654a634834132ea7c45fce6b8be0798edc59a075213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a764bfd53f05c8bfe1a0a654a634834132ea7c45fce6b8be0798edc59a075213->leave($__internal_a764bfd53f05c8bfe1a0a654a634834132ea7c45fce6b8be0798edc59a075213_prof);

        
        $__internal_24e8c2d1efc3c0207d0052c22e0acf0c87e7a6bdfed64b1a7a616ce2099a11a3->leave($__internal_24e8c2d1efc3c0207d0052c22e0acf0c87e7a6bdfed64b1a7a616ce2099a11a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da6106b6a05242fe977b54e5209f0932acda34af737bc2d93aa3f8ef1cc1c451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6106b6a05242fe977b54e5209f0932acda34af737bc2d93aa3f8ef1cc1c451->enter($__internal_da6106b6a05242fe977b54e5209f0932acda34af737bc2d93aa3f8ef1cc1c451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5da1dc1912a4d4d67e40489ba998cd61865dadff8b6734068aeae742df614f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da1dc1912a4d4d67e40489ba998cd61865dadff8b6734068aeae742df614f65->enter($__internal_5da1dc1912a4d4d67e40489ba998cd61865dadff8b6734068aeae742df614f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5da1dc1912a4d4d67e40489ba998cd61865dadff8b6734068aeae742df614f65->leave($__internal_5da1dc1912a4d4d67e40489ba998cd61865dadff8b6734068aeae742df614f65_prof);

        
        $__internal_da6106b6a05242fe977b54e5209f0932acda34af737bc2d93aa3f8ef1cc1c451->leave($__internal_da6106b6a05242fe977b54e5209f0932acda34af737bc2d93aa3f8ef1cc1c451_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
