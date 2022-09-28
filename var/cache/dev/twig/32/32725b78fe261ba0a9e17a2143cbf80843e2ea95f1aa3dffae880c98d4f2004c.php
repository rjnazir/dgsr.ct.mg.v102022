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
        $__internal_5cdf4ff14546fe05f07372ba5d1b3cd9d0113ce09dc99c615cb12e11a96c56a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdf4ff14546fe05f07372ba5d1b3cd9d0113ce09dc99c615cb12e11a96c56a4->enter($__internal_5cdf4ff14546fe05f07372ba5d1b3cd9d0113ce09dc99c615cb12e11a96c56a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_bdae28702911a9f148eeb5d4428169f7acecbb0365bcc68a57901536ba810d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdae28702911a9f148eeb5d4428169f7acecbb0365bcc68a57901536ba810d98->enter($__internal_bdae28702911a9f148eeb5d4428169f7acecbb0365bcc68a57901536ba810d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdf4ff14546fe05f07372ba5d1b3cd9d0113ce09dc99c615cb12e11a96c56a4->leave($__internal_5cdf4ff14546fe05f07372ba5d1b3cd9d0113ce09dc99c615cb12e11a96c56a4_prof);

        
        $__internal_bdae28702911a9f148eeb5d4428169f7acecbb0365bcc68a57901536ba810d98->leave($__internal_bdae28702911a9f148eeb5d4428169f7acecbb0365bcc68a57901536ba810d98_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93ac44e560581bcde4c66635260c33f4dd77df2ab5e13cfd2fbc6c26657909af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93ac44e560581bcde4c66635260c33f4dd77df2ab5e13cfd2fbc6c26657909af->enter($__internal_93ac44e560581bcde4c66635260c33f4dd77df2ab5e13cfd2fbc6c26657909af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_242cde122c7a33127c6612841c0757c74190bb5cbbbbb16cc5a38c7b344eb973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242cde122c7a33127c6612841c0757c74190bb5cbbbbb16cc5a38c7b344eb973->enter($__internal_242cde122c7a33127c6612841c0757c74190bb5cbbbbb16cc5a38c7b344eb973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_242cde122c7a33127c6612841c0757c74190bb5cbbbbb16cc5a38c7b344eb973->leave($__internal_242cde122c7a33127c6612841c0757c74190bb5cbbbbb16cc5a38c7b344eb973_prof);

        
        $__internal_93ac44e560581bcde4c66635260c33f4dd77df2ab5e13cfd2fbc6c26657909af->leave($__internal_93ac44e560581bcde4c66635260c33f4dd77df2ab5e13cfd2fbc6c26657909af_prof);

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
