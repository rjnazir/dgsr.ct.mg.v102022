<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_a1c18609b0bc8b57e3a9567ad75226e171ed7c6b8e18725565a217c3e6aec907 extends Twig_Template
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
        $__internal_93d543b7fbf998978e72400da647e9fb324dc23023f7d50a9d371eb2e4112382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d543b7fbf998978e72400da647e9fb324dc23023f7d50a9d371eb2e4112382->enter($__internal_93d543b7fbf998978e72400da647e9fb324dc23023f7d50a9d371eb2e4112382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_8b80e5529001c957526e422e77fa6cabea8837c203211b8beef309cd95139ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b80e5529001c957526e422e77fa6cabea8837c203211b8beef309cd95139ecd->enter($__internal_8b80e5529001c957526e422e77fa6cabea8837c203211b8beef309cd95139ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_93d543b7fbf998978e72400da647e9fb324dc23023f7d50a9d371eb2e4112382->leave($__internal_93d543b7fbf998978e72400da647e9fb324dc23023f7d50a9d371eb2e4112382_prof);

        
        $__internal_8b80e5529001c957526e422e77fa6cabea8837c203211b8beef309cd95139ecd->leave($__internal_8b80e5529001c957526e422e77fa6cabea8837c203211b8beef309cd95139ecd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
