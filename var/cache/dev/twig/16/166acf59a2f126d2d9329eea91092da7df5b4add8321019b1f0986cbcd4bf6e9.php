<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3e2e3061da5cf62694dade8fef535f75a40c6fea6ce6f15af2c0be005eabcf6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7d9dd449bfa5bb147f082bd2967b49ca7c3c5a3707ff21a76e6c874265a2e24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9dd449bfa5bb147f082bd2967b49ca7c3c5a3707ff21a76e6c874265a2e24e->enter($__internal_7d9dd449bfa5bb147f082bd2967b49ca7c3c5a3707ff21a76e6c874265a2e24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_9d52a3d66026515e9aafdf30b0f43b49b278378b7b137b2e92697afacdab8306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d52a3d66026515e9aafdf30b0f43b49b278378b7b137b2e92697afacdab8306->enter($__internal_9d52a3d66026515e9aafdf30b0f43b49b278378b7b137b2e92697afacdab8306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d9dd449bfa5bb147f082bd2967b49ca7c3c5a3707ff21a76e6c874265a2e24e->leave($__internal_7d9dd449bfa5bb147f082bd2967b49ca7c3c5a3707ff21a76e6c874265a2e24e_prof);

        
        $__internal_9d52a3d66026515e9aafdf30b0f43b49b278378b7b137b2e92697afacdab8306->leave($__internal_9d52a3d66026515e9aafdf30b0f43b49b278378b7b137b2e92697afacdab8306_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a787a3582ae623aaa636a953b8eb5fb34c3fcdf7038556ea06a4617b6ca5345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a787a3582ae623aaa636a953b8eb5fb34c3fcdf7038556ea06a4617b6ca5345->enter($__internal_6a787a3582ae623aaa636a953b8eb5fb34c3fcdf7038556ea06a4617b6ca5345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9442996322fb244d6c38a6e20b44b1bfbdb61609a69922b4262e2e1779ac28bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9442996322fb244d6c38a6e20b44b1bfbdb61609a69922b4262e2e1779ac28bf->enter($__internal_9442996322fb244d6c38a6e20b44b1bfbdb61609a69922b4262e2e1779ac28bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_9442996322fb244d6c38a6e20b44b1bfbdb61609a69922b4262e2e1779ac28bf->leave($__internal_9442996322fb244d6c38a6e20b44b1bfbdb61609a69922b4262e2e1779ac28bf_prof);

        
        $__internal_6a787a3582ae623aaa636a953b8eb5fb34c3fcdf7038556ea06a4617b6ca5345->leave($__internal_6a787a3582ae623aaa636a953b8eb5fb34c3fcdf7038556ea06a4617b6ca5345_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
