<?php

/* default/index.html.twig */
class __TwigTemplate_13735b6219b2ed4240ab4c45d9589bb6be861f3a3130f7335d28b3994829cedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f461a3cd98564e8f098921c470466b9de65bb5ccbe8017fa8d4e1f291bc05ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f461a3cd98564e8f098921c470466b9de65bb5ccbe8017fa8d4e1f291bc05ce->enter($__internal_2f461a3cd98564e8f098921c470466b9de65bb5ccbe8017fa8d4e1f291bc05ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a97998635a848d4db26a96b35535ca23eeecbf4e2927007086f762d2886a1e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97998635a848d4db26a96b35535ca23eeecbf4e2927007086f762d2886a1e89->enter($__internal_a97998635a848d4db26a96b35535ca23eeecbf4e2927007086f762d2886a1e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f461a3cd98564e8f098921c470466b9de65bb5ccbe8017fa8d4e1f291bc05ce->leave($__internal_2f461a3cd98564e8f098921c470466b9de65bb5ccbe8017fa8d4e1f291bc05ce_prof);

        
        $__internal_a97998635a848d4db26a96b35535ca23eeecbf4e2927007086f762d2886a1e89->leave($__internal_a97998635a848d4db26a96b35535ca23eeecbf4e2927007086f762d2886a1e89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e4ea3eb519af97b0921f159ecc86077a06b1e18bef32df496c2efec20c33095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4ea3eb519af97b0921f159ecc86077a06b1e18bef32df496c2efec20c33095->enter($__internal_3e4ea3eb519af97b0921f159ecc86077a06b1e18bef32df496c2efec20c33095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57bb4e1e319881f1d7b3f4c35a404e4048a236c7a49f1801df411bf82c39f880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bb4e1e319881f1d7b3f4c35a404e4048a236c7a49f1801df411bf82c39f880->enter($__internal_57bb4e1e319881f1d7b3f4c35a404e4048a236c7a49f1801df411bf82c39f880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony ";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"status\">
                <p>
                    <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    Your application is now ready. You can start working on it at:
                    <code>";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? $this->getContext($context, "base_dir")), "html", null, true);
        echo "</code>
                </p>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>
                    <svg id=\"icon-book\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"-12.5 9 64 64\" enable-background=\"new -12.5 9 64 64\" xml:space=\"preserve\">
                        <path fill=\"#AAA\" d=\"M6.8,40.8c2.4,0.8,4.5-0.7,4.9-2.5c0.2-1.2-0.3-2.1-1.3-3.2l-0.8-0.8c-0.4-0.5-0.6-1.3-0.2-1.9
                            c0.4-0.5,0.9-0.8,1.8-0.5c1.3,0.4,1.9,1.3,2.9,2.2c-0.4,1.4-0.7,2.9-0.9,4.2l-0.2,1c-0.7,4-1.3,6.2-2.7,7.5
                            c-0.3,0.3-0.7,0.5-1.3,0.6c-0.3,0-0.4-0.3-0.4-0.3c0-0.3,0.2-0.3,0.3-0.4c0.2-0.1,0.5-0.3,0.4-0.8c0-0.7-0.6-1.3-1.3-1.3
                            c-0.6,0-1.4,0.6-1.4,1.7s1,1.9,2.4,1.8c0.8,0,2.5-0.3,4.2-2.5c2-2.5,2.5-5.4,2.9-7.4l0.5-2.8c0.3,0,0.5,0.1,0.8,0.1
                            c2.4,0.1,3.7-1.3,3.7-2.3c0-0.6-0.3-1.2-0.9-1.2c-0.4,0-0.8,0.3-1,0.8c-0.1,0.6,0.8,1.1,0.1,1.5c-0.5,0.3-1.4,0.6-2.7,0.4l0.3-1.3
                            c0.5-2.6,1-5.7,3.2-5.8c0.2,0,0.8,0,0.8,0.4c0,0.2,0,0.2-0.2,0.5c-0.2,0.3-0.3,0.4-0.2,0.7c0,0.7,0.5,1.1,1.2,1.1
                            c0.9,0,1.2-1,1.2-1.4c0-1.2-1.2-1.8-2.6-1.8c-1.5,0.1-2.8,0.9-3.7,2.1c-1.1,1.3-1.8,2.9-2.3,4.5c-0.9-0.8-1.6-1.8-3.1-2.3
                            c-1.1-0.7-2.3-0.5-3.4,0.3c-0.5,0.4-0.8,1-1,1.6c-0.4,1.5,0.4,2.9,0.8,3.4l0.9,1c0.2,0.2,0.6,0.8,0.4,1.5c-0.3,0.8-1.2,1.3-2.1,1
                            c-0.4-0.2-1-0.5-0.9-0.9c0.1-0.2,0.2-0.3,0.3-0.5s0.1-0.3,0.1-0.3c0.2-0.6-0.1-1.4-0.7-1.6c-0.6-0.2-1.2,0-1.3,0.8
                            C4.3,38.4,4.7,40,6.8,40.8z M46.1,20.9c0-4.2-3.2-7.5-7.1-7.5h-3.8C34.8,10.8,32.7,9,30.2,9L-2.3,9.1c-2.8,0.1-4.9,2.4-4.9,5.4
                            L-7,58.6c0,4.8,8.1,13.9,11.6,14.1l34.7-0.1c3.9,0,7-3.4,7-7.6L46.1,20.9z M-0.3,36.4c0-8.6,6.5-15.6,14.5-15.6
                            c8,0,14.5,7,14.5,15.6S22.1,52,14.2,52C6.1,52-0.3,45-0.3,36.4z M42.1,65.1c0,1.8-1.5,3.1-3.1,3.1H4.6c-0.7,0-3-1.8-4.5-4.4h30.4
                            c2.8,0,5-2.4,5-5.4V17.9h3.7c1.6,0,2.9,1.4,2.9,3.1V65.1L42.1,65.1z\"/>
                    </svg>

                    Read the documentation to learn
                    <a href=\"https://symfony.com/doc/";
        // line 39
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), 0, 3), "html", null, true);
        echo "/page_creation.html\">
                        How to create your first page in Symfony
                    </a>
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_57bb4e1e319881f1d7b3f4c35a404e4048a236c7a49f1801df411bf82c39f880->leave($__internal_57bb4e1e319881f1d7b3f4c35a404e4048a236c7a49f1801df411bf82c39f880_prof);

        
        $__internal_3e4ea3eb519af97b0921f159ecc86077a06b1e18bef32df496c2efec20c33095->leave($__internal_3e4ea3eb519af97b0921f159ecc86077a06b1e18bef32df496c2efec20c33095_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b9a1b1d0e47a0786c2d9623ee44a99409cd89a29da97fb6ea798b7afb844d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9a1b1d0e47a0786c2d9623ee44a99409cd89a29da97fb6ea798b7afb844d06->enter($__internal_0b9a1b1d0e47a0786c2d9623ee44a99409cd89a29da97fb6ea798b7afb844d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a0d6e942c1477f8e470e0a1d9f551cef182a812195cbeafffe2f1e53c396db50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d6e942c1477f8e470e0a1d9f551cef182a812195cbeafffe2f1e53c396db50->enter($__internal_a0d6e942c1477f8e470e0a1d9f551cef182a812195cbeafffe2f1e53c396db50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 50
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_a0d6e942c1477f8e470e0a1d9f551cef182a812195cbeafffe2f1e53c396db50->leave($__internal_a0d6e942c1477f8e470e0a1d9f551cef182a812195cbeafffe2f1e53c396db50_prof);

        
        $__internal_0b9a1b1d0e47a0786c2d9623ee44a99409cd89a29da97fb6ea798b7afb844d06->leave($__internal_0b9a1b1d0e47a0786c2d9623ee44a99409cd89a29da97fb6ea798b7afb844d06_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  112 => 49,  93 => 39,  66 => 15,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</h1>
            </div>

            <div id=\"status\">
                <p>
                    <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    Your application is now ready. You can start working on it at:
                    <code>{{ base_dir }}</code>
                </p>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>
                    <svg id=\"icon-book\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"-12.5 9 64 64\" enable-background=\"new -12.5 9 64 64\" xml:space=\"preserve\">
                        <path fill=\"#AAA\" d=\"M6.8,40.8c2.4,0.8,4.5-0.7,4.9-2.5c0.2-1.2-0.3-2.1-1.3-3.2l-0.8-0.8c-0.4-0.5-0.6-1.3-0.2-1.9
                            c0.4-0.5,0.9-0.8,1.8-0.5c1.3,0.4,1.9,1.3,2.9,2.2c-0.4,1.4-0.7,2.9-0.9,4.2l-0.2,1c-0.7,4-1.3,6.2-2.7,7.5
                            c-0.3,0.3-0.7,0.5-1.3,0.6c-0.3,0-0.4-0.3-0.4-0.3c0-0.3,0.2-0.3,0.3-0.4c0.2-0.1,0.5-0.3,0.4-0.8c0-0.7-0.6-1.3-1.3-1.3
                            c-0.6,0-1.4,0.6-1.4,1.7s1,1.9,2.4,1.8c0.8,0,2.5-0.3,4.2-2.5c2-2.5,2.5-5.4,2.9-7.4l0.5-2.8c0.3,0,0.5,0.1,0.8,0.1
                            c2.4,0.1,3.7-1.3,3.7-2.3c0-0.6-0.3-1.2-0.9-1.2c-0.4,0-0.8,0.3-1,0.8c-0.1,0.6,0.8,1.1,0.1,1.5c-0.5,0.3-1.4,0.6-2.7,0.4l0.3-1.3
                            c0.5-2.6,1-5.7,3.2-5.8c0.2,0,0.8,0,0.8,0.4c0,0.2,0,0.2-0.2,0.5c-0.2,0.3-0.3,0.4-0.2,0.7c0,0.7,0.5,1.1,1.2,1.1
                            c0.9,0,1.2-1,1.2-1.4c0-1.2-1.2-1.8-2.6-1.8c-1.5,0.1-2.8,0.9-3.7,2.1c-1.1,1.3-1.8,2.9-2.3,4.5c-0.9-0.8-1.6-1.8-3.1-2.3
                            c-1.1-0.7-2.3-0.5-3.4,0.3c-0.5,0.4-0.8,1-1,1.6c-0.4,1.5,0.4,2.9,0.8,3.4l0.9,1c0.2,0.2,0.6,0.8,0.4,1.5c-0.3,0.8-1.2,1.3-2.1,1
                            c-0.4-0.2-1-0.5-0.9-0.9c0.1-0.2,0.2-0.3,0.3-0.5s0.1-0.3,0.1-0.3c0.2-0.6-0.1-1.4-0.7-1.6c-0.6-0.2-1.2,0-1.3,0.8
                            C4.3,38.4,4.7,40,6.8,40.8z M46.1,20.9c0-4.2-3.2-7.5-7.1-7.5h-3.8C34.8,10.8,32.7,9,30.2,9L-2.3,9.1c-2.8,0.1-4.9,2.4-4.9,5.4
                            L-7,58.6c0,4.8,8.1,13.9,11.6,14.1l34.7-0.1c3.9,0,7-3.4,7-7.6L46.1,20.9z M-0.3,36.4c0-8.6,6.5-15.6,14.5-15.6
                            c8,0,14.5,7,14.5,15.6S22.1,52,14.2,52C6.1,52-0.3,45-0.3,36.4z M42.1,65.1c0,1.8-1.5,3.1-3.1,3.1H4.6c-0.7,0-3-1.8-4.5-4.4h30.4
                            c2.8,0,5-2.4,5-5.4V17.9h3.7c1.6,0,2.9,1.4,2.9,3.1V65.1L42.1,65.1z\"/>
                    </svg>

                    Read the documentation to learn
                    <a href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION')[:3] }}/page_creation.html\">
                        How to create your first page in Symfony
                    </a>
                </p>
            </div>

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\default\\index.html.twig");
    }
}
