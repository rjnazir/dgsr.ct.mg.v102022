<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_7accc4c0e7dad1d7418425924bda9ba470f674e59835d8faea9153d992c6673e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@User/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_279d99218ae499d15b282e58cfc4b4cc7c188535a115b5f15cc3635c58145ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279d99218ae499d15b282e58cfc4b4cc7c188535a115b5f15cc3635c58145ca2->enter($__internal_279d99218ae499d15b282e58cfc4b4cc7c188535a115b5f15cc3635c58145ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $__internal_f1040ba889e60b3a50e53ed02b55682fe71f124323372eeed7ff4d6d07adb5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1040ba889e60b3a50e53ed02b55682fe71f124323372eeed7ff4d6d07adb5fd->enter($__internal_f1040ba889e60b3a50e53ed02b55682fe71f124323372eeed7ff4d6d07adb5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279d99218ae499d15b282e58cfc4b4cc7c188535a115b5f15cc3635c58145ca2->leave($__internal_279d99218ae499d15b282e58cfc4b4cc7c188535a115b5f15cc3635c58145ca2_prof);

        
        $__internal_f1040ba889e60b3a50e53ed02b55682fe71f124323372eeed7ff4d6d07adb5fd->leave($__internal_f1040ba889e60b3a50e53ed02b55682fe71f124323372eeed7ff4d6d07adb5fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a5ea1dc6ed71c1aa2ec9d6f02aa22a145b55b949c0f6a313054897b1f806f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5ea1dc6ed71c1aa2ec9d6f02aa22a145b55b949c0f6a313054897b1f806f9b->enter($__internal_7a5ea1dc6ed71c1aa2ec9d6f02aa22a145b55b949c0f6a313054897b1f806f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7c879da44cde5c0a2b0591726ede7776286aea8cf9907ac7d8681d493e91f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c879da44cde5c0a2b0591726ede7776286aea8cf9907ac7d8681d493e91f3a->enter($__internal_e7c879da44cde5c0a2b0591726ede7776286aea8cf9907ac7d8681d493e91f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (array_key_exists("error", $context)) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"login-form\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />

        <div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Nom d'utilisateur\" name=\"_username\" value=\"\" id=\"username\"/>
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
        </div>

        <div class=\"form-group has-feedback\">
            <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\" id=\"password\"/>
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-offset-8 col-xs-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"login-form-submit\">Connexion</button>
            </div>
        </div>
    </form>
";
        
        $__internal_e7c879da44cde5c0a2b0591726ede7776286aea8cf9907ac7d8681d493e91f3a->leave($__internal_e7c879da44cde5c0a2b0591726ede7776286aea8cf9907ac7d8681d493e91f3a_prof);

        
        $__internal_7a5ea1dc6ed71c1aa2ec9d6f02aa22a145b55b949c0f6a313054897b1f806f9b->leave($__internal_7a5ea1dc6ed71c1aa2ec9d6f02aa22a145b55b949c0f6a313054897b1f806f9b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  60 => 8,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error is defined %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\" id=\"login-form\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />

        <div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Nom d'utilisateur\" name=\"_username\" value=\"\" id=\"username\"/>
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
        </div>

        <div class=\"form-group has-feedback\">
            <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\" id=\"password\"/>
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-offset-8 col-xs-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"login-form-submit\">Connexion</button>
            </div>
        </div>
    </form>
{% endblock %}

\t

", "@User/Security/login.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
