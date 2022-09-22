<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e39a586884e7d7bcac4ca3818c5a3bdd2c7eda0895224775f212c98e2c240936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_906afc8d1e06615286fabce7790ff63ba722bf0c219aba0798a2180c13249543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906afc8d1e06615286fabce7790ff63ba722bf0c219aba0798a2180c13249543->enter($__internal_906afc8d1e06615286fabce7790ff63ba722bf0c219aba0798a2180c13249543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0b4517edcf1355b93cd5522ef5c6315cf0155aaa0495a2000a93b55ce4344c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4517edcf1355b93cd5522ef5c6315cf0155aaa0495a2000a93b55ce4344c33->enter($__internal_0b4517edcf1355b93cd5522ef5c6315cf0155aaa0495a2000a93b55ce4344c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_906afc8d1e06615286fabce7790ff63ba722bf0c219aba0798a2180c13249543->leave($__internal_906afc8d1e06615286fabce7790ff63ba722bf0c219aba0798a2180c13249543_prof);

        
        $__internal_0b4517edcf1355b93cd5522ef5c6315cf0155aaa0495a2000a93b55ce4344c33->leave($__internal_0b4517edcf1355b93cd5522ef5c6315cf0155aaa0495a2000a93b55ce4344c33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c83efe126db7afd0eb0be1af5da07b128a2f09222bf9a783bd536001f17b5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c83efe126db7afd0eb0be1af5da07b128a2f09222bf9a783bd536001f17b5ec->enter($__internal_8c83efe126db7afd0eb0be1af5da07b128a2f09222bf9a783bd536001f17b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80a85c26f6ad7f65fc229c1fb972062d7254007cfc3f9ce2e9d8fa7a6ddf1fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a85c26f6ad7f65fc229c1fb972062d7254007cfc3f9ce2e9d8fa7a6ddf1fb6->enter($__internal_80a85c26f6ad7f65fc229c1fb972062d7254007cfc3f9ce2e9d8fa7a6ddf1fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80a85c26f6ad7f65fc229c1fb972062d7254007cfc3f9ce2e9d8fa7a6ddf1fb6->leave($__internal_80a85c26f6ad7f65fc229c1fb972062d7254007cfc3f9ce2e9d8fa7a6ddf1fb6_prof);

        
        $__internal_8c83efe126db7afd0eb0be1af5da07b128a2f09222bf9a783bd536001f17b5ec->leave($__internal_8c83efe126db7afd0eb0be1af5da07b128a2f09222bf9a783bd536001f17b5ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f538ba9de55d17a1f9b30783cec5b8e7edda28b84ed066bf008d8d3369bd4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f538ba9de55d17a1f9b30783cec5b8e7edda28b84ed066bf008d8d3369bd4fb->enter($__internal_7f538ba9de55d17a1f9b30783cec5b8e7edda28b84ed066bf008d8d3369bd4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_217b75d377a886dddb37cc191a42d8fa98936d6267bdc1cbd612bb8044c7b01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217b75d377a886dddb37cc191a42d8fa98936d6267bdc1cbd612bb8044c7b01a->enter($__internal_217b75d377a886dddb37cc191a42d8fa98936d6267bdc1cbd612bb8044c7b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_217b75d377a886dddb37cc191a42d8fa98936d6267bdc1cbd612bb8044c7b01a->leave($__internal_217b75d377a886dddb37cc191a42d8fa98936d6267bdc1cbd612bb8044c7b01a_prof);

        
        $__internal_7f538ba9de55d17a1f9b30783cec5b8e7edda28b84ed066bf008d8d3369bd4fb->leave($__internal_7f538ba9de55d17a1f9b30783cec5b8e7edda28b84ed066bf008d8d3369bd4fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
