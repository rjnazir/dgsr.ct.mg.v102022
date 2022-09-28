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
        $__internal_c65f6c22e04d1aee26e6fcff4a94391b120cedc109675b7a3d8d404de229dd1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65f6c22e04d1aee26e6fcff4a94391b120cedc109675b7a3d8d404de229dd1b->enter($__internal_c65f6c22e04d1aee26e6fcff4a94391b120cedc109675b7a3d8d404de229dd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_21d26518e773dcf73ab629306004ec1232b37a85526cc749870dda8b56755043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d26518e773dcf73ab629306004ec1232b37a85526cc749870dda8b56755043->enter($__internal_21d26518e773dcf73ab629306004ec1232b37a85526cc749870dda8b56755043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c65f6c22e04d1aee26e6fcff4a94391b120cedc109675b7a3d8d404de229dd1b->leave($__internal_c65f6c22e04d1aee26e6fcff4a94391b120cedc109675b7a3d8d404de229dd1b_prof);

        
        $__internal_21d26518e773dcf73ab629306004ec1232b37a85526cc749870dda8b56755043->leave($__internal_21d26518e773dcf73ab629306004ec1232b37a85526cc749870dda8b56755043_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b79c250e305290352c3cb067d677d93a4ef40bd128be065858bda0e112bd644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b79c250e305290352c3cb067d677d93a4ef40bd128be065858bda0e112bd644->enter($__internal_4b79c250e305290352c3cb067d677d93a4ef40bd128be065858bda0e112bd644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f7ccf19933aca76af2503ea844f9bb89170d0e543a331704ceeb8ba284cf970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7ccf19933aca76af2503ea844f9bb89170d0e543a331704ceeb8ba284cf970->enter($__internal_6f7ccf19933aca76af2503ea844f9bb89170d0e543a331704ceeb8ba284cf970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6f7ccf19933aca76af2503ea844f9bb89170d0e543a331704ceeb8ba284cf970->leave($__internal_6f7ccf19933aca76af2503ea844f9bb89170d0e543a331704ceeb8ba284cf970_prof);

        
        $__internal_4b79c250e305290352c3cb067d677d93a4ef40bd128be065858bda0e112bd644->leave($__internal_4b79c250e305290352c3cb067d677d93a4ef40bd128be065858bda0e112bd644_prof);

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
