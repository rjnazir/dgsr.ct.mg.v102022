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
        $__internal_f80c3185dbf38cb7835c80db31f80e0d93395652aa7b58dba9cf9c8c56f83863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c3185dbf38cb7835c80db31f80e0d93395652aa7b58dba9cf9c8c56f83863->enter($__internal_f80c3185dbf38cb7835c80db31f80e0d93395652aa7b58dba9cf9c8c56f83863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3c4cea754615768fef6c6cd994585b5eef9bbdc5aa2033b3cca91560533bd35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4cea754615768fef6c6cd994585b5eef9bbdc5aa2033b3cca91560533bd35c->enter($__internal_3c4cea754615768fef6c6cd994585b5eef9bbdc5aa2033b3cca91560533bd35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80c3185dbf38cb7835c80db31f80e0d93395652aa7b58dba9cf9c8c56f83863->leave($__internal_f80c3185dbf38cb7835c80db31f80e0d93395652aa7b58dba9cf9c8c56f83863_prof);

        
        $__internal_3c4cea754615768fef6c6cd994585b5eef9bbdc5aa2033b3cca91560533bd35c->leave($__internal_3c4cea754615768fef6c6cd994585b5eef9bbdc5aa2033b3cca91560533bd35c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b16169ea145ab39f7dced48a49eb5a0e5b78cdec235c3e48386d0f9d044a5f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16169ea145ab39f7dced48a49eb5a0e5b78cdec235c3e48386d0f9d044a5f38->enter($__internal_b16169ea145ab39f7dced48a49eb5a0e5b78cdec235c3e48386d0f9d044a5f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04a99398249a8d9ad2b4aadc81ba2cb19367e26704565bc8058d1336f4bbec6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a99398249a8d9ad2b4aadc81ba2cb19367e26704565bc8058d1336f4bbec6a->enter($__internal_04a99398249a8d9ad2b4aadc81ba2cb19367e26704565bc8058d1336f4bbec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_04a99398249a8d9ad2b4aadc81ba2cb19367e26704565bc8058d1336f4bbec6a->leave($__internal_04a99398249a8d9ad2b4aadc81ba2cb19367e26704565bc8058d1336f4bbec6a_prof);

        
        $__internal_b16169ea145ab39f7dced48a49eb5a0e5b78cdec235c3e48386d0f9d044a5f38->leave($__internal_b16169ea145ab39f7dced48a49eb5a0e5b78cdec235c3e48386d0f9d044a5f38_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_81b0d15708f632d5fda6b612923f1530d9bf4df8c6f29720ff5523973209f6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b0d15708f632d5fda6b612923f1530d9bf4df8c6f29720ff5523973209f6c5->enter($__internal_81b0d15708f632d5fda6b612923f1530d9bf4df8c6f29720ff5523973209f6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b2ef51315fc26ae3194effe3fca0e47978e2746f42662d7f200a292c16439a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2ef51315fc26ae3194effe3fca0e47978e2746f42662d7f200a292c16439a4->enter($__internal_7b2ef51315fc26ae3194effe3fca0e47978e2746f42662d7f200a292c16439a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b2ef51315fc26ae3194effe3fca0e47978e2746f42662d7f200a292c16439a4->leave($__internal_7b2ef51315fc26ae3194effe3fca0e47978e2746f42662d7f200a292c16439a4_prof);

        
        $__internal_81b0d15708f632d5fda6b612923f1530d9bf4df8c6f29720ff5523973209f6c5->leave($__internal_81b0d15708f632d5fda6b612923f1530d9bf4df8c6f29720ff5523973209f6c5_prof);

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
