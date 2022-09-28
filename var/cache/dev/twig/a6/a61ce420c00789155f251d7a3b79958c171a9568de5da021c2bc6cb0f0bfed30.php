<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b3f3d9df0296d7bf595c41fe8cdb60cc0a40c1fba6377c19a720bd1dcc25bb6a extends Twig_Template
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
        $__internal_2613d584b5f2f4818787b02196239d6c09f0fb1dee02cda4b58791b2fcdace01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2613d584b5f2f4818787b02196239d6c09f0fb1dee02cda4b58791b2fcdace01->enter($__internal_2613d584b5f2f4818787b02196239d6c09f0fb1dee02cda4b58791b2fcdace01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_068ce42bccb5c2be88ce786acd9df7089d0d3d9f7714a3ec55f96fcc4f3fc9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068ce42bccb5c2be88ce786acd9df7089d0d3d9f7714a3ec55f96fcc4f3fc9f2->enter($__internal_068ce42bccb5c2be88ce786acd9df7089d0d3d9f7714a3ec55f96fcc4f3fc9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2613d584b5f2f4818787b02196239d6c09f0fb1dee02cda4b58791b2fcdace01->leave($__internal_2613d584b5f2f4818787b02196239d6c09f0fb1dee02cda4b58791b2fcdace01_prof);

        
        $__internal_068ce42bccb5c2be88ce786acd9df7089d0d3d9f7714a3ec55f96fcc4f3fc9f2->leave($__internal_068ce42bccb5c2be88ce786acd9df7089d0d3d9f7714a3ec55f96fcc4f3fc9f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
