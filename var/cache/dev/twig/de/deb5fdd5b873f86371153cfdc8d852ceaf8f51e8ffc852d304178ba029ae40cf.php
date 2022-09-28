<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8a50db4faa94afcefdcf679c994a52cfdbbe9d2ca5d8d038143bd71b48c9aece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_907f460ba2c61fdd6003b50d865306ebbbdb622b52a944c4799fd97c0fef61e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907f460ba2c61fdd6003b50d865306ebbbdb622b52a944c4799fd97c0fef61e0->enter($__internal_907f460ba2c61fdd6003b50d865306ebbbdb622b52a944c4799fd97c0fef61e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_73d3c93a15a10aa43f06c175f78fdeab4b482928aa724875e88a416133ea6d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d3c93a15a10aa43f06c175f78fdeab4b482928aa724875e88a416133ea6d26->enter($__internal_73d3c93a15a10aa43f06c175f78fdeab4b482928aa724875e88a416133ea6d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_907f460ba2c61fdd6003b50d865306ebbbdb622b52a944c4799fd97c0fef61e0->leave($__internal_907f460ba2c61fdd6003b50d865306ebbbdb622b52a944c4799fd97c0fef61e0_prof);

        
        $__internal_73d3c93a15a10aa43f06c175f78fdeab4b482928aa724875e88a416133ea6d26->leave($__internal_73d3c93a15a10aa43f06c175f78fdeab4b482928aa724875e88a416133ea6d26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7aeafa5472cce6c4ad04ec736b3222e84dcb04a1631f2f0797f34863fe8c890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7aeafa5472cce6c4ad04ec736b3222e84dcb04a1631f2f0797f34863fe8c890->enter($__internal_e7aeafa5472cce6c4ad04ec736b3222e84dcb04a1631f2f0797f34863fe8c890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_808d59b686eb83fbebce7c938bdc455c4b595ec2161e2ca6ad5409d24f2608ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808d59b686eb83fbebce7c938bdc455c4b595ec2161e2ca6ad5409d24f2608ef->enter($__internal_808d59b686eb83fbebce7c938bdc455c4b595ec2161e2ca6ad5409d24f2608ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_808d59b686eb83fbebce7c938bdc455c4b595ec2161e2ca6ad5409d24f2608ef->leave($__internal_808d59b686eb83fbebce7c938bdc455c4b595ec2161e2ca6ad5409d24f2608ef_prof);

        
        $__internal_e7aeafa5472cce6c4ad04ec736b3222e84dcb04a1631f2f0797f34863fe8c890->leave($__internal_e7aeafa5472cce6c4ad04ec736b3222e84dcb04a1631f2f0797f34863fe8c890_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5df2d2f2ac77ecba79ee61e1556dfa391dcdd3fc828613921bbff3f69cc12c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df2d2f2ac77ecba79ee61e1556dfa391dcdd3fc828613921bbff3f69cc12c62->enter($__internal_5df2d2f2ac77ecba79ee61e1556dfa391dcdd3fc828613921bbff3f69cc12c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_206bee7696a4c07bed96f9a3f0ff4bee0d764d5764f9343f307cd1cc0774fec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206bee7696a4c07bed96f9a3f0ff4bee0d764d5764f9343f307cd1cc0774fec1->enter($__internal_206bee7696a4c07bed96f9a3f0ff4bee0d764d5764f9343f307cd1cc0774fec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_206bee7696a4c07bed96f9a3f0ff4bee0d764d5764f9343f307cd1cc0774fec1->leave($__internal_206bee7696a4c07bed96f9a3f0ff4bee0d764d5764f9343f307cd1cc0774fec1_prof);

        
        $__internal_5df2d2f2ac77ecba79ee61e1556dfa391dcdd3fc828613921bbff3f69cc12c62->leave($__internal_5df2d2f2ac77ecba79ee61e1556dfa391dcdd3fc828613921bbff3f69cc12c62_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_25edb96d44629fcaed0a0f57adb22b19ef38a21c65b4ade0f325984ccf038e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25edb96d44629fcaed0a0f57adb22b19ef38a21c65b4ade0f325984ccf038e98->enter($__internal_25edb96d44629fcaed0a0f57adb22b19ef38a21c65b4ade0f325984ccf038e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_836e9c3e86cf022978b0bf1b77335c7c4d3db118013bee82b0443131cd7dbdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836e9c3e86cf022978b0bf1b77335c7c4d3db118013bee82b0443131cd7dbdea->enter($__internal_836e9c3e86cf022978b0bf1b77335c7c4d3db118013bee82b0443131cd7dbdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_836e9c3e86cf022978b0bf1b77335c7c4d3db118013bee82b0443131cd7dbdea->leave($__internal_836e9c3e86cf022978b0bf1b77335c7c4d3db118013bee82b0443131cd7dbdea_prof);

        
        $__internal_25edb96d44629fcaed0a0f57adb22b19ef38a21c65b4ade0f325984ccf038e98->leave($__internal_25edb96d44629fcaed0a0f57adb22b19ef38a21c65b4ade0f325984ccf038e98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
