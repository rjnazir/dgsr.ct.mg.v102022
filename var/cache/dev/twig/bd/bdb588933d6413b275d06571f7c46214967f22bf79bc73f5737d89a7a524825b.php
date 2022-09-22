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
        $__internal_1210670a67966bd6696cdef19baffffa366ee796e23e766296a7794e7dad71e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1210670a67966bd6696cdef19baffffa366ee796e23e766296a7794e7dad71e8->enter($__internal_1210670a67966bd6696cdef19baffffa366ee796e23e766296a7794e7dad71e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_aaac2bcc914eb53b24d946940161e464b8056833fb911bc61744ca122d78dfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaac2bcc914eb53b24d946940161e464b8056833fb911bc61744ca122d78dfca->enter($__internal_aaac2bcc914eb53b24d946940161e464b8056833fb911bc61744ca122d78dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1210670a67966bd6696cdef19baffffa366ee796e23e766296a7794e7dad71e8->leave($__internal_1210670a67966bd6696cdef19baffffa366ee796e23e766296a7794e7dad71e8_prof);

        
        $__internal_aaac2bcc914eb53b24d946940161e464b8056833fb911bc61744ca122d78dfca->leave($__internal_aaac2bcc914eb53b24d946940161e464b8056833fb911bc61744ca122d78dfca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8a3d226c3ecec230594436e8dd750426b0d6787432ff9bd98ce900862539160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a3d226c3ecec230594436e8dd750426b0d6787432ff9bd98ce900862539160->enter($__internal_a8a3d226c3ecec230594436e8dd750426b0d6787432ff9bd98ce900862539160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44c2046c8ffba3788470207ef23b802267f4a928fb3d70b2cdb8774e8ece33be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c2046c8ffba3788470207ef23b802267f4a928fb3d70b2cdb8774e8ece33be->enter($__internal_44c2046c8ffba3788470207ef23b802267f4a928fb3d70b2cdb8774e8ece33be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_44c2046c8ffba3788470207ef23b802267f4a928fb3d70b2cdb8774e8ece33be->leave($__internal_44c2046c8ffba3788470207ef23b802267f4a928fb3d70b2cdb8774e8ece33be_prof);

        
        $__internal_a8a3d226c3ecec230594436e8dd750426b0d6787432ff9bd98ce900862539160->leave($__internal_a8a3d226c3ecec230594436e8dd750426b0d6787432ff9bd98ce900862539160_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8f72fc2fe237d400b684a34eb357c4caf62c1e6f013ce752804b8533f9db5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f72fc2fe237d400b684a34eb357c4caf62c1e6f013ce752804b8533f9db5c2->enter($__internal_c8f72fc2fe237d400b684a34eb357c4caf62c1e6f013ce752804b8533f9db5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7fc43f57f7b1ed53615a831b7d4ac25229bf0af736195119938e7e8ea0b6477c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc43f57f7b1ed53615a831b7d4ac25229bf0af736195119938e7e8ea0b6477c->enter($__internal_7fc43f57f7b1ed53615a831b7d4ac25229bf0af736195119938e7e8ea0b6477c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7fc43f57f7b1ed53615a831b7d4ac25229bf0af736195119938e7e8ea0b6477c->leave($__internal_7fc43f57f7b1ed53615a831b7d4ac25229bf0af736195119938e7e8ea0b6477c_prof);

        
        $__internal_c8f72fc2fe237d400b684a34eb357c4caf62c1e6f013ce752804b8533f9db5c2->leave($__internal_c8f72fc2fe237d400b684a34eb357c4caf62c1e6f013ce752804b8533f9db5c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d34349981cc04b8b582fecdc87cf5d3601bb6195bfd7ad757d08f0797c255a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34349981cc04b8b582fecdc87cf5d3601bb6195bfd7ad757d08f0797c255a55->enter($__internal_d34349981cc04b8b582fecdc87cf5d3601bb6195bfd7ad757d08f0797c255a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_453299808aaa41e5c1194be5aa8471b4d60b1a90d205d9e1938833cda18ee735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453299808aaa41e5c1194be5aa8471b4d60b1a90d205d9e1938833cda18ee735->enter($__internal_453299808aaa41e5c1194be5aa8471b4d60b1a90d205d9e1938833cda18ee735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_453299808aaa41e5c1194be5aa8471b4d60b1a90d205d9e1938833cda18ee735->leave($__internal_453299808aaa41e5c1194be5aa8471b4d60b1a90d205d9e1938833cda18ee735_prof);

        
        $__internal_d34349981cc04b8b582fecdc87cf5d3601bb6195bfd7ad757d08f0797c255a55->leave($__internal_d34349981cc04b8b582fecdc87cf5d3601bb6195bfd7ad757d08f0797c255a55_prof);

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
