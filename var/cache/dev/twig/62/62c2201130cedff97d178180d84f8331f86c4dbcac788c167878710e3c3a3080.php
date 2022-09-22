<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9056fd2e723c8a9c79c8e95aa1d75e1040a76716b68c7fb3e6c5f28472bc2c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_08b2f4d314be078f72a1a3b96b180e44c3c8db06a36448f0f4206f4569038cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b2f4d314be078f72a1a3b96b180e44c3c8db06a36448f0f4206f4569038cfa->enter($__internal_08b2f4d314be078f72a1a3b96b180e44c3c8db06a36448f0f4206f4569038cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_63fa79d779c4ee5be8820495a67fb8fa787f57ef7385ba2170b49eaf3bc46aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fa79d779c4ee5be8820495a67fb8fa787f57ef7385ba2170b49eaf3bc46aa3->enter($__internal_63fa79d779c4ee5be8820495a67fb8fa787f57ef7385ba2170b49eaf3bc46aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b2f4d314be078f72a1a3b96b180e44c3c8db06a36448f0f4206f4569038cfa->leave($__internal_08b2f4d314be078f72a1a3b96b180e44c3c8db06a36448f0f4206f4569038cfa_prof);

        
        $__internal_63fa79d779c4ee5be8820495a67fb8fa787f57ef7385ba2170b49eaf3bc46aa3->leave($__internal_63fa79d779c4ee5be8820495a67fb8fa787f57ef7385ba2170b49eaf3bc46aa3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0ce2f695305ec08176194fdac4b7a5b3cdfdbffec12b1e9da409860a1806fc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce2f695305ec08176194fdac4b7a5b3cdfdbffec12b1e9da409860a1806fc6c->enter($__internal_0ce2f695305ec08176194fdac4b7a5b3cdfdbffec12b1e9da409860a1806fc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_887c29550766a7aaa9949857da5dfb9f3f9225687fa4de412e3f917fe9940653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887c29550766a7aaa9949857da5dfb9f3f9225687fa4de412e3f917fe9940653->enter($__internal_887c29550766a7aaa9949857da5dfb9f3f9225687fa4de412e3f917fe9940653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_887c29550766a7aaa9949857da5dfb9f3f9225687fa4de412e3f917fe9940653->leave($__internal_887c29550766a7aaa9949857da5dfb9f3f9225687fa4de412e3f917fe9940653_prof);

        
        $__internal_0ce2f695305ec08176194fdac4b7a5b3cdfdbffec12b1e9da409860a1806fc6c->leave($__internal_0ce2f695305ec08176194fdac4b7a5b3cdfdbffec12b1e9da409860a1806fc6c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e7aba2f9817258f5a46b8da30d7f28ac215345199af662ab3e5d3b9e62eb975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7aba2f9817258f5a46b8da30d7f28ac215345199af662ab3e5d3b9e62eb975->enter($__internal_0e7aba2f9817258f5a46b8da30d7f28ac215345199af662ab3e5d3b9e62eb975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc4cee9b5a505e614c4e6ffb68d039120d78be6a292ba86d6d3409e71f1bc077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4cee9b5a505e614c4e6ffb68d039120d78be6a292ba86d6d3409e71f1bc077->enter($__internal_dc4cee9b5a505e614c4e6ffb68d039120d78be6a292ba86d6d3409e71f1bc077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dc4cee9b5a505e614c4e6ffb68d039120d78be6a292ba86d6d3409e71f1bc077->leave($__internal_dc4cee9b5a505e614c4e6ffb68d039120d78be6a292ba86d6d3409e71f1bc077_prof);

        
        $__internal_0e7aba2f9817258f5a46b8da30d7f28ac215345199af662ab3e5d3b9e62eb975->leave($__internal_0e7aba2f9817258f5a46b8da30d7f28ac215345199af662ab3e5d3b9e62eb975_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
