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
        $__internal_9ccb8559cbca53b9ece2ea6573f78c2996d1f198c4c3aaf1b8ab37b0866c7114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccb8559cbca53b9ece2ea6573f78c2996d1f198c4c3aaf1b8ab37b0866c7114->enter($__internal_9ccb8559cbca53b9ece2ea6573f78c2996d1f198c4c3aaf1b8ab37b0866c7114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_498b47304f13b3af461c022fdf3be5dd83a98c55a6aabf07ca14a246863c4d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498b47304f13b3af461c022fdf3be5dd83a98c55a6aabf07ca14a246863c4d34->enter($__internal_498b47304f13b3af461c022fdf3be5dd83a98c55a6aabf07ca14a246863c4d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ccb8559cbca53b9ece2ea6573f78c2996d1f198c4c3aaf1b8ab37b0866c7114->leave($__internal_9ccb8559cbca53b9ece2ea6573f78c2996d1f198c4c3aaf1b8ab37b0866c7114_prof);

        
        $__internal_498b47304f13b3af461c022fdf3be5dd83a98c55a6aabf07ca14a246863c4d34->leave($__internal_498b47304f13b3af461c022fdf3be5dd83a98c55a6aabf07ca14a246863c4d34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f80adb63c9bb0ae13d1f5a6f3b721bd67119224c6a12f887800a1e6aecb743a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80adb63c9bb0ae13d1f5a6f3b721bd67119224c6a12f887800a1e6aecb743a9->enter($__internal_f80adb63c9bb0ae13d1f5a6f3b721bd67119224c6a12f887800a1e6aecb743a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc1036a06be217c7e8a18a371128a9b36adec762b4f5e3a6166172605e73d243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1036a06be217c7e8a18a371128a9b36adec762b4f5e3a6166172605e73d243->enter($__internal_bc1036a06be217c7e8a18a371128a9b36adec762b4f5e3a6166172605e73d243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bc1036a06be217c7e8a18a371128a9b36adec762b4f5e3a6166172605e73d243->leave($__internal_bc1036a06be217c7e8a18a371128a9b36adec762b4f5e3a6166172605e73d243_prof);

        
        $__internal_f80adb63c9bb0ae13d1f5a6f3b721bd67119224c6a12f887800a1e6aecb743a9->leave($__internal_f80adb63c9bb0ae13d1f5a6f3b721bd67119224c6a12f887800a1e6aecb743a9_prof);

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
