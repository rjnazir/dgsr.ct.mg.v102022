<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_79679ad6c3dd2a55ae6d34e4ec2393f5eb46513f7d85244bac745220d300d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6b7a1e64ba4f9c2eb3125a5050e2b1212036efc7157ce98a1ac1dc6d14dbb987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7a1e64ba4f9c2eb3125a5050e2b1212036efc7157ce98a1ac1dc6d14dbb987->enter($__internal_6b7a1e64ba4f9c2eb3125a5050e2b1212036efc7157ce98a1ac1dc6d14dbb987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_be1f8301e6b67f09d3cbe3fb91746d1903e2d0f3afd8b18ff10d4798449be59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1f8301e6b67f09d3cbe3fb91746d1903e2d0f3afd8b18ff10d4798449be59b->enter($__internal_be1f8301e6b67f09d3cbe3fb91746d1903e2d0f3afd8b18ff10d4798449be59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b7a1e64ba4f9c2eb3125a5050e2b1212036efc7157ce98a1ac1dc6d14dbb987->leave($__internal_6b7a1e64ba4f9c2eb3125a5050e2b1212036efc7157ce98a1ac1dc6d14dbb987_prof);

        
        $__internal_be1f8301e6b67f09d3cbe3fb91746d1903e2d0f3afd8b18ff10d4798449be59b->leave($__internal_be1f8301e6b67f09d3cbe3fb91746d1903e2d0f3afd8b18ff10d4798449be59b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ee21780308fb8271504a7f050aa76a274ff12b0a5007c15b0b75b3f1a82e762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee21780308fb8271504a7f050aa76a274ff12b0a5007c15b0b75b3f1a82e762->enter($__internal_4ee21780308fb8271504a7f050aa76a274ff12b0a5007c15b0b75b3f1a82e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e971ee3c3003cf6cca68f9be685ebcb9e60ad0dfe74b4595864a46c2cf82664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e971ee3c3003cf6cca68f9be685ebcb9e60ad0dfe74b4595864a46c2cf82664->enter($__internal_2e971ee3c3003cf6cca68f9be685ebcb9e60ad0dfe74b4595864a46c2cf82664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2e971ee3c3003cf6cca68f9be685ebcb9e60ad0dfe74b4595864a46c2cf82664->leave($__internal_2e971ee3c3003cf6cca68f9be685ebcb9e60ad0dfe74b4595864a46c2cf82664_prof);

        
        $__internal_4ee21780308fb8271504a7f050aa76a274ff12b0a5007c15b0b75b3f1a82e762->leave($__internal_4ee21780308fb8271504a7f050aa76a274ff12b0a5007c15b0b75b3f1a82e762_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aabff666e0491f9fc5edae6591f17db84f374d26951ed2557d3272ab0259bb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabff666e0491f9fc5edae6591f17db84f374d26951ed2557d3272ab0259bb8c->enter($__internal_aabff666e0491f9fc5edae6591f17db84f374d26951ed2557d3272ab0259bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e91fe997839ae3522a3d20a8f1af179c43985fe289bc88ad2bb8856bc5f8b4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91fe997839ae3522a3d20a8f1af179c43985fe289bc88ad2bb8856bc5f8b4ca->enter($__internal_e91fe997839ae3522a3d20a8f1af179c43985fe289bc88ad2bb8856bc5f8b4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e91fe997839ae3522a3d20a8f1af179c43985fe289bc88ad2bb8856bc5f8b4ca->leave($__internal_e91fe997839ae3522a3d20a8f1af179c43985fe289bc88ad2bb8856bc5f8b4ca_prof);

        
        $__internal_aabff666e0491f9fc5edae6591f17db84f374d26951ed2557d3272ab0259bb8c->leave($__internal_aabff666e0491f9fc5edae6591f17db84f374d26951ed2557d3272ab0259bb8c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23ed5f053961be845c5ff18898b5aff0b21983dde3f5482b6b1da9497ab2c34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ed5f053961be845c5ff18898b5aff0b21983dde3f5482b6b1da9497ab2c34c->enter($__internal_23ed5f053961be845c5ff18898b5aff0b21983dde3f5482b6b1da9497ab2c34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e613f6218ef34f9605a8774271c57557ed099d2e1781ae52af4b3474fb72c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e613f6218ef34f9605a8774271c57557ed099d2e1781ae52af4b3474fb72c53->enter($__internal_6e613f6218ef34f9605a8774271c57557ed099d2e1781ae52af4b3474fb72c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6e613f6218ef34f9605a8774271c57557ed099d2e1781ae52af4b3474fb72c53->leave($__internal_6e613f6218ef34f9605a8774271c57557ed099d2e1781ae52af4b3474fb72c53_prof);

        
        $__internal_23ed5f053961be845c5ff18898b5aff0b21983dde3f5482b6b1da9497ab2c34c->leave($__internal_23ed5f053961be845c5ff18898b5aff0b21983dde3f5482b6b1da9497ab2c34c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
