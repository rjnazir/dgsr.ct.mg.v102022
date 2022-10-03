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
        $__internal_08e1cf79ce160520f010d8721b7fdf1ab63b9da657bddb8b99c20a7cf07fe164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e1cf79ce160520f010d8721b7fdf1ab63b9da657bddb8b99c20a7cf07fe164->enter($__internal_08e1cf79ce160520f010d8721b7fdf1ab63b9da657bddb8b99c20a7cf07fe164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_18913e98c76dd6be0aec34ddbc94e6eba132e0a96cc4d7c424a42a28325bf421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18913e98c76dd6be0aec34ddbc94e6eba132e0a96cc4d7c424a42a28325bf421->enter($__internal_18913e98c76dd6be0aec34ddbc94e6eba132e0a96cc4d7c424a42a28325bf421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e1cf79ce160520f010d8721b7fdf1ab63b9da657bddb8b99c20a7cf07fe164->leave($__internal_08e1cf79ce160520f010d8721b7fdf1ab63b9da657bddb8b99c20a7cf07fe164_prof);

        
        $__internal_18913e98c76dd6be0aec34ddbc94e6eba132e0a96cc4d7c424a42a28325bf421->leave($__internal_18913e98c76dd6be0aec34ddbc94e6eba132e0a96cc4d7c424a42a28325bf421_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b65e11a62fae88feac8b8e596710e53cd3a35d2a61011d16275c666a0343fb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65e11a62fae88feac8b8e596710e53cd3a35d2a61011d16275c666a0343fb2c->enter($__internal_b65e11a62fae88feac8b8e596710e53cd3a35d2a61011d16275c666a0343fb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae165b7e6e656801e7090a32f0e2e8b7348e6daa0fa723267afda2c83f1e1d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae165b7e6e656801e7090a32f0e2e8b7348e6daa0fa723267afda2c83f1e1d80->enter($__internal_ae165b7e6e656801e7090a32f0e2e8b7348e6daa0fa723267afda2c83f1e1d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ae165b7e6e656801e7090a32f0e2e8b7348e6daa0fa723267afda2c83f1e1d80->leave($__internal_ae165b7e6e656801e7090a32f0e2e8b7348e6daa0fa723267afda2c83f1e1d80_prof);

        
        $__internal_b65e11a62fae88feac8b8e596710e53cd3a35d2a61011d16275c666a0343fb2c->leave($__internal_b65e11a62fae88feac8b8e596710e53cd3a35d2a61011d16275c666a0343fb2c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_63546a711ab6a3c176ec938ecad04eb94b604a7fde6bbbdbc750d3c35960cabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63546a711ab6a3c176ec938ecad04eb94b604a7fde6bbbdbc750d3c35960cabc->enter($__internal_63546a711ab6a3c176ec938ecad04eb94b604a7fde6bbbdbc750d3c35960cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e359db075a2bbc40c1f6f72934387b79813f86aef8443778ed0c0e571f841b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e359db075a2bbc40c1f6f72934387b79813f86aef8443778ed0c0e571f841b5c->enter($__internal_e359db075a2bbc40c1f6f72934387b79813f86aef8443778ed0c0e571f841b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e359db075a2bbc40c1f6f72934387b79813f86aef8443778ed0c0e571f841b5c->leave($__internal_e359db075a2bbc40c1f6f72934387b79813f86aef8443778ed0c0e571f841b5c_prof);

        
        $__internal_63546a711ab6a3c176ec938ecad04eb94b604a7fde6bbbdbc750d3c35960cabc->leave($__internal_63546a711ab6a3c176ec938ecad04eb94b604a7fde6bbbdbc750d3c35960cabc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b242d9efb690d89405b2713ac18563f83d8564ef3585dde6998f1222d5e295dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b242d9efb690d89405b2713ac18563f83d8564ef3585dde6998f1222d5e295dd->enter($__internal_b242d9efb690d89405b2713ac18563f83d8564ef3585dde6998f1222d5e295dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65ec59fa834823d273e7cc8409c35bcbc324f6a60acf46a7c24d1c91aa1ac843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ec59fa834823d273e7cc8409c35bcbc324f6a60acf46a7c24d1c91aa1ac843->enter($__internal_65ec59fa834823d273e7cc8409c35bcbc324f6a60acf46a7c24d1c91aa1ac843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_65ec59fa834823d273e7cc8409c35bcbc324f6a60acf46a7c24d1c91aa1ac843->leave($__internal_65ec59fa834823d273e7cc8409c35bcbc324f6a60acf46a7c24d1c91aa1ac843_prof);

        
        $__internal_b242d9efb690d89405b2713ac18563f83d8564ef3585dde6998f1222d5e295dd->leave($__internal_b242d9efb690d89405b2713ac18563f83d8564ef3585dde6998f1222d5e295dd_prof);

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
