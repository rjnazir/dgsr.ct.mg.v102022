<?php

/* @User/Email/email_link_validation.html.twig */
class __TwigTemplate_c37a3297200d06d4cb70fae51ec3aa45ae52d7c0c4a04614386cba1c86c18554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "@User/Email/email_link_validation.html.twig", 1);
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
        $__internal_c12f276ddacff5a474636bf5193c227a0e815cfa948f37e124ce30c9c0dd99f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12f276ddacff5a474636bf5193c227a0e815cfa948f37e124ce30c9c0dd99f7->enter($__internal_c12f276ddacff5a474636bf5193c227a0e815cfa948f37e124ce30c9c0dd99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/email_link_validation.html.twig"));

        $__internal_21df1bbba225c0945db1c5d6d33a47ed953317a0529b65559bdb13f21fa8b32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21df1bbba225c0945db1c5d6d33a47ed953317a0529b65559bdb13f21fa8b32c->enter($__internal_21df1bbba225c0945db1c5d6d33a47ed953317a0529b65559bdb13f21fa8b32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/email_link_validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12f276ddacff5a474636bf5193c227a0e815cfa948f37e124ce30c9c0dd99f7->leave($__internal_c12f276ddacff5a474636bf5193c227a0e815cfa948f37e124ce30c9c0dd99f7_prof);

        
        $__internal_21df1bbba225c0945db1c5d6d33a47ed953317a0529b65559bdb13f21fa8b32c->leave($__internal_21df1bbba225c0945db1c5d6d33a47ed953317a0529b65559bdb13f21fa8b32c_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_8e65fa121c8a6cb16b7b0332cd2363f05535e8c733222ccf8304944027a758e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e65fa121c8a6cb16b7b0332cd2363f05535e8c733222ccf8304944027a758e3->enter($__internal_8e65fa121c8a6cb16b7b0332cd2363f05535e8c733222ccf8304944027a758e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_baadc7b3bef724e18480fa6768c1fcab9a128b0b2209d49e0e318809bbbfe5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baadc7b3bef724e18480fa6768c1fcab9a128b0b2209d49e0e318809bbbfe5fc->enter($__internal_baadc7b3bef724e18480fa6768c1fcab9a128b0b2209d49e0e318809bbbfe5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        // line 4
        echo "\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo ",</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">
            <br><br>Cliquer sur le lien pour valider votre compte :
        </p>

        <table>
            <tr>
                <td>Lien</td>
                <td>:</td>
                <td><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
        echo "\" title=\"Cliquez-ici\">Valider compte</a></td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
";
        
        $__internal_baadc7b3bef724e18480fa6768c1fcab9a128b0b2209d49e0e318809bbbfe5fc->leave($__internal_baadc7b3bef724e18480fa6768c1fcab9a128b0b2209d49e0e318809bbbfe5fc_prof);

        
        $__internal_8e65fa121c8a6cb16b7b0332cd2363f05535e8c733222ccf8304944027a758e3->leave($__internal_8e65fa121c8a6cb16b7b0332cd2363f05535e8c733222ccf8304944027a758e3_prof);

    }

    // line 22
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_31bd0b5981a4464e4cfe3c0b9e44dc8d16171c4fd46a209e21bf51ce73f37843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bd0b5981a4464e4cfe3c0b9e44dc8d16171c4fd46a209e21bf51ce73f37843->enter($__internal_31bd0b5981a4464e4cfe3c0b9e44dc8d16171c4fd46a209e21bf51ce73f37843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_826c5771b52cccb826e0fdcb64cf5ae262754f92ffde7a66484d74a0ca7f84e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826c5771b52cccb826e0fdcb64cf5ae262754f92ffde7a66484d74a0ca7f84e5->enter($__internal_826c5771b52cccb826e0fdcb64cf5ae262754f92ffde7a66484d74a0ca7f84e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_826c5771b52cccb826e0fdcb64cf5ae262754f92ffde7a66484d74a0ca7f84e5->leave($__internal_826c5771b52cccb826e0fdcb64cf5ae262754f92ffde7a66484d74a0ca7f84e5_prof);

        
        $__internal_31bd0b5981a4464e4cfe3c0b9e44dc8d16171c4fd46a209e21bf51ce73f37843->leave($__internal_31bd0b5981a4464e4cfe3c0b9e44dc8d16171c4fd46a209e21bf51ce73f37843_prof);

    }

    public function getTemplateName()
    {
        return "@User/Email/email_link_validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  65 => 14,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">
            <br><br>Cliquer sur le lien pour valider votre compte :
        </p>

        <table>
            <tr>
                <td>Lien</td>
                <td>:</td>
                <td><a href=\"{{ link }}\" title=\"Cliquez-ici\">Valider compte</a></td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
{% endblock %}

{% block body_html_footer_action %}
{% endblock %}", "@User/Email/email_link_validation.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Email\\email_link_validation.html.twig");
    }
}
