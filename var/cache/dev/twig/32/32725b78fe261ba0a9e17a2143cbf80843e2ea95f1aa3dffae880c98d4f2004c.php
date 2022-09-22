<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_8526b8f7dc632a8204d2bc980775592007193004031a75cf488abb755a308f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9e96ba339eec39e9844c5d0696dff4c856a2b9cdca5e0dc167240a8720f63b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e96ba339eec39e9844c5d0696dff4c856a2b9cdca5e0dc167240a8720f63b85->enter($__internal_9e96ba339eec39e9844c5d0696dff4c856a2b9cdca5e0dc167240a8720f63b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_c6f49cbb2b57c0b92e631361aaf6878feee00317286b5e7768369c0cc77c099c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f49cbb2b57c0b92e631361aaf6878feee00317286b5e7768369c0cc77c099c->enter($__internal_c6f49cbb2b57c0b92e631361aaf6878feee00317286b5e7768369c0cc77c099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e96ba339eec39e9844c5d0696dff4c856a2b9cdca5e0dc167240a8720f63b85->leave($__internal_9e96ba339eec39e9844c5d0696dff4c856a2b9cdca5e0dc167240a8720f63b85_prof);

        
        $__internal_c6f49cbb2b57c0b92e631361aaf6878feee00317286b5e7768369c0cc77c099c->leave($__internal_c6f49cbb2b57c0b92e631361aaf6878feee00317286b5e7768369c0cc77c099c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cc51abea334606aad5191f5577a9627da566a3cb3a0c344d2a746ac7d2ccb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc51abea334606aad5191f5577a9627da566a3cb3a0c344d2a746ac7d2ccb47->enter($__internal_2cc51abea334606aad5191f5577a9627da566a3cb3a0c344d2a746ac7d2ccb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7659393196273c1a9863a7ceb2b547c1793b4fd07c96e587695650281a17625a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7659393196273c1a9863a7ceb2b547c1793b4fd07c96e587695650281a17625a->enter($__internal_7659393196273c1a9863a7ceb2b547c1793b4fd07c96e587695650281a17625a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7659393196273c1a9863a7ceb2b547c1793b4fd07c96e587695650281a17625a->leave($__internal_7659393196273c1a9863a7ceb2b547c1793b4fd07c96e587695650281a17625a_prof);

        
        $__internal_2cc51abea334606aad5191f5577a9627da566a3cb3a0c344d2a746ac7d2ccb47->leave($__internal_2cc51abea334606aad5191f5577a9627da566a3cb3a0c344d2a746ac7d2ccb47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
