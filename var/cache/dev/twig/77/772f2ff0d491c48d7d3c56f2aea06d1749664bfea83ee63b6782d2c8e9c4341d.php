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
        $__internal_79033204fb57040f135fd6ea2362f681b5ac319da8bc8af52692de61f9c8bbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79033204fb57040f135fd6ea2362f681b5ac319da8bc8af52692de61f9c8bbb1->enter($__internal_79033204fb57040f135fd6ea2362f681b5ac319da8bc8af52692de61f9c8bbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_8f44b7a518e6d56af75a277e41206eab9c84d1f21aa309bb6be630d8b9d3e1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f44b7a518e6d56af75a277e41206eab9c84d1f21aa309bb6be630d8b9d3e1bd->enter($__internal_8f44b7a518e6d56af75a277e41206eab9c84d1f21aa309bb6be630d8b9d3e1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_79033204fb57040f135fd6ea2362f681b5ac319da8bc8af52692de61f9c8bbb1->leave($__internal_79033204fb57040f135fd6ea2362f681b5ac319da8bc8af52692de61f9c8bbb1_prof);

        
        $__internal_8f44b7a518e6d56af75a277e41206eab9c84d1f21aa309bb6be630d8b9d3e1bd->leave($__internal_8f44b7a518e6d56af75a277e41206eab9c84d1f21aa309bb6be630d8b9d3e1bd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c8e43fa28a21d684204989446d94c93b33616e1cd157f7357f088dc09cda92c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e43fa28a21d684204989446d94c93b33616e1cd157f7357f088dc09cda92c7->enter($__internal_c8e43fa28a21d684204989446d94c93b33616e1cd157f7357f088dc09cda92c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_12a6d130d608ac85214cece5a9250eea64bc46b9c58f2e6317992cd16a307486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a6d130d608ac85214cece5a9250eea64bc46b9c58f2e6317992cd16a307486->enter($__internal_12a6d130d608ac85214cece5a9250eea64bc46b9c58f2e6317992cd16a307486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_12a6d130d608ac85214cece5a9250eea64bc46b9c58f2e6317992cd16a307486->leave($__internal_12a6d130d608ac85214cece5a9250eea64bc46b9c58f2e6317992cd16a307486_prof);

        
        $__internal_c8e43fa28a21d684204989446d94c93b33616e1cd157f7357f088dc09cda92c7->leave($__internal_c8e43fa28a21d684204989446d94c93b33616e1cd157f7357f088dc09cda92c7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8eef5f7a140b7a142dd7669e397d4357ef55a60f8385259edd6650944a4a2a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eef5f7a140b7a142dd7669e397d4357ef55a60f8385259edd6650944a4a2a90->enter($__internal_8eef5f7a140b7a142dd7669e397d4357ef55a60f8385259edd6650944a4a2a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_469f352397baa3b23974f3e7cd062eccb393e5a0762dc984e2c5d74dc7934cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469f352397baa3b23974f3e7cd062eccb393e5a0762dc984e2c5d74dc7934cee->enter($__internal_469f352397baa3b23974f3e7cd062eccb393e5a0762dc984e2c5d74dc7934cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_469f352397baa3b23974f3e7cd062eccb393e5a0762dc984e2c5d74dc7934cee->leave($__internal_469f352397baa3b23974f3e7cd062eccb393e5a0762dc984e2c5d74dc7934cee_prof);

        
        $__internal_8eef5f7a140b7a142dd7669e397d4357ef55a60f8385259edd6650944a4a2a90->leave($__internal_8eef5f7a140b7a142dd7669e397d4357ef55a60f8385259edd6650944a4a2a90_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_88e011b4d55650e5f2cefde30af521d664d3325a44f2905e71434e74d6dd3f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e011b4d55650e5f2cefde30af521d664d3325a44f2905e71434e74d6dd3f20->enter($__internal_88e011b4d55650e5f2cefde30af521d664d3325a44f2905e71434e74d6dd3f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8afc33e59a6ae5c3f5df9d930c9e8d22554ce725876d475cdad7dbcdc8c19feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afc33e59a6ae5c3f5df9d930c9e8d22554ce725876d475cdad7dbcdc8c19feb->enter($__internal_8afc33e59a6ae5c3f5df9d930c9e8d22554ce725876d475cdad7dbcdc8c19feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8afc33e59a6ae5c3f5df9d930c9e8d22554ce725876d475cdad7dbcdc8c19feb->leave($__internal_8afc33e59a6ae5c3f5df9d930c9e8d22554ce725876d475cdad7dbcdc8c19feb_prof);

        
        $__internal_88e011b4d55650e5f2cefde30af521d664d3325a44f2905e71434e74d6dd3f20->leave($__internal_88e011b4d55650e5f2cefde30af521d664d3325a44f2905e71434e74d6dd3f20_prof);

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
