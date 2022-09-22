<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9940d2abff534d9e5769c698107dac85cea934b0380cc3d979c4dba4dd245562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b24d96f2c9c799cb5dc6265636d2cd934b5b6a49cd80fcc75167b8cf3134fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b24d96f2c9c799cb5dc6265636d2cd934b5b6a49cd80fcc75167b8cf3134fb8->enter($__internal_1b24d96f2c9c799cb5dc6265636d2cd934b5b6a49cd80fcc75167b8cf3134fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_09b714cac98201395a7985764ba27fb5588680bce16013cfbac5b2ff9d194b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b714cac98201395a7985764ba27fb5588680bce16013cfbac5b2ff9d194b27->enter($__internal_09b714cac98201395a7985764ba27fb5588680bce16013cfbac5b2ff9d194b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1b24d96f2c9c799cb5dc6265636d2cd934b5b6a49cd80fcc75167b8cf3134fb8->leave($__internal_1b24d96f2c9c799cb5dc6265636d2cd934b5b6a49cd80fcc75167b8cf3134fb8_prof);

        
        $__internal_09b714cac98201395a7985764ba27fb5588680bce16013cfbac5b2ff9d194b27->leave($__internal_09b714cac98201395a7985764ba27fb5588680bce16013cfbac5b2ff9d194b27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
