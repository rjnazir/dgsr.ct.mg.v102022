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
        $__internal_6bae95909926aea3444c65c631144d9f540391cdaf37791c61874cb03bb4d5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bae95909926aea3444c65c631144d9f540391cdaf37791c61874cb03bb4d5c0->enter($__internal_6bae95909926aea3444c65c631144d9f540391cdaf37791c61874cb03bb4d5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:email_link_validation.html.twig"));

        $__internal_dfbe7fefadcb0b3ed09348b91930a987eddb3247c6fec3ae1813a0ad5174dea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbe7fefadcb0b3ed09348b91930a987eddb3247c6fec3ae1813a0ad5174dea1->enter($__internal_dfbe7fefadcb0b3ed09348b91930a987eddb3247c6fec3ae1813a0ad5174dea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:email_link_validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bae95909926aea3444c65c631144d9f540391cdaf37791c61874cb03bb4d5c0->leave($__internal_6bae95909926aea3444c65c631144d9f540391cdaf37791c61874cb03bb4d5c0_prof);

        
        $__internal_dfbe7fefadcb0b3ed09348b91930a987eddb3247c6fec3ae1813a0ad5174dea1->leave($__internal_dfbe7fefadcb0b3ed09348b91930a987eddb3247c6fec3ae1813a0ad5174dea1_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_e15601f4c0576a5f424cf6e6e9c41c708015eb1d816993064f5ea437d0d89040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15601f4c0576a5f424cf6e6e9c41c708015eb1d816993064f5ea437d0d89040->enter($__internal_e15601f4c0576a5f424cf6e6e9c41c708015eb1d816993064f5ea437d0d89040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_a85bfb176d9cfa92ec727472c10efd55d2a68ef0194c1173bd694355aba86456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85bfb176d9cfa92ec727472c10efd55d2a68ef0194c1173bd694355aba86456->enter($__internal_a85bfb176d9cfa92ec727472c10efd55d2a68ef0194c1173bd694355aba86456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_a85bfb176d9cfa92ec727472c10efd55d2a68ef0194c1173bd694355aba86456->leave($__internal_a85bfb176d9cfa92ec727472c10efd55d2a68ef0194c1173bd694355aba86456_prof);

        
        $__internal_e15601f4c0576a5f424cf6e6e9c41c708015eb1d816993064f5ea437d0d89040->leave($__internal_e15601f4c0576a5f424cf6e6e9c41c708015eb1d816993064f5ea437d0d89040_prof);

    }

    // line 22
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_5e652881901f24006887b7ba0474ac5470eb32848ea83c98a4e5e555c016ea93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e652881901f24006887b7ba0474ac5470eb32848ea83c98a4e5e555c016ea93->enter($__internal_5e652881901f24006887b7ba0474ac5470eb32848ea83c98a4e5e555c016ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_877307b282afcdb614117e1b26f5f7c71ae24bd96bb4f2bc7c8159132df801a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877307b282afcdb614117e1b26f5f7c71ae24bd96bb4f2bc7c8159132df801a5->enter($__internal_877307b282afcdb614117e1b26f5f7c71ae24bd96bb4f2bc7c8159132df801a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_877307b282afcdb614117e1b26f5f7c71ae24bd96bb4f2bc7c8159132df801a5->leave($__internal_877307b282afcdb614117e1b26f5f7c71ae24bd96bb4f2bc7c8159132df801a5_prof);

        
        $__internal_5e652881901f24006887b7ba0474ac5470eb32848ea83c98a4e5e555c016ea93->leave($__internal_5e652881901f24006887b7ba0474ac5470eb32848ea83c98a4e5e555c016ea93_prof);

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
