<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_601b437b958edfe8a700f433585a0c18ae88a0dee44a0715e276d9aa030dd39d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec74530224f8b5e86d50e90bc797bc62f370690e98b76b50246653a8cb81fd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec74530224f8b5e86d50e90bc797bc62f370690e98b76b50246653a8cb81fd67->enter($__internal_ec74530224f8b5e86d50e90bc797bc62f370690e98b76b50246653a8cb81fd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_617b3d8ddba93f634200e5a3f041fd49636aa58cf5d1c7fd66cd5600f4d531c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617b3d8ddba93f634200e5a3f041fd49636aa58cf5d1c7fd66cd5600f4d531c6->enter($__internal_617b3d8ddba93f634200e5a3f041fd49636aa58cf5d1c7fd66cd5600f4d531c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec74530224f8b5e86d50e90bc797bc62f370690e98b76b50246653a8cb81fd67->leave($__internal_ec74530224f8b5e86d50e90bc797bc62f370690e98b76b50246653a8cb81fd67_prof);

        
        $__internal_617b3d8ddba93f634200e5a3f041fd49636aa58cf5d1c7fd66cd5600f4d531c6->leave($__internal_617b3d8ddba93f634200e5a3f041fd49636aa58cf5d1c7fd66cd5600f4d531c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cd187c269a22eddc605e6c0e7cb4228b555a541702535222636ed7fa770dcd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd187c269a22eddc605e6c0e7cb4228b555a541702535222636ed7fa770dcd1->enter($__internal_9cd187c269a22eddc605e6c0e7cb4228b555a541702535222636ed7fa770dcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56e43c4828ff6a3b7f8cf3d6f1b5395cf7433a5460ea93cdf4801262b7a40783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e43c4828ff6a3b7f8cf3d6f1b5395cf7433a5460ea93cdf4801262b7a40783->enter($__internal_56e43c4828ff6a3b7f8cf3d6f1b5395cf7433a5460ea93cdf4801262b7a40783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_56e43c4828ff6a3b7f8cf3d6f1b5395cf7433a5460ea93cdf4801262b7a40783->leave($__internal_56e43c4828ff6a3b7f8cf3d6f1b5395cf7433a5460ea93cdf4801262b7a40783_prof);

        
        $__internal_9cd187c269a22eddc605e6c0e7cb4228b555a541702535222636ed7fa770dcd1->leave($__internal_9cd187c269a22eddc605e6c0e7cb4228b555a541702535222636ed7fa770dcd1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcda3561397dce9237fd64a4c9aaa62a4fd6ebe09b3a8703b6d457b728d7a3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcda3561397dce9237fd64a4c9aaa62a4fd6ebe09b3a8703b6d457b728d7a3a0->enter($__internal_fcda3561397dce9237fd64a4c9aaa62a4fd6ebe09b3a8703b6d457b728d7a3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e69652b3b3e04116503f348ca308e4e0b014e01c14d26875dbf670608d14df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e69652b3b3e04116503f348ca308e4e0b014e01c14d26875dbf670608d14df->enter($__internal_20e69652b3b3e04116503f348ca308e4e0b014e01c14d26875dbf670608d14df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_20e69652b3b3e04116503f348ca308e4e0b014e01c14d26875dbf670608d14df->leave($__internal_20e69652b3b3e04116503f348ca308e4e0b014e01c14d26875dbf670608d14df_prof);

        
        $__internal_fcda3561397dce9237fd64a4c9aaa62a4fd6ebe09b3a8703b6d457b728d7a3a0->leave($__internal_fcda3561397dce9237fd64a4c9aaa62a4fd6ebe09b3a8703b6d457b728d7a3a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
