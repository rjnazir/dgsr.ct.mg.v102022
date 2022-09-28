<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ecaff70a4b052b183300795304d42fad8621ae1a24fda26d2815bb78316aa2f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_d051452717af79149744fe604b9dcbb2ac2387c97d2293acb85562b5d0bdf6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d051452717af79149744fe604b9dcbb2ac2387c97d2293acb85562b5d0bdf6c0->enter($__internal_d051452717af79149744fe604b9dcbb2ac2387c97d2293acb85562b5d0bdf6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4f795bc6e99dbdb542ae6b0175bd2307180f26d5fda8a42d63fc1cb7ad915fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f795bc6e99dbdb542ae6b0175bd2307180f26d5fda8a42d63fc1cb7ad915fbe->enter($__internal_4f795bc6e99dbdb542ae6b0175bd2307180f26d5fda8a42d63fc1cb7ad915fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d051452717af79149744fe604b9dcbb2ac2387c97d2293acb85562b5d0bdf6c0->leave($__internal_d051452717af79149744fe604b9dcbb2ac2387c97d2293acb85562b5d0bdf6c0_prof);

        
        $__internal_4f795bc6e99dbdb542ae6b0175bd2307180f26d5fda8a42d63fc1cb7ad915fbe->leave($__internal_4f795bc6e99dbdb542ae6b0175bd2307180f26d5fda8a42d63fc1cb7ad915fbe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_480a221ff073b3a57c37db1c22bae33bde8decab1eb21a7789087c3ac6e40586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480a221ff073b3a57c37db1c22bae33bde8decab1eb21a7789087c3ac6e40586->enter($__internal_480a221ff073b3a57c37db1c22bae33bde8decab1eb21a7789087c3ac6e40586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f99d7e16842d40a2e180a89c6c36b0e6a19b68ad16d86d0c8351fd0e26503f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99d7e16842d40a2e180a89c6c36b0e6a19b68ad16d86d0c8351fd0e26503f9e->enter($__internal_f99d7e16842d40a2e180a89c6c36b0e6a19b68ad16d86d0c8351fd0e26503f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f99d7e16842d40a2e180a89c6c36b0e6a19b68ad16d86d0c8351fd0e26503f9e->leave($__internal_f99d7e16842d40a2e180a89c6c36b0e6a19b68ad16d86d0c8351fd0e26503f9e_prof);

        
        $__internal_480a221ff073b3a57c37db1c22bae33bde8decab1eb21a7789087c3ac6e40586->leave($__internal_480a221ff073b3a57c37db1c22bae33bde8decab1eb21a7789087c3ac6e40586_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
