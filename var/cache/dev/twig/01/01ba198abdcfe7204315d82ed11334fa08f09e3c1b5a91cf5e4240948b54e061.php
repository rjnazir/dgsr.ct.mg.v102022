<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0052611029406a8066fc29bcc6e363b9988a56760f9545edfaf6bb6b6177e831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_3b4fc4ac2d7052bb17bd505c3a5cb17e117d6fdc4b62be58c24ec983aa225177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4fc4ac2d7052bb17bd505c3a5cb17e117d6fdc4b62be58c24ec983aa225177->enter($__internal_3b4fc4ac2d7052bb17bd505c3a5cb17e117d6fdc4b62be58c24ec983aa225177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_d36bf8428572ccd3e103efd6644b20b7294de088a013180992c2da970f5b1444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36bf8428572ccd3e103efd6644b20b7294de088a013180992c2da970f5b1444->enter($__internal_d36bf8428572ccd3e103efd6644b20b7294de088a013180992c2da970f5b1444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4fc4ac2d7052bb17bd505c3a5cb17e117d6fdc4b62be58c24ec983aa225177->leave($__internal_3b4fc4ac2d7052bb17bd505c3a5cb17e117d6fdc4b62be58c24ec983aa225177_prof);

        
        $__internal_d36bf8428572ccd3e103efd6644b20b7294de088a013180992c2da970f5b1444->leave($__internal_d36bf8428572ccd3e103efd6644b20b7294de088a013180992c2da970f5b1444_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4cca09fa8fb736029bf8e072838a54968003465cfd715df98826a87204f3f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cca09fa8fb736029bf8e072838a54968003465cfd715df98826a87204f3f90->enter($__internal_d4cca09fa8fb736029bf8e072838a54968003465cfd715df98826a87204f3f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62faa30d2a64b4f56de7425941499fa614ea4e73c83ead6e4e3e3bb034972006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62faa30d2a64b4f56de7425941499fa614ea4e73c83ead6e4e3e3bb034972006->enter($__internal_62faa30d2a64b4f56de7425941499fa614ea4e73c83ead6e4e3e3bb034972006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_62faa30d2a64b4f56de7425941499fa614ea4e73c83ead6e4e3e3bb034972006->leave($__internal_62faa30d2a64b4f56de7425941499fa614ea4e73c83ead6e4e3e3bb034972006_prof);

        
        $__internal_d4cca09fa8fb736029bf8e072838a54968003465cfd715df98826a87204f3f90->leave($__internal_d4cca09fa8fb736029bf8e072838a54968003465cfd715df98826a87204f3f90_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
