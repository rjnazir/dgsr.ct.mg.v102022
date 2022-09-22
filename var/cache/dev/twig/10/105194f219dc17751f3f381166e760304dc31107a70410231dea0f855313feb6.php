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
        $__internal_0865cdff101de6c7bb5f0a61732e26c0ee50dc8632d1d1d975678d5ea26c9164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0865cdff101de6c7bb5f0a61732e26c0ee50dc8632d1d1d975678d5ea26c9164->enter($__internal_0865cdff101de6c7bb5f0a61732e26c0ee50dc8632d1d1d975678d5ea26c9164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_04d525a19ddf287bc0019d3d6bf0617173873796d47a4b231d043b7b0be9d65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d525a19ddf287bc0019d3d6bf0617173873796d47a4b231d043b7b0be9d65a->enter($__internal_04d525a19ddf287bc0019d3d6bf0617173873796d47a4b231d043b7b0be9d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0865cdff101de6c7bb5f0a61732e26c0ee50dc8632d1d1d975678d5ea26c9164->leave($__internal_0865cdff101de6c7bb5f0a61732e26c0ee50dc8632d1d1d975678d5ea26c9164_prof);

        
        $__internal_04d525a19ddf287bc0019d3d6bf0617173873796d47a4b231d043b7b0be9d65a->leave($__internal_04d525a19ddf287bc0019d3d6bf0617173873796d47a4b231d043b7b0be9d65a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b617a3a4cc4bca161a189f73080e86b02019b190a4d7041b3f53a485df8dfdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b617a3a4cc4bca161a189f73080e86b02019b190a4d7041b3f53a485df8dfdf9->enter($__internal_b617a3a4cc4bca161a189f73080e86b02019b190a4d7041b3f53a485df8dfdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f674b85f2d38b2ab024e2607430d0331e4948de391306deaec26047ee6fbb408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f674b85f2d38b2ab024e2607430d0331e4948de391306deaec26047ee6fbb408->enter($__internal_f674b85f2d38b2ab024e2607430d0331e4948de391306deaec26047ee6fbb408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f674b85f2d38b2ab024e2607430d0331e4948de391306deaec26047ee6fbb408->leave($__internal_f674b85f2d38b2ab024e2607430d0331e4948de391306deaec26047ee6fbb408_prof);

        
        $__internal_b617a3a4cc4bca161a189f73080e86b02019b190a4d7041b3f53a485df8dfdf9->leave($__internal_b617a3a4cc4bca161a189f73080e86b02019b190a4d7041b3f53a485df8dfdf9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1808cfa01fac5f08c60076f7b558b487e3db4516938579415b72584f04a3a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1808cfa01fac5f08c60076f7b558b487e3db4516938579415b72584f04a3a17->enter($__internal_a1808cfa01fac5f08c60076f7b558b487e3db4516938579415b72584f04a3a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f86ab4a16488dcfd96ea4ae0579c8cd05642a5b5d1ab3e3386019a4ea6b66739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86ab4a16488dcfd96ea4ae0579c8cd05642a5b5d1ab3e3386019a4ea6b66739->enter($__internal_f86ab4a16488dcfd96ea4ae0579c8cd05642a5b5d1ab3e3386019a4ea6b66739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f86ab4a16488dcfd96ea4ae0579c8cd05642a5b5d1ab3e3386019a4ea6b66739->leave($__internal_f86ab4a16488dcfd96ea4ae0579c8cd05642a5b5d1ab3e3386019a4ea6b66739_prof);

        
        $__internal_a1808cfa01fac5f08c60076f7b558b487e3db4516938579415b72584f04a3a17->leave($__internal_a1808cfa01fac5f08c60076f7b558b487e3db4516938579415b72584f04a3a17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6ce50d2c433a93eb9e0e804b720abdfb223a78753ead686e2b533ef5e1d1e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ce50d2c433a93eb9e0e804b720abdfb223a78753ead686e2b533ef5e1d1e50->enter($__internal_d6ce50d2c433a93eb9e0e804b720abdfb223a78753ead686e2b533ef5e1d1e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7497687bb1d99c394537abf9a0a73bba7f83546356ecf4ca6ce4d7798aa75853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7497687bb1d99c394537abf9a0a73bba7f83546356ecf4ca6ce4d7798aa75853->enter($__internal_7497687bb1d99c394537abf9a0a73bba7f83546356ecf4ca6ce4d7798aa75853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7497687bb1d99c394537abf9a0a73bba7f83546356ecf4ca6ce4d7798aa75853->leave($__internal_7497687bb1d99c394537abf9a0a73bba7f83546356ecf4ca6ce4d7798aa75853_prof);

        
        $__internal_d6ce50d2c433a93eb9e0e804b720abdfb223a78753ead686e2b533ef5e1d1e50->leave($__internal_d6ce50d2c433a93eb9e0e804b720abdfb223a78753ead686e2b533ef5e1d1e50_prof);

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
