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
        $__internal_45585e5b82750bc6e718c4796397f898910a0441c3be7fedd350159e5aa529da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45585e5b82750bc6e718c4796397f898910a0441c3be7fedd350159e5aa529da->enter($__internal_45585e5b82750bc6e718c4796397f898910a0441c3be7fedd350159e5aa529da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5533d80ea4fb9919de99d04faa73a3e1cfcb44a1bea4683ab4f596a9aa1af596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5533d80ea4fb9919de99d04faa73a3e1cfcb44a1bea4683ab4f596a9aa1af596->enter($__internal_5533d80ea4fb9919de99d04faa73a3e1cfcb44a1bea4683ab4f596a9aa1af596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45585e5b82750bc6e718c4796397f898910a0441c3be7fedd350159e5aa529da->leave($__internal_45585e5b82750bc6e718c4796397f898910a0441c3be7fedd350159e5aa529da_prof);

        
        $__internal_5533d80ea4fb9919de99d04faa73a3e1cfcb44a1bea4683ab4f596a9aa1af596->leave($__internal_5533d80ea4fb9919de99d04faa73a3e1cfcb44a1bea4683ab4f596a9aa1af596_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ec0d62f2f838b044a89b22939fb5fd4688c7d53d59e32468cdb80f66da40a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec0d62f2f838b044a89b22939fb5fd4688c7d53d59e32468cdb80f66da40a75->enter($__internal_3ec0d62f2f838b044a89b22939fb5fd4688c7d53d59e32468cdb80f66da40a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d1a272778af4966d47e147c3e247f27e273c9e13cc73b1c95214815bab65cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1a272778af4966d47e147c3e247f27e273c9e13cc73b1c95214815bab65cf8->enter($__internal_7d1a272778af4966d47e147c3e247f27e273c9e13cc73b1c95214815bab65cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d1a272778af4966d47e147c3e247f27e273c9e13cc73b1c95214815bab65cf8->leave($__internal_7d1a272778af4966d47e147c3e247f27e273c9e13cc73b1c95214815bab65cf8_prof);

        
        $__internal_3ec0d62f2f838b044a89b22939fb5fd4688c7d53d59e32468cdb80f66da40a75->leave($__internal_3ec0d62f2f838b044a89b22939fb5fd4688c7d53d59e32468cdb80f66da40a75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_066e8770d45545778b75232a30f738845c8c422a6ac4adcdcd91426dc6b3cd9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066e8770d45545778b75232a30f738845c8c422a6ac4adcdcd91426dc6b3cd9f->enter($__internal_066e8770d45545778b75232a30f738845c8c422a6ac4adcdcd91426dc6b3cd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aaf34a83288b554693763c87bee80dbd480ab7e1b243bdff1de7636c3b7e062c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf34a83288b554693763c87bee80dbd480ab7e1b243bdff1de7636c3b7e062c->enter($__internal_aaf34a83288b554693763c87bee80dbd480ab7e1b243bdff1de7636c3b7e062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aaf34a83288b554693763c87bee80dbd480ab7e1b243bdff1de7636c3b7e062c->leave($__internal_aaf34a83288b554693763c87bee80dbd480ab7e1b243bdff1de7636c3b7e062c_prof);

        
        $__internal_066e8770d45545778b75232a30f738845c8c422a6ac4adcdcd91426dc6b3cd9f->leave($__internal_066e8770d45545778b75232a30f738845c8c422a6ac4adcdcd91426dc6b3cd9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfeacbfb63d4d2009782b2cfec37821dc1aead84995865ea1fb6c147e618205f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfeacbfb63d4d2009782b2cfec37821dc1aead84995865ea1fb6c147e618205f->enter($__internal_dfeacbfb63d4d2009782b2cfec37821dc1aead84995865ea1fb6c147e618205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83b2e6f0267ea3a8460815e86a614a3358ceb01c11e8fb7efce7810858a4c678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b2e6f0267ea3a8460815e86a614a3358ceb01c11e8fb7efce7810858a4c678->enter($__internal_83b2e6f0267ea3a8460815e86a614a3358ceb01c11e8fb7efce7810858a4c678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83b2e6f0267ea3a8460815e86a614a3358ceb01c11e8fb7efce7810858a4c678->leave($__internal_83b2e6f0267ea3a8460815e86a614a3358ceb01c11e8fb7efce7810858a4c678_prof);

        
        $__internal_dfeacbfb63d4d2009782b2cfec37821dc1aead84995865ea1fb6c147e618205f->leave($__internal_dfeacbfb63d4d2009782b2cfec37821dc1aead84995865ea1fb6c147e618205f_prof);

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
