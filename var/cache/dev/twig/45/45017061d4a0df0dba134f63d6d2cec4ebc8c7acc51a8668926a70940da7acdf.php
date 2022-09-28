<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd8aaf2587a70f2ef4e89e56a6ff1773fffd7dd6c62988776fc668b6ca2d24fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_89a0420a0358886aa813b90771cb307b072936ce7fa23f6e1f5a96d745c53066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a0420a0358886aa813b90771cb307b072936ce7fa23f6e1f5a96d745c53066->enter($__internal_89a0420a0358886aa813b90771cb307b072936ce7fa23f6e1f5a96d745c53066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_336b411d372565518482a886e8e840da6624ed902d1907bc9475e7b1060e84f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336b411d372565518482a886e8e840da6624ed902d1907bc9475e7b1060e84f6->enter($__internal_336b411d372565518482a886e8e840da6624ed902d1907bc9475e7b1060e84f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a0420a0358886aa813b90771cb307b072936ce7fa23f6e1f5a96d745c53066->leave($__internal_89a0420a0358886aa813b90771cb307b072936ce7fa23f6e1f5a96d745c53066_prof);

        
        $__internal_336b411d372565518482a886e8e840da6624ed902d1907bc9475e7b1060e84f6->leave($__internal_336b411d372565518482a886e8e840da6624ed902d1907bc9475e7b1060e84f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4fe29f475203f4818cc211d7aa593f648cdef7e99a087d7d7e8c3e637998c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fe29f475203f4818cc211d7aa593f648cdef7e99a087d7d7e8c3e637998c11->enter($__internal_e4fe29f475203f4818cc211d7aa593f648cdef7e99a087d7d7e8c3e637998c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6683244036878e7f27ec2393d039cf73870d1382b4b8c8f2879715b6e1c14912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6683244036878e7f27ec2393d039cf73870d1382b4b8c8f2879715b6e1c14912->enter($__internal_6683244036878e7f27ec2393d039cf73870d1382b4b8c8f2879715b6e1c14912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6683244036878e7f27ec2393d039cf73870d1382b4b8c8f2879715b6e1c14912->leave($__internal_6683244036878e7f27ec2393d039cf73870d1382b4b8c8f2879715b6e1c14912_prof);

        
        $__internal_e4fe29f475203f4818cc211d7aa593f648cdef7e99a087d7d7e8c3e637998c11->leave($__internal_e4fe29f475203f4818cc211d7aa593f648cdef7e99a087d7d7e8c3e637998c11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
