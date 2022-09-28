<?php

/* UserBundle:Email:email_link_validation.html.twig */
class __TwigTemplate_e4fd12edc095c0e8c011c84db2ff2aa56c99babd46939a7211ce582b42ce679f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "UserBundle:Email:email_link_validation.html.twig", 1);
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
        $__internal_f51b3571119cdc38c721d7c072107b091841ddb976aa66efa21cef71ede48f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51b3571119cdc38c721d7c072107b091841ddb976aa66efa21cef71ede48f3f->enter($__internal_f51b3571119cdc38c721d7c072107b091841ddb976aa66efa21cef71ede48f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:email_link_validation.html.twig"));

        $__internal_02d98aa88650829536c480a4ebe81bf3318aa894de24f9ac5b942c1a68e0ce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d98aa88650829536c480a4ebe81bf3318aa894de24f9ac5b942c1a68e0ce54->enter($__internal_02d98aa88650829536c480a4ebe81bf3318aa894de24f9ac5b942c1a68e0ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:email_link_validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51b3571119cdc38c721d7c072107b091841ddb976aa66efa21cef71ede48f3f->leave($__internal_f51b3571119cdc38c721d7c072107b091841ddb976aa66efa21cef71ede48f3f_prof);

        
        $__internal_02d98aa88650829536c480a4ebe81bf3318aa894de24f9ac5b942c1a68e0ce54->leave($__internal_02d98aa88650829536c480a4ebe81bf3318aa894de24f9ac5b942c1a68e0ce54_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_bff2c7a654365dee9ff5fb77bc7fa49caa55103409f0d7124ecc43942d0e358d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff2c7a654365dee9ff5fb77bc7fa49caa55103409f0d7124ecc43942d0e358d->enter($__internal_bff2c7a654365dee9ff5fb77bc7fa49caa55103409f0d7124ecc43942d0e358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_9f76f1b73fc63e8eec0ef99efcb8f9b0b070c3573bd17ae6c9dcd3f5699e91c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f76f1b73fc63e8eec0ef99efcb8f9b0b070c3573bd17ae6c9dcd3f5699e91c9->enter($__internal_9f76f1b73fc63e8eec0ef99efcb8f9b0b070c3573bd17ae6c9dcd3f5699e91c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_9f76f1b73fc63e8eec0ef99efcb8f9b0b070c3573bd17ae6c9dcd3f5699e91c9->leave($__internal_9f76f1b73fc63e8eec0ef99efcb8f9b0b070c3573bd17ae6c9dcd3f5699e91c9_prof);

        
        $__internal_bff2c7a654365dee9ff5fb77bc7fa49caa55103409f0d7124ecc43942d0e358d->leave($__internal_bff2c7a654365dee9ff5fb77bc7fa49caa55103409f0d7124ecc43942d0e358d_prof);

    }

    // line 22
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_6e46c9cf53367f04f9949dd1846bcf99adbe112d2ae6d9e0f292851083ca6411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e46c9cf53367f04f9949dd1846bcf99adbe112d2ae6d9e0f292851083ca6411->enter($__internal_6e46c9cf53367f04f9949dd1846bcf99adbe112d2ae6d9e0f292851083ca6411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_1c66d62b83c5116997ffc141589f4a37789d1fb38906b626be7217575367135c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c66d62b83c5116997ffc141589f4a37789d1fb38906b626be7217575367135c->enter($__internal_1c66d62b83c5116997ffc141589f4a37789d1fb38906b626be7217575367135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_1c66d62b83c5116997ffc141589f4a37789d1fb38906b626be7217575367135c->leave($__internal_1c66d62b83c5116997ffc141589f4a37789d1fb38906b626be7217575367135c_prof);

        
        $__internal_6e46c9cf53367f04f9949dd1846bcf99adbe112d2ae6d9e0f292851083ca6411->leave($__internal_6e46c9cf53367f04f9949dd1846bcf99adbe112d2ae6d9e0f292851083ca6411_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Email:email_link_validation.html.twig";
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
{% endblock %}", "UserBundle:Email:email_link_validation.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Email/email_link_validation.html.twig");
    }
}
