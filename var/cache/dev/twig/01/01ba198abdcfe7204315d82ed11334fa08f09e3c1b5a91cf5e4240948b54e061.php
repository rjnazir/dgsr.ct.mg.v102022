<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0052611029406a8066fc29bcc6e363b9988a56760f9545edfaf6bb6b6177e831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_07f73279cc25db260541c48893a80732d253d7ae9d16e6b75efe14f6b03aee84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f73279cc25db260541c48893a80732d253d7ae9d16e6b75efe14f6b03aee84->enter($__internal_07f73279cc25db260541c48893a80732d253d7ae9d16e6b75efe14f6b03aee84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_88b1c893acdc3aeaa7882726feec7382d7c4e58bdb3149d43ab4b7b66cb43b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b1c893acdc3aeaa7882726feec7382d7c4e58bdb3149d43ab4b7b66cb43b65->enter($__internal_88b1c893acdc3aeaa7882726feec7382d7c4e58bdb3149d43ab4b7b66cb43b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f73279cc25db260541c48893a80732d253d7ae9d16e6b75efe14f6b03aee84->leave($__internal_07f73279cc25db260541c48893a80732d253d7ae9d16e6b75efe14f6b03aee84_prof);

        
        $__internal_88b1c893acdc3aeaa7882726feec7382d7c4e58bdb3149d43ab4b7b66cb43b65->leave($__internal_88b1c893acdc3aeaa7882726feec7382d7c4e58bdb3149d43ab4b7b66cb43b65_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5bb55ea6c3fff52ec1023f62fc6d51fd05e5744c81254b899be04763bfaaf9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bb55ea6c3fff52ec1023f62fc6d51fd05e5744c81254b899be04763bfaaf9a->enter($__internal_a5bb55ea6c3fff52ec1023f62fc6d51fd05e5744c81254b899be04763bfaaf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4457b686d46c71c9b3935ce3a0f9e12407a2e68c5fa782a06afa8b2e97a2b78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4457b686d46c71c9b3935ce3a0f9e12407a2e68c5fa782a06afa8b2e97a2b78b->enter($__internal_4457b686d46c71c9b3935ce3a0f9e12407a2e68c5fa782a06afa8b2e97a2b78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4457b686d46c71c9b3935ce3a0f9e12407a2e68c5fa782a06afa8b2e97a2b78b->leave($__internal_4457b686d46c71c9b3935ce3a0f9e12407a2e68c5fa782a06afa8b2e97a2b78b_prof);

        
        $__internal_a5bb55ea6c3fff52ec1023f62fc6d51fd05e5744c81254b899be04763bfaaf9a->leave($__internal_a5bb55ea6c3fff52ec1023f62fc6d51fd05e5744c81254b899be04763bfaaf9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
