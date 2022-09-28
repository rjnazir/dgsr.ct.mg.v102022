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
        $__internal_e5e53c463b3f1e0c554e6cb44ee185ffe7b2df8f692a73e9c7e78362bf965c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e53c463b3f1e0c554e6cb44ee185ffe7b2df8f692a73e9c7e78362bf965c35->enter($__internal_e5e53c463b3f1e0c554e6cb44ee185ffe7b2df8f692a73e9c7e78362bf965c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9c1698e67a309d1de2c7e1001398214fb76fcde16c3d84919fe828801fabe5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1698e67a309d1de2c7e1001398214fb76fcde16c3d84919fe828801fabe5fb->enter($__internal_9c1698e67a309d1de2c7e1001398214fb76fcde16c3d84919fe828801fabe5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_e5e53c463b3f1e0c554e6cb44ee185ffe7b2df8f692a73e9c7e78362bf965c35->leave($__internal_e5e53c463b3f1e0c554e6cb44ee185ffe7b2df8f692a73e9c7e78362bf965c35_prof);

        
        $__internal_9c1698e67a309d1de2c7e1001398214fb76fcde16c3d84919fe828801fabe5fb->leave($__internal_9c1698e67a309d1de2c7e1001398214fb76fcde16c3d84919fe828801fabe5fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3c26cae77bd80a435a6d7cade82f0dbf544d60ad4e17c683ed467d544a8c209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c26cae77bd80a435a6d7cade82f0dbf544d60ad4e17c683ed467d544a8c209->enter($__internal_b3c26cae77bd80a435a6d7cade82f0dbf544d60ad4e17c683ed467d544a8c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b9168491d21c071432c8fd23e58e891d118075a2b6451ff09f22155433fc902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9168491d21c071432c8fd23e58e891d118075a2b6451ff09f22155433fc902->enter($__internal_2b9168491d21c071432c8fd23e58e891d118075a2b6451ff09f22155433fc902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2b9168491d21c071432c8fd23e58e891d118075a2b6451ff09f22155433fc902->leave($__internal_2b9168491d21c071432c8fd23e58e891d118075a2b6451ff09f22155433fc902_prof);

        
        $__internal_b3c26cae77bd80a435a6d7cade82f0dbf544d60ad4e17c683ed467d544a8c209->leave($__internal_b3c26cae77bd80a435a6d7cade82f0dbf544d60ad4e17c683ed467d544a8c209_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_84b2d47b8184fc629b76c61b7a956564b757eed28097e76cc332c9c0da7b5785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b2d47b8184fc629b76c61b7a956564b757eed28097e76cc332c9c0da7b5785->enter($__internal_84b2d47b8184fc629b76c61b7a956564b757eed28097e76cc332c9c0da7b5785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_940609f7bb50294e3d315125b31de2f7fb1b28c9abd28fa2931f92bdd00e5d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940609f7bb50294e3d315125b31de2f7fb1b28c9abd28fa2931f92bdd00e5d0c->enter($__internal_940609f7bb50294e3d315125b31de2f7fb1b28c9abd28fa2931f92bdd00e5d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_940609f7bb50294e3d315125b31de2f7fb1b28c9abd28fa2931f92bdd00e5d0c->leave($__internal_940609f7bb50294e3d315125b31de2f7fb1b28c9abd28fa2931f92bdd00e5d0c_prof);

        
        $__internal_84b2d47b8184fc629b76c61b7a956564b757eed28097e76cc332c9c0da7b5785->leave($__internal_84b2d47b8184fc629b76c61b7a956564b757eed28097e76cc332c9c0da7b5785_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a96297dd2ea1b830979415bd2f200545477c3a6bbb21dc32ef5ff805fa99109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a96297dd2ea1b830979415bd2f200545477c3a6bbb21dc32ef5ff805fa99109->enter($__internal_8a96297dd2ea1b830979415bd2f200545477c3a6bbb21dc32ef5ff805fa99109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8712e4767d31080b08284d94f55076e3b5a12ebcd5b55c069869649880a801fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8712e4767d31080b08284d94f55076e3b5a12ebcd5b55c069869649880a801fc->enter($__internal_8712e4767d31080b08284d94f55076e3b5a12ebcd5b55c069869649880a801fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8712e4767d31080b08284d94f55076e3b5a12ebcd5b55c069869649880a801fc->leave($__internal_8712e4767d31080b08284d94f55076e3b5a12ebcd5b55c069869649880a801fc_prof);

        
        $__internal_8a96297dd2ea1b830979415bd2f200545477c3a6bbb21dc32ef5ff805fa99109->leave($__internal_8a96297dd2ea1b830979415bd2f200545477c3a6bbb21dc32ef5ff805fa99109_prof);

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
