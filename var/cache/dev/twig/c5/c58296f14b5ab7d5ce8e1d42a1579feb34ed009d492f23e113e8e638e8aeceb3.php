<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4a9215bd7a655f6ad3a875b26c4cb1087b938f41ffbbd872aa77216c44d9a15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_395676b3568da3c2a452ed411be4ed2c9d3f6df69386684cbba4d66bda52e080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395676b3568da3c2a452ed411be4ed2c9d3f6df69386684cbba4d66bda52e080->enter($__internal_395676b3568da3c2a452ed411be4ed2c9d3f6df69386684cbba4d66bda52e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_bd68f9ae55eac2578b4b9c70503ae01d1c3ec7b1e6786dff3485d53944c3480f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd68f9ae55eac2578b4b9c70503ae01d1c3ec7b1e6786dff3485d53944c3480f->enter($__internal_bd68f9ae55eac2578b4b9c70503ae01d1c3ec7b1e6786dff3485d53944c3480f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_395676b3568da3c2a452ed411be4ed2c9d3f6df69386684cbba4d66bda52e080->leave($__internal_395676b3568da3c2a452ed411be4ed2c9d3f6df69386684cbba4d66bda52e080_prof);

        
        $__internal_bd68f9ae55eac2578b4b9c70503ae01d1c3ec7b1e6786dff3485d53944c3480f->leave($__internal_bd68f9ae55eac2578b4b9c70503ae01d1c3ec7b1e6786dff3485d53944c3480f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a98818d6671d00f1d95d561bf13b4da0076e20ac803c6225d1adcb2cf26c73e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98818d6671d00f1d95d561bf13b4da0076e20ac803c6225d1adcb2cf26c73e7->enter($__internal_a98818d6671d00f1d95d561bf13b4da0076e20ac803c6225d1adcb2cf26c73e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ece92b46321e5587a4c1ee97ffa3f5d1a1c95afad760fb5f5d7324ce3d8fc24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece92b46321e5587a4c1ee97ffa3f5d1a1c95afad760fb5f5d7324ce3d8fc24d->enter($__internal_ece92b46321e5587a4c1ee97ffa3f5d1a1c95afad760fb5f5d7324ce3d8fc24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ece92b46321e5587a4c1ee97ffa3f5d1a1c95afad760fb5f5d7324ce3d8fc24d->leave($__internal_ece92b46321e5587a4c1ee97ffa3f5d1a1c95afad760fb5f5d7324ce3d8fc24d_prof);

        
        $__internal_a98818d6671d00f1d95d561bf13b4da0076e20ac803c6225d1adcb2cf26c73e7->leave($__internal_a98818d6671d00f1d95d561bf13b4da0076e20ac803c6225d1adcb2cf26c73e7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_22474ca4cfc2489f0a24033c4d32aa0624688595ec2335c96a6f615d91a2ea8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22474ca4cfc2489f0a24033c4d32aa0624688595ec2335c96a6f615d91a2ea8e->enter($__internal_22474ca4cfc2489f0a24033c4d32aa0624688595ec2335c96a6f615d91a2ea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_51b527a66c097be6ab3d782d82c02d4620f47007ffa7b039da54404461fbd0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b527a66c097be6ab3d782d82c02d4620f47007ffa7b039da54404461fbd0cb->enter($__internal_51b527a66c097be6ab3d782d82c02d4620f47007ffa7b039da54404461fbd0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_51b527a66c097be6ab3d782d82c02d4620f47007ffa7b039da54404461fbd0cb->leave($__internal_51b527a66c097be6ab3d782d82c02d4620f47007ffa7b039da54404461fbd0cb_prof);

        
        $__internal_22474ca4cfc2489f0a24033c4d32aa0624688595ec2335c96a6f615d91a2ea8e->leave($__internal_22474ca4cfc2489f0a24033c4d32aa0624688595ec2335c96a6f615d91a2ea8e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_58a656d287f3e17ff1d741867584c50e9e6f611cf8fc1622c472133f9f5260fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a656d287f3e17ff1d741867584c50e9e6f611cf8fc1622c472133f9f5260fc->enter($__internal_58a656d287f3e17ff1d741867584c50e9e6f611cf8fc1622c472133f9f5260fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bbe2a3413e0e91703efbf0f02bfc6a14a3240938ea70942bbd2f599bb2d20d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe2a3413e0e91703efbf0f02bfc6a14a3240938ea70942bbd2f599bb2d20d84->enter($__internal_bbe2a3413e0e91703efbf0f02bfc6a14a3240938ea70942bbd2f599bb2d20d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bbe2a3413e0e91703efbf0f02bfc6a14a3240938ea70942bbd2f599bb2d20d84->leave($__internal_bbe2a3413e0e91703efbf0f02bfc6a14a3240938ea70942bbd2f599bb2d20d84_prof);

        
        $__internal_58a656d287f3e17ff1d741867584c50e9e6f611cf8fc1622c472133f9f5260fc->leave($__internal_58a656d287f3e17ff1d741867584c50e9e6f611cf8fc1622c472133f9f5260fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
