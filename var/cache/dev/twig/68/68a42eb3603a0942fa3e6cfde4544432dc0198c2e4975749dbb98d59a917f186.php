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
        $__internal_84e983b36396fdf0068b12318b3b1c972d3745294e96506bc303171e63a0c5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e983b36396fdf0068b12318b3b1c972d3745294e96506bc303171e63a0c5be->enter($__internal_84e983b36396fdf0068b12318b3b1c972d3745294e96506bc303171e63a0c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_880ed82cce5926b268cc256611ac42d26e8ddeaf6faa4ebc87d5304cf6a4441c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880ed82cce5926b268cc256611ac42d26e8ddeaf6faa4ebc87d5304cf6a4441c->enter($__internal_880ed82cce5926b268cc256611ac42d26e8ddeaf6faa4ebc87d5304cf6a4441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e983b36396fdf0068b12318b3b1c972d3745294e96506bc303171e63a0c5be->leave($__internal_84e983b36396fdf0068b12318b3b1c972d3745294e96506bc303171e63a0c5be_prof);

        
        $__internal_880ed82cce5926b268cc256611ac42d26e8ddeaf6faa4ebc87d5304cf6a4441c->leave($__internal_880ed82cce5926b268cc256611ac42d26e8ddeaf6faa4ebc87d5304cf6a4441c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db579bf606dbfaa23e87fefcab4cce10252e1933e2d6485a4f8b2eb94cf7c980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db579bf606dbfaa23e87fefcab4cce10252e1933e2d6485a4f8b2eb94cf7c980->enter($__internal_db579bf606dbfaa23e87fefcab4cce10252e1933e2d6485a4f8b2eb94cf7c980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85b7b3b6e9c59bcebdae2d468b2f622f7595e2bc1ce49c8f532208f4cb13e46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b7b3b6e9c59bcebdae2d468b2f622f7595e2bc1ce49c8f532208f4cb13e46d->enter($__internal_85b7b3b6e9c59bcebdae2d468b2f622f7595e2bc1ce49c8f532208f4cb13e46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_85b7b3b6e9c59bcebdae2d468b2f622f7595e2bc1ce49c8f532208f4cb13e46d->leave($__internal_85b7b3b6e9c59bcebdae2d468b2f622f7595e2bc1ce49c8f532208f4cb13e46d_prof);

        
        $__internal_db579bf606dbfaa23e87fefcab4cce10252e1933e2d6485a4f8b2eb94cf7c980->leave($__internal_db579bf606dbfaa23e87fefcab4cce10252e1933e2d6485a4f8b2eb94cf7c980_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7175d0d5eda932581404bcb1b16298d889e1d76e37bdfc2e38389f108389b8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7175d0d5eda932581404bcb1b16298d889e1d76e37bdfc2e38389f108389b8ee->enter($__internal_7175d0d5eda932581404bcb1b16298d889e1d76e37bdfc2e38389f108389b8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3319e5990cb97bf63befc4b3f919c33f6324a080c023bb66c050683e0f5f1b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3319e5990cb97bf63befc4b3f919c33f6324a080c023bb66c050683e0f5f1b45->enter($__internal_3319e5990cb97bf63befc4b3f919c33f6324a080c023bb66c050683e0f5f1b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3319e5990cb97bf63befc4b3f919c33f6324a080c023bb66c050683e0f5f1b45->leave($__internal_3319e5990cb97bf63befc4b3f919c33f6324a080c023bb66c050683e0f5f1b45_prof);

        
        $__internal_7175d0d5eda932581404bcb1b16298d889e1d76e37bdfc2e38389f108389b8ee->leave($__internal_7175d0d5eda932581404bcb1b16298d889e1d76e37bdfc2e38389f108389b8ee_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c81f4d9883a420d18262d01bd57f88019d773af667d6755a872032fe21716da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c81f4d9883a420d18262d01bd57f88019d773af667d6755a872032fe21716da->enter($__internal_3c81f4d9883a420d18262d01bd57f88019d773af667d6755a872032fe21716da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e46561c19632294e10ad06455fa7b06bfab81cba40e21995491f5e9db95d4981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46561c19632294e10ad06455fa7b06bfab81cba40e21995491f5e9db95d4981->enter($__internal_e46561c19632294e10ad06455fa7b06bfab81cba40e21995491f5e9db95d4981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e46561c19632294e10ad06455fa7b06bfab81cba40e21995491f5e9db95d4981->leave($__internal_e46561c19632294e10ad06455fa7b06bfab81cba40e21995491f5e9db95d4981_prof);

        
        $__internal_3c81f4d9883a420d18262d01bd57f88019d773af667d6755a872032fe21716da->leave($__internal_3c81f4d9883a420d18262d01bd57f88019d773af667d6755a872032fe21716da_prof);

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
