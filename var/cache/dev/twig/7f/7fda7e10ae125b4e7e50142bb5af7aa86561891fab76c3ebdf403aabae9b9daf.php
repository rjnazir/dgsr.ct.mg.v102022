<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cfee46f8a83c5464cfa4d01ea4087c49c14a61975b8c200e4970ef181c40d5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_45921669315628278e5758aa5c474cf588d98fbf3efcac7a9f73e4f0aaab5f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45921669315628278e5758aa5c474cf588d98fbf3efcac7a9f73e4f0aaab5f27->enter($__internal_45921669315628278e5758aa5c474cf588d98fbf3efcac7a9f73e4f0aaab5f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_0511aa1a824e47f49597f2918994b726406696a9910ec21b6e96579a35288503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0511aa1a824e47f49597f2918994b726406696a9910ec21b6e96579a35288503->enter($__internal_0511aa1a824e47f49597f2918994b726406696a9910ec21b6e96579a35288503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45921669315628278e5758aa5c474cf588d98fbf3efcac7a9f73e4f0aaab5f27->leave($__internal_45921669315628278e5758aa5c474cf588d98fbf3efcac7a9f73e4f0aaab5f27_prof);

        
        $__internal_0511aa1a824e47f49597f2918994b726406696a9910ec21b6e96579a35288503->leave($__internal_0511aa1a824e47f49597f2918994b726406696a9910ec21b6e96579a35288503_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe4820e6ed95578d507e12af88fe18c47cf0e09fc75e211fc124e27546fa4b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4820e6ed95578d507e12af88fe18c47cf0e09fc75e211fc124e27546fa4b9f->enter($__internal_fe4820e6ed95578d507e12af88fe18c47cf0e09fc75e211fc124e27546fa4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8562c776986353ca102f4180f136b2ecb4710c8ae74dd0bb636ae1a7a937162c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8562c776986353ca102f4180f136b2ecb4710c8ae74dd0bb636ae1a7a937162c->enter($__internal_8562c776986353ca102f4180f136b2ecb4710c8ae74dd0bb636ae1a7a937162c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8562c776986353ca102f4180f136b2ecb4710c8ae74dd0bb636ae1a7a937162c->leave($__internal_8562c776986353ca102f4180f136b2ecb4710c8ae74dd0bb636ae1a7a937162c_prof);

        
        $__internal_fe4820e6ed95578d507e12af88fe18c47cf0e09fc75e211fc124e27546fa4b9f->leave($__internal_fe4820e6ed95578d507e12af88fe18c47cf0e09fc75e211fc124e27546fa4b9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
