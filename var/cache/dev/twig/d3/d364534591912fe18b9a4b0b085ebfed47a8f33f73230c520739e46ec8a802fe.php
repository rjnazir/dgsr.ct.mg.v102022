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
        $__internal_1663528948c7c2fd0ea72616dab5f17a3e5285660066451206bdd0aeb17e74ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1663528948c7c2fd0ea72616dab5f17a3e5285660066451206bdd0aeb17e74ba->enter($__internal_1663528948c7c2fd0ea72616dab5f17a3e5285660066451206bdd0aeb17e74ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0ac3f24b718bacf505ee0cb126d99d393e94cdddf570e11bf1ba76a45f3c4554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac3f24b718bacf505ee0cb126d99d393e94cdddf570e11bf1ba76a45f3c4554->enter($__internal_0ac3f24b718bacf505ee0cb126d99d393e94cdddf570e11bf1ba76a45f3c4554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1663528948c7c2fd0ea72616dab5f17a3e5285660066451206bdd0aeb17e74ba->leave($__internal_1663528948c7c2fd0ea72616dab5f17a3e5285660066451206bdd0aeb17e74ba_prof);

        
        $__internal_0ac3f24b718bacf505ee0cb126d99d393e94cdddf570e11bf1ba76a45f3c4554->leave($__internal_0ac3f24b718bacf505ee0cb126d99d393e94cdddf570e11bf1ba76a45f3c4554_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8345913e3a63b1931d95b75d2213b2057af69a4fe3ca8781ce51f6248add8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8345913e3a63b1931d95b75d2213b2057af69a4fe3ca8781ce51f6248add8a5->enter($__internal_d8345913e3a63b1931d95b75d2213b2057af69a4fe3ca8781ce51f6248add8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_25f8d6dfe70cfa4d886e3474ccde177be5ffb05fd3a491cffdd7b4a646f25fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f8d6dfe70cfa4d886e3474ccde177be5ffb05fd3a491cffdd7b4a646f25fb5->enter($__internal_25f8d6dfe70cfa4d886e3474ccde177be5ffb05fd3a491cffdd7b4a646f25fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_25f8d6dfe70cfa4d886e3474ccde177be5ffb05fd3a491cffdd7b4a646f25fb5->leave($__internal_25f8d6dfe70cfa4d886e3474ccde177be5ffb05fd3a491cffdd7b4a646f25fb5_prof);

        
        $__internal_d8345913e3a63b1931d95b75d2213b2057af69a4fe3ca8781ce51f6248add8a5->leave($__internal_d8345913e3a63b1931d95b75d2213b2057af69a4fe3ca8781ce51f6248add8a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a896212ee2d03e2881c5f76db2923f6c5bb5a4ab71af1b98a9bff1fd10895f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a896212ee2d03e2881c5f76db2923f6c5bb5a4ab71af1b98a9bff1fd10895f9b->enter($__internal_a896212ee2d03e2881c5f76db2923f6c5bb5a4ab71af1b98a9bff1fd10895f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7caf96036794822121124612378ed23ea9e16b2c4bf7b07886fc14819ad98d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7caf96036794822121124612378ed23ea9e16b2c4bf7b07886fc14819ad98d8->enter($__internal_e7caf96036794822121124612378ed23ea9e16b2c4bf7b07886fc14819ad98d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7caf96036794822121124612378ed23ea9e16b2c4bf7b07886fc14819ad98d8->leave($__internal_e7caf96036794822121124612378ed23ea9e16b2c4bf7b07886fc14819ad98d8_prof);

        
        $__internal_a896212ee2d03e2881c5f76db2923f6c5bb5a4ab71af1b98a9bff1fd10895f9b->leave($__internal_a896212ee2d03e2881c5f76db2923f6c5bb5a4ab71af1b98a9bff1fd10895f9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f9eff6d272514dca9d110bacb58b999bf67094930b6d97fca41b4527c4b58c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9eff6d272514dca9d110bacb58b999bf67094930b6d97fca41b4527c4b58c0->enter($__internal_2f9eff6d272514dca9d110bacb58b999bf67094930b6d97fca41b4527c4b58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_697c9dfbc3de44fa1c6c54debe1b363eee0c078ac05bf29df9282dfac4a0477c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697c9dfbc3de44fa1c6c54debe1b363eee0c078ac05bf29df9282dfac4a0477c->enter($__internal_697c9dfbc3de44fa1c6c54debe1b363eee0c078ac05bf29df9282dfac4a0477c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_697c9dfbc3de44fa1c6c54debe1b363eee0c078ac05bf29df9282dfac4a0477c->leave($__internal_697c9dfbc3de44fa1c6c54debe1b363eee0c078ac05bf29df9282dfac4a0477c_prof);

        
        $__internal_2f9eff6d272514dca9d110bacb58b999bf67094930b6d97fca41b4527c4b58c0->leave($__internal_2f9eff6d272514dca9d110bacb58b999bf67094930b6d97fca41b4527c4b58c0_prof);

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
