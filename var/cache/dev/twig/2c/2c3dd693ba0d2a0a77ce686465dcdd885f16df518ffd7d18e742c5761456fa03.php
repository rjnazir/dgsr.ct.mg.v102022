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
        $__internal_0d191e97efa2486567ee9ae4d79fb9c3e317f178175ee0bee30726c4c60cccf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d191e97efa2486567ee9ae4d79fb9c3e317f178175ee0bee30726c4c60cccf9->enter($__internal_0d191e97efa2486567ee9ae4d79fb9c3e317f178175ee0bee30726c4c60cccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_834dbd45e6a1abd7b9f66c94af5d97d86d29471b498c23ced325dbae10aff38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834dbd45e6a1abd7b9f66c94af5d97d86d29471b498c23ced325dbae10aff38b->enter($__internal_834dbd45e6a1abd7b9f66c94af5d97d86d29471b498c23ced325dbae10aff38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d191e97efa2486567ee9ae4d79fb9c3e317f178175ee0bee30726c4c60cccf9->leave($__internal_0d191e97efa2486567ee9ae4d79fb9c3e317f178175ee0bee30726c4c60cccf9_prof);

        
        $__internal_834dbd45e6a1abd7b9f66c94af5d97d86d29471b498c23ced325dbae10aff38b->leave($__internal_834dbd45e6a1abd7b9f66c94af5d97d86d29471b498c23ced325dbae10aff38b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d6747aa682ed70bf735989f3558462bc652193dec60269c9f19313ed02caec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6747aa682ed70bf735989f3558462bc652193dec60269c9f19313ed02caec9->enter($__internal_3d6747aa682ed70bf735989f3558462bc652193dec60269c9f19313ed02caec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_859699dd368b2e57d3debe69a5e52c2a1065d6b391865423d2bced298eba2224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859699dd368b2e57d3debe69a5e52c2a1065d6b391865423d2bced298eba2224->enter($__internal_859699dd368b2e57d3debe69a5e52c2a1065d6b391865423d2bced298eba2224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_859699dd368b2e57d3debe69a5e52c2a1065d6b391865423d2bced298eba2224->leave($__internal_859699dd368b2e57d3debe69a5e52c2a1065d6b391865423d2bced298eba2224_prof);

        
        $__internal_3d6747aa682ed70bf735989f3558462bc652193dec60269c9f19313ed02caec9->leave($__internal_3d6747aa682ed70bf735989f3558462bc652193dec60269c9f19313ed02caec9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_01a136042187e9842936c2789eb5235621ef82eb5913383a947ef1798a60f146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a136042187e9842936c2789eb5235621ef82eb5913383a947ef1798a60f146->enter($__internal_01a136042187e9842936c2789eb5235621ef82eb5913383a947ef1798a60f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e8b0f38be8f1dcabcf6b8bf0edf110db9fed6b5e512cbf21029ef0ef7f4b0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8b0f38be8f1dcabcf6b8bf0edf110db9fed6b5e512cbf21029ef0ef7f4b0b1->enter($__internal_2e8b0f38be8f1dcabcf6b8bf0edf110db9fed6b5e512cbf21029ef0ef7f4b0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e8b0f38be8f1dcabcf6b8bf0edf110db9fed6b5e512cbf21029ef0ef7f4b0b1->leave($__internal_2e8b0f38be8f1dcabcf6b8bf0edf110db9fed6b5e512cbf21029ef0ef7f4b0b1_prof);

        
        $__internal_01a136042187e9842936c2789eb5235621ef82eb5913383a947ef1798a60f146->leave($__internal_01a136042187e9842936c2789eb5235621ef82eb5913383a947ef1798a60f146_prof);

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
