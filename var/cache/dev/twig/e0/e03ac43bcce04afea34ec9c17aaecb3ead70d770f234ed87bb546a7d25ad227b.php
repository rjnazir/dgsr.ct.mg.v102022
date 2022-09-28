<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ecf59fc592b2ec0fac205d9bac7b44a1943421696a90325e8500aff75ed81aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_27d3d800274402ef13b94e8f3c80086564500ff7a0e3ab8bf51bdb25ef85b4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d3d800274402ef13b94e8f3c80086564500ff7a0e3ab8bf51bdb25ef85b4c1->enter($__internal_27d3d800274402ef13b94e8f3c80086564500ff7a0e3ab8bf51bdb25ef85b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_33113fe3f7c0f103c305ebbbdf59fc66aecc90a2dd6db4e20a4013935296f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33113fe3f7c0f103c305ebbbdf59fc66aecc90a2dd6db4e20a4013935296f62e->enter($__internal_33113fe3f7c0f103c305ebbbdf59fc66aecc90a2dd6db4e20a4013935296f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d3d800274402ef13b94e8f3c80086564500ff7a0e3ab8bf51bdb25ef85b4c1->leave($__internal_27d3d800274402ef13b94e8f3c80086564500ff7a0e3ab8bf51bdb25ef85b4c1_prof);

        
        $__internal_33113fe3f7c0f103c305ebbbdf59fc66aecc90a2dd6db4e20a4013935296f62e->leave($__internal_33113fe3f7c0f103c305ebbbdf59fc66aecc90a2dd6db4e20a4013935296f62e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b97c249f17265a9853555171ea6967578569dc488cdf9e7c0364500b3c9d89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b97c249f17265a9853555171ea6967578569dc488cdf9e7c0364500b3c9d89c->enter($__internal_9b97c249f17265a9853555171ea6967578569dc488cdf9e7c0364500b3c9d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a61d3e9f071bc3ad763bd7006251acdfc629a0b8a83cd64d99e3f02c739abf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61d3e9f071bc3ad763bd7006251acdfc629a0b8a83cd64d99e3f02c739abf94->enter($__internal_a61d3e9f071bc3ad763bd7006251acdfc629a0b8a83cd64d99e3f02c739abf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a61d3e9f071bc3ad763bd7006251acdfc629a0b8a83cd64d99e3f02c739abf94->leave($__internal_a61d3e9f071bc3ad763bd7006251acdfc629a0b8a83cd64d99e3f02c739abf94_prof);

        
        $__internal_9b97c249f17265a9853555171ea6967578569dc488cdf9e7c0364500b3c9d89c->leave($__internal_9b97c249f17265a9853555171ea6967578569dc488cdf9e7c0364500b3c9d89c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
