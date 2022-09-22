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
        $__internal_924dfa469c6b21820b142419d5c91dff5196915c26c99eece5247bdcdcd770d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924dfa469c6b21820b142419d5c91dff5196915c26c99eece5247bdcdcd770d8->enter($__internal_924dfa469c6b21820b142419d5c91dff5196915c26c99eece5247bdcdcd770d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c369e3d9e01d3324c7bfae2a3e245393075c5704678907129ee5aa66cd8829fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c369e3d9e01d3324c7bfae2a3e245393075c5704678907129ee5aa66cd8829fe->enter($__internal_c369e3d9e01d3324c7bfae2a3e245393075c5704678907129ee5aa66cd8829fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_924dfa469c6b21820b142419d5c91dff5196915c26c99eece5247bdcdcd770d8->leave($__internal_924dfa469c6b21820b142419d5c91dff5196915c26c99eece5247bdcdcd770d8_prof);

        
        $__internal_c369e3d9e01d3324c7bfae2a3e245393075c5704678907129ee5aa66cd8829fe->leave($__internal_c369e3d9e01d3324c7bfae2a3e245393075c5704678907129ee5aa66cd8829fe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_38189bef677160209f1ea413abbab3a20a496633c5c10d3aebdf545c7edd4258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38189bef677160209f1ea413abbab3a20a496633c5c10d3aebdf545c7edd4258->enter($__internal_38189bef677160209f1ea413abbab3a20a496633c5c10d3aebdf545c7edd4258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a630b1409520176b6b2c9f76ea5e081dd128ce8948bb2556e8c0ee4974d6e685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a630b1409520176b6b2c9f76ea5e081dd128ce8948bb2556e8c0ee4974d6e685->enter($__internal_a630b1409520176b6b2c9f76ea5e081dd128ce8948bb2556e8c0ee4974d6e685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a630b1409520176b6b2c9f76ea5e081dd128ce8948bb2556e8c0ee4974d6e685->leave($__internal_a630b1409520176b6b2c9f76ea5e081dd128ce8948bb2556e8c0ee4974d6e685_prof);

        
        $__internal_38189bef677160209f1ea413abbab3a20a496633c5c10d3aebdf545c7edd4258->leave($__internal_38189bef677160209f1ea413abbab3a20a496633c5c10d3aebdf545c7edd4258_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_678c1b48d45e95ed776574bdd1104c0820f36da9814e26273497734834a11ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678c1b48d45e95ed776574bdd1104c0820f36da9814e26273497734834a11ae9->enter($__internal_678c1b48d45e95ed776574bdd1104c0820f36da9814e26273497734834a11ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bc49a8eb55f78059494f7ce9d685510c0d762ac350fe34d062bf1966312c275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc49a8eb55f78059494f7ce9d685510c0d762ac350fe34d062bf1966312c275f->enter($__internal_bc49a8eb55f78059494f7ce9d685510c0d762ac350fe34d062bf1966312c275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bc49a8eb55f78059494f7ce9d685510c0d762ac350fe34d062bf1966312c275f->leave($__internal_bc49a8eb55f78059494f7ce9d685510c0d762ac350fe34d062bf1966312c275f_prof);

        
        $__internal_678c1b48d45e95ed776574bdd1104c0820f36da9814e26273497734834a11ae9->leave($__internal_678c1b48d45e95ed776574bdd1104c0820f36da9814e26273497734834a11ae9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0c3f3283d236587dcb0a6f9b9860d895f29a94b9ec2d75a2efcf7110ccbe9474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3f3283d236587dcb0a6f9b9860d895f29a94b9ec2d75a2efcf7110ccbe9474->enter($__internal_0c3f3283d236587dcb0a6f9b9860d895f29a94b9ec2d75a2efcf7110ccbe9474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4560676ddbf77859f402769e01ef852241ccff6ac50474ac64905403f10c8ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4560676ddbf77859f402769e01ef852241ccff6ac50474ac64905403f10c8ba8->enter($__internal_4560676ddbf77859f402769e01ef852241ccff6ac50474ac64905403f10c8ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4560676ddbf77859f402769e01ef852241ccff6ac50474ac64905403f10c8ba8->leave($__internal_4560676ddbf77859f402769e01ef852241ccff6ac50474ac64905403f10c8ba8_prof);

        
        $__internal_0c3f3283d236587dcb0a6f9b9860d895f29a94b9ec2d75a2efcf7110ccbe9474->leave($__internal_0c3f3283d236587dcb0a6f9b9860d895f29a94b9ec2d75a2efcf7110ccbe9474_prof);

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
