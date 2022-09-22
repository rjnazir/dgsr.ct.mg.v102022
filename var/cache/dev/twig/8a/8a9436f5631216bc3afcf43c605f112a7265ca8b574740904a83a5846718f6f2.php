<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_67157227104559cf96543196efef41e46f26f890c2bd1c11ea71dc62fa363155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_e035604de2a5a8c6750d9e691efbb09cb27b0dfa17099f8e9b18a570538656f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e035604de2a5a8c6750d9e691efbb09cb27b0dfa17099f8e9b18a570538656f1->enter($__internal_e035604de2a5a8c6750d9e691efbb09cb27b0dfa17099f8e9b18a570538656f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_3995daaed5d066f67aa95ea29299aa06ca06541e08a44678b0a829e2e33d1051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3995daaed5d066f67aa95ea29299aa06ca06541e08a44678b0a829e2e33d1051->enter($__internal_3995daaed5d066f67aa95ea29299aa06ca06541e08a44678b0a829e2e33d1051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e035604de2a5a8c6750d9e691efbb09cb27b0dfa17099f8e9b18a570538656f1->leave($__internal_e035604de2a5a8c6750d9e691efbb09cb27b0dfa17099f8e9b18a570538656f1_prof);

        
        $__internal_3995daaed5d066f67aa95ea29299aa06ca06541e08a44678b0a829e2e33d1051->leave($__internal_3995daaed5d066f67aa95ea29299aa06ca06541e08a44678b0a829e2e33d1051_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98d58f772bdd44559fbfb8bbd431bfed77906a91c169ddce44b6f049f2df793f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d58f772bdd44559fbfb8bbd431bfed77906a91c169ddce44b6f049f2df793f->enter($__internal_98d58f772bdd44559fbfb8bbd431bfed77906a91c169ddce44b6f049f2df793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e758907ba0e8bfb19a8ef1abba9420c0da71937ba89746517500cb212b0aeca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e758907ba0e8bfb19a8ef1abba9420c0da71937ba89746517500cb212b0aeca0->enter($__internal_e758907ba0e8bfb19a8ef1abba9420c0da71937ba89746517500cb212b0aeca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e758907ba0e8bfb19a8ef1abba9420c0da71937ba89746517500cb212b0aeca0->leave($__internal_e758907ba0e8bfb19a8ef1abba9420c0da71937ba89746517500cb212b0aeca0_prof);

        
        $__internal_98d58f772bdd44559fbfb8bbd431bfed77906a91c169ddce44b6f049f2df793f->leave($__internal_98d58f772bdd44559fbfb8bbd431bfed77906a91c169ddce44b6f049f2df793f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
