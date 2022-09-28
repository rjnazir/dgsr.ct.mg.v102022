<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_bdde9df59ca5ee363d884c9284282fd3b21d157168782ee946acbd4fe0651e88 extends Twig_Template
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
        $__internal_c9a9fe8e374d11f66ce154d1db10686ee435eda3144920bdd706619db7f8f033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a9fe8e374d11f66ce154d1db10686ee435eda3144920bdd706619db7f8f033->enter($__internal_c9a9fe8e374d11f66ce154d1db10686ee435eda3144920bdd706619db7f8f033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_68f13b190f4fa406e9eb95135ceb8acd7f4dbccf14695840b16d272b257ad466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f13b190f4fa406e9eb95135ceb8acd7f4dbccf14695840b16d272b257ad466->enter($__internal_68f13b190f4fa406e9eb95135ceb8acd7f4dbccf14695840b16d272b257ad466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c9a9fe8e374d11f66ce154d1db10686ee435eda3144920bdd706619db7f8f033->leave($__internal_c9a9fe8e374d11f66ce154d1db10686ee435eda3144920bdd706619db7f8f033_prof);

        
        $__internal_68f13b190f4fa406e9eb95135ceb8acd7f4dbccf14695840b16d272b257ad466->leave($__internal_68f13b190f4fa406e9eb95135ceb8acd7f4dbccf14695840b16d272b257ad466_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eea8ea63074949f7a8095ea3039dbea6e067271777a30ce2e0373ec775148ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea8ea63074949f7a8095ea3039dbea6e067271777a30ce2e0373ec775148ec4->enter($__internal_eea8ea63074949f7a8095ea3039dbea6e067271777a30ce2e0373ec775148ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a4600217dd199cf50fe56f6be9a5046a8dd61b267c43d186a2bdaf3e06efda65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4600217dd199cf50fe56f6be9a5046a8dd61b267c43d186a2bdaf3e06efda65->enter($__internal_a4600217dd199cf50fe56f6be9a5046a8dd61b267c43d186a2bdaf3e06efda65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a4600217dd199cf50fe56f6be9a5046a8dd61b267c43d186a2bdaf3e06efda65->leave($__internal_a4600217dd199cf50fe56f6be9a5046a8dd61b267c43d186a2bdaf3e06efda65_prof);

        
        $__internal_eea8ea63074949f7a8095ea3039dbea6e067271777a30ce2e0373ec775148ec4->leave($__internal_eea8ea63074949f7a8095ea3039dbea6e067271777a30ce2e0373ec775148ec4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d6b3002c80e7a15303dbb5b8852fc7a34c95f2d6377650ebc2b127dc14fd3436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b3002c80e7a15303dbb5b8852fc7a34c95f2d6377650ebc2b127dc14fd3436->enter($__internal_d6b3002c80e7a15303dbb5b8852fc7a34c95f2d6377650ebc2b127dc14fd3436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_61206ea184f6c7f1130a2094dd1dddb7236e22f359e4cbdabe2d6246dba74795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61206ea184f6c7f1130a2094dd1dddb7236e22f359e4cbdabe2d6246dba74795->enter($__internal_61206ea184f6c7f1130a2094dd1dddb7236e22f359e4cbdabe2d6246dba74795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_61206ea184f6c7f1130a2094dd1dddb7236e22f359e4cbdabe2d6246dba74795->leave($__internal_61206ea184f6c7f1130a2094dd1dddb7236e22f359e4cbdabe2d6246dba74795_prof);

        
        $__internal_d6b3002c80e7a15303dbb5b8852fc7a34c95f2d6377650ebc2b127dc14fd3436->leave($__internal_d6b3002c80e7a15303dbb5b8852fc7a34c95f2d6377650ebc2b127dc14fd3436_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ed584ececc48ec5ba8ec4a4e03dc338281df386f98f1e10d6df528df10c705a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed584ececc48ec5ba8ec4a4e03dc338281df386f98f1e10d6df528df10c705a->enter($__internal_1ed584ececc48ec5ba8ec4a4e03dc338281df386f98f1e10d6df528df10c705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_35f09e8f937d852f61d2d71de665846f38b2161e5285ddee067f644c78ebf217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f09e8f937d852f61d2d71de665846f38b2161e5285ddee067f644c78ebf217->enter($__internal_35f09e8f937d852f61d2d71de665846f38b2161e5285ddee067f644c78ebf217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_35f09e8f937d852f61d2d71de665846f38b2161e5285ddee067f644c78ebf217->leave($__internal_35f09e8f937d852f61d2d71de665846f38b2161e5285ddee067f644c78ebf217_prof);

        
        $__internal_1ed584ececc48ec5ba8ec4a4e03dc338281df386f98f1e10d6df528df10c705a->leave($__internal_1ed584ececc48ec5ba8ec4a4e03dc338281df386f98f1e10d6df528df10c705a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
