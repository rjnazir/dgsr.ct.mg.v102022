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
        $__internal_dd4af36007de7581a1914c2ff572a489d0d5d468e434abd8c8cbd7e7c220facc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4af36007de7581a1914c2ff572a489d0d5d468e434abd8c8cbd7e7c220facc->enter($__internal_dd4af36007de7581a1914c2ff572a489d0d5d468e434abd8c8cbd7e7c220facc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_7088eae10a2558a08662875aad2ce10fb5fe81f6f91b4ff4f665375bb02f81d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7088eae10a2558a08662875aad2ce10fb5fe81f6f91b4ff4f665375bb02f81d9->enter($__internal_7088eae10a2558a08662875aad2ce10fb5fe81f6f91b4ff4f665375bb02f81d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_dd4af36007de7581a1914c2ff572a489d0d5d468e434abd8c8cbd7e7c220facc->leave($__internal_dd4af36007de7581a1914c2ff572a489d0d5d468e434abd8c8cbd7e7c220facc_prof);

        
        $__internal_7088eae10a2558a08662875aad2ce10fb5fe81f6f91b4ff4f665375bb02f81d9->leave($__internal_7088eae10a2558a08662875aad2ce10fb5fe81f6f91b4ff4f665375bb02f81d9_prof);

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
