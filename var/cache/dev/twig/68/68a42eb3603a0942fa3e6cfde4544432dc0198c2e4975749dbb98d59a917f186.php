<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b81c213068f12227fd26843c5febb14020ab017b818c3e560fb66cf4c9021c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e9e8ea92262eca06d3af62f831e0a9268b8adbf6acac8ffa50d04cd1035baedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e8ea92262eca06d3af62f831e0a9268b8adbf6acac8ffa50d04cd1035baedb->enter($__internal_e9e8ea92262eca06d3af62f831e0a9268b8adbf6acac8ffa50d04cd1035baedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e4f865033453bff0410219d4faf186cd56b9502d597a179e4acfa0c2bb0f128a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f865033453bff0410219d4faf186cd56b9502d597a179e4acfa0c2bb0f128a->enter($__internal_e4f865033453bff0410219d4faf186cd56b9502d597a179e4acfa0c2bb0f128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e8ea92262eca06d3af62f831e0a9268b8adbf6acac8ffa50d04cd1035baedb->leave($__internal_e9e8ea92262eca06d3af62f831e0a9268b8adbf6acac8ffa50d04cd1035baedb_prof);

        
        $__internal_e4f865033453bff0410219d4faf186cd56b9502d597a179e4acfa0c2bb0f128a->leave($__internal_e4f865033453bff0410219d4faf186cd56b9502d597a179e4acfa0c2bb0f128a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5390c1231cdecc48a87c02f0cdb146d2a9d4db113be1b5b74f06e2c4e5be857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5390c1231cdecc48a87c02f0cdb146d2a9d4db113be1b5b74f06e2c4e5be857->enter($__internal_e5390c1231cdecc48a87c02f0cdb146d2a9d4db113be1b5b74f06e2c4e5be857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f78b5ed0d65c442a56e52ea257f03f8837a49958b29940845d36c627ff0e739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f78b5ed0d65c442a56e52ea257f03f8837a49958b29940845d36c627ff0e739->enter($__internal_0f78b5ed0d65c442a56e52ea257f03f8837a49958b29940845d36c627ff0e739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0f78b5ed0d65c442a56e52ea257f03f8837a49958b29940845d36c627ff0e739->leave($__internal_0f78b5ed0d65c442a56e52ea257f03f8837a49958b29940845d36c627ff0e739_prof);

        
        $__internal_e5390c1231cdecc48a87c02f0cdb146d2a9d4db113be1b5b74f06e2c4e5be857->leave($__internal_e5390c1231cdecc48a87c02f0cdb146d2a9d4db113be1b5b74f06e2c4e5be857_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e8c1c2a12af63b655db23ffaee02aeda06589b5df440f682bd3cb94e29b9856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8c1c2a12af63b655db23ffaee02aeda06589b5df440f682bd3cb94e29b9856->enter($__internal_3e8c1c2a12af63b655db23ffaee02aeda06589b5df440f682bd3cb94e29b9856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fd833ec3d45346206bc5c366d2a73e88800893398f26a120a8de7760b09b324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd833ec3d45346206bc5c366d2a73e88800893398f26a120a8de7760b09b324->enter($__internal_1fd833ec3d45346206bc5c366d2a73e88800893398f26a120a8de7760b09b324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fd833ec3d45346206bc5c366d2a73e88800893398f26a120a8de7760b09b324->leave($__internal_1fd833ec3d45346206bc5c366d2a73e88800893398f26a120a8de7760b09b324_prof);

        
        $__internal_3e8c1c2a12af63b655db23ffaee02aeda06589b5df440f682bd3cb94e29b9856->leave($__internal_3e8c1c2a12af63b655db23ffaee02aeda06589b5df440f682bd3cb94e29b9856_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa3a640a8465975afc7116516b9d64821ef185085921d13ae380a637088d1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa3a640a8465975afc7116516b9d64821ef185085921d13ae380a637088d1b6->enter($__internal_4aa3a640a8465975afc7116516b9d64821ef185085921d13ae380a637088d1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43c435bbde94bbaa8b468ef93d88b5405cd1b8c0d37431342db770f1b3efa4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c435bbde94bbaa8b468ef93d88b5405cd1b8c0d37431342db770f1b3efa4d4->enter($__internal_43c435bbde94bbaa8b468ef93d88b5405cd1b8c0d37431342db770f1b3efa4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_43c435bbde94bbaa8b468ef93d88b5405cd1b8c0d37431342db770f1b3efa4d4->leave($__internal_43c435bbde94bbaa8b468ef93d88b5405cd1b8c0d37431342db770f1b3efa4d4_prof);

        
        $__internal_4aa3a640a8465975afc7116516b9d64821ef185085921d13ae380a637088d1b6->leave($__internal_4aa3a640a8465975afc7116516b9d64821ef185085921d13ae380a637088d1b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
