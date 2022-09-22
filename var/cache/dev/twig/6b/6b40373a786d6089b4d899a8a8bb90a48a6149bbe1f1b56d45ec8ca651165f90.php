<?php

/* UserBundle:Email:emailUserRegister.html.twig */
class __TwigTemplate_4581a72ad6e94eb8ed7861d78e6a586f74f86500f97caf14323769e8a8135d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "UserBundle:Email:emailUserRegister.html.twig", 1);
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
        $__internal_eb6ee05ccc9affdf36c7e60ec1b0ad7c1f9b0bb2f955dda513a8d89f3a377496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6ee05ccc9affdf36c7e60ec1b0ad7c1f9b0bb2f955dda513a8d89f3a377496->enter($__internal_eb6ee05ccc9affdf36c7e60ec1b0ad7c1f9b0bb2f955dda513a8d89f3a377496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:emailUserRegister.html.twig"));

        $__internal_d5d4a28d6845d4ef01fb6217547e20da4d7318d0d39833dbbf1f086cb08c7ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d4a28d6845d4ef01fb6217547e20da4d7318d0d39833dbbf1f086cb08c7ac2->enter($__internal_d5d4a28d6845d4ef01fb6217547e20da4d7318d0d39833dbbf1f086cb08c7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:emailUserRegister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb6ee05ccc9affdf36c7e60ec1b0ad7c1f9b0bb2f955dda513a8d89f3a377496->leave($__internal_eb6ee05ccc9affdf36c7e60ec1b0ad7c1f9b0bb2f955dda513a8d89f3a377496_prof);

        
        $__internal_d5d4a28d6845d4ef01fb6217547e20da4d7318d0d39833dbbf1f086cb08c7ac2->leave($__internal_d5d4a28d6845d4ef01fb6217547e20da4d7318d0d39833dbbf1f086cb08c7ac2_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_c53b1a45c336f15ac54c588fb547e4b6b234476e4c43a0a009397b4c45511da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53b1a45c336f15ac54c588fb547e4b6b234476e4c43a0a009397b4c45511da9->enter($__internal_c53b1a45c336f15ac54c588fb547e4b6b234476e4c43a0a009397b4c45511da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_324ee692b9627110ebf866a10573b35c20a9c2a56d2bf7b88e51825668f167a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324ee692b9627110ebf866a10573b35c20a9c2a56d2bf7b88e51825668f167a3->enter($__internal_324ee692b9627110ebf866a10573b35c20a9c2a56d2bf7b88e51825668f167a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_324ee692b9627110ebf866a10573b35c20a9c2a56d2bf7b88e51825668f167a3->leave($__internal_324ee692b9627110ebf866a10573b35c20a9c2a56d2bf7b88e51825668f167a3_prof);

        
        $__internal_c53b1a45c336f15ac54c588fb547e4b6b234476e4c43a0a009397b4c45511da9->leave($__internal_c53b1a45c336f15ac54c588fb547e4b6b234476e4c43a0a009397b4c45511da9_prof);

    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_27685e9015875ad46d80a072e0f228261ac07d3799ca7757b7ea6bbd90503b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27685e9015875ad46d80a072e0f228261ac07d3799ca7757b7ea6bbd90503b81->enter($__internal_27685e9015875ad46d80a072e0f228261ac07d3799ca7757b7ea6bbd90503b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_ffc32c3a712c80e98c7d01f895c396e33ba3edc5f99a35dc6a5d9eb2618905c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc32c3a712c80e98c7d01f895c396e33ba3edc5f99a35dc6a5d9eb2618905c7->enter($__internal_ffc32c3a712c80e98c7d01f895c396e33ba3edc5f99a35dc6a5d9eb2618905c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_ffc32c3a712c80e98c7d01f895c396e33ba3edc5f99a35dc6a5d9eb2618905c7->leave($__internal_ffc32c3a712c80e98c7d01f895c396e33ba3edc5f99a35dc6a5d9eb2618905c7_prof);

        
        $__internal_27685e9015875ad46d80a072e0f228261ac07d3799ca7757b7ea6bbd90503b81->leave($__internal_27685e9015875ad46d80a072e0f228261ac07d3799ca7757b7ea6bbd90503b81_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Email:emailUserRegister.html.twig";
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
{% endblock %}", "UserBundle:Email:emailUserRegister.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Email/emailUserRegister.html.twig");
    }
}
