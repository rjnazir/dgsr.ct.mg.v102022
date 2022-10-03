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
        $__internal_e600f89181e1754c33960b21c19121e3467a69e3f8e96d611565d50d9f21fde9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e600f89181e1754c33960b21c19121e3467a69e3f8e96d611565d50d9f21fde9->enter($__internal_e600f89181e1754c33960b21c19121e3467a69e3f8e96d611565d50d9f21fde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c96a13e8a16f5f9d75b213d53e26d7052c62231c828cc123f39c554f2b6f95f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96a13e8a16f5f9d75b213d53e26d7052c62231c828cc123f39c554f2b6f95f1->enter($__internal_c96a13e8a16f5f9d75b213d53e26d7052c62231c828cc123f39c554f2b6f95f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e600f89181e1754c33960b21c19121e3467a69e3f8e96d611565d50d9f21fde9->leave($__internal_e600f89181e1754c33960b21c19121e3467a69e3f8e96d611565d50d9f21fde9_prof);

        
        $__internal_c96a13e8a16f5f9d75b213d53e26d7052c62231c828cc123f39c554f2b6f95f1->leave($__internal_c96a13e8a16f5f9d75b213d53e26d7052c62231c828cc123f39c554f2b6f95f1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb117c7d6c3f1b935d285a4d436a6c2861cd33703575f2178436d7f272a5bfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb117c7d6c3f1b935d285a4d436a6c2861cd33703575f2178436d7f272a5bfd1->enter($__internal_eb117c7d6c3f1b935d285a4d436a6c2861cd33703575f2178436d7f272a5bfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_220bf316818a50e20999ada8999c21f566694ebb15844d91fbb1daf38f12b79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220bf316818a50e20999ada8999c21f566694ebb15844d91fbb1daf38f12b79f->enter($__internal_220bf316818a50e20999ada8999c21f566694ebb15844d91fbb1daf38f12b79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_220bf316818a50e20999ada8999c21f566694ebb15844d91fbb1daf38f12b79f->leave($__internal_220bf316818a50e20999ada8999c21f566694ebb15844d91fbb1daf38f12b79f_prof);

        
        $__internal_eb117c7d6c3f1b935d285a4d436a6c2861cd33703575f2178436d7f272a5bfd1->leave($__internal_eb117c7d6c3f1b935d285a4d436a6c2861cd33703575f2178436d7f272a5bfd1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_726baca403afb4c4767ba5e22b5089ea4f0d0621b3b640482f13c1991ff9abfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726baca403afb4c4767ba5e22b5089ea4f0d0621b3b640482f13c1991ff9abfb->enter($__internal_726baca403afb4c4767ba5e22b5089ea4f0d0621b3b640482f13c1991ff9abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f9791064cb4e3d688a6b99104e5792193fa86c3de3f72bbcfcc3f0d3ce07b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9791064cb4e3d688a6b99104e5792193fa86c3de3f72bbcfcc3f0d3ce07b81->enter($__internal_5f9791064cb4e3d688a6b99104e5792193fa86c3de3f72bbcfcc3f0d3ce07b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5f9791064cb4e3d688a6b99104e5792193fa86c3de3f72bbcfcc3f0d3ce07b81->leave($__internal_5f9791064cb4e3d688a6b99104e5792193fa86c3de3f72bbcfcc3f0d3ce07b81_prof);

        
        $__internal_726baca403afb4c4767ba5e22b5089ea4f0d0621b3b640482f13c1991ff9abfb->leave($__internal_726baca403afb4c4767ba5e22b5089ea4f0d0621b3b640482f13c1991ff9abfb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f7c0f917cc76f55ce3bc69421871b66cb7ff16ca9b06e7abf504ea12c348045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7c0f917cc76f55ce3bc69421871b66cb7ff16ca9b06e7abf504ea12c348045->enter($__internal_5f7c0f917cc76f55ce3bc69421871b66cb7ff16ca9b06e7abf504ea12c348045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceb43ff0e28519654a040e3edbc7cf14311686f34c62652a16afe6bc1e6b1885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb43ff0e28519654a040e3edbc7cf14311686f34c62652a16afe6bc1e6b1885->enter($__internal_ceb43ff0e28519654a040e3edbc7cf14311686f34c62652a16afe6bc1e6b1885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ceb43ff0e28519654a040e3edbc7cf14311686f34c62652a16afe6bc1e6b1885->leave($__internal_ceb43ff0e28519654a040e3edbc7cf14311686f34c62652a16afe6bc1e6b1885_prof);

        
        $__internal_5f7c0f917cc76f55ce3bc69421871b66cb7ff16ca9b06e7abf504ea12c348045->leave($__internal_5f7c0f917cc76f55ce3bc69421871b66cb7ff16ca9b06e7abf504ea12c348045_prof);

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
