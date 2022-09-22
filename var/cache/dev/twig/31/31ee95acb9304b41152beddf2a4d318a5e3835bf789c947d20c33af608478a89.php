<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f92957d4be0a5c79476179741605639dae777b89ec67641b7ce877cdd84d2db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8e320590065c6fc96000f0f73b4c4ed6a356ca3faba42c1afab295e0f8ee32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e320590065c6fc96000f0f73b4c4ed6a356ca3faba42c1afab295e0f8ee32b->enter($__internal_e8e320590065c6fc96000f0f73b4c4ed6a356ca3faba42c1afab295e0f8ee32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d2efee588877eb18526fc8a0f2e9c198f49f223153b9b446780d79b8fa2b9988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2efee588877eb18526fc8a0f2e9c198f49f223153b9b446780d79b8fa2b9988->enter($__internal_d2efee588877eb18526fc8a0f2e9c198f49f223153b9b446780d79b8fa2b9988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e320590065c6fc96000f0f73b4c4ed6a356ca3faba42c1afab295e0f8ee32b->leave($__internal_e8e320590065c6fc96000f0f73b4c4ed6a356ca3faba42c1afab295e0f8ee32b_prof);

        
        $__internal_d2efee588877eb18526fc8a0f2e9c198f49f223153b9b446780d79b8fa2b9988->leave($__internal_d2efee588877eb18526fc8a0f2e9c198f49f223153b9b446780d79b8fa2b9988_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d16905a9691fcd7cc5d659c8a6cb52a19982e302ca44887485dc8242c24e2466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16905a9691fcd7cc5d659c8a6cb52a19982e302ca44887485dc8242c24e2466->enter($__internal_d16905a9691fcd7cc5d659c8a6cb52a19982e302ca44887485dc8242c24e2466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_78cd47495aa5b27027146dca413bf16e42744844f427fb36b78423cfd27adcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd47495aa5b27027146dca413bf16e42744844f427fb36b78423cfd27adcd9->enter($__internal_78cd47495aa5b27027146dca413bf16e42744844f427fb36b78423cfd27adcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_78cd47495aa5b27027146dca413bf16e42744844f427fb36b78423cfd27adcd9->leave($__internal_78cd47495aa5b27027146dca413bf16e42744844f427fb36b78423cfd27adcd9_prof);

        
        $__internal_d16905a9691fcd7cc5d659c8a6cb52a19982e302ca44887485dc8242c24e2466->leave($__internal_d16905a9691fcd7cc5d659c8a6cb52a19982e302ca44887485dc8242c24e2466_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3af19f93d0f4dbf9824b8aae9fd12d638ae682713a96e5d430ef3c2b128d6b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af19f93d0f4dbf9824b8aae9fd12d638ae682713a96e5d430ef3c2b128d6b6f->enter($__internal_3af19f93d0f4dbf9824b8aae9fd12d638ae682713a96e5d430ef3c2b128d6b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f08f43af1df7beae918281d8e7b7725d042e49069e5c440642388cf803f3d6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08f43af1df7beae918281d8e7b7725d042e49069e5c440642388cf803f3d6fe->enter($__internal_f08f43af1df7beae918281d8e7b7725d042e49069e5c440642388cf803f3d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f08f43af1df7beae918281d8e7b7725d042e49069e5c440642388cf803f3d6fe->leave($__internal_f08f43af1df7beae918281d8e7b7725d042e49069e5c440642388cf803f3d6fe_prof);

        
        $__internal_3af19f93d0f4dbf9824b8aae9fd12d638ae682713a96e5d430ef3c2b128d6b6f->leave($__internal_3af19f93d0f4dbf9824b8aae9fd12d638ae682713a96e5d430ef3c2b128d6b6f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
