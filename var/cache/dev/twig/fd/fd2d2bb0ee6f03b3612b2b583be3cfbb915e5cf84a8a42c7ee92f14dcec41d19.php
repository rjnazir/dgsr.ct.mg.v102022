<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_86588a00040eba64c66e4b77e2b148cf385897b10ccd6a6c5c852006f6238ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3983997ebbb79a202a137e27070773211a3cc408fd42fc205a1c74778a842ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3983997ebbb79a202a137e27070773211a3cc408fd42fc205a1c74778a842ea3->enter($__internal_3983997ebbb79a202a137e27070773211a3cc408fd42fc205a1c74778a842ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_10da2c03032cc25193807f9d55aeeb0ba4b2a18cb2a7457eefd9b6c748f62f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10da2c03032cc25193807f9d55aeeb0ba4b2a18cb2a7457eefd9b6c748f62f91->enter($__internal_10da2c03032cc25193807f9d55aeeb0ba4b2a18cb2a7457eefd9b6c748f62f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3983997ebbb79a202a137e27070773211a3cc408fd42fc205a1c74778a842ea3->leave($__internal_3983997ebbb79a202a137e27070773211a3cc408fd42fc205a1c74778a842ea3_prof);

        
        $__internal_10da2c03032cc25193807f9d55aeeb0ba4b2a18cb2a7457eefd9b6c748f62f91->leave($__internal_10da2c03032cc25193807f9d55aeeb0ba4b2a18cb2a7457eefd9b6c748f62f91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94103925f8c799db8e122c961bc77f1b8f0157b71018d3de64104b884c23970d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94103925f8c799db8e122c961bc77f1b8f0157b71018d3de64104b884c23970d->enter($__internal_94103925f8c799db8e122c961bc77f1b8f0157b71018d3de64104b884c23970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a6d7db040cea0f21cc28d2d305c74928635349015ba1b02a3ae8bc14025ac2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6d7db040cea0f21cc28d2d305c74928635349015ba1b02a3ae8bc14025ac2f->enter($__internal_0a6d7db040cea0f21cc28d2d305c74928635349015ba1b02a3ae8bc14025ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0a6d7db040cea0f21cc28d2d305c74928635349015ba1b02a3ae8bc14025ac2f->leave($__internal_0a6d7db040cea0f21cc28d2d305c74928635349015ba1b02a3ae8bc14025ac2f_prof);

        
        $__internal_94103925f8c799db8e122c961bc77f1b8f0157b71018d3de64104b884c23970d->leave($__internal_94103925f8c799db8e122c961bc77f1b8f0157b71018d3de64104b884c23970d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
