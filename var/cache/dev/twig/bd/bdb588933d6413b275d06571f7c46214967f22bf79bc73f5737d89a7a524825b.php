<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3b6d10ce9e9a70efede9122a2818048d32f21267e81f523da48b2de759a59b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_b8617db625e4a1e7e9f5ea0ae0385b5e546216aefda37bec3bfe845f51244afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8617db625e4a1e7e9f5ea0ae0385b5e546216aefda37bec3bfe845f51244afc->enter($__internal_b8617db625e4a1e7e9f5ea0ae0385b5e546216aefda37bec3bfe845f51244afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_58c1ed9a53a56c301cc3cf0d93f385ddff23964a50f280ff224fb8c0283b172f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c1ed9a53a56c301cc3cf0d93f385ddff23964a50f280ff224fb8c0283b172f->enter($__internal_58c1ed9a53a56c301cc3cf0d93f385ddff23964a50f280ff224fb8c0283b172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8617db625e4a1e7e9f5ea0ae0385b5e546216aefda37bec3bfe845f51244afc->leave($__internal_b8617db625e4a1e7e9f5ea0ae0385b5e546216aefda37bec3bfe845f51244afc_prof);

        
        $__internal_58c1ed9a53a56c301cc3cf0d93f385ddff23964a50f280ff224fb8c0283b172f->leave($__internal_58c1ed9a53a56c301cc3cf0d93f385ddff23964a50f280ff224fb8c0283b172f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71cbf5c3e6151c1bb5d959a13bb64e6291b749676872ded689abb750e2672938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cbf5c3e6151c1bb5d959a13bb64e6291b749676872ded689abb750e2672938->enter($__internal_71cbf5c3e6151c1bb5d959a13bb64e6291b749676872ded689abb750e2672938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36cc2e4a297ba4c134bb2817771df03d9e01db40ff9e42f4317a567142351190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cc2e4a297ba4c134bb2817771df03d9e01db40ff9e42f4317a567142351190->enter($__internal_36cc2e4a297ba4c134bb2817771df03d9e01db40ff9e42f4317a567142351190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_36cc2e4a297ba4c134bb2817771df03d9e01db40ff9e42f4317a567142351190->leave($__internal_36cc2e4a297ba4c134bb2817771df03d9e01db40ff9e42f4317a567142351190_prof);

        
        $__internal_71cbf5c3e6151c1bb5d959a13bb64e6291b749676872ded689abb750e2672938->leave($__internal_71cbf5c3e6151c1bb5d959a13bb64e6291b749676872ded689abb750e2672938_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4166cd31677549844bbf7d57d30ef712a9ad97600f651fdfff5446517d46504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4166cd31677549844bbf7d57d30ef712a9ad97600f651fdfff5446517d46504->enter($__internal_b4166cd31677549844bbf7d57d30ef712a9ad97600f651fdfff5446517d46504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27eda5cbc37c44153a5e78271f21f696fde8c41c89b996979858f3d0d1a397e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eda5cbc37c44153a5e78271f21f696fde8c41c89b996979858f3d0d1a397e9->enter($__internal_27eda5cbc37c44153a5e78271f21f696fde8c41c89b996979858f3d0d1a397e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_27eda5cbc37c44153a5e78271f21f696fde8c41c89b996979858f3d0d1a397e9->leave($__internal_27eda5cbc37c44153a5e78271f21f696fde8c41c89b996979858f3d0d1a397e9_prof);

        
        $__internal_b4166cd31677549844bbf7d57d30ef712a9ad97600f651fdfff5446517d46504->leave($__internal_b4166cd31677549844bbf7d57d30ef712a9ad97600f651fdfff5446517d46504_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50d738254d5f80c8c6581634dab4a1d085f69d48e43af6c40ecc4693396cc8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d738254d5f80c8c6581634dab4a1d085f69d48e43af6c40ecc4693396cc8e3->enter($__internal_50d738254d5f80c8c6581634dab4a1d085f69d48e43af6c40ecc4693396cc8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80e7f83c2e91d10d78fa0fde219e1517deda113024c334aed25a2c52e9f9975b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e7f83c2e91d10d78fa0fde219e1517deda113024c334aed25a2c52e9f9975b->enter($__internal_80e7f83c2e91d10d78fa0fde219e1517deda113024c334aed25a2c52e9f9975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_80e7f83c2e91d10d78fa0fde219e1517deda113024c334aed25a2c52e9f9975b->leave($__internal_80e7f83c2e91d10d78fa0fde219e1517deda113024c334aed25a2c52e9f9975b_prof);

        
        $__internal_50d738254d5f80c8c6581634dab4a1d085f69d48e43af6c40ecc4693396cc8e3->leave($__internal_50d738254d5f80c8c6581634dab4a1d085f69d48e43af6c40ecc4693396cc8e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
