<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_b13eb88dad4203cc83bbb79dd99cc0e126e306f4e0c7ea4bac9349a366902ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_240c6cd6010454ed69be184f2bee1b164a55643999ba4cef56ef1cd8d2f958b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240c6cd6010454ed69be184f2bee1b164a55643999ba4cef56ef1cd8d2f958b5->enter($__internal_240c6cd6010454ed69be184f2bee1b164a55643999ba4cef56ef1cd8d2f958b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_a2806acf9e0095735288ff46898a634db7fd612ddd1795d92084bb7082f7bd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2806acf9e0095735288ff46898a634db7fd612ddd1795d92084bb7082f7bd6a->enter($__internal_a2806acf9e0095735288ff46898a634db7fd612ddd1795d92084bb7082f7bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240c6cd6010454ed69be184f2bee1b164a55643999ba4cef56ef1cd8d2f958b5->leave($__internal_240c6cd6010454ed69be184f2bee1b164a55643999ba4cef56ef1cd8d2f958b5_prof);

        
        $__internal_a2806acf9e0095735288ff46898a634db7fd612ddd1795d92084bb7082f7bd6a->leave($__internal_a2806acf9e0095735288ff46898a634db7fd612ddd1795d92084bb7082f7bd6a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9c8dcc89c31bf71b7bf32ab2d44e80d7de8d2d79e3e5861caa5b32a8539ba60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c8dcc89c31bf71b7bf32ab2d44e80d7de8d2d79e3e5861caa5b32a8539ba60->enter($__internal_c9c8dcc89c31bf71b7bf32ab2d44e80d7de8d2d79e3e5861caa5b32a8539ba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1327ed706a2baecc0ab4c0eb57dab603d6244e7aa8e6e2e68e8900e8ee8b1ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1327ed706a2baecc0ab4c0eb57dab603d6244e7aa8e6e2e68e8900e8ee8b1ce4->enter($__internal_1327ed706a2baecc0ab4c0eb57dab603d6244e7aa8e6e2e68e8900e8ee8b1ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1327ed706a2baecc0ab4c0eb57dab603d6244e7aa8e6e2e68e8900e8ee8b1ce4->leave($__internal_1327ed706a2baecc0ab4c0eb57dab603d6244e7aa8e6e2e68e8900e8ee8b1ce4_prof);

        
        $__internal_c9c8dcc89c31bf71b7bf32ab2d44e80d7de8d2d79e3e5861caa5b32a8539ba60->leave($__internal_c9c8dcc89c31bf71b7bf32ab2d44e80d7de8d2d79e3e5861caa5b32a8539ba60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
