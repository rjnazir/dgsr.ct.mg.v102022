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
        $__internal_4bb8bf8d11facb9e4faa658c9624051c94fe16cdd7579003dd940a16077b63fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb8bf8d11facb9e4faa658c9624051c94fe16cdd7579003dd940a16077b63fe->enter($__internal_4bb8bf8d11facb9e4faa658c9624051c94fe16cdd7579003dd940a16077b63fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_0de35b08476b2e4d0229b4499ead92521f321538bdb9415142f890f70525bf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de35b08476b2e4d0229b4499ead92521f321538bdb9415142f890f70525bf53->enter($__internal_0de35b08476b2e4d0229b4499ead92521f321538bdb9415142f890f70525bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb8bf8d11facb9e4faa658c9624051c94fe16cdd7579003dd940a16077b63fe->leave($__internal_4bb8bf8d11facb9e4faa658c9624051c94fe16cdd7579003dd940a16077b63fe_prof);

        
        $__internal_0de35b08476b2e4d0229b4499ead92521f321538bdb9415142f890f70525bf53->leave($__internal_0de35b08476b2e4d0229b4499ead92521f321538bdb9415142f890f70525bf53_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07c33332b3363587dd655623166582addb1d1d3faed93e1d28a5b9ad9f601eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c33332b3363587dd655623166582addb1d1d3faed93e1d28a5b9ad9f601eaa->enter($__internal_07c33332b3363587dd655623166582addb1d1d3faed93e1d28a5b9ad9f601eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c904dc732ed50098e0fa0247d03d6a644d86b2039b56702e31d6329197264a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c904dc732ed50098e0fa0247d03d6a644d86b2039b56702e31d6329197264a1a->enter($__internal_c904dc732ed50098e0fa0247d03d6a644d86b2039b56702e31d6329197264a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c904dc732ed50098e0fa0247d03d6a644d86b2039b56702e31d6329197264a1a->leave($__internal_c904dc732ed50098e0fa0247d03d6a644d86b2039b56702e31d6329197264a1a_prof);

        
        $__internal_07c33332b3363587dd655623166582addb1d1d3faed93e1d28a5b9ad9f601eaa->leave($__internal_07c33332b3363587dd655623166582addb1d1d3faed93e1d28a5b9ad9f601eaa_prof);

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
