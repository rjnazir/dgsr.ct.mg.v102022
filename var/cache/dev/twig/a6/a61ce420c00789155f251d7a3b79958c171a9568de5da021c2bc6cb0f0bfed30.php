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
        $__internal_c358fd7bbff204adceeca7f9f665d28c15be3dc2623abb7ddc58f439b3f57046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c358fd7bbff204adceeca7f9f665d28c15be3dc2623abb7ddc58f439b3f57046->enter($__internal_c358fd7bbff204adceeca7f9f665d28c15be3dc2623abb7ddc58f439b3f57046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_70d5090904d6bc82af9e14227542e1246115e53ed4f5e92b4784e54466a0647a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d5090904d6bc82af9e14227542e1246115e53ed4f5e92b4784e54466a0647a->enter($__internal_70d5090904d6bc82af9e14227542e1246115e53ed4f5e92b4784e54466a0647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_c358fd7bbff204adceeca7f9f665d28c15be3dc2623abb7ddc58f439b3f57046->leave($__internal_c358fd7bbff204adceeca7f9f665d28c15be3dc2623abb7ddc58f439b3f57046_prof);

        
        $__internal_70d5090904d6bc82af9e14227542e1246115e53ed4f5e92b4784e54466a0647a->leave($__internal_70d5090904d6bc82af9e14227542e1246115e53ed4f5e92b4784e54466a0647a_prof);

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
