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
        $__internal_fdeb69094ecb5a09725809e59d62cee371955c4c9571d0182234ceb1d6db164f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdeb69094ecb5a09725809e59d62cee371955c4c9571d0182234ceb1d6db164f->enter($__internal_fdeb69094ecb5a09725809e59d62cee371955c4c9571d0182234ceb1d6db164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_95c76c3e7e1db65924471d6991ed507d47d54105a7f82f61b5dd0f1aaa37de18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c76c3e7e1db65924471d6991ed507d47d54105a7f82f61b5dd0f1aaa37de18->enter($__internal_95c76c3e7e1db65924471d6991ed507d47d54105a7f82f61b5dd0f1aaa37de18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fdeb69094ecb5a09725809e59d62cee371955c4c9571d0182234ceb1d6db164f->leave($__internal_fdeb69094ecb5a09725809e59d62cee371955c4c9571d0182234ceb1d6db164f_prof);

        
        $__internal_95c76c3e7e1db65924471d6991ed507d47d54105a7f82f61b5dd0f1aaa37de18->leave($__internal_95c76c3e7e1db65924471d6991ed507d47d54105a7f82f61b5dd0f1aaa37de18_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a121eac857c877a62fecfa8871ad81399722f78be655d1cd267e00c502094f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a121eac857c877a62fecfa8871ad81399722f78be655d1cd267e00c502094f7->enter($__internal_0a121eac857c877a62fecfa8871ad81399722f78be655d1cd267e00c502094f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5a7ac47cbac5b313d9a2b1d0cdffd993b5fa586497169dd8d2b31446196e9902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7ac47cbac5b313d9a2b1d0cdffd993b5fa586497169dd8d2b31446196e9902->enter($__internal_5a7ac47cbac5b313d9a2b1d0cdffd993b5fa586497169dd8d2b31446196e9902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5a7ac47cbac5b313d9a2b1d0cdffd993b5fa586497169dd8d2b31446196e9902->leave($__internal_5a7ac47cbac5b313d9a2b1d0cdffd993b5fa586497169dd8d2b31446196e9902_prof);

        
        $__internal_0a121eac857c877a62fecfa8871ad81399722f78be655d1cd267e00c502094f7->leave($__internal_0a121eac857c877a62fecfa8871ad81399722f78be655d1cd267e00c502094f7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de395639416afd632f065d479f8b05e1ca909c3a2cd64414196385ec8d4d0531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de395639416afd632f065d479f8b05e1ca909c3a2cd64414196385ec8d4d0531->enter($__internal_de395639416afd632f065d479f8b05e1ca909c3a2cd64414196385ec8d4d0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e30db293bf1563814ec0eec71b156c734e5b3c822ca4e818bdbfce356efd41c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30db293bf1563814ec0eec71b156c734e5b3c822ca4e818bdbfce356efd41c9->enter($__internal_e30db293bf1563814ec0eec71b156c734e5b3c822ca4e818bdbfce356efd41c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e30db293bf1563814ec0eec71b156c734e5b3c822ca4e818bdbfce356efd41c9->leave($__internal_e30db293bf1563814ec0eec71b156c734e5b3c822ca4e818bdbfce356efd41c9_prof);

        
        $__internal_de395639416afd632f065d479f8b05e1ca909c3a2cd64414196385ec8d4d0531->leave($__internal_de395639416afd632f065d479f8b05e1ca909c3a2cd64414196385ec8d4d0531_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eb1ff80c32f449698ef30b0542944af7b3602b7c26d3d763f2a24248551e07a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1ff80c32f449698ef30b0542944af7b3602b7c26d3d763f2a24248551e07a8->enter($__internal_eb1ff80c32f449698ef30b0542944af7b3602b7c26d3d763f2a24248551e07a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a90ae9c50eb7c44379ba9fe021de98f9b95a6e42bf609a1e38721b24b18771fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90ae9c50eb7c44379ba9fe021de98f9b95a6e42bf609a1e38721b24b18771fb->enter($__internal_a90ae9c50eb7c44379ba9fe021de98f9b95a6e42bf609a1e38721b24b18771fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a90ae9c50eb7c44379ba9fe021de98f9b95a6e42bf609a1e38721b24b18771fb->leave($__internal_a90ae9c50eb7c44379ba9fe021de98f9b95a6e42bf609a1e38721b24b18771fb_prof);

        
        $__internal_eb1ff80c32f449698ef30b0542944af7b3602b7c26d3d763f2a24248551e07a8->leave($__internal_eb1ff80c32f449698ef30b0542944af7b3602b7c26d3d763f2a24248551e07a8_prof);

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
