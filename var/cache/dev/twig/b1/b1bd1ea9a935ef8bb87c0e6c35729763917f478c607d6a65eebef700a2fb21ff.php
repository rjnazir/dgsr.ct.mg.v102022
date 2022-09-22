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
        $__internal_37edf554a035e07c13e11312b2a32067060edb890504248f6a2a28d9c7843e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37edf554a035e07c13e11312b2a32067060edb890504248f6a2a28d9c7843e30->enter($__internal_37edf554a035e07c13e11312b2a32067060edb890504248f6a2a28d9c7843e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_141cd938684526f77bcef4b8c38f990c522846b7da4af4ef9b483db7f861427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141cd938684526f77bcef4b8c38f990c522846b7da4af4ef9b483db7f861427b->enter($__internal_141cd938684526f77bcef4b8c38f990c522846b7da4af4ef9b483db7f861427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37edf554a035e07c13e11312b2a32067060edb890504248f6a2a28d9c7843e30->leave($__internal_37edf554a035e07c13e11312b2a32067060edb890504248f6a2a28d9c7843e30_prof);

        
        $__internal_141cd938684526f77bcef4b8c38f990c522846b7da4af4ef9b483db7f861427b->leave($__internal_141cd938684526f77bcef4b8c38f990c522846b7da4af4ef9b483db7f861427b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_255893b17e3bed23d903af7efbce7735c1783188979e08fc950f2152a4df2df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255893b17e3bed23d903af7efbce7735c1783188979e08fc950f2152a4df2df2->enter($__internal_255893b17e3bed23d903af7efbce7735c1783188979e08fc950f2152a4df2df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d5668485061711f30c3b22c4c658f9e2842873c7a5a9e7595ed302eb75da995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5668485061711f30c3b22c4c658f9e2842873c7a5a9e7595ed302eb75da995->enter($__internal_3d5668485061711f30c3b22c4c658f9e2842873c7a5a9e7595ed302eb75da995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_3d5668485061711f30c3b22c4c658f9e2842873c7a5a9e7595ed302eb75da995->leave($__internal_3d5668485061711f30c3b22c4c658f9e2842873c7a5a9e7595ed302eb75da995_prof);

        
        $__internal_255893b17e3bed23d903af7efbce7735c1783188979e08fc950f2152a4df2df2->leave($__internal_255893b17e3bed23d903af7efbce7735c1783188979e08fc950f2152a4df2df2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61db1ec5c1a71c22c284dba77cec4cb88b71b1799fb4a4c40e7eef631de206d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61db1ec5c1a71c22c284dba77cec4cb88b71b1799fb4a4c40e7eef631de206d9->enter($__internal_61db1ec5c1a71c22c284dba77cec4cb88b71b1799fb4a4c40e7eef631de206d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d3589fd44e3e9ee0a92e68c2bad95047d88dc1053ad4a432130490f8be3f873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3589fd44e3e9ee0a92e68c2bad95047d88dc1053ad4a432130490f8be3f873->enter($__internal_1d3589fd44e3e9ee0a92e68c2bad95047d88dc1053ad4a432130490f8be3f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d3589fd44e3e9ee0a92e68c2bad95047d88dc1053ad4a432130490f8be3f873->leave($__internal_1d3589fd44e3e9ee0a92e68c2bad95047d88dc1053ad4a432130490f8be3f873_prof);

        
        $__internal_61db1ec5c1a71c22c284dba77cec4cb88b71b1799fb4a4c40e7eef631de206d9->leave($__internal_61db1ec5c1a71c22c284dba77cec4cb88b71b1799fb4a4c40e7eef631de206d9_prof);

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
