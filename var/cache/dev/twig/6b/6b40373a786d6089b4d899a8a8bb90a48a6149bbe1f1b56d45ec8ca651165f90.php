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
        $__internal_972efd1bdeb6cbe499052728ff792c00b77fbac5410e32b59034480b5363c328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972efd1bdeb6cbe499052728ff792c00b77fbac5410e32b59034480b5363c328->enter($__internal_972efd1bdeb6cbe499052728ff792c00b77fbac5410e32b59034480b5363c328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:emailUserRegister.html.twig"));

        $__internal_ff2779c1caeec7775b53a8066cae6ce07d7dbc5c774c3d3466bbcbba279b90a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2779c1caeec7775b53a8066cae6ce07d7dbc5c774c3d3466bbcbba279b90a2->enter($__internal_ff2779c1caeec7775b53a8066cae6ce07d7dbc5c774c3d3466bbcbba279b90a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:emailUserRegister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_972efd1bdeb6cbe499052728ff792c00b77fbac5410e32b59034480b5363c328->leave($__internal_972efd1bdeb6cbe499052728ff792c00b77fbac5410e32b59034480b5363c328_prof);

        
        $__internal_ff2779c1caeec7775b53a8066cae6ce07d7dbc5c774c3d3466bbcbba279b90a2->leave($__internal_ff2779c1caeec7775b53a8066cae6ce07d7dbc5c774c3d3466bbcbba279b90a2_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_54599fb7e1454c6c4fae1418aa2aa5a92a93a139303683885a962bd64b37aeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54599fb7e1454c6c4fae1418aa2aa5a92a93a139303683885a962bd64b37aeff->enter($__internal_54599fb7e1454c6c4fae1418aa2aa5a92a93a139303683885a962bd64b37aeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_2dfef5406262d4127d4a55e52dd4e2b0245ef74d1162a55c901fd52823ec74d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfef5406262d4127d4a55e52dd4e2b0245ef74d1162a55c901fd52823ec74d5->enter($__internal_2dfef5406262d4127d4a55e52dd4e2b0245ef74d1162a55c901fd52823ec74d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_2dfef5406262d4127d4a55e52dd4e2b0245ef74d1162a55c901fd52823ec74d5->leave($__internal_2dfef5406262d4127d4a55e52dd4e2b0245ef74d1162a55c901fd52823ec74d5_prof);

        
        $__internal_54599fb7e1454c6c4fae1418aa2aa5a92a93a139303683885a962bd64b37aeff->leave($__internal_54599fb7e1454c6c4fae1418aa2aa5a92a93a139303683885a962bd64b37aeff_prof);

    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_c41ed53998fa1b72fda1ba866ba68ff4a2acee8812f1ee8e87cd7fb75bde492e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41ed53998fa1b72fda1ba866ba68ff4a2acee8812f1ee8e87cd7fb75bde492e->enter($__internal_c41ed53998fa1b72fda1ba866ba68ff4a2acee8812f1ee8e87cd7fb75bde492e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_c32c7c20407efb56117dd0a1dbb7f14f8770740403af68c9881fe2d649ffb936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32c7c20407efb56117dd0a1dbb7f14f8770740403af68c9881fe2d649ffb936->enter($__internal_c32c7c20407efb56117dd0a1dbb7f14f8770740403af68c9881fe2d649ffb936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_c32c7c20407efb56117dd0a1dbb7f14f8770740403af68c9881fe2d649ffb936->leave($__internal_c32c7c20407efb56117dd0a1dbb7f14f8770740403af68c9881fe2d649ffb936_prof);

        
        $__internal_c41ed53998fa1b72fda1ba866ba68ff4a2acee8812f1ee8e87cd7fb75bde492e->leave($__internal_c41ed53998fa1b72fda1ba866ba68ff4a2acee8812f1ee8e87cd7fb75bde492e_prof);

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
