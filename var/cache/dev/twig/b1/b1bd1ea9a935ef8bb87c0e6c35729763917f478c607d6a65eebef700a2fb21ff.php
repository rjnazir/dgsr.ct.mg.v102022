<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_0c44b5c774c5e82bfb7fd11ab67eff4ffb279b9828f842b93be409679e353973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27de9b30ddd744590451932fd4335abfc32fc1f3db156136866253b78309c582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27de9b30ddd744590451932fd4335abfc32fc1f3db156136866253b78309c582->enter($__internal_27de9b30ddd744590451932fd4335abfc32fc1f3db156136866253b78309c582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_ab31368a1c5db2e1c0c4fffbb9d8dce045013a18510f4131e708652ec4dfbb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab31368a1c5db2e1c0c4fffbb9d8dce045013a18510f4131e708652ec4dfbb14->enter($__internal_ab31368a1c5db2e1c0c4fffbb9d8dce045013a18510f4131e708652ec4dfbb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27de9b30ddd744590451932fd4335abfc32fc1f3db156136866253b78309c582->leave($__internal_27de9b30ddd744590451932fd4335abfc32fc1f3db156136866253b78309c582_prof);

        
        $__internal_ab31368a1c5db2e1c0c4fffbb9d8dce045013a18510f4131e708652ec4dfbb14->leave($__internal_ab31368a1c5db2e1c0c4fffbb9d8dce045013a18510f4131e708652ec4dfbb14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_264f20d073302ddc1bb067fee829f77bd95ff9b02a67e7ec59f755ac29191748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264f20d073302ddc1bb067fee829f77bd95ff9b02a67e7ec59f755ac29191748->enter($__internal_264f20d073302ddc1bb067fee829f77bd95ff9b02a67e7ec59f755ac29191748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50d442ac83cd1f2e301450dc413b71652fbfbd27567eac4d485ec6d1d4158793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d442ac83cd1f2e301450dc413b71652fbfbd27567eac4d485ec6d1d4158793->enter($__internal_50d442ac83cd1f2e301450dc413b71652fbfbd27567eac4d485ec6d1d4158793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_50d442ac83cd1f2e301450dc413b71652fbfbd27567eac4d485ec6d1d4158793->leave($__internal_50d442ac83cd1f2e301450dc413b71652fbfbd27567eac4d485ec6d1d4158793_prof);

        
        $__internal_264f20d073302ddc1bb067fee829f77bd95ff9b02a67e7ec59f755ac29191748->leave($__internal_264f20d073302ddc1bb067fee829f77bd95ff9b02a67e7ec59f755ac29191748_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c005378991285c7f47865e8ed40915e08894a5dd5dde79dd3781d52ed719022b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c005378991285c7f47865e8ed40915e08894a5dd5dde79dd3781d52ed719022b->enter($__internal_c005378991285c7f47865e8ed40915e08894a5dd5dde79dd3781d52ed719022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_686dc844ccb2f62196a546fa790030dd12efd57e2aed361616b229ae12cd1a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686dc844ccb2f62196a546fa790030dd12efd57e2aed361616b229ae12cd1a68->enter($__internal_686dc844ccb2f62196a546fa790030dd12efd57e2aed361616b229ae12cd1a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
";
        
        $__internal_686dc844ccb2f62196a546fa790030dd12efd57e2aed361616b229ae12cd1a68->leave($__internal_686dc844ccb2f62196a546fa790030dd12efd57e2aed361616b229ae12cd1a68_prof);

        
        $__internal_c005378991285c7f47865e8ed40915e08894a5dd5dde79dd3781d52ed719022b->leave($__internal_c005378991285c7f47865e8ed40915e08894a5dd5dde79dd3781d52ed719022b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %} {{ parent() }} Erreur 500 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
{% endblock %}", "@Twig/Exception/error.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}
