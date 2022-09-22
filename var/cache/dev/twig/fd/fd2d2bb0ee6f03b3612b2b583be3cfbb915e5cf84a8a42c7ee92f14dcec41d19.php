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
        $__internal_a47be8b970d377bf6fdd24e327f1c472b2c894e37a6fa6c5a7c7b2215f09fdb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47be8b970d377bf6fdd24e327f1c472b2c894e37a6fa6c5a7c7b2215f09fdb2->enter($__internal_a47be8b970d377bf6fdd24e327f1c472b2c894e37a6fa6c5a7c7b2215f09fdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_06f4aab3021ab2ab1201afa63fe3a28296ee20fcb3991daad624574dae44006c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f4aab3021ab2ab1201afa63fe3a28296ee20fcb3991daad624574dae44006c->enter($__internal_06f4aab3021ab2ab1201afa63fe3a28296ee20fcb3991daad624574dae44006c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a47be8b970d377bf6fdd24e327f1c472b2c894e37a6fa6c5a7c7b2215f09fdb2->leave($__internal_a47be8b970d377bf6fdd24e327f1c472b2c894e37a6fa6c5a7c7b2215f09fdb2_prof);

        
        $__internal_06f4aab3021ab2ab1201afa63fe3a28296ee20fcb3991daad624574dae44006c->leave($__internal_06f4aab3021ab2ab1201afa63fe3a28296ee20fcb3991daad624574dae44006c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_536a2dff189ab99dfb75b9752269badabd0fe044173730cc1078e639e6620b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536a2dff189ab99dfb75b9752269badabd0fe044173730cc1078e639e6620b67->enter($__internal_536a2dff189ab99dfb75b9752269badabd0fe044173730cc1078e639e6620b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94f3da0b2e56191e02743a7c1e1ec0af318e84ea021d449f0a08f6d262836061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f3da0b2e56191e02743a7c1e1ec0af318e84ea021d449f0a08f6d262836061->enter($__internal_94f3da0b2e56191e02743a7c1e1ec0af318e84ea021d449f0a08f6d262836061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_94f3da0b2e56191e02743a7c1e1ec0af318e84ea021d449f0a08f6d262836061->leave($__internal_94f3da0b2e56191e02743a7c1e1ec0af318e84ea021d449f0a08f6d262836061_prof);

        
        $__internal_536a2dff189ab99dfb75b9752269badabd0fe044173730cc1078e639e6620b67->leave($__internal_536a2dff189ab99dfb75b9752269badabd0fe044173730cc1078e639e6620b67_prof);

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
