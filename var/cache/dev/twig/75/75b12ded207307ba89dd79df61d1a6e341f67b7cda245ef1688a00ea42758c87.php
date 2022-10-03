<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_92afae8f0a8b2a127401ed5edabf1caa0186b55ffbfe779b077167282bc0889d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_c177ffbfe4e7d49eec83ddb9bf301903ab913e2622c1b804a9e7192eb0b4db50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c177ffbfe4e7d49eec83ddb9bf301903ab913e2622c1b804a9e7192eb0b4db50->enter($__internal_c177ffbfe4e7d49eec83ddb9bf301903ab913e2622c1b804a9e7192eb0b4db50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0cfda2b47fa79ac771ab03fa5d7f1dee2ee2c718fea687cc259a8d09e1f7f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfda2b47fa79ac771ab03fa5d7f1dee2ee2c718fea687cc259a8d09e1f7f51a->enter($__internal_0cfda2b47fa79ac771ab03fa5d7f1dee2ee2c718fea687cc259a8d09e1f7f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c177ffbfe4e7d49eec83ddb9bf301903ab913e2622c1b804a9e7192eb0b4db50->leave($__internal_c177ffbfe4e7d49eec83ddb9bf301903ab913e2622c1b804a9e7192eb0b4db50_prof);

        
        $__internal_0cfda2b47fa79ac771ab03fa5d7f1dee2ee2c718fea687cc259a8d09e1f7f51a->leave($__internal_0cfda2b47fa79ac771ab03fa5d7f1dee2ee2c718fea687cc259a8d09e1f7f51a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a47760a320205e944e527fa751a3a60d2abf334715e4bd8575a11cd2a049ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a47760a320205e944e527fa751a3a60d2abf334715e4bd8575a11cd2a049ccb->enter($__internal_1a47760a320205e944e527fa751a3a60d2abf334715e4bd8575a11cd2a049ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_526e4088511868164b30f0afd06886920233a36a911ddb5d4e066cc9cf49cdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526e4088511868164b30f0afd06886920233a36a911ddb5d4e066cc9cf49cdde->enter($__internal_526e4088511868164b30f0afd06886920233a36a911ddb5d4e066cc9cf49cdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_526e4088511868164b30f0afd06886920233a36a911ddb5d4e066cc9cf49cdde->leave($__internal_526e4088511868164b30f0afd06886920233a36a911ddb5d4e066cc9cf49cdde_prof);

        
        $__internal_1a47760a320205e944e527fa751a3a60d2abf334715e4bd8575a11cd2a049ccb->leave($__internal_1a47760a320205e944e527fa751a3a60d2abf334715e4bd8575a11cd2a049ccb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
