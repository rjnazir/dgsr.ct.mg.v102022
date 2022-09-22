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
        $__internal_1648f1477dc818307d3d2d3a7a8377bcf7ea3f31ad0bf961e2eff8edb8b8afec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1648f1477dc818307d3d2d3a7a8377bcf7ea3f31ad0bf961e2eff8edb8b8afec->enter($__internal_1648f1477dc818307d3d2d3a7a8377bcf7ea3f31ad0bf961e2eff8edb8b8afec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_e1b294c3660f79c439c0457729dede01184aecf6ad314e648c9e035420cbf9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b294c3660f79c439c0457729dede01184aecf6ad314e648c9e035420cbf9ee->enter($__internal_e1b294c3660f79c439c0457729dede01184aecf6ad314e648c9e035420cbf9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1648f1477dc818307d3d2d3a7a8377bcf7ea3f31ad0bf961e2eff8edb8b8afec->leave($__internal_1648f1477dc818307d3d2d3a7a8377bcf7ea3f31ad0bf961e2eff8edb8b8afec_prof);

        
        $__internal_e1b294c3660f79c439c0457729dede01184aecf6ad314e648c9e035420cbf9ee->leave($__internal_e1b294c3660f79c439c0457729dede01184aecf6ad314e648c9e035420cbf9ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0978939a4f33b8c148cb91d48112195ad7956fc727e30067c9d5d932c284f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0978939a4f33b8c148cb91d48112195ad7956fc727e30067c9d5d932c284f37->enter($__internal_c0978939a4f33b8c148cb91d48112195ad7956fc727e30067c9d5d932c284f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0acbac86e2940025fc9ca3825bf05a596a452a702ec600931c530c6e12c6aa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acbac86e2940025fc9ca3825bf05a596a452a702ec600931c530c6e12c6aa3b->enter($__internal_0acbac86e2940025fc9ca3825bf05a596a452a702ec600931c530c6e12c6aa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0acbac86e2940025fc9ca3825bf05a596a452a702ec600931c530c6e12c6aa3b->leave($__internal_0acbac86e2940025fc9ca3825bf05a596a452a702ec600931c530c6e12c6aa3b_prof);

        
        $__internal_c0978939a4f33b8c148cb91d48112195ad7956fc727e30067c9d5d932c284f37->leave($__internal_c0978939a4f33b8c148cb91d48112195ad7956fc727e30067c9d5d932c284f37_prof);

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
