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
        $__internal_e8b1a1e01b6c7f10b9bbb9a000327c34808864bb9233da2f50177e31f7136d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b1a1e01b6c7f10b9bbb9a000327c34808864bb9233da2f50177e31f7136d5c->enter($__internal_e8b1a1e01b6c7f10b9bbb9a000327c34808864bb9233da2f50177e31f7136d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0f35df599d9c2434b97a6e7f392853aec6cf89967c849f7f0f73d1d7a0f84b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f35df599d9c2434b97a6e7f392853aec6cf89967c849f7f0f73d1d7a0f84b78->enter($__internal_0f35df599d9c2434b97a6e7f392853aec6cf89967c849f7f0f73d1d7a0f84b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8b1a1e01b6c7f10b9bbb9a000327c34808864bb9233da2f50177e31f7136d5c->leave($__internal_e8b1a1e01b6c7f10b9bbb9a000327c34808864bb9233da2f50177e31f7136d5c_prof);

        
        $__internal_0f35df599d9c2434b97a6e7f392853aec6cf89967c849f7f0f73d1d7a0f84b78->leave($__internal_0f35df599d9c2434b97a6e7f392853aec6cf89967c849f7f0f73d1d7a0f84b78_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_96eb4ef9a9e5210acdde17999de81f6a3883b339bd472ea2cc5789d896d29bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96eb4ef9a9e5210acdde17999de81f6a3883b339bd472ea2cc5789d896d29bf8->enter($__internal_96eb4ef9a9e5210acdde17999de81f6a3883b339bd472ea2cc5789d896d29bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dc8b633f90009113fd349f9ac5ca3ceccc8f7cfd807ecfc4d7df9c078bbe159b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8b633f90009113fd349f9ac5ca3ceccc8f7cfd807ecfc4d7df9c078bbe159b->enter($__internal_dc8b633f90009113fd349f9ac5ca3ceccc8f7cfd807ecfc4d7df9c078bbe159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dc8b633f90009113fd349f9ac5ca3ceccc8f7cfd807ecfc4d7df9c078bbe159b->leave($__internal_dc8b633f90009113fd349f9ac5ca3ceccc8f7cfd807ecfc4d7df9c078bbe159b_prof);

        
        $__internal_96eb4ef9a9e5210acdde17999de81f6a3883b339bd472ea2cc5789d896d29bf8->leave($__internal_96eb4ef9a9e5210acdde17999de81f6a3883b339bd472ea2cc5789d896d29bf8_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3223c80d10a5a72d3dc78f970196741ceea5badee685536ae2cb2bb617823ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3223c80d10a5a72d3dc78f970196741ceea5badee685536ae2cb2bb617823ea1->enter($__internal_3223c80d10a5a72d3dc78f970196741ceea5badee685536ae2cb2bb617823ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_071da09371db60bf608fb41ddbba043658caad02117e77fbac0bdb5b23ca5f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071da09371db60bf608fb41ddbba043658caad02117e77fbac0bdb5b23ca5f54->enter($__internal_071da09371db60bf608fb41ddbba043658caad02117e77fbac0bdb5b23ca5f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_071da09371db60bf608fb41ddbba043658caad02117e77fbac0bdb5b23ca5f54->leave($__internal_071da09371db60bf608fb41ddbba043658caad02117e77fbac0bdb5b23ca5f54_prof);

        
        $__internal_3223c80d10a5a72d3dc78f970196741ceea5badee685536ae2cb2bb617823ea1->leave($__internal_3223c80d10a5a72d3dc78f970196741ceea5badee685536ae2cb2bb617823ea1_prof);

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
