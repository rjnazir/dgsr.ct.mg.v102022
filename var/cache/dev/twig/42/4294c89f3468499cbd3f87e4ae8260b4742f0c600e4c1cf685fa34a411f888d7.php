<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_da422ac8bd43b8351e66174e77bb7e65850e349ae08a71f7607ad298351cabd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_5ea4f9eae8743c298db73435272fc3aa6968edbc7989db69a457c0038eb72415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea4f9eae8743c298db73435272fc3aa6968edbc7989db69a457c0038eb72415->enter($__internal_5ea4f9eae8743c298db73435272fc3aa6968edbc7989db69a457c0038eb72415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_352fca72fe7af7d57dd44ee3bb3a692c85b383e642a58e38a1d5dc6fbedfe23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352fca72fe7af7d57dd44ee3bb3a692c85b383e642a58e38a1d5dc6fbedfe23a->enter($__internal_352fca72fe7af7d57dd44ee3bb3a692c85b383e642a58e38a1d5dc6fbedfe23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ea4f9eae8743c298db73435272fc3aa6968edbc7989db69a457c0038eb72415->leave($__internal_5ea4f9eae8743c298db73435272fc3aa6968edbc7989db69a457c0038eb72415_prof);

        
        $__internal_352fca72fe7af7d57dd44ee3bb3a692c85b383e642a58e38a1d5dc6fbedfe23a->leave($__internal_352fca72fe7af7d57dd44ee3bb3a692c85b383e642a58e38a1d5dc6fbedfe23a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_660547455f3492608b0bbd71240e89c0f439d047a1d6586ea0698f3452c3f416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660547455f3492608b0bbd71240e89c0f439d047a1d6586ea0698f3452c3f416->enter($__internal_660547455f3492608b0bbd71240e89c0f439d047a1d6586ea0698f3452c3f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c5aea80103a633149fa7c56271850fb2f27bc19b258e0a3aa6035226928b482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5aea80103a633149fa7c56271850fb2f27bc19b258e0a3aa6035226928b482->enter($__internal_4c5aea80103a633149fa7c56271850fb2f27bc19b258e0a3aa6035226928b482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4c5aea80103a633149fa7c56271850fb2f27bc19b258e0a3aa6035226928b482->leave($__internal_4c5aea80103a633149fa7c56271850fb2f27bc19b258e0a3aa6035226928b482_prof);

        
        $__internal_660547455f3492608b0bbd71240e89c0f439d047a1d6586ea0698f3452c3f416->leave($__internal_660547455f3492608b0bbd71240e89c0f439d047a1d6586ea0698f3452c3f416_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
