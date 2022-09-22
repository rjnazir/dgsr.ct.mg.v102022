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
        $__internal_5af96291cd143427e0ffedbff1355fc8322a9472a259e8ceb8c38f8d85ba3113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af96291cd143427e0ffedbff1355fc8322a9472a259e8ceb8c38f8d85ba3113->enter($__internal_5af96291cd143427e0ffedbff1355fc8322a9472a259e8ceb8c38f8d85ba3113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/email_link_validation.html.twig"));

        $__internal_18408dfe548605f5da0760250c5038ac3630d68f5cfc576514afab12a014a89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18408dfe548605f5da0760250c5038ac3630d68f5cfc576514afab12a014a89c->enter($__internal_18408dfe548605f5da0760250c5038ac3630d68f5cfc576514afab12a014a89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/email_link_validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af96291cd143427e0ffedbff1355fc8322a9472a259e8ceb8c38f8d85ba3113->leave($__internal_5af96291cd143427e0ffedbff1355fc8322a9472a259e8ceb8c38f8d85ba3113_prof);

        
        $__internal_18408dfe548605f5da0760250c5038ac3630d68f5cfc576514afab12a014a89c->leave($__internal_18408dfe548605f5da0760250c5038ac3630d68f5cfc576514afab12a014a89c_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_dc50943a842089fd6dd7f9a57e77929354f3f86c70464d21623c49713359a621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc50943a842089fd6dd7f9a57e77929354f3f86c70464d21623c49713359a621->enter($__internal_dc50943a842089fd6dd7f9a57e77929354f3f86c70464d21623c49713359a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_c6b8871e30b708efb7f26ad977d05d383a6250f28ba2bcf31cf6a36fcbbe857e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b8871e30b708efb7f26ad977d05d383a6250f28ba2bcf31cf6a36fcbbe857e->enter($__internal_c6b8871e30b708efb7f26ad977d05d383a6250f28ba2bcf31cf6a36fcbbe857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_c6b8871e30b708efb7f26ad977d05d383a6250f28ba2bcf31cf6a36fcbbe857e->leave($__internal_c6b8871e30b708efb7f26ad977d05d383a6250f28ba2bcf31cf6a36fcbbe857e_prof);

        
        $__internal_dc50943a842089fd6dd7f9a57e77929354f3f86c70464d21623c49713359a621->leave($__internal_dc50943a842089fd6dd7f9a57e77929354f3f86c70464d21623c49713359a621_prof);

    }

    // line 22
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_b8e5a94070f40b7825f77b3720d13946cc79c4f3970b38da75a8764a84f86a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e5a94070f40b7825f77b3720d13946cc79c4f3970b38da75a8764a84f86a86->enter($__internal_b8e5a94070f40b7825f77b3720d13946cc79c4f3970b38da75a8764a84f86a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_0b700f464b7be5c90dcbc9e13855af1ee7c7ee3025a5e5bf93e353a97fe043bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b700f464b7be5c90dcbc9e13855af1ee7c7ee3025a5e5bf93e353a97fe043bc->enter($__internal_0b700f464b7be5c90dcbc9e13855af1ee7c7ee3025a5e5bf93e353a97fe043bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_0b700f464b7be5c90dcbc9e13855af1ee7c7ee3025a5e5bf93e353a97fe043bc->leave($__internal_0b700f464b7be5c90dcbc9e13855af1ee7c7ee3025a5e5bf93e353a97fe043bc_prof);

        
        $__internal_b8e5a94070f40b7825f77b3720d13946cc79c4f3970b38da75a8764a84f86a86->leave($__internal_b8e5a94070f40b7825f77b3720d13946cc79c4f3970b38da75a8764a84f86a86_prof);

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
