<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_12d086e88aea738061cbcc9ba018e0c00f238a979404ab919b291f0a0d97d038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_1850678ed4f691e934093f90aef7e32c2795b8d6a3226aa2f2bf72732aac81bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1850678ed4f691e934093f90aef7e32c2795b8d6a3226aa2f2bf72732aac81bf->enter($__internal_1850678ed4f691e934093f90aef7e32c2795b8d6a3226aa2f2bf72732aac81bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_5813387eb77fc0711b02aed354ab6767a5004fbe6ae2dc067be611b74f457eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5813387eb77fc0711b02aed354ab6767a5004fbe6ae2dc067be611b74f457eff->enter($__internal_5813387eb77fc0711b02aed354ab6767a5004fbe6ae2dc067be611b74f457eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1850678ed4f691e934093f90aef7e32c2795b8d6a3226aa2f2bf72732aac81bf->leave($__internal_1850678ed4f691e934093f90aef7e32c2795b8d6a3226aa2f2bf72732aac81bf_prof);

        
        $__internal_5813387eb77fc0711b02aed354ab6767a5004fbe6ae2dc067be611b74f457eff->leave($__internal_5813387eb77fc0711b02aed354ab6767a5004fbe6ae2dc067be611b74f457eff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98ffc183676947550b43c47366b9ed6e1e1309f3483db1906bb36a609f10f26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ffc183676947550b43c47366b9ed6e1e1309f3483db1906bb36a609f10f26e->enter($__internal_98ffc183676947550b43c47366b9ed6e1e1309f3483db1906bb36a609f10f26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5c9166067c9c508add57bf0e9a589caa79d0879814082ac565b7df2e72b38fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c9166067c9c508add57bf0e9a589caa79d0879814082ac565b7df2e72b38fb->enter($__internal_d5c9166067c9c508add57bf0e9a589caa79d0879814082ac565b7df2e72b38fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d5c9166067c9c508add57bf0e9a589caa79d0879814082ac565b7df2e72b38fb->leave($__internal_d5c9166067c9c508add57bf0e9a589caa79d0879814082ac565b7df2e72b38fb_prof);

        
        $__internal_98ffc183676947550b43c47366b9ed6e1e1309f3483db1906bb36a609f10f26e->leave($__internal_98ffc183676947550b43c47366b9ed6e1e1309f3483db1906bb36a609f10f26e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
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

", "UserBundle:Security:login.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
