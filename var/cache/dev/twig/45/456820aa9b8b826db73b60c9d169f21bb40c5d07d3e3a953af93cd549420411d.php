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
        $__internal_83de37266da15d44e93c95838c0e867009527ff7239ab00b6e259b9a252f5a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83de37266da15d44e93c95838c0e867009527ff7239ab00b6e259b9a252f5a5b->enter($__internal_83de37266da15d44e93c95838c0e867009527ff7239ab00b6e259b9a252f5a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_145e0cda3e4485dcb9ae95d086e59fc4a05161e23b9276b63ef5b18d911378bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145e0cda3e4485dcb9ae95d086e59fc4a05161e23b9276b63ef5b18d911378bd->enter($__internal_145e0cda3e4485dcb9ae95d086e59fc4a05161e23b9276b63ef5b18d911378bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83de37266da15d44e93c95838c0e867009527ff7239ab00b6e259b9a252f5a5b->leave($__internal_83de37266da15d44e93c95838c0e867009527ff7239ab00b6e259b9a252f5a5b_prof);

        
        $__internal_145e0cda3e4485dcb9ae95d086e59fc4a05161e23b9276b63ef5b18d911378bd->leave($__internal_145e0cda3e4485dcb9ae95d086e59fc4a05161e23b9276b63ef5b18d911378bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2043c3f9d08d2f71d34b80ea7a8dafb0b7a30f9b73039e60f31a8bbf1d735f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2043c3f9d08d2f71d34b80ea7a8dafb0b7a30f9b73039e60f31a8bbf1d735f7->enter($__internal_a2043c3f9d08d2f71d34b80ea7a8dafb0b7a30f9b73039e60f31a8bbf1d735f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff2bea5e79573701ffb370cae3a0fd1a73a210abe8426306bc55b181e1d11c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2bea5e79573701ffb370cae3a0fd1a73a210abe8426306bc55b181e1d11c80->enter($__internal_ff2bea5e79573701ffb370cae3a0fd1a73a210abe8426306bc55b181e1d11c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff2bea5e79573701ffb370cae3a0fd1a73a210abe8426306bc55b181e1d11c80->leave($__internal_ff2bea5e79573701ffb370cae3a0fd1a73a210abe8426306bc55b181e1d11c80_prof);

        
        $__internal_a2043c3f9d08d2f71d34b80ea7a8dafb0b7a30f9b73039e60f31a8bbf1d735f7->leave($__internal_a2043c3f9d08d2f71d34b80ea7a8dafb0b7a30f9b73039e60f31a8bbf1d735f7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_62138696812a176e4e5f9cad9534d090a84712c83ff9b0e40ae4e6427c9b1e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62138696812a176e4e5f9cad9534d090a84712c83ff9b0e40ae4e6427c9b1e2c->enter($__internal_62138696812a176e4e5f9cad9534d090a84712c83ff9b0e40ae4e6427c9b1e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b24b350d791d54e644cd2ec972acc8b1fbc4409305d439e89f56d317ca75b650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24b350d791d54e644cd2ec972acc8b1fbc4409305d439e89f56d317ca75b650->enter($__internal_b24b350d791d54e644cd2ec972acc8b1fbc4409305d439e89f56d317ca75b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b24b350d791d54e644cd2ec972acc8b1fbc4409305d439e89f56d317ca75b650->leave($__internal_b24b350d791d54e644cd2ec972acc8b1fbc4409305d439e89f56d317ca75b650_prof);

        
        $__internal_62138696812a176e4e5f9cad9534d090a84712c83ff9b0e40ae4e6427c9b1e2c->leave($__internal_62138696812a176e4e5f9cad9534d090a84712c83ff9b0e40ae4e6427c9b1e2c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b99b6e759d85dd3f3eb8027c599ef534b0683e0bbab17afb42c796f7a757c5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99b6e759d85dd3f3eb8027c599ef534b0683e0bbab17afb42c796f7a757c5fe->enter($__internal_b99b6e759d85dd3f3eb8027c599ef534b0683e0bbab17afb42c796f7a757c5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9699cbab0ec6f948cf42d9a2fd59ee0ef901389bf70ce772bc3bd4dd34821e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9699cbab0ec6f948cf42d9a2fd59ee0ef901389bf70ce772bc3bd4dd34821e40->enter($__internal_9699cbab0ec6f948cf42d9a2fd59ee0ef901389bf70ce772bc3bd4dd34821e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9699cbab0ec6f948cf42d9a2fd59ee0ef901389bf70ce772bc3bd4dd34821e40->leave($__internal_9699cbab0ec6f948cf42d9a2fd59ee0ef901389bf70ce772bc3bd4dd34821e40_prof);

        
        $__internal_b99b6e759d85dd3f3eb8027c599ef534b0683e0bbab17afb42c796f7a757c5fe->leave($__internal_b99b6e759d85dd3f3eb8027c599ef534b0683e0bbab17afb42c796f7a757c5fe_prof);

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
