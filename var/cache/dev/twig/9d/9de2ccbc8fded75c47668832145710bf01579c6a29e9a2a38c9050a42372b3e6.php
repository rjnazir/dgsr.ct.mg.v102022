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
        $__internal_8ff4616ccf5ea852a29807cc384266c0dd96611a6bb4e9fd0c6e7582275833b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff4616ccf5ea852a29807cc384266c0dd96611a6bb4e9fd0c6e7582275833b3->enter($__internal_8ff4616ccf5ea852a29807cc384266c0dd96611a6bb4e9fd0c6e7582275833b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_53c7dd19b4c566c73b5d662b3eabd51e055b9d227288ece33954d46c0fc52f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c7dd19b4c566c73b5d662b3eabd51e055b9d227288ece33954d46c0fc52f58->enter($__internal_53c7dd19b4c566c73b5d662b3eabd51e055b9d227288ece33954d46c0fc52f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff4616ccf5ea852a29807cc384266c0dd96611a6bb4e9fd0c6e7582275833b3->leave($__internal_8ff4616ccf5ea852a29807cc384266c0dd96611a6bb4e9fd0c6e7582275833b3_prof);

        
        $__internal_53c7dd19b4c566c73b5d662b3eabd51e055b9d227288ece33954d46c0fc52f58->leave($__internal_53c7dd19b4c566c73b5d662b3eabd51e055b9d227288ece33954d46c0fc52f58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4e3b4a29ad0efa99038d11faf7a06f675af76ecb9e25a21d4685d851097e78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e3b4a29ad0efa99038d11faf7a06f675af76ecb9e25a21d4685d851097e78c->enter($__internal_e4e3b4a29ad0efa99038d11faf7a06f675af76ecb9e25a21d4685d851097e78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92d0b6fee2d4913d793c391f72ba8bd1452a50fa4fecb05ff18f2bcbd44c5681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d0b6fee2d4913d793c391f72ba8bd1452a50fa4fecb05ff18f2bcbd44c5681->enter($__internal_92d0b6fee2d4913d793c391f72ba8bd1452a50fa4fecb05ff18f2bcbd44c5681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_92d0b6fee2d4913d793c391f72ba8bd1452a50fa4fecb05ff18f2bcbd44c5681->leave($__internal_92d0b6fee2d4913d793c391f72ba8bd1452a50fa4fecb05ff18f2bcbd44c5681_prof);

        
        $__internal_e4e3b4a29ad0efa99038d11faf7a06f675af76ecb9e25a21d4685d851097e78c->leave($__internal_e4e3b4a29ad0efa99038d11faf7a06f675af76ecb9e25a21d4685d851097e78c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1da68452362dfdaa75ac57754819cbd7bc8f77b912b5e5abb448cb939beb178c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da68452362dfdaa75ac57754819cbd7bc8f77b912b5e5abb448cb939beb178c->enter($__internal_1da68452362dfdaa75ac57754819cbd7bc8f77b912b5e5abb448cb939beb178c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27076115fd5f6734eaf2190b0daec2d299e8ef163d5d22443a22ab7483726679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27076115fd5f6734eaf2190b0daec2d299e8ef163d5d22443a22ab7483726679->enter($__internal_27076115fd5f6734eaf2190b0daec2d299e8ef163d5d22443a22ab7483726679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_27076115fd5f6734eaf2190b0daec2d299e8ef163d5d22443a22ab7483726679->leave($__internal_27076115fd5f6734eaf2190b0daec2d299e8ef163d5d22443a22ab7483726679_prof);

        
        $__internal_1da68452362dfdaa75ac57754819cbd7bc8f77b912b5e5abb448cb939beb178c->leave($__internal_1da68452362dfdaa75ac57754819cbd7bc8f77b912b5e5abb448cb939beb178c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a75069aaac8fbad55409c82ab03e2e69e0b6badb8a6a783226ecf57ea041f313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75069aaac8fbad55409c82ab03e2e69e0b6badb8a6a783226ecf57ea041f313->enter($__internal_a75069aaac8fbad55409c82ab03e2e69e0b6badb8a6a783226ecf57ea041f313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ed70801b5cc6cbeff5fe4f22305165af8b0fa00aee2e80f9edb572ab11fe2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed70801b5cc6cbeff5fe4f22305165af8b0fa00aee2e80f9edb572ab11fe2fe->enter($__internal_6ed70801b5cc6cbeff5fe4f22305165af8b0fa00aee2e80f9edb572ab11fe2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6ed70801b5cc6cbeff5fe4f22305165af8b0fa00aee2e80f9edb572ab11fe2fe->leave($__internal_6ed70801b5cc6cbeff5fe4f22305165af8b0fa00aee2e80f9edb572ab11fe2fe_prof);

        
        $__internal_a75069aaac8fbad55409c82ab03e2e69e0b6badb8a6a783226ecf57ea041f313->leave($__internal_a75069aaac8fbad55409c82ab03e2e69e0b6badb8a6a783226ecf57ea041f313_prof);

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
