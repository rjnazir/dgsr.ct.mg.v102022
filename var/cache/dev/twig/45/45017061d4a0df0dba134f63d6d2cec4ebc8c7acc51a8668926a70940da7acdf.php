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
        $__internal_8d60bc69f686b0f64accf2e02bb372de6abfb9f03f1dcdbce2fd3844ade5221e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d60bc69f686b0f64accf2e02bb372de6abfb9f03f1dcdbce2fd3844ade5221e->enter($__internal_8d60bc69f686b0f64accf2e02bb372de6abfb9f03f1dcdbce2fd3844ade5221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_9ae7ef6d1662d742bdfe49717ae6dd296fa76dca67ae2136cdd5ec289b2dee57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae7ef6d1662d742bdfe49717ae6dd296fa76dca67ae2136cdd5ec289b2dee57->enter($__internal_9ae7ef6d1662d742bdfe49717ae6dd296fa76dca67ae2136cdd5ec289b2dee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d60bc69f686b0f64accf2e02bb372de6abfb9f03f1dcdbce2fd3844ade5221e->leave($__internal_8d60bc69f686b0f64accf2e02bb372de6abfb9f03f1dcdbce2fd3844ade5221e_prof);

        
        $__internal_9ae7ef6d1662d742bdfe49717ae6dd296fa76dca67ae2136cdd5ec289b2dee57->leave($__internal_9ae7ef6d1662d742bdfe49717ae6dd296fa76dca67ae2136cdd5ec289b2dee57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd5942d6d2e88c9f6d7dc379817cd3fe655e3391842b7cacab8b1b9132847512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5942d6d2e88c9f6d7dc379817cd3fe655e3391842b7cacab8b1b9132847512->enter($__internal_fd5942d6d2e88c9f6d7dc379817cd3fe655e3391842b7cacab8b1b9132847512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_009d376002c2bc5dadc2bd343272409c22f76d979b910a6d54ab5fd8277bf45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009d376002c2bc5dadc2bd343272409c22f76d979b910a6d54ab5fd8277bf45d->enter($__internal_009d376002c2bc5dadc2bd343272409c22f76d979b910a6d54ab5fd8277bf45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_009d376002c2bc5dadc2bd343272409c22f76d979b910a6d54ab5fd8277bf45d->leave($__internal_009d376002c2bc5dadc2bd343272409c22f76d979b910a6d54ab5fd8277bf45d_prof);

        
        $__internal_fd5942d6d2e88c9f6d7dc379817cd3fe655e3391842b7cacab8b1b9132847512->leave($__internal_fd5942d6d2e88c9f6d7dc379817cd3fe655e3391842b7cacab8b1b9132847512_prof);

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
