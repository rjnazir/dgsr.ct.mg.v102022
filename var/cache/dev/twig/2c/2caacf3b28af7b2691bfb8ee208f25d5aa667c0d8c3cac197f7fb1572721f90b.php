<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_cda0927024adc787287f2a250c8d5243d528678e4a444d3c07555a2d25f38e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dd14e011ff9ca0089f369a4eb50878f9f5acb71a666893a71341f291f1333fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd14e011ff9ca0089f369a4eb50878f9f5acb71a666893a71341f291f1333fb->enter($__internal_6dd14e011ff9ca0089f369a4eb50878f9f5acb71a666893a71341f291f1333fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b03a55824ffe79eeb2697472f3ec1034a979376a55f3f02e31bf738cfbfbe769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03a55824ffe79eeb2697472f3ec1034a979376a55f3f02e31bf738cfbfbe769->enter($__internal_b03a55824ffe79eeb2697472f3ec1034a979376a55f3f02e31bf738cfbfbe769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dd14e011ff9ca0089f369a4eb50878f9f5acb71a666893a71341f291f1333fb->leave($__internal_6dd14e011ff9ca0089f369a4eb50878f9f5acb71a666893a71341f291f1333fb_prof);

        
        $__internal_b03a55824ffe79eeb2697472f3ec1034a979376a55f3f02e31bf738cfbfbe769->leave($__internal_b03a55824ffe79eeb2697472f3ec1034a979376a55f3f02e31bf738cfbfbe769_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bd2d911c7f8737dc97052288593fb7993e869d431c49cfe884d875102893a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd2d911c7f8737dc97052288593fb7993e869d431c49cfe884d875102893a5d->enter($__internal_2bd2d911c7f8737dc97052288593fb7993e869d431c49cfe884d875102893a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3aa1dcecbf6352c6a488d3a5b8f77484308670daf061a57ddfddb89e8101a863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa1dcecbf6352c6a488d3a5b8f77484308670daf061a57ddfddb89e8101a863->enter($__internal_3aa1dcecbf6352c6a488d3a5b8f77484308670daf061a57ddfddb89e8101a863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3aa1dcecbf6352c6a488d3a5b8f77484308670daf061a57ddfddb89e8101a863->leave($__internal_3aa1dcecbf6352c6a488d3a5b8f77484308670daf061a57ddfddb89e8101a863_prof);

        
        $__internal_2bd2d911c7f8737dc97052288593fb7993e869d431c49cfe884d875102893a5d->leave($__internal_2bd2d911c7f8737dc97052288593fb7993e869d431c49cfe884d875102893a5d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
