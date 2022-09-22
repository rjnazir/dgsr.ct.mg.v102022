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
        $__internal_bd54f2ecd5cc1e8a28712bc8ad6b05a5e710f7b00675f4572da0f9216ae831af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd54f2ecd5cc1e8a28712bc8ad6b05a5e710f7b00675f4572da0f9216ae831af->enter($__internal_bd54f2ecd5cc1e8a28712bc8ad6b05a5e710f7b00675f4572da0f9216ae831af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f45782af3c0987f0ad1e66e3e069907314dac6f7649f38542df71abccff801d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45782af3c0987f0ad1e66e3e069907314dac6f7649f38542df71abccff801d8->enter($__internal_f45782af3c0987f0ad1e66e3e069907314dac6f7649f38542df71abccff801d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd54f2ecd5cc1e8a28712bc8ad6b05a5e710f7b00675f4572da0f9216ae831af->leave($__internal_bd54f2ecd5cc1e8a28712bc8ad6b05a5e710f7b00675f4572da0f9216ae831af_prof);

        
        $__internal_f45782af3c0987f0ad1e66e3e069907314dac6f7649f38542df71abccff801d8->leave($__internal_f45782af3c0987f0ad1e66e3e069907314dac6f7649f38542df71abccff801d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_030c43f8a64e1d78562984fa334aed818410c30d449cfaefb710920c45ba2d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030c43f8a64e1d78562984fa334aed818410c30d449cfaefb710920c45ba2d45->enter($__internal_030c43f8a64e1d78562984fa334aed818410c30d449cfaefb710920c45ba2d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a90419360d94ad8e8114c543838acd8c511d349e743c7f57a8edfe96192c111c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90419360d94ad8e8114c543838acd8c511d349e743c7f57a8edfe96192c111c->enter($__internal_a90419360d94ad8e8114c543838acd8c511d349e743c7f57a8edfe96192c111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a90419360d94ad8e8114c543838acd8c511d349e743c7f57a8edfe96192c111c->leave($__internal_a90419360d94ad8e8114c543838acd8c511d349e743c7f57a8edfe96192c111c_prof);

        
        $__internal_030c43f8a64e1d78562984fa334aed818410c30d449cfaefb710920c45ba2d45->leave($__internal_030c43f8a64e1d78562984fa334aed818410c30d449cfaefb710920c45ba2d45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef7f40fbba4bbd0998cb6c38532493f5ff5d9f01e7a017ee2da23d717ed2c09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7f40fbba4bbd0998cb6c38532493f5ff5d9f01e7a017ee2da23d717ed2c09f->enter($__internal_ef7f40fbba4bbd0998cb6c38532493f5ff5d9f01e7a017ee2da23d717ed2c09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30a0a597b489d2b8506e3a46a2e333de968714098547aaac417b2c2a1191f98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a0a597b489d2b8506e3a46a2e333de968714098547aaac417b2c2a1191f98a->enter($__internal_30a0a597b489d2b8506e3a46a2e333de968714098547aaac417b2c2a1191f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_30a0a597b489d2b8506e3a46a2e333de968714098547aaac417b2c2a1191f98a->leave($__internal_30a0a597b489d2b8506e3a46a2e333de968714098547aaac417b2c2a1191f98a_prof);

        
        $__internal_ef7f40fbba4bbd0998cb6c38532493f5ff5d9f01e7a017ee2da23d717ed2c09f->leave($__internal_ef7f40fbba4bbd0998cb6c38532493f5ff5d9f01e7a017ee2da23d717ed2c09f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81645f9ba66824506adad6db20d16ac953708e31c7065f5bb6ad7fb02c13ee80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81645f9ba66824506adad6db20d16ac953708e31c7065f5bb6ad7fb02c13ee80->enter($__internal_81645f9ba66824506adad6db20d16ac953708e31c7065f5bb6ad7fb02c13ee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fed71af105b6b928316ba45af8a8e0febe9f12f3ac0b8eaf86cd4b56f9b9f36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed71af105b6b928316ba45af8a8e0febe9f12f3ac0b8eaf86cd4b56f9b9f36a->enter($__internal_fed71af105b6b928316ba45af8a8e0febe9f12f3ac0b8eaf86cd4b56f9b9f36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fed71af105b6b928316ba45af8a8e0febe9f12f3ac0b8eaf86cd4b56f9b9f36a->leave($__internal_fed71af105b6b928316ba45af8a8e0febe9f12f3ac0b8eaf86cd4b56f9b9f36a_prof);

        
        $__internal_81645f9ba66824506adad6db20d16ac953708e31c7065f5bb6ad7fb02c13ee80->leave($__internal_81645f9ba66824506adad6db20d16ac953708e31c7065f5bb6ad7fb02c13ee80_prof);

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
