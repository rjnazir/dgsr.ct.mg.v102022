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
        $__internal_c2f3187e15d7c531926157e7b100af5e4a4711d85d9df6dbfc83415b1e703667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f3187e15d7c531926157e7b100af5e4a4711d85d9df6dbfc83415b1e703667->enter($__internal_c2f3187e15d7c531926157e7b100af5e4a4711d85d9df6dbfc83415b1e703667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ac27007c45549c079493afa079eef1715e33b59f97c20b7cc8fcb0935cfb9e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac27007c45549c079493afa079eef1715e33b59f97c20b7cc8fcb0935cfb9e41->enter($__internal_ac27007c45549c079493afa079eef1715e33b59f97c20b7cc8fcb0935cfb9e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f3187e15d7c531926157e7b100af5e4a4711d85d9df6dbfc83415b1e703667->leave($__internal_c2f3187e15d7c531926157e7b100af5e4a4711d85d9df6dbfc83415b1e703667_prof);

        
        $__internal_ac27007c45549c079493afa079eef1715e33b59f97c20b7cc8fcb0935cfb9e41->leave($__internal_ac27007c45549c079493afa079eef1715e33b59f97c20b7cc8fcb0935cfb9e41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfc705db3bac367c466794ac972134572675df4e564d05f54cabeaac10feae2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc705db3bac367c466794ac972134572675df4e564d05f54cabeaac10feae2c->enter($__internal_bfc705db3bac367c466794ac972134572675df4e564d05f54cabeaac10feae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02919e862fed783e5b80aca1c135d79d9a475af4696735219d419d2f31897003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02919e862fed783e5b80aca1c135d79d9a475af4696735219d419d2f31897003->enter($__internal_02919e862fed783e5b80aca1c135d79d9a475af4696735219d419d2f31897003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_02919e862fed783e5b80aca1c135d79d9a475af4696735219d419d2f31897003->leave($__internal_02919e862fed783e5b80aca1c135d79d9a475af4696735219d419d2f31897003_prof);

        
        $__internal_bfc705db3bac367c466794ac972134572675df4e564d05f54cabeaac10feae2c->leave($__internal_bfc705db3bac367c466794ac972134572675df4e564d05f54cabeaac10feae2c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8168f5e68ad55d554ab2a149578a56a0e20ce02b602d8bd6ed4590287d2a248e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8168f5e68ad55d554ab2a149578a56a0e20ce02b602d8bd6ed4590287d2a248e->enter($__internal_8168f5e68ad55d554ab2a149578a56a0e20ce02b602d8bd6ed4590287d2a248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ecc8fb6b831c432be645858ea0ddacd99c46b0ef9654f8270c20e7cb6e66cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecc8fb6b831c432be645858ea0ddacd99c46b0ef9654f8270c20e7cb6e66cd0->enter($__internal_7ecc8fb6b831c432be645858ea0ddacd99c46b0ef9654f8270c20e7cb6e66cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7ecc8fb6b831c432be645858ea0ddacd99c46b0ef9654f8270c20e7cb6e66cd0->leave($__internal_7ecc8fb6b831c432be645858ea0ddacd99c46b0ef9654f8270c20e7cb6e66cd0_prof);

        
        $__internal_8168f5e68ad55d554ab2a149578a56a0e20ce02b602d8bd6ed4590287d2a248e->leave($__internal_8168f5e68ad55d554ab2a149578a56a0e20ce02b602d8bd6ed4590287d2a248e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bf1ab2a9859d5878212b77c90cbecf6b438f7674b10cc04201727a9a4d67ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf1ab2a9859d5878212b77c90cbecf6b438f7674b10cc04201727a9a4d67ef4->enter($__internal_9bf1ab2a9859d5878212b77c90cbecf6b438f7674b10cc04201727a9a4d67ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_040a9ad644948aac2a5e63b438cd27369868a1c3db551b9bb46eec3ceab57d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040a9ad644948aac2a5e63b438cd27369868a1c3db551b9bb46eec3ceab57d6f->enter($__internal_040a9ad644948aac2a5e63b438cd27369868a1c3db551b9bb46eec3ceab57d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_040a9ad644948aac2a5e63b438cd27369868a1c3db551b9bb46eec3ceab57d6f->leave($__internal_040a9ad644948aac2a5e63b438cd27369868a1c3db551b9bb46eec3ceab57d6f_prof);

        
        $__internal_9bf1ab2a9859d5878212b77c90cbecf6b438f7674b10cc04201727a9a4d67ef4->leave($__internal_9bf1ab2a9859d5878212b77c90cbecf6b438f7674b10cc04201727a9a4d67ef4_prof);

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
