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
        $__internal_21feba1ea7e092fb755df413bab2006b1908a4c9b872684af8ec687732fba1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21feba1ea7e092fb755df413bab2006b1908a4c9b872684af8ec687732fba1e2->enter($__internal_21feba1ea7e092fb755df413bab2006b1908a4c9b872684af8ec687732fba1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_213041cddcee464310114654f101e0cdf16c01ef9f1f693bff8046b71ba7bcf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213041cddcee464310114654f101e0cdf16c01ef9f1f693bff8046b71ba7bcf6->enter($__internal_213041cddcee464310114654f101e0cdf16c01ef9f1f693bff8046b71ba7bcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_21feba1ea7e092fb755df413bab2006b1908a4c9b872684af8ec687732fba1e2->leave($__internal_21feba1ea7e092fb755df413bab2006b1908a4c9b872684af8ec687732fba1e2_prof);

        
        $__internal_213041cddcee464310114654f101e0cdf16c01ef9f1f693bff8046b71ba7bcf6->leave($__internal_213041cddcee464310114654f101e0cdf16c01ef9f1f693bff8046b71ba7bcf6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_659b7133648ef7d1d18aa64303343d8f1035de0b693bba36fcac9e4f7bbb4810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659b7133648ef7d1d18aa64303343d8f1035de0b693bba36fcac9e4f7bbb4810->enter($__internal_659b7133648ef7d1d18aa64303343d8f1035de0b693bba36fcac9e4f7bbb4810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fbe67ceeb19d328f8e46466260f7fef7b7f838d547d5977a044dc9f6b5406aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbe67ceeb19d328f8e46466260f7fef7b7f838d547d5977a044dc9f6b5406aa->enter($__internal_7fbe67ceeb19d328f8e46466260f7fef7b7f838d547d5977a044dc9f6b5406aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7fbe67ceeb19d328f8e46466260f7fef7b7f838d547d5977a044dc9f6b5406aa->leave($__internal_7fbe67ceeb19d328f8e46466260f7fef7b7f838d547d5977a044dc9f6b5406aa_prof);

        
        $__internal_659b7133648ef7d1d18aa64303343d8f1035de0b693bba36fcac9e4f7bbb4810->leave($__internal_659b7133648ef7d1d18aa64303343d8f1035de0b693bba36fcac9e4f7bbb4810_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6021783060e21d6460adb26d62656fe91f41d7e39e534b2c69be65a02f65e3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6021783060e21d6460adb26d62656fe91f41d7e39e534b2c69be65a02f65e3d8->enter($__internal_6021783060e21d6460adb26d62656fe91f41d7e39e534b2c69be65a02f65e3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83115f3f28e457cdc430612421e198588062f32ccb01e155d4ac17e4b29ba23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83115f3f28e457cdc430612421e198588062f32ccb01e155d4ac17e4b29ba23e->enter($__internal_83115f3f28e457cdc430612421e198588062f32ccb01e155d4ac17e4b29ba23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_83115f3f28e457cdc430612421e198588062f32ccb01e155d4ac17e4b29ba23e->leave($__internal_83115f3f28e457cdc430612421e198588062f32ccb01e155d4ac17e4b29ba23e_prof);

        
        $__internal_6021783060e21d6460adb26d62656fe91f41d7e39e534b2c69be65a02f65e3d8->leave($__internal_6021783060e21d6460adb26d62656fe91f41d7e39e534b2c69be65a02f65e3d8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e62e685e9016bb86555a4a2112ae6c85098aab4a465212d3bc2875520ef3665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e62e685e9016bb86555a4a2112ae6c85098aab4a465212d3bc2875520ef3665->enter($__internal_5e62e685e9016bb86555a4a2112ae6c85098aab4a465212d3bc2875520ef3665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31dea68fe51218a6c61de88d9fc957de04e9ed7bb63cebedb4c0bdc43021adf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dea68fe51218a6c61de88d9fc957de04e9ed7bb63cebedb4c0bdc43021adf9->enter($__internal_31dea68fe51218a6c61de88d9fc957de04e9ed7bb63cebedb4c0bdc43021adf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31dea68fe51218a6c61de88d9fc957de04e9ed7bb63cebedb4c0bdc43021adf9->leave($__internal_31dea68fe51218a6c61de88d9fc957de04e9ed7bb63cebedb4c0bdc43021adf9_prof);

        
        $__internal_5e62e685e9016bb86555a4a2112ae6c85098aab4a465212d3bc2875520ef3665->leave($__internal_5e62e685e9016bb86555a4a2112ae6c85098aab4a465212d3bc2875520ef3665_prof);

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
