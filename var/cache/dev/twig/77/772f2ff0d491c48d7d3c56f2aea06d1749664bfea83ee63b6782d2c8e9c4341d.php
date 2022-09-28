<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_d426d4db3440011d667d32667169be477598fed4814d56b34aa968f05ca3ade2 extends Twig_Template
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
        $__internal_31bc75204fceeeb279c3a5f6720333ba68e7d87a01d175a5685425bf90816768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bc75204fceeeb279c3a5f6720333ba68e7d87a01d175a5685425bf90816768->enter($__internal_31bc75204fceeeb279c3a5f6720333ba68e7d87a01d175a5685425bf90816768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_fec3ccc846daad38004bf048929e0eee53bf9ca45fddff60a204e2e99b29da2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec3ccc846daad38004bf048929e0eee53bf9ca45fddff60a204e2e99b29da2f->enter($__internal_fec3ccc846daad38004bf048929e0eee53bf9ca45fddff60a204e2e99b29da2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31bc75204fceeeb279c3a5f6720333ba68e7d87a01d175a5685425bf90816768->leave($__internal_31bc75204fceeeb279c3a5f6720333ba68e7d87a01d175a5685425bf90816768_prof);

        
        $__internal_fec3ccc846daad38004bf048929e0eee53bf9ca45fddff60a204e2e99b29da2f->leave($__internal_fec3ccc846daad38004bf048929e0eee53bf9ca45fddff60a204e2e99b29da2f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5f3b542143997f68a9cf411260a6a278cfb32b397fcc95a70364e68f5fcc443a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3b542143997f68a9cf411260a6a278cfb32b397fcc95a70364e68f5fcc443a->enter($__internal_5f3b542143997f68a9cf411260a6a278cfb32b397fcc95a70364e68f5fcc443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_53f542073f2f2c9b943559a964c862d2d305a77e63be23aafad13f805e8e7776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f542073f2f2c9b943559a964c862d2d305a77e63be23aafad13f805e8e7776->enter($__internal_53f542073f2f2c9b943559a964c862d2d305a77e63be23aafad13f805e8e7776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_53f542073f2f2c9b943559a964c862d2d305a77e63be23aafad13f805e8e7776->leave($__internal_53f542073f2f2c9b943559a964c862d2d305a77e63be23aafad13f805e8e7776_prof);

        
        $__internal_5f3b542143997f68a9cf411260a6a278cfb32b397fcc95a70364e68f5fcc443a->leave($__internal_5f3b542143997f68a9cf411260a6a278cfb32b397fcc95a70364e68f5fcc443a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ca5f652e08a1f07f6ec621c3f96db49e780607679568a4e57a3f60975d5fdb91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5f652e08a1f07f6ec621c3f96db49e780607679568a4e57a3f60975d5fdb91->enter($__internal_ca5f652e08a1f07f6ec621c3f96db49e780607679568a4e57a3f60975d5fdb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2b2826aa5eb6f15041856d302ced64191c41a629e2a721da77ef0e6d15160d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2826aa5eb6f15041856d302ced64191c41a629e2a721da77ef0e6d15160d19->enter($__internal_2b2826aa5eb6f15041856d302ced64191c41a629e2a721da77ef0e6d15160d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2b2826aa5eb6f15041856d302ced64191c41a629e2a721da77ef0e6d15160d19->leave($__internal_2b2826aa5eb6f15041856d302ced64191c41a629e2a721da77ef0e6d15160d19_prof);

        
        $__internal_ca5f652e08a1f07f6ec621c3f96db49e780607679568a4e57a3f60975d5fdb91->leave($__internal_ca5f652e08a1f07f6ec621c3f96db49e780607679568a4e57a3f60975d5fdb91_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5a76483f28f9e1f7850678fb8f48cae055eef7869b84b90842e863146baf00fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a76483f28f9e1f7850678fb8f48cae055eef7869b84b90842e863146baf00fb->enter($__internal_5a76483f28f9e1f7850678fb8f48cae055eef7869b84b90842e863146baf00fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_53aa8e0404c499ce8d837099f8b5ccf9c9ad118bba07c260a8e5541ca2809f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53aa8e0404c499ce8d837099f8b5ccf9c9ad118bba07c260a8e5541ca2809f2a->enter($__internal_53aa8e0404c499ce8d837099f8b5ccf9c9ad118bba07c260a8e5541ca2809f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_53aa8e0404c499ce8d837099f8b5ccf9c9ad118bba07c260a8e5541ca2809f2a->leave($__internal_53aa8e0404c499ce8d837099f8b5ccf9c9ad118bba07c260a8e5541ca2809f2a_prof);

        
        $__internal_5a76483f28f9e1f7850678fb8f48cae055eef7869b84b90842e863146baf00fb->leave($__internal_5a76483f28f9e1f7850678fb8f48cae055eef7869b84b90842e863146baf00fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
