<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1db00dae794f481a5293c79c4377836d39858a5ded80f3186e0f4eaca689b2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_2eac1d56e914413f514994fe3c69560307595a289021ada4cabfb26af9ce7dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eac1d56e914413f514994fe3c69560307595a289021ada4cabfb26af9ce7dbe->enter($__internal_2eac1d56e914413f514994fe3c69560307595a289021ada4cabfb26af9ce7dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_297714d97a35b8c01d981189063087dc5498b77df7d2deb0303491e3f867063d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297714d97a35b8c01d981189063087dc5498b77df7d2deb0303491e3f867063d->enter($__internal_297714d97a35b8c01d981189063087dc5498b77df7d2deb0303491e3f867063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eac1d56e914413f514994fe3c69560307595a289021ada4cabfb26af9ce7dbe->leave($__internal_2eac1d56e914413f514994fe3c69560307595a289021ada4cabfb26af9ce7dbe_prof);

        
        $__internal_297714d97a35b8c01d981189063087dc5498b77df7d2deb0303491e3f867063d->leave($__internal_297714d97a35b8c01d981189063087dc5498b77df7d2deb0303491e3f867063d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c374dd12410515f981a2c317fed0d89f65fe40ca76e3362e106f635e53f8c570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c374dd12410515f981a2c317fed0d89f65fe40ca76e3362e106f635e53f8c570->enter($__internal_c374dd12410515f981a2c317fed0d89f65fe40ca76e3362e106f635e53f8c570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f26bec158792c3ab84d8b805ddbebabb1eb7f8aa2b0d586d2121c5344c7b9f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26bec158792c3ab84d8b805ddbebabb1eb7f8aa2b0d586d2121c5344c7b9f90->enter($__internal_f26bec158792c3ab84d8b805ddbebabb1eb7f8aa2b0d586d2121c5344c7b9f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f26bec158792c3ab84d8b805ddbebabb1eb7f8aa2b0d586d2121c5344c7b9f90->leave($__internal_f26bec158792c3ab84d8b805ddbebabb1eb7f8aa2b0d586d2121c5344c7b9f90_prof);

        
        $__internal_c374dd12410515f981a2c317fed0d89f65fe40ca76e3362e106f635e53f8c570->leave($__internal_c374dd12410515f981a2c317fed0d89f65fe40ca76e3362e106f635e53f8c570_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
