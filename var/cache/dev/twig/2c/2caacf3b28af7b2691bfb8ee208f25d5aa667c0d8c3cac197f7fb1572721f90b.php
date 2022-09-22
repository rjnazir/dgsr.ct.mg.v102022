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
        $__internal_f904b2e7441c9fa6506908c3d9822b2cfa474cb880b6852d3b837aa58257f98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f904b2e7441c9fa6506908c3d9822b2cfa474cb880b6852d3b837aa58257f98e->enter($__internal_f904b2e7441c9fa6506908c3d9822b2cfa474cb880b6852d3b837aa58257f98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b314ce6ba22c811d7857741a1f04c2a333512513ebd688c92376aeb8b5de34f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b314ce6ba22c811d7857741a1f04c2a333512513ebd688c92376aeb8b5de34f4->enter($__internal_b314ce6ba22c811d7857741a1f04c2a333512513ebd688c92376aeb8b5de34f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f904b2e7441c9fa6506908c3d9822b2cfa474cb880b6852d3b837aa58257f98e->leave($__internal_f904b2e7441c9fa6506908c3d9822b2cfa474cb880b6852d3b837aa58257f98e_prof);

        
        $__internal_b314ce6ba22c811d7857741a1f04c2a333512513ebd688c92376aeb8b5de34f4->leave($__internal_b314ce6ba22c811d7857741a1f04c2a333512513ebd688c92376aeb8b5de34f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f8895d51a3bea4e45ee0c0acff03aeb82fe89e8c2a35588820b773c39c69377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8895d51a3bea4e45ee0c0acff03aeb82fe89e8c2a35588820b773c39c69377->enter($__internal_0f8895d51a3bea4e45ee0c0acff03aeb82fe89e8c2a35588820b773c39c69377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_163e51a95864d704930049e5d58cba821676b51111d4e7ec20921942b4679964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163e51a95864d704930049e5d58cba821676b51111d4e7ec20921942b4679964->enter($__internal_163e51a95864d704930049e5d58cba821676b51111d4e7ec20921942b4679964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_163e51a95864d704930049e5d58cba821676b51111d4e7ec20921942b4679964->leave($__internal_163e51a95864d704930049e5d58cba821676b51111d4e7ec20921942b4679964_prof);

        
        $__internal_0f8895d51a3bea4e45ee0c0acff03aeb82fe89e8c2a35588820b773c39c69377->leave($__internal_0f8895d51a3bea4e45ee0c0acff03aeb82fe89e8c2a35588820b773c39c69377_prof);

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
