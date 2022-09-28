<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18f8151750d50ceb60120d6f7be7f00c81abe5375e387e910b1f2f20e5dcf74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec27dc8e39a39b7a58d62dcfdf39d61194aad6dad1562da518bb056a3982e355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec27dc8e39a39b7a58d62dcfdf39d61194aad6dad1562da518bb056a3982e355->enter($__internal_ec27dc8e39a39b7a58d62dcfdf39d61194aad6dad1562da518bb056a3982e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7078becb0ea3b8b042b6d869875c61984421a370ede73870a5889cdd66a2344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7078becb0ea3b8b042b6d869875c61984421a370ede73870a5889cdd66a2344->enter($__internal_f7078becb0ea3b8b042b6d869875c61984421a370ede73870a5889cdd66a2344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec27dc8e39a39b7a58d62dcfdf39d61194aad6dad1562da518bb056a3982e355->leave($__internal_ec27dc8e39a39b7a58d62dcfdf39d61194aad6dad1562da518bb056a3982e355_prof);

        
        $__internal_f7078becb0ea3b8b042b6d869875c61984421a370ede73870a5889cdd66a2344->leave($__internal_f7078becb0ea3b8b042b6d869875c61984421a370ede73870a5889cdd66a2344_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cca30e7714f8478f73ee2897ab58f955ce441bb08b0d3d8324ab67cfe6e4c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cca30e7714f8478f73ee2897ab58f955ce441bb08b0d3d8324ab67cfe6e4c96->enter($__internal_2cca30e7714f8478f73ee2897ab58f955ce441bb08b0d3d8324ab67cfe6e4c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8080f9b3348483ac95214c4717fca3f451971a41f8d7c10bc631e60b3d87c30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8080f9b3348483ac95214c4717fca3f451971a41f8d7c10bc631e60b3d87c30e->enter($__internal_8080f9b3348483ac95214c4717fca3f451971a41f8d7c10bc631e60b3d87c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8080f9b3348483ac95214c4717fca3f451971a41f8d7c10bc631e60b3d87c30e->leave($__internal_8080f9b3348483ac95214c4717fca3f451971a41f8d7c10bc631e60b3d87c30e_prof);

        
        $__internal_2cca30e7714f8478f73ee2897ab58f955ce441bb08b0d3d8324ab67cfe6e4c96->leave($__internal_2cca30e7714f8478f73ee2897ab58f955ce441bb08b0d3d8324ab67cfe6e4c96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f3ee7276b7b6da7e666edd7bbcf9518bc8ae43090036afc9d3537fc86315d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3ee7276b7b6da7e666edd7bbcf9518bc8ae43090036afc9d3537fc86315d60->enter($__internal_6f3ee7276b7b6da7e666edd7bbcf9518bc8ae43090036afc9d3537fc86315d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36c8134cb68c0e0cd33944575e0425f3d800cb3056983aaf12b6d4e20c6aed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c8134cb68c0e0cd33944575e0425f3d800cb3056983aaf12b6d4e20c6aed4c->enter($__internal_36c8134cb68c0e0cd33944575e0425f3d800cb3056983aaf12b6d4e20c6aed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36c8134cb68c0e0cd33944575e0425f3d800cb3056983aaf12b6d4e20c6aed4c->leave($__internal_36c8134cb68c0e0cd33944575e0425f3d800cb3056983aaf12b6d4e20c6aed4c_prof);

        
        $__internal_6f3ee7276b7b6da7e666edd7bbcf9518bc8ae43090036afc9d3537fc86315d60->leave($__internal_6f3ee7276b7b6da7e666edd7bbcf9518bc8ae43090036afc9d3537fc86315d60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db19cf376d49cefcb33d1fccdf2e41542f29b61bb48fe7c0e9a824708ff69f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db19cf376d49cefcb33d1fccdf2e41542f29b61bb48fe7c0e9a824708ff69f7e->enter($__internal_db19cf376d49cefcb33d1fccdf2e41542f29b61bb48fe7c0e9a824708ff69f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4d8cbb1d186e9f0ef376157f6ad276e5226b128181290d972c4f848256ba5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d8cbb1d186e9f0ef376157f6ad276e5226b128181290d972c4f848256ba5f0->enter($__internal_c4d8cbb1d186e9f0ef376157f6ad276e5226b128181290d972c4f848256ba5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4d8cbb1d186e9f0ef376157f6ad276e5226b128181290d972c4f848256ba5f0->leave($__internal_c4d8cbb1d186e9f0ef376157f6ad276e5226b128181290d972c4f848256ba5f0_prof);

        
        $__internal_db19cf376d49cefcb33d1fccdf2e41542f29b61bb48fe7c0e9a824708ff69f7e->leave($__internal_db19cf376d49cefcb33d1fccdf2e41542f29b61bb48fe7c0e9a824708ff69f7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
