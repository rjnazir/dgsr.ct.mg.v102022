<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b6f5fa4694254ddadd72578d754bd28a453d238853570dee5c008bbc2569d3e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_7937eeaf81b65261a59d475444aa63db19ab4d8eabc0b3cc52719b085e751a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7937eeaf81b65261a59d475444aa63db19ab4d8eabc0b3cc52719b085e751a8f->enter($__internal_7937eeaf81b65261a59d475444aa63db19ab4d8eabc0b3cc52719b085e751a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f8b191aa900ec9db079235c5478caeafe9a6b9fd67a9cd77b431108c6e098d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b191aa900ec9db079235c5478caeafe9a6b9fd67a9cd77b431108c6e098d4f->enter($__internal_f8b191aa900ec9db079235c5478caeafe9a6b9fd67a9cd77b431108c6e098d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7937eeaf81b65261a59d475444aa63db19ab4d8eabc0b3cc52719b085e751a8f->leave($__internal_7937eeaf81b65261a59d475444aa63db19ab4d8eabc0b3cc52719b085e751a8f_prof);

        
        $__internal_f8b191aa900ec9db079235c5478caeafe9a6b9fd67a9cd77b431108c6e098d4f->leave($__internal_f8b191aa900ec9db079235c5478caeafe9a6b9fd67a9cd77b431108c6e098d4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e3211ab121b58d7ef9be48aab490ff2dbecd4e4b9c5a5da6c3c7e0f5c0b5582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3211ab121b58d7ef9be48aab490ff2dbecd4e4b9c5a5da6c3c7e0f5c0b5582->enter($__internal_2e3211ab121b58d7ef9be48aab490ff2dbecd4e4b9c5a5da6c3c7e0f5c0b5582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8cf3fa60bb049c2f7e72ae423198b0a3b0cad21120a65599575002151e64b0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf3fa60bb049c2f7e72ae423198b0a3b0cad21120a65599575002151e64b0df->enter($__internal_8cf3fa60bb049c2f7e72ae423198b0a3b0cad21120a65599575002151e64b0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8cf3fa60bb049c2f7e72ae423198b0a3b0cad21120a65599575002151e64b0df->leave($__internal_8cf3fa60bb049c2f7e72ae423198b0a3b0cad21120a65599575002151e64b0df_prof);

        
        $__internal_2e3211ab121b58d7ef9be48aab490ff2dbecd4e4b9c5a5da6c3c7e0f5c0b5582->leave($__internal_2e3211ab121b58d7ef9be48aab490ff2dbecd4e4b9c5a5da6c3c7e0f5c0b5582_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b59c85a742278c5c23d3b85322cfb2cfea5122253a253b573b57468bfe6c0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b59c85a742278c5c23d3b85322cfb2cfea5122253a253b573b57468bfe6c0d6->enter($__internal_5b59c85a742278c5c23d3b85322cfb2cfea5122253a253b573b57468bfe6c0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cdbbc12eca685ede6d494628c41491fa7e5520744a181c6775a41a10a73c783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdbbc12eca685ede6d494628c41491fa7e5520744a181c6775a41a10a73c783->enter($__internal_0cdbbc12eca685ede6d494628c41491fa7e5520744a181c6775a41a10a73c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0cdbbc12eca685ede6d494628c41491fa7e5520744a181c6775a41a10a73c783->leave($__internal_0cdbbc12eca685ede6d494628c41491fa7e5520744a181c6775a41a10a73c783_prof);

        
        $__internal_5b59c85a742278c5c23d3b85322cfb2cfea5122253a253b573b57468bfe6c0d6->leave($__internal_5b59c85a742278c5c23d3b85322cfb2cfea5122253a253b573b57468bfe6c0d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
