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
        $__internal_320fda1647abe3998259912fb170c933828a88223b3d6ea3c99b715ad282d79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320fda1647abe3998259912fb170c933828a88223b3d6ea3c99b715ad282d79c->enter($__internal_320fda1647abe3998259912fb170c933828a88223b3d6ea3c99b715ad282d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b5534d7236a07ade589d231e0734a27a7a30ca73e08325a7fda1df0ebde8fd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5534d7236a07ade589d231e0734a27a7a30ca73e08325a7fda1df0ebde8fd90->enter($__internal_b5534d7236a07ade589d231e0734a27a7a30ca73e08325a7fda1df0ebde8fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320fda1647abe3998259912fb170c933828a88223b3d6ea3c99b715ad282d79c->leave($__internal_320fda1647abe3998259912fb170c933828a88223b3d6ea3c99b715ad282d79c_prof);

        
        $__internal_b5534d7236a07ade589d231e0734a27a7a30ca73e08325a7fda1df0ebde8fd90->leave($__internal_b5534d7236a07ade589d231e0734a27a7a30ca73e08325a7fda1df0ebde8fd90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2cc824cc473654bbc129cd212c22e0c0b2ebc121310d9039804c4b69c10ef2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cc824cc473654bbc129cd212c22e0c0b2ebc121310d9039804c4b69c10ef2e->enter($__internal_c2cc824cc473654bbc129cd212c22e0c0b2ebc121310d9039804c4b69c10ef2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63ddeecf45bde6094728f62e3903122d6c2768b3cbd16b9ed99c5ae8a7c4c08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ddeecf45bde6094728f62e3903122d6c2768b3cbd16b9ed99c5ae8a7c4c08b->enter($__internal_63ddeecf45bde6094728f62e3903122d6c2768b3cbd16b9ed99c5ae8a7c4c08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63ddeecf45bde6094728f62e3903122d6c2768b3cbd16b9ed99c5ae8a7c4c08b->leave($__internal_63ddeecf45bde6094728f62e3903122d6c2768b3cbd16b9ed99c5ae8a7c4c08b_prof);

        
        $__internal_c2cc824cc473654bbc129cd212c22e0c0b2ebc121310d9039804c4b69c10ef2e->leave($__internal_c2cc824cc473654bbc129cd212c22e0c0b2ebc121310d9039804c4b69c10ef2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e140feb0b7be889481afd30697774b0317da0f45e1ac38f91358ec31487c1e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e140feb0b7be889481afd30697774b0317da0f45e1ac38f91358ec31487c1e2d->enter($__internal_e140feb0b7be889481afd30697774b0317da0f45e1ac38f91358ec31487c1e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50c71e8d1ddb309140c805dce5105f8c78419cd49116a2e8ee847df49b5e9c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c71e8d1ddb309140c805dce5105f8c78419cd49116a2e8ee847df49b5e9c46->enter($__internal_50c71e8d1ddb309140c805dce5105f8c78419cd49116a2e8ee847df49b5e9c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50c71e8d1ddb309140c805dce5105f8c78419cd49116a2e8ee847df49b5e9c46->leave($__internal_50c71e8d1ddb309140c805dce5105f8c78419cd49116a2e8ee847df49b5e9c46_prof);

        
        $__internal_e140feb0b7be889481afd30697774b0317da0f45e1ac38f91358ec31487c1e2d->leave($__internal_e140feb0b7be889481afd30697774b0317da0f45e1ac38f91358ec31487c1e2d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f1439ebc594f9e9fa65559c1487f7750ea95f2df8bdde372cdb2d39c0aedfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1439ebc594f9e9fa65559c1487f7750ea95f2df8bdde372cdb2d39c0aedfda->enter($__internal_0f1439ebc594f9e9fa65559c1487f7750ea95f2df8bdde372cdb2d39c0aedfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e48f12c8efb8e06562124dd6edab47257127afa65c41b055b8cbf0bb5c69c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e48f12c8efb8e06562124dd6edab47257127afa65c41b055b8cbf0bb5c69c61->enter($__internal_3e48f12c8efb8e06562124dd6edab47257127afa65c41b055b8cbf0bb5c69c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e48f12c8efb8e06562124dd6edab47257127afa65c41b055b8cbf0bb5c69c61->leave($__internal_3e48f12c8efb8e06562124dd6edab47257127afa65c41b055b8cbf0bb5c69c61_prof);

        
        $__internal_0f1439ebc594f9e9fa65559c1487f7750ea95f2df8bdde372cdb2d39c0aedfda->leave($__internal_0f1439ebc594f9e9fa65559c1487f7750ea95f2df8bdde372cdb2d39c0aedfda_prof);

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
