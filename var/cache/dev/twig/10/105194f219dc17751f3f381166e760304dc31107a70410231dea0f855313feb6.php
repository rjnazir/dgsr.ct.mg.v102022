<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9f4cf3d187e02c7f71c44c5d3b62dfc940d13d3bc8f27106dd6bc5b825649a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7ca31e90846dba37f36fc83359320cf22b5c48ccac19e4ccb19f88336b50bc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca31e90846dba37f36fc83359320cf22b5c48ccac19e4ccb19f88336b50bc15->enter($__internal_7ca31e90846dba37f36fc83359320cf22b5c48ccac19e4ccb19f88336b50bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_790bb151a8f236341be55629d61d2eefa0ae2cedea427366b4374aaea2fbba11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790bb151a8f236341be55629d61d2eefa0ae2cedea427366b4374aaea2fbba11->enter($__internal_790bb151a8f236341be55629d61d2eefa0ae2cedea427366b4374aaea2fbba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca31e90846dba37f36fc83359320cf22b5c48ccac19e4ccb19f88336b50bc15->leave($__internal_7ca31e90846dba37f36fc83359320cf22b5c48ccac19e4ccb19f88336b50bc15_prof);

        
        $__internal_790bb151a8f236341be55629d61d2eefa0ae2cedea427366b4374aaea2fbba11->leave($__internal_790bb151a8f236341be55629d61d2eefa0ae2cedea427366b4374aaea2fbba11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a0f515faadb6466bd90a50db813c4dd85f8f087c87576661f0108abefe247fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0f515faadb6466bd90a50db813c4dd85f8f087c87576661f0108abefe247fa->enter($__internal_5a0f515faadb6466bd90a50db813c4dd85f8f087c87576661f0108abefe247fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b5841c56be54ca66dbd99509597a8b0b052465c9d7b4840b6d58dd3cf8a39652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5841c56be54ca66dbd99509597a8b0b052465c9d7b4840b6d58dd3cf8a39652->enter($__internal_b5841c56be54ca66dbd99509597a8b0b052465c9d7b4840b6d58dd3cf8a39652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5841c56be54ca66dbd99509597a8b0b052465c9d7b4840b6d58dd3cf8a39652->leave($__internal_b5841c56be54ca66dbd99509597a8b0b052465c9d7b4840b6d58dd3cf8a39652_prof);

        
        $__internal_5a0f515faadb6466bd90a50db813c4dd85f8f087c87576661f0108abefe247fa->leave($__internal_5a0f515faadb6466bd90a50db813c4dd85f8f087c87576661f0108abefe247fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d252a4daea18c1b2d8afde73a88b7a9689cb2941f19faa71647dfa093ab03880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d252a4daea18c1b2d8afde73a88b7a9689cb2941f19faa71647dfa093ab03880->enter($__internal_d252a4daea18c1b2d8afde73a88b7a9689cb2941f19faa71647dfa093ab03880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e119124bf353019fe66e7ad1690da798f82f7214931a731513cf22ca46b0bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e119124bf353019fe66e7ad1690da798f82f7214931a731513cf22ca46b0bfe->enter($__internal_3e119124bf353019fe66e7ad1690da798f82f7214931a731513cf22ca46b0bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e119124bf353019fe66e7ad1690da798f82f7214931a731513cf22ca46b0bfe->leave($__internal_3e119124bf353019fe66e7ad1690da798f82f7214931a731513cf22ca46b0bfe_prof);

        
        $__internal_d252a4daea18c1b2d8afde73a88b7a9689cb2941f19faa71647dfa093ab03880->leave($__internal_d252a4daea18c1b2d8afde73a88b7a9689cb2941f19faa71647dfa093ab03880_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_991129a44a5c116ffab44670538b494035b8aca71fd469d27b723ee932f832ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991129a44a5c116ffab44670538b494035b8aca71fd469d27b723ee932f832ee->enter($__internal_991129a44a5c116ffab44670538b494035b8aca71fd469d27b723ee932f832ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_463ae941bf9347aaf3dd59e73e99cfd47fb517309f62a2779ca2dacb18bf653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463ae941bf9347aaf3dd59e73e99cfd47fb517309f62a2779ca2dacb18bf653f->enter($__internal_463ae941bf9347aaf3dd59e73e99cfd47fb517309f62a2779ca2dacb18bf653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_463ae941bf9347aaf3dd59e73e99cfd47fb517309f62a2779ca2dacb18bf653f->leave($__internal_463ae941bf9347aaf3dd59e73e99cfd47fb517309f62a2779ca2dacb18bf653f_prof);

        
        $__internal_991129a44a5c116ffab44670538b494035b8aca71fd469d27b723ee932f832ee->leave($__internal_991129a44a5c116ffab44670538b494035b8aca71fd469d27b723ee932f832ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
