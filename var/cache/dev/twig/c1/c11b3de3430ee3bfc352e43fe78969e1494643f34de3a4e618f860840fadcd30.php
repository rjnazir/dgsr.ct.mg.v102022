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
        $__internal_583f2d706e04040fa19c860ace00703920fce85620711df58797c4dbc5e0cb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583f2d706e04040fa19c860ace00703920fce85620711df58797c4dbc5e0cb47->enter($__internal_583f2d706e04040fa19c860ace00703920fce85620711df58797c4dbc5e0cb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_c3d3e972b2b48817dd787720e6e3541e06111b376e16062a25cd3106dc1b633d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d3e972b2b48817dd787720e6e3541e06111b376e16062a25cd3106dc1b633d->enter($__internal_c3d3e972b2b48817dd787720e6e3541e06111b376e16062a25cd3106dc1b633d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583f2d706e04040fa19c860ace00703920fce85620711df58797c4dbc5e0cb47->leave($__internal_583f2d706e04040fa19c860ace00703920fce85620711df58797c4dbc5e0cb47_prof);

        
        $__internal_c3d3e972b2b48817dd787720e6e3541e06111b376e16062a25cd3106dc1b633d->leave($__internal_c3d3e972b2b48817dd787720e6e3541e06111b376e16062a25cd3106dc1b633d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68d412d0cc268158366b2c490c8d548c652d1e084157f7000ba5d5ba046ad139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d412d0cc268158366b2c490c8d548c652d1e084157f7000ba5d5ba046ad139->enter($__internal_68d412d0cc268158366b2c490c8d548c652d1e084157f7000ba5d5ba046ad139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_39f8c9ef407fbbce05c85e285188690d76c93bb2f3954cec258e0fab684c323f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f8c9ef407fbbce05c85e285188690d76c93bb2f3954cec258e0fab684c323f->enter($__internal_39f8c9ef407fbbce05c85e285188690d76c93bb2f3954cec258e0fab684c323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_39f8c9ef407fbbce05c85e285188690d76c93bb2f3954cec258e0fab684c323f->leave($__internal_39f8c9ef407fbbce05c85e285188690d76c93bb2f3954cec258e0fab684c323f_prof);

        
        $__internal_68d412d0cc268158366b2c490c8d548c652d1e084157f7000ba5d5ba046ad139->leave($__internal_68d412d0cc268158366b2c490c8d548c652d1e084157f7000ba5d5ba046ad139_prof);

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
