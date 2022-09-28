<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_29465e72186905df12715796ca1a70b822ebca8adb89dd1633461982ead4e69e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a6d135d095da78810761d03a14995527b4ef85aac6cde660a6c1a4dd9224e934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d135d095da78810761d03a14995527b4ef85aac6cde660a6c1a4dd9224e934->enter($__internal_a6d135d095da78810761d03a14995527b4ef85aac6cde660a6c1a4dd9224e934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6cbae7caf42b9c6b7d3258d9d79fd81776bc35aa1bd7cf07f8872dfefa841b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbae7caf42b9c6b7d3258d9d79fd81776bc35aa1bd7cf07f8872dfefa841b7a->enter($__internal_6cbae7caf42b9c6b7d3258d9d79fd81776bc35aa1bd7cf07f8872dfefa841b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d135d095da78810761d03a14995527b4ef85aac6cde660a6c1a4dd9224e934->leave($__internal_a6d135d095da78810761d03a14995527b4ef85aac6cde660a6c1a4dd9224e934_prof);

        
        $__internal_6cbae7caf42b9c6b7d3258d9d79fd81776bc35aa1bd7cf07f8872dfefa841b7a->leave($__internal_6cbae7caf42b9c6b7d3258d9d79fd81776bc35aa1bd7cf07f8872dfefa841b7a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13e6b4af7198672dd3a12e5e6c96739da3ff619e621f49083f85914e878a5e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e6b4af7198672dd3a12e5e6c96739da3ff619e621f49083f85914e878a5e8e->enter($__internal_13e6b4af7198672dd3a12e5e6c96739da3ff619e621f49083f85914e878a5e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d224a757b8efd4bcd05476c3388dd413a4351dff373c4b3695a3809198cf8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d224a757b8efd4bcd05476c3388dd413a4351dff373c4b3695a3809198cf8a7->enter($__internal_5d224a757b8efd4bcd05476c3388dd413a4351dff373c4b3695a3809198cf8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5d224a757b8efd4bcd05476c3388dd413a4351dff373c4b3695a3809198cf8a7->leave($__internal_5d224a757b8efd4bcd05476c3388dd413a4351dff373c4b3695a3809198cf8a7_prof);

        
        $__internal_13e6b4af7198672dd3a12e5e6c96739da3ff619e621f49083f85914e878a5e8e->leave($__internal_13e6b4af7198672dd3a12e5e6c96739da3ff619e621f49083f85914e878a5e8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
