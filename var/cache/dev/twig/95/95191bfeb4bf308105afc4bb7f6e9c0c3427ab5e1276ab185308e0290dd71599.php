<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5e6412c11a0241481fb85705e3ccdc690eb0cf7adf9169a24e3329410fad557c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e39ad3bb3e83979f5e005907d7e25122ce596c36f69de4b9ee9edc455d3a00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e39ad3bb3e83979f5e005907d7e25122ce596c36f69de4b9ee9edc455d3a00f->enter($__internal_7e39ad3bb3e83979f5e005907d7e25122ce596c36f69de4b9ee9edc455d3a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_f7478f414e4568fcdd8601ec03de95e297243a4687c331dff3dd60ef53c84a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7478f414e4568fcdd8601ec03de95e297243a4687c331dff3dd60ef53c84a94->enter($__internal_f7478f414e4568fcdd8601ec03de95e297243a4687c331dff3dd60ef53c84a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7e39ad3bb3e83979f5e005907d7e25122ce596c36f69de4b9ee9edc455d3a00f->leave($__internal_7e39ad3bb3e83979f5e005907d7e25122ce596c36f69de4b9ee9edc455d3a00f_prof);

        
        $__internal_f7478f414e4568fcdd8601ec03de95e297243a4687c331dff3dd60ef53c84a94->leave($__internal_f7478f414e4568fcdd8601ec03de95e297243a4687c331dff3dd60ef53c84a94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
