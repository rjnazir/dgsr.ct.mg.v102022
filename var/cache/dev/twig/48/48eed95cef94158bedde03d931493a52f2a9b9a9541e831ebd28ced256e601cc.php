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
        $__internal_0c307605cc99744ac72f06b3e1e5f253752b058f5913b52b4077b1397148af0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c307605cc99744ac72f06b3e1e5f253752b058f5913b52b4077b1397148af0f->enter($__internal_0c307605cc99744ac72f06b3e1e5f253752b058f5913b52b4077b1397148af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/emailUserRegister.html.twig"));

        $__internal_99395ad76c556f8110ceaa6e5a463a89e0a778a638fe8c6cf5a6773f414c1f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99395ad76c556f8110ceaa6e5a463a89e0a778a638fe8c6cf5a6773f414c1f26->enter($__internal_99395ad76c556f8110ceaa6e5a463a89e0a778a638fe8c6cf5a6773f414c1f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/emailUserRegister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c307605cc99744ac72f06b3e1e5f253752b058f5913b52b4077b1397148af0f->leave($__internal_0c307605cc99744ac72f06b3e1e5f253752b058f5913b52b4077b1397148af0f_prof);

        
        $__internal_99395ad76c556f8110ceaa6e5a463a89e0a778a638fe8c6cf5a6773f414c1f26->leave($__internal_99395ad76c556f8110ceaa6e5a463a89e0a778a638fe8c6cf5a6773f414c1f26_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_96c0f544b88c2a3000dde15771d2f830e9ba180fcd960f4d0ccc86f47fc078ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c0f544b88c2a3000dde15771d2f830e9ba180fcd960f4d0ccc86f47fc078ff->enter($__internal_96c0f544b88c2a3000dde15771d2f830e9ba180fcd960f4d0ccc86f47fc078ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_10dbb47d933dac5081c532d11a6bdc1cc98cc40f8826255245f640b9476d8ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dbb47d933dac5081c532d11a6bdc1cc98cc40f8826255245f640b9476d8ffb->enter($__internal_10dbb47d933dac5081c532d11a6bdc1cc98cc40f8826255245f640b9476d8ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_10dbb47d933dac5081c532d11a6bdc1cc98cc40f8826255245f640b9476d8ffb->leave($__internal_10dbb47d933dac5081c532d11a6bdc1cc98cc40f8826255245f640b9476d8ffb_prof);

        
        $__internal_96c0f544b88c2a3000dde15771d2f830e9ba180fcd960f4d0ccc86f47fc078ff->leave($__internal_96c0f544b88c2a3000dde15771d2f830e9ba180fcd960f4d0ccc86f47fc078ff_prof);

    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_89aba140da8dca15f4f2a6792f6ed4011ac3d955f244d6571f519f126009bece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89aba140da8dca15f4f2a6792f6ed4011ac3d955f244d6571f519f126009bece->enter($__internal_89aba140da8dca15f4f2a6792f6ed4011ac3d955f244d6571f519f126009bece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_ae0e1fc19ff6d179e726ed75f791c2a96f8caba2d157433f454c64c99ddf95d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0e1fc19ff6d179e726ed75f791c2a96f8caba2d157433f454c64c99ddf95d0->enter($__internal_ae0e1fc19ff6d179e726ed75f791c2a96f8caba2d157433f454c64c99ddf95d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_ae0e1fc19ff6d179e726ed75f791c2a96f8caba2d157433f454c64c99ddf95d0->leave($__internal_ae0e1fc19ff6d179e726ed75f791c2a96f8caba2d157433f454c64c99ddf95d0_prof);

        
        $__internal_89aba140da8dca15f4f2a6792f6ed4011ac3d955f244d6571f519f126009bece->leave($__internal_89aba140da8dca15f4f2a6792f6ed4011ac3d955f244d6571f519f126009bece_prof);

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
