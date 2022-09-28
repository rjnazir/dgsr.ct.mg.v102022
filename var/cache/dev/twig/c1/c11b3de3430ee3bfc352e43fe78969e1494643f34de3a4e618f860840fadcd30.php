<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8aa87b71f0276fddde7ce416a5a4adfe2ad558a1150ffb2ab3d9234e4782ad80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_710b4b76cb73a342f639346f811964148fd51d45136e2b18fa8de8a1c26fd975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710b4b76cb73a342f639346f811964148fd51d45136e2b18fa8de8a1c26fd975->enter($__internal_710b4b76cb73a342f639346f811964148fd51d45136e2b18fa8de8a1c26fd975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a4ad27f52cf2ae8bf1244c71968dc16d1d8797e7632e687206d1116bd4d9563b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ad27f52cf2ae8bf1244c71968dc16d1d8797e7632e687206d1116bd4d9563b->enter($__internal_a4ad27f52cf2ae8bf1244c71968dc16d1d8797e7632e687206d1116bd4d9563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_710b4b76cb73a342f639346f811964148fd51d45136e2b18fa8de8a1c26fd975->leave($__internal_710b4b76cb73a342f639346f811964148fd51d45136e2b18fa8de8a1c26fd975_prof);

        
        $__internal_a4ad27f52cf2ae8bf1244c71968dc16d1d8797e7632e687206d1116bd4d9563b->leave($__internal_a4ad27f52cf2ae8bf1244c71968dc16d1d8797e7632e687206d1116bd4d9563b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03147d9ba33b449df3b35a70c0884870521d5bb3367a8d2fccc8dd24efbd008b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03147d9ba33b449df3b35a70c0884870521d5bb3367a8d2fccc8dd24efbd008b->enter($__internal_03147d9ba33b449df3b35a70c0884870521d5bb3367a8d2fccc8dd24efbd008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fe26026813112ca91e9a67058aee371550fab10c632f6a44e8b7ecbb6ca0ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe26026813112ca91e9a67058aee371550fab10c632f6a44e8b7ecbb6ca0ac0->enter($__internal_4fe26026813112ca91e9a67058aee371550fab10c632f6a44e8b7ecbb6ca0ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4fe26026813112ca91e9a67058aee371550fab10c632f6a44e8b7ecbb6ca0ac0->leave($__internal_4fe26026813112ca91e9a67058aee371550fab10c632f6a44e8b7ecbb6ca0ac0_prof);

        
        $__internal_03147d9ba33b449df3b35a70c0884870521d5bb3367a8d2fccc8dd24efbd008b->leave($__internal_03147d9ba33b449df3b35a70c0884870521d5bb3367a8d2fccc8dd24efbd008b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
