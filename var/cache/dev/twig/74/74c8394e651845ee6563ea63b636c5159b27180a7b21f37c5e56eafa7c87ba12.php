<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_cbe9ba73c6344bbeede0232553acff12bab02f5166fcddaf917774492978128d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1fb377eef19277051f73d38b9ca8655d17239a7a7aef0c7277afd3fd480a021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fb377eef19277051f73d38b9ca8655d17239a7a7aef0c7277afd3fd480a021->enter($__internal_f1fb377eef19277051f73d38b9ca8655d17239a7a7aef0c7277afd3fd480a021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_76711919be373b3d0ef8a4254582590141eec1e71aed43f7f0090270a7dda091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76711919be373b3d0ef8a4254582590141eec1e71aed43f7f0090270a7dda091->enter($__internal_76711919be373b3d0ef8a4254582590141eec1e71aed43f7f0090270a7dda091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fb377eef19277051f73d38b9ca8655d17239a7a7aef0c7277afd3fd480a021->leave($__internal_f1fb377eef19277051f73d38b9ca8655d17239a7a7aef0c7277afd3fd480a021_prof);

        
        $__internal_76711919be373b3d0ef8a4254582590141eec1e71aed43f7f0090270a7dda091->leave($__internal_76711919be373b3d0ef8a4254582590141eec1e71aed43f7f0090270a7dda091_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5c7fa1850677e7d7fa2833ce10672b3a6689b7a865db9aad6e87e6934c93ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c7fa1850677e7d7fa2833ce10672b3a6689b7a865db9aad6e87e6934c93ed2->enter($__internal_b5c7fa1850677e7d7fa2833ce10672b3a6689b7a865db9aad6e87e6934c93ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec7199248bfbb19004e01ec8c5243a6b43face6b5f019b523827dbb56c435380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7199248bfbb19004e01ec8c5243a6b43face6b5f019b523827dbb56c435380->enter($__internal_ec7199248bfbb19004e01ec8c5243a6b43face6b5f019b523827dbb56c435380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ec7199248bfbb19004e01ec8c5243a6b43face6b5f019b523827dbb56c435380->leave($__internal_ec7199248bfbb19004e01ec8c5243a6b43face6b5f019b523827dbb56c435380_prof);

        
        $__internal_b5c7fa1850677e7d7fa2833ce10672b3a6689b7a865db9aad6e87e6934c93ed2->leave($__internal_b5c7fa1850677e7d7fa2833ce10672b3a6689b7a865db9aad6e87e6934c93ed2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
