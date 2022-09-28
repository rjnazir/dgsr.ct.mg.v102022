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
        $__internal_563a220331558ce22cef557f17e4e5fa89d1a1e85ad664b9cf99a631c1b60859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563a220331558ce22cef557f17e4e5fa89d1a1e85ad664b9cf99a631c1b60859->enter($__internal_563a220331558ce22cef557f17e4e5fa89d1a1e85ad664b9cf99a631c1b60859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_4c6b8825dce2bd74cae51b08cd30b2ad6d9f89892a11f43e97dd3511a2d8f2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6b8825dce2bd74cae51b08cd30b2ad6d9f89892a11f43e97dd3511a2d8f2dd->enter($__internal_4c6b8825dce2bd74cae51b08cd30b2ad6d9f89892a11f43e97dd3511a2d8f2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563a220331558ce22cef557f17e4e5fa89d1a1e85ad664b9cf99a631c1b60859->leave($__internal_563a220331558ce22cef557f17e4e5fa89d1a1e85ad664b9cf99a631c1b60859_prof);

        
        $__internal_4c6b8825dce2bd74cae51b08cd30b2ad6d9f89892a11f43e97dd3511a2d8f2dd->leave($__internal_4c6b8825dce2bd74cae51b08cd30b2ad6d9f89892a11f43e97dd3511a2d8f2dd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8cd14cce40187b729e86b361569942d4ff37663153a2ba6e0f6b31318c950ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd14cce40187b729e86b361569942d4ff37663153a2ba6e0f6b31318c950ea0->enter($__internal_8cd14cce40187b729e86b361569942d4ff37663153a2ba6e0f6b31318c950ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ec2c663ff1654c99788c816876c3e0144f3123e7b41dd8dbf721279e36be1dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2c663ff1654c99788c816876c3e0144f3123e7b41dd8dbf721279e36be1dc9->enter($__internal_ec2c663ff1654c99788c816876c3e0144f3123e7b41dd8dbf721279e36be1dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ec2c663ff1654c99788c816876c3e0144f3123e7b41dd8dbf721279e36be1dc9->leave($__internal_ec2c663ff1654c99788c816876c3e0144f3123e7b41dd8dbf721279e36be1dc9_prof);

        
        $__internal_8cd14cce40187b729e86b361569942d4ff37663153a2ba6e0f6b31318c950ea0->leave($__internal_8cd14cce40187b729e86b361569942d4ff37663153a2ba6e0f6b31318c950ea0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e895092ddc126b2cf5fd4aba29d98b9e94fc0110f5b6aed99242a6cfda01c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e895092ddc126b2cf5fd4aba29d98b9e94fc0110f5b6aed99242a6cfda01c01->enter($__internal_8e895092ddc126b2cf5fd4aba29d98b9e94fc0110f5b6aed99242a6cfda01c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eadccd169b8a2adf2e4b3a898149492da47399c50953814b0db49019df872d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadccd169b8a2adf2e4b3a898149492da47399c50953814b0db49019df872d20->enter($__internal_eadccd169b8a2adf2e4b3a898149492da47399c50953814b0db49019df872d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_eadccd169b8a2adf2e4b3a898149492da47399c50953814b0db49019df872d20->leave($__internal_eadccd169b8a2adf2e4b3a898149492da47399c50953814b0db49019df872d20_prof);

        
        $__internal_8e895092ddc126b2cf5fd4aba29d98b9e94fc0110f5b6aed99242a6cfda01c01->leave($__internal_8e895092ddc126b2cf5fd4aba29d98b9e94fc0110f5b6aed99242a6cfda01c01_prof);

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
