<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_f0be25d39606d05a98b9b12650c550d63e62f3c818e760e80ad0bdfd2499707d extends Twig_Template
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
        $__internal_c3b8a78cc4a3ac96b20ab1eee04508b4aca0f523a640934f045c99ca5f861404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b8a78cc4a3ac96b20ab1eee04508b4aca0f523a640934f045c99ca5f861404->enter($__internal_c3b8a78cc4a3ac96b20ab1eee04508b4aca0f523a640934f045c99ca5f861404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9d55b8ed2a629c4ed2e998247523b282687b693b74543bf125c33320f1edb74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d55b8ed2a629c4ed2e998247523b282687b693b74543bf125c33320f1edb74b->enter($__internal_9d55b8ed2a629c4ed2e998247523b282687b693b74543bf125c33320f1edb74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_c3b8a78cc4a3ac96b20ab1eee04508b4aca0f523a640934f045c99ca5f861404->leave($__internal_c3b8a78cc4a3ac96b20ab1eee04508b4aca0f523a640934f045c99ca5f861404_prof);

        
        $__internal_9d55b8ed2a629c4ed2e998247523b282687b693b74543bf125c33320f1edb74b->leave($__internal_9d55b8ed2a629c4ed2e998247523b282687b693b74543bf125c33320f1edb74b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57a06bedb1d8a0de9982709cb5273c4cfe678f4ee14e81aab0c33110ec17491f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a06bedb1d8a0de9982709cb5273c4cfe678f4ee14e81aab0c33110ec17491f->enter($__internal_57a06bedb1d8a0de9982709cb5273c4cfe678f4ee14e81aab0c33110ec17491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03b6928ee8ef0c53d206d3fcc261c258d4661eb0df6280ce48ef5b7207c65165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b6928ee8ef0c53d206d3fcc261c258d4661eb0df6280ce48ef5b7207c65165->enter($__internal_03b6928ee8ef0c53d206d3fcc261c258d4661eb0df6280ce48ef5b7207c65165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_03b6928ee8ef0c53d206d3fcc261c258d4661eb0df6280ce48ef5b7207c65165->leave($__internal_03b6928ee8ef0c53d206d3fcc261c258d4661eb0df6280ce48ef5b7207c65165_prof);

        
        $__internal_57a06bedb1d8a0de9982709cb5273c4cfe678f4ee14e81aab0c33110ec17491f->leave($__internal_57a06bedb1d8a0de9982709cb5273c4cfe678f4ee14e81aab0c33110ec17491f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a6d798fb2408bc5f3e621f6df147e5153b06360c0bd059f60a82daa24f33c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6d798fb2408bc5f3e621f6df147e5153b06360c0bd059f60a82daa24f33c13->enter($__internal_7a6d798fb2408bc5f3e621f6df147e5153b06360c0bd059f60a82daa24f33c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_129a2e3862cb3b116a52ab8dea61566e6c60e7e3da8bafa8c173c5682886f850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129a2e3862cb3b116a52ab8dea61566e6c60e7e3da8bafa8c173c5682886f850->enter($__internal_129a2e3862cb3b116a52ab8dea61566e6c60e7e3da8bafa8c173c5682886f850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_129a2e3862cb3b116a52ab8dea61566e6c60e7e3da8bafa8c173c5682886f850->leave($__internal_129a2e3862cb3b116a52ab8dea61566e6c60e7e3da8bafa8c173c5682886f850_prof);

        
        $__internal_7a6d798fb2408bc5f3e621f6df147e5153b06360c0bd059f60a82daa24f33c13->leave($__internal_7a6d798fb2408bc5f3e621f6df147e5153b06360c0bd059f60a82daa24f33c13_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fa6c9ec092fcc79752a8a95341b4c93fcdff0da56b0e895b54f447465270ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa6c9ec092fcc79752a8a95341b4c93fcdff0da56b0e895b54f447465270ddf->enter($__internal_3fa6c9ec092fcc79752a8a95341b4c93fcdff0da56b0e895b54f447465270ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0066c947b5e767642f87ec5450c313a3ece8c3379d80f20262c1cd19bed1ca1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0066c947b5e767642f87ec5450c313a3ece8c3379d80f20262c1cd19bed1ca1c->enter($__internal_0066c947b5e767642f87ec5450c313a3ece8c3379d80f20262c1cd19bed1ca1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0066c947b5e767642f87ec5450c313a3ece8c3379d80f20262c1cd19bed1ca1c->leave($__internal_0066c947b5e767642f87ec5450c313a3ece8c3379d80f20262c1cd19bed1ca1c_prof);

        
        $__internal_3fa6c9ec092fcc79752a8a95341b4c93fcdff0da56b0e895b54f447465270ddf->leave($__internal_3fa6c9ec092fcc79752a8a95341b4c93fcdff0da56b0e895b54f447465270ddf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
