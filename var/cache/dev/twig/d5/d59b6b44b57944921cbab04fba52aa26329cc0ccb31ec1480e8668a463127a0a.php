<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_803a36da29212b54087419dd6206acab105213a87b52fbc5e513fd9548857274 extends Twig_Template
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
        $__internal_05a560f9e72c738ce44998758153c2ce92417ebc1f07c8b28bf3146232f1bad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a560f9e72c738ce44998758153c2ce92417ebc1f07c8b28bf3146232f1bad2->enter($__internal_05a560f9e72c738ce44998758153c2ce92417ebc1f07c8b28bf3146232f1bad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_d29be9420d796eba623b3eebcc183fe2de47a9d405929b15c71a65a606dfd936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29be9420d796eba623b3eebcc183fe2de47a9d405929b15c71a65a606dfd936->enter($__internal_d29be9420d796eba623b3eebcc183fe2de47a9d405929b15c71a65a606dfd936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05a560f9e72c738ce44998758153c2ce92417ebc1f07c8b28bf3146232f1bad2->leave($__internal_05a560f9e72c738ce44998758153c2ce92417ebc1f07c8b28bf3146232f1bad2_prof);

        
        $__internal_d29be9420d796eba623b3eebcc183fe2de47a9d405929b15c71a65a606dfd936->leave($__internal_d29be9420d796eba623b3eebcc183fe2de47a9d405929b15c71a65a606dfd936_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9ddbba5a16b19b9c6738da3614f7b201fdf07d7280a1399d37d201765a9f2c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddbba5a16b19b9c6738da3614f7b201fdf07d7280a1399d37d201765a9f2c0c->enter($__internal_9ddbba5a16b19b9c6738da3614f7b201fdf07d7280a1399d37d201765a9f2c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5e4fe8233e6133545187c81e12c5ae8bc339ad3970646ec07ef2a717dd209e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4fe8233e6133545187c81e12c5ae8bc339ad3970646ec07ef2a717dd209e6c->enter($__internal_5e4fe8233e6133545187c81e12c5ae8bc339ad3970646ec07ef2a717dd209e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5e4fe8233e6133545187c81e12c5ae8bc339ad3970646ec07ef2a717dd209e6c->leave($__internal_5e4fe8233e6133545187c81e12c5ae8bc339ad3970646ec07ef2a717dd209e6c_prof);

        
        $__internal_9ddbba5a16b19b9c6738da3614f7b201fdf07d7280a1399d37d201765a9f2c0c->leave($__internal_9ddbba5a16b19b9c6738da3614f7b201fdf07d7280a1399d37d201765a9f2c0c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1b191d1fd90ea9697d43251a831f710526264eb51f4067d0940279361ff63172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b191d1fd90ea9697d43251a831f710526264eb51f4067d0940279361ff63172->enter($__internal_1b191d1fd90ea9697d43251a831f710526264eb51f4067d0940279361ff63172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f28adaf64da7e308e155561ab346cd9e97239d13541a00e0585e077d76ba2616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28adaf64da7e308e155561ab346cd9e97239d13541a00e0585e077d76ba2616->enter($__internal_f28adaf64da7e308e155561ab346cd9e97239d13541a00e0585e077d76ba2616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f28adaf64da7e308e155561ab346cd9e97239d13541a00e0585e077d76ba2616->leave($__internal_f28adaf64da7e308e155561ab346cd9e97239d13541a00e0585e077d76ba2616_prof);

        
        $__internal_1b191d1fd90ea9697d43251a831f710526264eb51f4067d0940279361ff63172->leave($__internal_1b191d1fd90ea9697d43251a831f710526264eb51f4067d0940279361ff63172_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_72a85b3be952fb2361af370c86f1251ce26f9f48769ff774c7ef7a762570691a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a85b3be952fb2361af370c86f1251ce26f9f48769ff774c7ef7a762570691a->enter($__internal_72a85b3be952fb2361af370c86f1251ce26f9f48769ff774c7ef7a762570691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d8fcfa0f8327cc974d18b4aa4b26f96ed775f7461ae0c59b730e0c16e4bd3b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fcfa0f8327cc974d18b4aa4b26f96ed775f7461ae0c59b730e0c16e4bd3b29->enter($__internal_d8fcfa0f8327cc974d18b4aa4b26f96ed775f7461ae0c59b730e0c16e4bd3b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d8fcfa0f8327cc974d18b4aa4b26f96ed775f7461ae0c59b730e0c16e4bd3b29->leave($__internal_d8fcfa0f8327cc974d18b4aa4b26f96ed775f7461ae0c59b730e0c16e4bd3b29_prof);

        
        $__internal_72a85b3be952fb2361af370c86f1251ce26f9f48769ff774c7ef7a762570691a->leave($__internal_72a85b3be952fb2361af370c86f1251ce26f9f48769ff774c7ef7a762570691a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
