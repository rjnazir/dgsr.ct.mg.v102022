<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfbd10b3e687de38dbada56a6bee287b42af00ae891cf8cf120586a60cce5d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5da8379996e2ff99738d90fd8b5a192079503cb2a9f175c3f2a3465d8de2338b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da8379996e2ff99738d90fd8b5a192079503cb2a9f175c3f2a3465d8de2338b->enter($__internal_5da8379996e2ff99738d90fd8b5a192079503cb2a9f175c3f2a3465d8de2338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_191bfb3b5d04f9d3c2eac784f5c134dd93331c251e24c7f056220e607867f252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191bfb3b5d04f9d3c2eac784f5c134dd93331c251e24c7f056220e607867f252->enter($__internal_191bfb3b5d04f9d3c2eac784f5c134dd93331c251e24c7f056220e607867f252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da8379996e2ff99738d90fd8b5a192079503cb2a9f175c3f2a3465d8de2338b->leave($__internal_5da8379996e2ff99738d90fd8b5a192079503cb2a9f175c3f2a3465d8de2338b_prof);

        
        $__internal_191bfb3b5d04f9d3c2eac784f5c134dd93331c251e24c7f056220e607867f252->leave($__internal_191bfb3b5d04f9d3c2eac784f5c134dd93331c251e24c7f056220e607867f252_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e7610194235df1c5ebc0c3102d41ba4f73a22631ea1820ba5a7938b559eb60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7610194235df1c5ebc0c3102d41ba4f73a22631ea1820ba5a7938b559eb60e->enter($__internal_3e7610194235df1c5ebc0c3102d41ba4f73a22631ea1820ba5a7938b559eb60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6bb93c35abb1029e14c5709ff9240bc4c67d7c2488facd4a42e6411b5c00864d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb93c35abb1029e14c5709ff9240bc4c67d7c2488facd4a42e6411b5c00864d->enter($__internal_6bb93c35abb1029e14c5709ff9240bc4c67d7c2488facd4a42e6411b5c00864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6bb93c35abb1029e14c5709ff9240bc4c67d7c2488facd4a42e6411b5c00864d->leave($__internal_6bb93c35abb1029e14c5709ff9240bc4c67d7c2488facd4a42e6411b5c00864d_prof);

        
        $__internal_3e7610194235df1c5ebc0c3102d41ba4f73a22631ea1820ba5a7938b559eb60e->leave($__internal_3e7610194235df1c5ebc0c3102d41ba4f73a22631ea1820ba5a7938b559eb60e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa6b6faf732bb60150541e9e5342aeb779f90a17c391812890038d0836a8f230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6b6faf732bb60150541e9e5342aeb779f90a17c391812890038d0836a8f230->enter($__internal_aa6b6faf732bb60150541e9e5342aeb779f90a17c391812890038d0836a8f230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39bf7a9fa130aa5733567464f458efeb9698b08239d0d31907a577c95315ca98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bf7a9fa130aa5733567464f458efeb9698b08239d0d31907a577c95315ca98->enter($__internal_39bf7a9fa130aa5733567464f458efeb9698b08239d0d31907a577c95315ca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39bf7a9fa130aa5733567464f458efeb9698b08239d0d31907a577c95315ca98->leave($__internal_39bf7a9fa130aa5733567464f458efeb9698b08239d0d31907a577c95315ca98_prof);

        
        $__internal_aa6b6faf732bb60150541e9e5342aeb779f90a17c391812890038d0836a8f230->leave($__internal_aa6b6faf732bb60150541e9e5342aeb779f90a17c391812890038d0836a8f230_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c84aecfc3d9e8d50490c07fe90b7beb3b11f5567996728a21fe17f8f0f94a83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84aecfc3d9e8d50490c07fe90b7beb3b11f5567996728a21fe17f8f0f94a83e->enter($__internal_c84aecfc3d9e8d50490c07fe90b7beb3b11f5567996728a21fe17f8f0f94a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_081875047a77b04c5fec238d13dea138ab97b64e9c699cdd1bde37068703247e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081875047a77b04c5fec238d13dea138ab97b64e9c699cdd1bde37068703247e->enter($__internal_081875047a77b04c5fec238d13dea138ab97b64e9c699cdd1bde37068703247e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_081875047a77b04c5fec238d13dea138ab97b64e9c699cdd1bde37068703247e->leave($__internal_081875047a77b04c5fec238d13dea138ab97b64e9c699cdd1bde37068703247e_prof);

        
        $__internal_c84aecfc3d9e8d50490c07fe90b7beb3b11f5567996728a21fe17f8f0f94a83e->leave($__internal_c84aecfc3d9e8d50490c07fe90b7beb3b11f5567996728a21fe17f8f0f94a83e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
