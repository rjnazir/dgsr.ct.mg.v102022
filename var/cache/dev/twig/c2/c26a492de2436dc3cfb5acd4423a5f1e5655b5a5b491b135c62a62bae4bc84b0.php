<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_275ca02f4731d7d49dff390a592126197c09f31d82a9ac6f271f2731659757a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d1200b9d4eb48ae0ad35cd67d2b952687080b97a18d4b2bcfa88553a19c73dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1200b9d4eb48ae0ad35cd67d2b952687080b97a18d4b2bcfa88553a19c73dc->enter($__internal_2d1200b9d4eb48ae0ad35cd67d2b952687080b97a18d4b2bcfa88553a19c73dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_e8ba7fea2e7fab902dc9c3d887efdd3a60ea98a33b9ad0bed044ead8d4c6d667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ba7fea2e7fab902dc9c3d887efdd3a60ea98a33b9ad0bed044ead8d4c6d667->enter($__internal_e8ba7fea2e7fab902dc9c3d887efdd3a60ea98a33b9ad0bed044ead8d4c6d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1200b9d4eb48ae0ad35cd67d2b952687080b97a18d4b2bcfa88553a19c73dc->leave($__internal_2d1200b9d4eb48ae0ad35cd67d2b952687080b97a18d4b2bcfa88553a19c73dc_prof);

        
        $__internal_e8ba7fea2e7fab902dc9c3d887efdd3a60ea98a33b9ad0bed044ead8d4c6d667->leave($__internal_e8ba7fea2e7fab902dc9c3d887efdd3a60ea98a33b9ad0bed044ead8d4c6d667_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b1ef87a46ee808485d073f5660f2186ba31513d6e393557b71691e2a560d846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1ef87a46ee808485d073f5660f2186ba31513d6e393557b71691e2a560d846->enter($__internal_7b1ef87a46ee808485d073f5660f2186ba31513d6e393557b71691e2a560d846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f70d78d2a40264518912969cc7316d4e91ed7cef22f387a85f232e341c06876c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70d78d2a40264518912969cc7316d4e91ed7cef22f387a85f232e341c06876c->enter($__internal_f70d78d2a40264518912969cc7316d4e91ed7cef22f387a85f232e341c06876c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f70d78d2a40264518912969cc7316d4e91ed7cef22f387a85f232e341c06876c->leave($__internal_f70d78d2a40264518912969cc7316d4e91ed7cef22f387a85f232e341c06876c_prof);

        
        $__internal_7b1ef87a46ee808485d073f5660f2186ba31513d6e393557b71691e2a560d846->leave($__internal_7b1ef87a46ee808485d073f5660f2186ba31513d6e393557b71691e2a560d846_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
