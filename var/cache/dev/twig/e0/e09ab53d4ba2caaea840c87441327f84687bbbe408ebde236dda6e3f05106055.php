<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_94188a499e504cf88d5f255f68d5059bacbfd6d2752ba1b42475e756e7cc78c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cc90f0df68ce72062d7ea94da6f2c21784fc8cef1cfec3dacd2d95696be93c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc90f0df68ce72062d7ea94da6f2c21784fc8cef1cfec3dacd2d95696be93c87->enter($__internal_cc90f0df68ce72062d7ea94da6f2c21784fc8cef1cfec3dacd2d95696be93c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6118d729996f7697d1210361dc0ed88bbcb0b569c1be9432945072aac989d425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6118d729996f7697d1210361dc0ed88bbcb0b569c1be9432945072aac989d425->enter($__internal_6118d729996f7697d1210361dc0ed88bbcb0b569c1be9432945072aac989d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc90f0df68ce72062d7ea94da6f2c21784fc8cef1cfec3dacd2d95696be93c87->leave($__internal_cc90f0df68ce72062d7ea94da6f2c21784fc8cef1cfec3dacd2d95696be93c87_prof);

        
        $__internal_6118d729996f7697d1210361dc0ed88bbcb0b569c1be9432945072aac989d425->leave($__internal_6118d729996f7697d1210361dc0ed88bbcb0b569c1be9432945072aac989d425_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6799551330d1728ba4afefd4f726df1b9cb3a491039aad88070b0d6fe1852f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6799551330d1728ba4afefd4f726df1b9cb3a491039aad88070b0d6fe1852f->enter($__internal_ff6799551330d1728ba4afefd4f726df1b9cb3a491039aad88070b0d6fe1852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27a4b6b87b7223ad963828dd573b7413fb5b68c08bbe4842fed70977e731c35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a4b6b87b7223ad963828dd573b7413fb5b68c08bbe4842fed70977e731c35b->enter($__internal_27a4b6b87b7223ad963828dd573b7413fb5b68c08bbe4842fed70977e731c35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_27a4b6b87b7223ad963828dd573b7413fb5b68c08bbe4842fed70977e731c35b->leave($__internal_27a4b6b87b7223ad963828dd573b7413fb5b68c08bbe4842fed70977e731c35b_prof);

        
        $__internal_ff6799551330d1728ba4afefd4f726df1b9cb3a491039aad88070b0d6fe1852f->leave($__internal_ff6799551330d1728ba4afefd4f726df1b9cb3a491039aad88070b0d6fe1852f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ff2a643732dba9fc30245178f5960d826791c738b513e8e6f46eca2f6806949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff2a643732dba9fc30245178f5960d826791c738b513e8e6f46eca2f6806949->enter($__internal_6ff2a643732dba9fc30245178f5960d826791c738b513e8e6f46eca2f6806949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_920bcfd703499928aed30f55ef5bd788e8b608276ad7c0a4a3db9f4f31739532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920bcfd703499928aed30f55ef5bd788e8b608276ad7c0a4a3db9f4f31739532->enter($__internal_920bcfd703499928aed30f55ef5bd788e8b608276ad7c0a4a3db9f4f31739532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_920bcfd703499928aed30f55ef5bd788e8b608276ad7c0a4a3db9f4f31739532->leave($__internal_920bcfd703499928aed30f55ef5bd788e8b608276ad7c0a4a3db9f4f31739532_prof);

        
        $__internal_6ff2a643732dba9fc30245178f5960d826791c738b513e8e6f46eca2f6806949->leave($__internal_6ff2a643732dba9fc30245178f5960d826791c738b513e8e6f46eca2f6806949_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
