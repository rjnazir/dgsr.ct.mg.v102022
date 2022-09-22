<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92f8f13a517b61b35821e19091f03f93a7fbdfe0b468246620e55a5a5f869a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_7fde88e8561d40b514f531f129d5c1df7dfe21ef5f7b04e070fb71dbb59c1d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fde88e8561d40b514f531f129d5c1df7dfe21ef5f7b04e070fb71dbb59c1d6f->enter($__internal_7fde88e8561d40b514f531f129d5c1df7dfe21ef5f7b04e070fb71dbb59c1d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_e3907efc9e94fea2bcb92738fd65bea8148b7df14c91f6e90c18a9363958da72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3907efc9e94fea2bcb92738fd65bea8148b7df14c91f6e90c18a9363958da72->enter($__internal_e3907efc9e94fea2bcb92738fd65bea8148b7df14c91f6e90c18a9363958da72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fde88e8561d40b514f531f129d5c1df7dfe21ef5f7b04e070fb71dbb59c1d6f->leave($__internal_7fde88e8561d40b514f531f129d5c1df7dfe21ef5f7b04e070fb71dbb59c1d6f_prof);

        
        $__internal_e3907efc9e94fea2bcb92738fd65bea8148b7df14c91f6e90c18a9363958da72->leave($__internal_e3907efc9e94fea2bcb92738fd65bea8148b7df14c91f6e90c18a9363958da72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ce6f2dfd5db1220d8341c02cf6940f64f2a6c342f10740b192944f31b2dedd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce6f2dfd5db1220d8341c02cf6940f64f2a6c342f10740b192944f31b2dedd8->enter($__internal_2ce6f2dfd5db1220d8341c02cf6940f64f2a6c342f10740b192944f31b2dedd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_950131cbac3006a7b4433b2eff51397d52fe2a3c4b78498d2f2484c9144daddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950131cbac3006a7b4433b2eff51397d52fe2a3c4b78498d2f2484c9144daddd->enter($__internal_950131cbac3006a7b4433b2eff51397d52fe2a3c4b78498d2f2484c9144daddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_950131cbac3006a7b4433b2eff51397d52fe2a3c4b78498d2f2484c9144daddd->leave($__internal_950131cbac3006a7b4433b2eff51397d52fe2a3c4b78498d2f2484c9144daddd_prof);

        
        $__internal_2ce6f2dfd5db1220d8341c02cf6940f64f2a6c342f10740b192944f31b2dedd8->leave($__internal_2ce6f2dfd5db1220d8341c02cf6940f64f2a6c342f10740b192944f31b2dedd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
