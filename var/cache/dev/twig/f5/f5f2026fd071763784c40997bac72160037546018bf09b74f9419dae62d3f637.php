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
        $__internal_f0ebf929c4d8a812ba5544c2afa0f205a4a0a405d1d5b80262f60b3c13ddfa67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ebf929c4d8a812ba5544c2afa0f205a4a0a405d1d5b80262f60b3c13ddfa67->enter($__internal_f0ebf929c4d8a812ba5544c2afa0f205a4a0a405d1d5b80262f60b3c13ddfa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_f30a1722d39dc830c38fc0e257aea2c5272a5e42868e60fa102d4d9976a7c8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30a1722d39dc830c38fc0e257aea2c5272a5e42868e60fa102d4d9976a7c8f6->enter($__internal_f30a1722d39dc830c38fc0e257aea2c5272a5e42868e60fa102d4d9976a7c8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f0ebf929c4d8a812ba5544c2afa0f205a4a0a405d1d5b80262f60b3c13ddfa67->leave($__internal_f0ebf929c4d8a812ba5544c2afa0f205a4a0a405d1d5b80262f60b3c13ddfa67_prof);

        
        $__internal_f30a1722d39dc830c38fc0e257aea2c5272a5e42868e60fa102d4d9976a7c8f6->leave($__internal_f30a1722d39dc830c38fc0e257aea2c5272a5e42868e60fa102d4d9976a7c8f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6cf0db078edceae69224fca913a33d2c810d6f1e3f980d891a4ae64dba8e30ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf0db078edceae69224fca913a33d2c810d6f1e3f980d891a4ae64dba8e30ff->enter($__internal_6cf0db078edceae69224fca913a33d2c810d6f1e3f980d891a4ae64dba8e30ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bed412b92fe31b2075bfd03cec9ec9618ffcda799092faf34019d804aba2f3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed412b92fe31b2075bfd03cec9ec9618ffcda799092faf34019d804aba2f3d5->enter($__internal_bed412b92fe31b2075bfd03cec9ec9618ffcda799092faf34019d804aba2f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_bed412b92fe31b2075bfd03cec9ec9618ffcda799092faf34019d804aba2f3d5->leave($__internal_bed412b92fe31b2075bfd03cec9ec9618ffcda799092faf34019d804aba2f3d5_prof);

        
        $__internal_6cf0db078edceae69224fca913a33d2c810d6f1e3f980d891a4ae64dba8e30ff->leave($__internal_6cf0db078edceae69224fca913a33d2c810d6f1e3f980d891a4ae64dba8e30ff_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4d90d33147aea50bbda930f51bd35cb633b444ce68eca045d502bb84b2273ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d90d33147aea50bbda930f51bd35cb633b444ce68eca045d502bb84b2273ebe->enter($__internal_4d90d33147aea50bbda930f51bd35cb633b444ce68eca045d502bb84b2273ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_73eae0ec65f66e5faddfaa1c45b3607b44a16d08c763919473155813f38e7d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73eae0ec65f66e5faddfaa1c45b3607b44a16d08c763919473155813f38e7d64->enter($__internal_73eae0ec65f66e5faddfaa1c45b3607b44a16d08c763919473155813f38e7d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73eae0ec65f66e5faddfaa1c45b3607b44a16d08c763919473155813f38e7d64->leave($__internal_73eae0ec65f66e5faddfaa1c45b3607b44a16d08c763919473155813f38e7d64_prof);

        
        $__internal_4d90d33147aea50bbda930f51bd35cb633b444ce68eca045d502bb84b2273ebe->leave($__internal_4d90d33147aea50bbda930f51bd35cb633b444ce68eca045d502bb84b2273ebe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3541a1b63e8066fd299c6e31b726daa0e9bfa07730340461baf85e8f34206400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3541a1b63e8066fd299c6e31b726daa0e9bfa07730340461baf85e8f34206400->enter($__internal_3541a1b63e8066fd299c6e31b726daa0e9bfa07730340461baf85e8f34206400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_271eb481f7dc81e4edab8a9b113300f512b9a58e2e5cc3a280afcd8db8dda4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271eb481f7dc81e4edab8a9b113300f512b9a58e2e5cc3a280afcd8db8dda4b5->enter($__internal_271eb481f7dc81e4edab8a9b113300f512b9a58e2e5cc3a280afcd8db8dda4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_271eb481f7dc81e4edab8a9b113300f512b9a58e2e5cc3a280afcd8db8dda4b5->leave($__internal_271eb481f7dc81e4edab8a9b113300f512b9a58e2e5cc3a280afcd8db8dda4b5_prof);

        
        $__internal_3541a1b63e8066fd299c6e31b726daa0e9bfa07730340461baf85e8f34206400->leave($__internal_3541a1b63e8066fd299c6e31b726daa0e9bfa07730340461baf85e8f34206400_prof);

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
