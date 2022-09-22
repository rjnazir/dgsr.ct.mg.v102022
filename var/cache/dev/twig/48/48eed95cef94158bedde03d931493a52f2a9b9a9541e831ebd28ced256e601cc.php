<?php

/* @User/Email/emailUserRegister.html.twig */
class __TwigTemplate_15a409409d662b87be0df487f9ff1e8116162f0095b3a628a09523857c8fa3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "@User/Email/emailUserRegister.html.twig", 1);
        $this->blocks = array(
            'body_html_content' => array($this, 'block_body_html_content'),
            'body_html_footer_action' => array($this, 'block_body_html_footer_action'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutEmail.email.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a064e59370f16f5bb1f58eb7aca2558eee89c53fb2c8401162fa41bd5a8d0f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a064e59370f16f5bb1f58eb7aca2558eee89c53fb2c8401162fa41bd5a8d0f74->enter($__internal_a064e59370f16f5bb1f58eb7aca2558eee89c53fb2c8401162fa41bd5a8d0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/emailUserRegister.html.twig"));

        $__internal_384d2aa299d43f1b6475398f07f64e47ca6c73a8d8feaaebad4580df4462c75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384d2aa299d43f1b6475398f07f64e47ca6c73a8d8feaaebad4580df4462c75b->enter($__internal_384d2aa299d43f1b6475398f07f64e47ca6c73a8d8feaaebad4580df4462c75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/emailUserRegister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a064e59370f16f5bb1f58eb7aca2558eee89c53fb2c8401162fa41bd5a8d0f74->leave($__internal_a064e59370f16f5bb1f58eb7aca2558eee89c53fb2c8401162fa41bd5a8d0f74_prof);

        
        $__internal_384d2aa299d43f1b6475398f07f64e47ca6c73a8d8feaaebad4580df4462c75b->leave($__internal_384d2aa299d43f1b6475398f07f64e47ca6c73a8d8feaaebad4580df4462c75b_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_3e9278618c166b0f6e999e114b409a5a438d8d47ddee3c3d54ff57c326645c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9278618c166b0f6e999e114b409a5a438d8d47ddee3c3d54ff57c326645c51->enter($__internal_3e9278618c166b0f6e999e114b409a5a438d8d47ddee3c3d54ff57c326645c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_20ccd9d5ab809a6a4e182371d7780669290d0718d91a3454888f00940f1b38ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ccd9d5ab809a6a4e182371d7780669290d0718d91a3454888f00940f1b38ac->enter($__internal_20ccd9d5ab809a6a4e182371d7780669290d0718d91a3454888f00940f1b38ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        // line 4
        echo "\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo ",</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Voici votre identifiant :</p>

        <table>
            <tr>
                <td>Login</td>
                <td>:</td>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "username", array(), "array"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>:</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "password", array(), "array"), "html", null, true);
        echo "</td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
";
        
        $__internal_20ccd9d5ab809a6a4e182371d7780669290d0718d91a3454888f00940f1b38ac->leave($__internal_20ccd9d5ab809a6a4e182371d7780669290d0718d91a3454888f00940f1b38ac_prof);

        
        $__internal_3e9278618c166b0f6e999e114b409a5a438d8d47ddee3c3d54ff57c326645c51->leave($__internal_3e9278618c166b0f6e999e114b409a5a438d8d47ddee3c3d54ff57c326645c51_prof);

    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_f1da59c4b87589a07ccc002ecad08278cf90912aef1bf73885cb1fcc7f98a5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1da59c4b87589a07ccc002ecad08278cf90912aef1bf73885cb1fcc7f98a5fa->enter($__internal_f1da59c4b87589a07ccc002ecad08278cf90912aef1bf73885cb1fcc7f98a5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_63f17064d88e43ef3f5119e33018f6877aeef782d4820804b4abee132c861877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f17064d88e43ef3f5119e33018f6877aeef782d4820804b4abee132c861877->enter($__internal_63f17064d88e43ef3f5119e33018f6877aeef782d4820804b4abee132c861877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_63f17064d88e43ef3f5119e33018f6877aeef782d4820804b4abee132c861877->leave($__internal_63f17064d88e43ef3f5119e33018f6877aeef782d4820804b4abee132c861877_prof);

        
        $__internal_f1da59c4b87589a07ccc002ecad08278cf90912aef1bf73885cb1fcc7f98a5fa->leave($__internal_f1da59c4b87589a07ccc002ecad08278cf90912aef1bf73885cb1fcc7f98a5fa_prof);

    }

    public function getTemplateName()
    {
        return "@User/Email/emailUserRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  71 => 17,  63 => 12,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutEmail.email.twig' %}

{% block body_html_content %}
\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour {{ user.firstname }},</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Voici votre identifiant :</p>

        <table>
            <tr>
                <td>Login</td>
                <td>:</td>
                <td>{{ data['username'] }}</td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>:</td>
                <td>{{ data['password'] }}</td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
{% endblock %}

{% block body_html_footer_action %}
{% endblock %}", "@User/Email/emailUserRegister.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Email\\emailUserRegister.html.twig");
    }
}
